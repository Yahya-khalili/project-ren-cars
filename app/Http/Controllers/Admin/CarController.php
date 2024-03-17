<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Http\Requests\carRequest as RequestsCarRequest;
use App\Models\Brand;
use App\Models\vehicle;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        $brands = Brand::all();
        return view('pages.cars.cars',compact('cars','brands') );
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
            $formFields['image'] = $request->file('image')->store('cars', 'public');
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
    public function update(RequestsCarRequest $request, Car $car)
    {
        $FormFielsd = $request->validated();
        if($request->hasFile("image")){
            $FormFielsd["image"] = $request->file('image')->store('cars' ,"public");
        }
        $car->fill($FormFielsd )->save();
        return redirect('/dashboard/cars');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index')->with('success', 'Book deleted successfully');
    }
    public function searchCars(Request $request){
        $brands = Brand::all();
        $search = $request->search;
        $cars = Car::where("type" ,"like" ,"%".$search."%")->get();
        $noTasksFound = $cars->isEmpty();
        session()->flash('noTasksFound', $noTasksFound);

        return view('pages.cars.cars' , compact("cars" , "search" , "noTasksFound" ,"brands"));
    }

   
}