<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    function login(){
        return view('login');
    }

    function registration(){
        return view('registration');
    }

    function loginPost(Request $request) {
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        // Retrieve user credentials from the request
        $credentials = $request->only('name', 'password');

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Authentication successful, retrieve the authenticated user
            $user = Auth::user();

            // Check if the user exists and has a user type
            if ($user && $user->usertype == 'user') {
                // User is a regular user, redirect to the home page
                return redirect()->intended(route('home'));
            } elseif ($user && $user->usertype == 'admin') {
                // User is an admin, return the admin view
                return view('admin');
            }
        }

        // If authentication fails or user type is not recognized, redirect to login with error message
        return redirect(route('login'))->with("error", "Login details are not valid.");
    }

    function registrationPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if(!$user){
            return redirect(route('registration'))->with("error", "Registration failed, try again");
        }
        return redirect(route('login'))->with("success", "Registration successful, please login");

    }

    function logout() {
        Auth::logout(); // This will log out the authenticated user
        Session::flush(); // This will clear all session data

        return redirect(route('login')); // Redirect to the login page
    }

    public function showProfile()
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Pass the user's name to the view
        return view('admin', ['name' => $user->name]);
    }
}



