<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class carController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $car = Car::all();
        return view('frontend.offers' ,compact('car') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formField = $request->validated();
        if($request->hasFile("image")){
            $formField["image"] = $request->file('image')->store('cars' ,"public");
        }
        
        car::create($formField);
        
        return redirect()->route('books.index')->with('success', 'Book created successfully');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
