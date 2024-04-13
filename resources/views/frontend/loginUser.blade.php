<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <title>Login | {{ config("app.name") }}</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
@section('title' , "login ")

<style>
    .login_img_section {
        background: linear-gradient(rgba(2,2,2,.7),rgba(0,0,0,.7)),url(https://images.unsplash.com/photo-1630381796593-6b72c570dc43?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D) center center;
    }
</style>

<div class="h-screen flex">
    <div class="hidden lg:flex w-full lg:w-1/2 login_img_section justify-around items-center">
        <div class="bg-black opacity-20 inset-0 z-0"></div>
    </div>

    <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8">
        <div class="w-full px-8 md:px-32 lg:px-24">
            <form class="bg-white rounded-md shadow-2xl p-5" method="post" action="{{ route("login.login") }}">
                @csrf
                <h1 class="text-gray-800 font-bold text-2xl mb-1">Login your  Account</h1><br>

                <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                    <svg class="h-8 w-8 text-gray-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="12" r="4" />  <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28" /></svg>
                    <input id="email" class="pl-2 w-full outline-none border-none" type="email" name="email" placeholder="Email Address" />
                    @error('email')
                <p class=" font-medium mt-2 text-sm text-red-600 dark:text-red-500"> {{$message}}</p>
                @enderror
                </div>
                

                <div class="flex items-center border-2 mb-12 py-2 px-3 rounded-2xl ">
                    <svg class="h-8 w-8 text-gray-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="8 16 10 10 16 8 14 14 8 16" />  <circle cx="12" cy="12" r="9" /></svg>
                    <input class="pl-2 w-full outline-none border-none" type="password" name="password" id="password" placeholder="Password" />
                    @error('password')
                <p class=" font-medium mt-2 text-sm text-red-600 dark:text-red-500"> {{$message}}</p>
                @enderror
                </div>
                

                <button type="submit" class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Login</button>
                <div class="flex justify-center mt-6">
                    <p class="text-sm text-center text-gray-500 dark:text-gray-400">
                        don't have an account? 
                        <a href="{{route("register.index") }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500 transition-colors duration-300 ease-in-out">
                            register here
                        </a>
                    </p>
                </div>
                
            </form>
            
        </div>
    </div>
</div>
</body>
</html>
