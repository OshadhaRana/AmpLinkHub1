<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit(User $user)
    {
        return view('adminusersedit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('admin.users')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users')->with('success', 'User deleted successfully.');
    }

    // Method to view all customers (users with usertype 'user')
    public function index()
    {
        // Retrieve all users where usertype is 'user'
        $customers = User::where('usertype', 'user')->get();

        // Return the view with the data (create a view named 'customers' or any desired name)
        return view('customers', ['customers' => $customers]);
    }
}
