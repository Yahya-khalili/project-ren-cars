<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\bookRequest;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Car;
use App\Models\User;
use Barryvdh\DomPDF\Facade\PDF  ;
use Carbon\Carbon;

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
        dd($request->all());
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

    public function generateBill($id)
    {
        // Fetch the data for the specific column using the $id
        
        $booking = Booking::find($id);
        $lastInvoiceId = Booking::max('id'); // Get the highest invoice ID from the database
        $nextInvoiceId = $lastInvoiceId + 1; // Increment by 1 to generate the next invoice ID
        $invoiceId = 'INV-' . str_pad($nextInvoiceId, 5, '0', STR_PAD_LEFT); // Format as 'INV-00001'
        $date = Carbon::now()->format('d-m-Y');
        
        if (!$booking) {
            // Handle case where booking is not found
            return redirect()->back()->with('error', 'Booking not found.');
        }
        
        

        $pdf = PDF::loadView('pages.books.usersPdf', compact('booking' ,"date" , "invoiceId"));

    // Download the PDF
    return $pdf->download('bill.pdf');
        // Check if the invoice exists
        
    }

    public function exportPdf()
    {
        $bookings = Booking::all();
        

        

        // Generate PDF
        $pdf = PDF::loadView('pages.books.pdfBookings', compact("bookings"));
        
        // Download PDF
        return $pdf->download('bookings_list.pdf');
    }

}
