<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Successful</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="max-w-lg mx-auto p-8 bg-white rounded-lg shadow-lg text-center">
        <svg class="w-24 h-24 mx-auto text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        <h1 class="text-3xl font-bold mt-4">Booking Successful</h1>
        <p class="text-gray-700 mt-2">You will receive a phone call as soon as possible to confirm delivery location and discuss payment options </p>
        <a href="{{ route('indexOffers') }}" class="inline-block mt-4 px-6 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-md transition duration-300">Go to Car Listing</a>
    </div>
</body>
</html>
