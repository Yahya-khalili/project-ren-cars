<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginUserController extends Controller
{
    public function index()
    {
        
        
        return view('frontend.loginUser');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('client')->attempt($credentials)) {
            $request->session()->regenerate();
            // Authentication passed
            return redirect()->intended('/');
        } else {
            // Authentication failed
            return back()->withErrors(['email' => 'Invalid Email' , "password"=>'Invalid password']);
        }


    }
    public function logout()
    {
        
        
        
        Auth::guard('client')->logout();
        

        // Redirect to the admin login page after logout
        return redirect('/');
    }
    
    

}
