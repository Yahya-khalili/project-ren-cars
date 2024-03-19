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
        $login = $request->email;
        $password = $request->password;
        $credentials = ['email' => $login , "password" => $password];
        dd(Auth::attempt($credentials));


    }
    public function logout()
    {
        Session::flush();

        Auth::logout();

        return to_route('login')->with('success', 'Vous êtes bien déconnecté.');
    }
}
