<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function show(){
        return view("dashboard.login");
    }
    public function login(Request $request)
    {
        $login = $request->email;
        $password = $request->password;
        $credentials = ['email' => $login , "password" => $password];

       // Check if the provided email and password match the defaults
       if (Auth::attempt($credentials)) {
           // Authentication successful, log in the admin
           
           return redirect('/dashboard');
           // Redirect to the admin dashboard or perform any other action
           
       } else {
           // Authentication failed, redirect back with error message
           return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
       }


    }
    public function logout( )
    {
        
        Session::flush();
        
        Auth::logout();
        

        // Redirect to the admin login page after logout
        return redirect('/login');
    }
}
