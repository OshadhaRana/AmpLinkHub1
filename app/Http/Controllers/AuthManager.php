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

    function createuser(){
        return view('createuser');
    }

    /*function loginPost(Request $request) {
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
                return view('admin', ['name' => $user->name]);

            }

        }



        // If authentication fails or user type is not recognized, redirect to login with error message
        return redirect(route('login'))->with("error", "Login details are not valid.");
    }*/
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

            // Store the user's name in the session
            session(['user_name' => $user->name, 'user_email' => $user->email]);

            // Check if the user exists and has a user type
            if ($user->usertype == 'user') {
                // User is a regular user, redirect to the home page
                return redirect()->intended(route('home'));
            } elseif ($user->usertype == 'admin') {
                // User is an admin, return the admin view with the name from session
                return view('admin', ['name' => session('user_name'), 'email' => \session('user_email')]);
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

    function createuserPost(Request $request){
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        // Create the new user
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['usertype'] = 'admin';

        $user = User::create($data);

        if(!$user){
            return redirect(route('createuser'))->with("error", "Registration failed, try again");
        }

        // Store the currently logged-in user's information in the session


        // Redirect back to the admin page with the user who was logged in initially and their name
        return view('admin', ['name' => session('user_name'), 'email' => \session('user_email')]);
    }


    public function showAdminUsers()
    {
        $adminUsers = User::where('usertype', 'admin')->get();
        return view('viewuser', ['adminUsers' => $adminUsers]);
    }

    function logout() {
        Auth::logout(); // This will log out the authenticated user
        Session::flush();
        return redirect(route('login')); // Redirect to the login page
    }








}



