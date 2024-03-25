@extends('base')
@section('title', "Dashboard")

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <!-- First Row -->
    <div>
        <!-- Card 1 -->
        <a href="{{ route("user.index") }}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Our Clients</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Explore our clients and manage their accounts</p>
        </a>
    </div>
    <div>
        <!-- Card 2 -->
        <a href="{{ route("cars.index") }}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Our Cars</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Explore our Cars and manage their info</p>
        </a>
    </div>

    <!-- Second Row -->
    <div>
        <!-- Card 3 -->
        <a href="{{ route("brand.index") }}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Our Brands</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Explore our Brands and manage their info</p>
        </a>
    </div>
    <div>
        <!-- Card 4 -->
        <a href="{{ route("book.index") }}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Our Bookings</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Explore our Bookings and manage their info</p>
        </a>
    </div>
</div>
@endsection
