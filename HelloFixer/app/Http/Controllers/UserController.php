<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // Get the username and password from the request
        $uName = $request->input('uname', '');
        $pass = $request->input('pass', '');

        // Check if the login is for the admin
        if ($uName === 'admin' && $pass === 'admin11') {
            // Set session for admin authentication
            session(['is_admin' => true]);
            return redirect()->route('admin.dashboard');  // Redirect to the admin dashboard
        }

        // Otherwise, proceed with regular user login
        $userInfo = User::where('name', '=', $uName)->first();

        // Check if the user exists and verify the password
        if ($userInfo && Hash::check($pass, $userInfo->password)) {
            // Successful user login
            return redirect('/home');
        } else {
            // Invalid credentials: Clear input fields and return to the login page with errors
            return redirect()->back()
                ->withInput(['uname' => '', 'pass' => ''])  // Clear both fields
                ->withErrors(['login_error' => 'Invalid username or password.']);
        }
    }

    public function store(Request $request)
    {
        // Create a new user with hashed password
        $user = User::create([
            'name' => $request->input('uname'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'password' => Hash::make($request->input('pass')),  // Hashing the password
        ]);

        return redirect('/account');
    }
    
    public function showProfile()
    {
        return view('/profilepage');
    }

}
