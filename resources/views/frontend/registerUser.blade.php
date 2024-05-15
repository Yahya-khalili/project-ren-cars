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
        background: linear-gradient(rgba(2,2,2,.7),rgba(0,0,0,.7)),url(https://images.unsplash.com/photo-1533106418989-88406c7cc8ca?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D) center center;
    }
    .error-input {
            border-color: #e53e3e; /* Red border color for errors */
        }
        .error-message {
            color: #e53e3e; /* Red color for error messages */
            font-size: 0.875rem; /* Adjust font size */
            margin-top: 0.25rem; /* Add spacing */
        }
</style>

<div class="h-screen flex">
    <div class="hidden lg:flex w-full lg:w-1/2 login_img_section justify-around items-center">
        <div class="bg-black opacity-20 inset-0 z-0"></div>
    </div>

    <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8  w-1/2" >
        <div class="w-full px-2 md:px-32 lg:px-30 ">
 
            <form class="bg-white rounded-md shadow-2xl p-5" method="post" action="{{route("register.store")}}">
                @csrf
                <h1 class="text-gray-800 font-bold text-2xl mb-1">Create your  Account</h1><br>

                <div class="flex items-center border-2 @error('fullName') error-input @enderror mb-8 py-2 px-3 rounded-2xl">
                    <svg class="h-8 w-8 text-gray-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                      </svg>
                    <input id="fullName" class="pl-2 w-full outline-none border-none" type="text" name="fullName" placeholder="Full name" />
                    @error('fullName')
                    <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center border-2 @error('cin') error-input @enderror mb-8 py-2 px-3 rounded-2xl">
                    <svg class="h-8 w-8 text-gray-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                      </svg>
                    <input id="cin" class="pl-2 w-full outline-none border-none" type="text" name="cin" placeholder="Cin" />
                    @error('cin')
                    <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center border-2 @error('email') error-input @enderror mb-8 py-2 px-3 rounded-2xl">
                    <svg class="h-8 w-8 text-gray-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="12" r="4" />  <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28" /></svg>
                    <input id="email" class="pl-2 w-full outline-none border-none" type="email" name="email" placeholder="Email Address" />
                    @error('email')
                    <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center border-2 @error('password') error-input @enderror mb-8 py-2 px-3 rounded-2xl">
                    <svg class="h-8 w-8 text-gray-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="8 16 10 10 16 8 14 14 8 16" />  <circle cx="12" cy="12" r="9" /></svg>
                    <input id="password" class="pl-2 w-full outline-none border-none" type="password" name="password" placeholder="Password" />
                    @error('password')
                    <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>
                

                <div class="flex items-center border-2 @error('phone') error-input @enderror mb-12 py-2 px-3 rounded-2xl ">
                    <svg class="h-8 w-8 text-gray-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg>
                    <input class="pl-2 w-full outline-none border-none" type="number" name="phone" id="phone" placeholder="Phone..." />
                    @error('phone')
                    <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>
                

                <button type="submit" class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Create an account</button>
                <div class="flex justify-center mt-6">
                    <p class="text-sm text-center text-gray-500 dark:text-gray-400">
                        Already have an account? 
                        <a href="{{route("login.index") }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500 transition-colors duration-300 ease-in-out">
                            Login here
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
