<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookingUseRequest;
use App\Models\Booking;
use App\Models\BookingUser;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class BookigUserController extends Controller
{
    public function indexDash(){
        $bookingsUser = BookingUser::all();
        $totalBookings = Booking::count();
        $totalBrands = Brand::count();
        $totalCars = Car::count();
        $carPrices = Car::pluck('price');
        $totalPrice = $carPrices->sum();
        $totalClients = User::count();




        return view('dashboard.index' , compact("totalBookings" ,"totalBrands" ,"totalCars" , "totalClients" , "totalPrice" , "bookingsUser"));
    }


    public function store(BookingUseRequest $request)
    {
        
        $FormFielsd = $request->validated();
        
        BookingUser::create($FormFielsd);
        return redirect('/booking-succes');
    }
    public function destroy(BookingUser $bookUser)
    {
     
    
        // Supprimer la réservation
        $bookUser->delete();
        return redirect('/dashboard');
    }
    public function approve($id)
{
    $booking = BookingUser::findOrFail($id);
    $booking->status = 'approved'; // Modifiez 'approved' selon votre logique d'états
    $booking->save();
    return redirect('/dashboard');
    // Autres actions ou redirections si nécessaires
}
public function decline($id)
{
    $booking = BookingUser::findOrFail($id);
    $booking->status = 'declined'; // Modifiez 'declined' selon votre logique d'états
    $booking->save();
    return redirect('/dashboard');
    // Autres actions ou redirections si nécessaires
}
}
