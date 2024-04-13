<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return view("pages.brands.brand" , compact("brands"));
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
    public function store(BrandRequest $request)
    {
        $FormFielsd = $request->validated();
        Brand::create($FormFielsd);
        return redirect('/dashboard/brand');
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
    public function update(BrandRequest $request, Brand $brand)
    {
        $FormFielsd = $request->validated();
        $brand->fill($FormFielsd )->save();
        return redirect('/dashboard/brand');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect('/dashboard/brand');
    }
    public function searchBrand(Request $request){
        $search = $request->search;
        $brands = Brand::where("marque" ,"like" ,"%".$search."%")->get();
        $noTasksFound = $brands->isEmpty();
        session()->flash('noTasksFound', $noTasksFound);

        return view('pages.brands.brand' , compact("brands" , "search" , "noTasksFound"));
    }  
    public function exportPdf()
    {
        $brands = Brand::all();

        // Generate PDF
        $pdf = PDF::loadView('pages.brands.pdfBrand', compact("brands"));
        
        // Download PDF
        return $pdf->download('brands_list.pdf');
    }

}
