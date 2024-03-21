<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function show(){
        return view("dashboard.login");
    }
    public function login(Request $request)
    {
       // Define default email and password
       $defaultEmail = 'admin@admin.com';
       $defaultPassword = 'admin12';

       // Check if the provided email and password match the defaults
       if ($request->email == $defaultEmail && $request->password == $defaultPassword) {
           // Authentication successful, log in the admin
            
           // Redirect to the admin dashboard or perform any other action
           return redirect('/dashboard/user');
       } else {
           // Authentication failed, redirect back with error message
           return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
       }


    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to the admin login page after logout
        return redirect()->route('login');
    }
}
