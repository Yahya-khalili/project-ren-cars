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
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            // Authentication passed
            return redirect()->intended('/dashboard');
        } else {
            // Authentication failed
            return back()->withErrors(['email' => 'Invalid Email' , "password"=>'Invalid password']);
        }


    }
    public function logout()
    {
        
        Session::flush();
        
        Auth::guard('admin')->logout();
        

        // Redirect to the admin login page after logout
        return redirect('/login');
    }
}
