<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Http\Requests\carRequest as RequestsCarRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('pages.cars.cars');
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
    public function store(RequestsCarRequest $request)
    {
        $formFields = $request->validated();
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('product', 'public');
        }

        Car::create($formFields);

        return redirect('/dashboard/cars');
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
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect('/dashboard/cars');
    }
}
