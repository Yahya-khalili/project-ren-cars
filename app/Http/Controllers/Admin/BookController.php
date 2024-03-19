<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\bookRequest;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Car;
use App\Models\User;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::all();
        $cars = Car::all();
        $users = User::all();
        return view("pages.books.book",compact("bookings","cars","users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(bookRequest $request)
    {
        $FormFielsd = $request->validated();
        
        Booking::create($FormFielsd);
        return redirect('/dashboard/book');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(bookRequest $request, Booking $book)
    {
        $FormFielsd = $request->validated();
        $book->fill($FormFielsd )->save();
        return redirect('/dashboard/book');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $book)
    {
        $book->delete();
        return redirect('/dashboard/book');
    }
    public function searchBooking(Request $request){
        $search = $request->search;
        $bookings = Booking::whereHas('user', function($query) use ($search) {
            $query->where('fullName', 'like', '%'.$search.'%');
        })->get();
        $users = User::all();
        $cars = Car::all();



        $noTasksFound = $bookings->isEmpty();
        session()->flash('noTasksFound', $noTasksFound);

        return view('pages.books.book' , compact("bookings","cars" ,"users", "search" , "noTasksFound"));
    }

}