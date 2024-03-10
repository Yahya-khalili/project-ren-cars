<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeContoller extends Controller
{
    public function index(){
        return view("frontend.index");
        
    }
    public function indexOffers(){
        return view("frontend.offers");
        
    }
    
}
