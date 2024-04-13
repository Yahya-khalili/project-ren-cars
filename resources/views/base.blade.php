<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <title> @yield('title') | {{ config("app.name") }}</title>
    
    
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    
    

        @include('partials.sidebar')
        <div class="p-4 sm:ml-64">
            <div class="p-4 border-2 border-gray-200  rounded-lg dark:border-gray-700 ">
                @yield('content')
            </div>
         </div>
        
    

         <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
         
</body>
</html>