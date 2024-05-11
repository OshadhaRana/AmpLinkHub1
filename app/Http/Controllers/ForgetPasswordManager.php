<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgetPasswordManager extends Controller
{
    function forgetpassword()
    {
        return view('forgetpassword');
    }

    function forgetpasswordpost(Request $request)
    {
        $request->validate([
            'email' => "required|email|exists:users"
        ]);

        $existingToken = DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->first();

        if ($existingToken) {
            // Token already exists, update it
            $token = $existingToken->token;
            DB::table('password_reset_tokens')
                ->where('email', $request->email)
                ->update(['token' => $token, 'created_at' => Carbon::now()]);
        } else {
            // Generate a new token
            $token = Str::random(64);
            DB::table('password_reset_tokens')->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);
        }

        Mail::send("Emails.forget-password", ['token' => $token], function ($message) use ($request)
        {
            $message->to($request->email);
            $message->subject("Reset Password");
        });

        return redirect()->to(route("forget.password"))->with("success", "We have sent an email to reset your password.");
    }

    function resetpassword($token)
    {
        return view("new-password" ,compact('token'));
    }

    function resetpasswordpost(Request $request)
    {
        $request->validate([
           "email" => "required|email|exists:users",
            "password" => "required|string|min:6|confirmed",
            "password_confirmation" =>"required"
        ]);

        $updatePassword = DB::table('password_reset_tokens')
            ->where([
                "email" => $request->email,
                "token" => $request->token
            ])->first();

        if (!$updatePassword){
            return redirect() -> to(route("reset.password"))->with("error", "Invalid");
        }

        User::where("email", $request->email)
            ->update(["password" => Hash::make($request->password)]);

        DB::table('password_reset_tokens')->where(["email" => $request->email])->delete();

        return redirect()->to(route("login")) -> with("success", "Password reset success");
    }
}
