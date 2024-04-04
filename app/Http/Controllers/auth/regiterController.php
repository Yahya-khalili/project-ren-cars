<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class regiterController extends Controller
{
    public function index(){
        return view("frontend.register");
    }
}
