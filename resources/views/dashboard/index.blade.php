@extends('base')
@section('title', "Dashboard")

@section('content')



<div class="flex items-center ">
    <div class="container max-w-6xl px-5 mx-auto my-28">
        <div class="grid gap-7 sm:grid-cols-2 lg:grid-cols-4">
            <div class="relative p-5 pb-16 overflow-hidden bg-white rounded-md shadow-sm">
                <div class="text-base text-gray-400 ">Total Cars</div>
                <div class="relative z-10 flex items-center pt-1">
                    <div class="text-2xl font-bold text-gray-900 ">{{$totalCars}}</div>
                    <span class="flex items-center px-2 py-0.5 mx-2 text-sm text-green-600 bg-green-100 rounded-full">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span>1.8%</span>
                    </span>
                </div><br>
                <div class="absolute bottom-0 inset-x-0 z-0">
                    <canvas height="80" id="chart1"></canvas>
            </div>
        </div>
            <div class="relative p-5 pb-16 overflow-hidden bg-white rounded-md shadow-sm">
                <div class="text-base text-gray-400 ">Net Revenue</div>
                <div class="relative z-10 flex items-center pt-1">
                    <div class="text-2xl font-bold text-gray-900 ">${{$totalPrice}}</div>
                    <span class="flex items-center px-2 py-0.5 mx-2 text-sm text-red-600 bg-red-100 rounded-full">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span>2.5%</span>
                    </span>
                </div><br>
                <div class="absolute bottom-0 inset-x-0 z-0">
                    <canvas height="80" id="chart2"></canvas>
                </div> 
            </div>
            <div class="relative p-5 pb-16 overflow-hidden bg-white rounded-md shadow-sm">
                <div class="text-base text-gray-400 ">Customers</div>
                <div class="relative z-10 flex items-center pt-1">
                    <div class="text-2xl font-bold text-gray-900 ">{{$totalClients}}</div>
                    <span class="flex items-center px-2 py-0.5 mx-2 text-sm text-green-600 bg-green-100 rounded-full">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span>5.2%</span>
                    </span>
                </div><br>
                <div class="absolute bottom-0 inset-x-0 z-0">
                    <canvas height="80" id="chart3"></canvas>
                </div>
            </div>
            <div class="relative p-5 pb-16 overflow-hidden bg-white rounded-md shadow-sm">
                <div class="text-base text-gray-400 "> Total Brands</div>
                <div class="relative z-10 flex items-center pt-1">
                    <div class="text-2xl font-bold text-gray-900 ">{{$totalBrands}}</div>
                    <span class="flex items-center px-2 py-0.5 mx-2 text-sm text-green-600 bg-green-100 rounded-full">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span>2.2%</span>
                    </span>
                </div><br>
                <div class="absolute bottom-0 inset-x-0 z-0">
                    <canvas height="80" id="chart4"></canvas>
                </div>
            </div>
        </div>
    </div>
    </div><br><br>

    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white" style="text-align: center;">
        <span style="border-bottom: 3px solid rgb(10, 10, 10);">Recent Bookings</span>
    </h1><br>
    


    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <!-- Table Header -->
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-2">ID</th>
                    <th scope="col" class="px-4 py-2">User</th>
                    <th scope="col" class="px-4 py-2">Car</th>
                    <th scope="col" class="px-4 py-2">Pick-up Date</th>
                    <th scope="col" class="px-4 py-2">Return Date-Time</th>
                    <th scope="col" class="px-4 py-2">Pick-up and Return Location</th>
                    <th scope="col" class="px-4 py-2">Status</th>
                    <th scope="col" class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookingsUser as $bookUser)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $bookUser->id }}</td>
                    <td class="px-4 py-2">{{ $bookUser->client->fullName }}</td>
                    <td class="px-4 py-2">{{ $bookUser->car->nameCar ?? '--' }}</td>
                    <td class="px-4 py-2">{{ $bookUser->pick_up_date }}</td>
                    <td class="px-4 py-2">{{ $bookUser->return_date }}</td>
                    <td class="px-4 py-2">{{ $bookUser->pick_up_and_return_location }}</td>
                    <td class="px-4 py-2">{{ $bookUser->status }}</td>
                    <td class="px-4 py-2">
                        <div class="inline-flex space-x-2">
                            <!-- Approve Button -->
                            <form method="POST" action="{{ route('bookings.approve', $bookUser->id) }}" class="inline-block">
                                @method("PUT")
                                @csrf
                                <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-2 rounded-md transition-colors duration-300 ease-in-out shadow-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Approve
                                </button>
                            </form>
                            <!-- Decline Button -->
                            <form method="POST" action="{{ route('bookings.decline', $bookUser->id) }}" class="inline-block">
                                @method("PUT")
                                @csrf
                                <button type="submit" class="px-2 py-1 bg-red-500 text-white font-medium rounded-md transition-colors duration-300 ease-in-out shadow-md hover:bg-red-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    Decline
                                </button>
                            </form>
                            <!-- Delete Button -->
                            <form method="POST" action="{{ route('bookingUser.destroy', $bookUser) }}" class="inline-block">
                                @method("DELETE")
                                @csrf
                                <button type="submit" class="px-2 py-1 bg-red-500 text-white font-medium rounded-md transition-colors duration-300 ease-in-out shadow-md hover:bg-red-600">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    </div>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    









































    <style>
    @import url(https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.css);
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js"></script>
    <script>
    const chartOptions = {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      tooltips: {
        enabled: false,
      },
      elements: {
        point: {
          radius: 0,
        },
      },
      scales: {
        x: {
          grid: {
            display: false,
          },
          title: {
            display: false,
          },
          display: false,
          ticks: {
            display: false,
          },
        },
    
        y: {
          grid: {
            display: false,
          },
    
          display: false,
          title: {
            display: false,
          },
          ticks: {
            display: false,
          },
          suggestedMin: 0,
          suggestedMax: 10,
        },
      },
    };
    //
    var ctx = document.getElementById('chart1').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: ["1", "2", "3", "4", "5", "6", "7"],
            datasets: [{
                fill: "origin",
                backgroundColor: "rgba(253, 244, 255, 1)",
                borderColor: "rgba(232, 121, 249, 1)",
                borderWidth: 2,
                data: [1, 3, 2, 5, 4, 5, 7],
            }, ],
        },
        options: chartOptions
    });
    //
    var ctx = document.getElementById('chart2').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: ["1", "2", "3", "4", "5", "6", "7"],
            datasets: [{
                fill: "origin",
                backgroundColor: "rgba(236, 254, 255, 1)",
                borderColor: "rgba(34, 211, 238, 1)",
                borderWidth: 2,
                data: [1, 5, 4, 5, 3, 6, 3],
            }, ],
        },
        options: chartOptions
    });
    //
    var ctx = document.getElementById('chart3').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: ["1", "2", "3", "4", "5", "6", "7"],
            datasets: [{
                fill: "origin",
                backgroundColor: "rgba(255, 251, 235, 1)",
                borderColor: "rgba(251, 191, 36, 1)",
                borderWidth: 2,
                data: [2, 5, 4, 6, 3, 5, 7],
            }, ],
        },
        options: chartOptions
    });
    //
    var ctx = document.getElementById('chart4').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: ["1", "2", "3", "4", "5", "6", "7"],
            datasets: [{
                fill: "origin",
                backgroundColor: "rgba(236, 253, 245, 1)",
                borderColor: "rgba(52, 211, 153, 1)",
                borderWidth: 2,
                data: [1, 5, 2, 5, 3, 7, 6],
            }, ],
        },
        options: chartOptions
    });
    </script>

@endsection
