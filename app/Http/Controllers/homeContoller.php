<?php

namespace App\Http\Controllers;

use App\Http\Requests\userAuthRequest;
use Illuminate\Http\Request;
use App\Models\Car;


class homeContoller extends Controller
{
    public function index(){
        $cars = Car::latest()->take(3)->get();
        return view("frontend.index" , compact("cars"));
        
    }
    

    public function indexOffers(){
        $cars = Car::all();
        return view("frontend.offers" ,compact("cars"));
        
    }
    public function indexDash(){
        return view('dashboard.index');
    }
    
}
