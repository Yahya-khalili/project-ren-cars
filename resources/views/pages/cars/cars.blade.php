@extends('base')
@section('title' , "dashboard ")
@section('content')




<div class="relative overflow-x-auto">
    <div class="flex justify-between items-center mb-4 bg-gray-100 dark:bg-gray-800 rounded-lg p-4">
        <!-- Add Client Button -->
        <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:bg-blue-100 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:bg-blue-800/30 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            Add a Car 
        </button>
    
        <!-- Search Bar -->
        <form class="flex items-center" method="get" >   
            <input type="text" id="simple-search" name="search" value="{{isset($search) ? $search : ''}}" class="bg-gray-200 dark:bg-gray-600 border border-gray-300 dark:border-gray-700 text-gray-800 dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 pl-10 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 transition duration-300 ease-in-out" placeholder="Search for a Car">
            <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition duration-300 ease-in-out">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </form>
    </div>
    


    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Car information</h3>
                    <form class="space-y-6"  method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="fullName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">type</label>
                            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose a type</option>
                                <option value="essence">L'essence</option>
                                <option value="Diesel">Diesel</option>
                                
                              </select>
                        </div>
                        <div>  
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">

                        </div>
                        <div>
                            <label for="number-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price :</label>
                             <input type="number" id="number-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="90210" required />
                        </div>
                        <div>
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                        </div>
                    
                       
                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Car</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
@if ($errors->any())
    <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-4 shadow-md">
        <div class="flex items-center">
            <div class="text-red-500">
                <svg class="h-6 w-6 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M10 0C4.477 0 0 4.477 0 10s4.477 10 10 10 10-4.477 10-10S15.523 0 10 0zm0 18.75c-4.688 0-8.75-3.93-8.75-8.75S5.312 1.25 10 1.25 18.75 5.28 18.75 10 14.688 18.75 10 18.75z"/>
                    <path d="M11.25 5.625c-.39 0-.75.36-.75.75v5.625c0 .39.36.75.75.75s.75-.36.75-.75V6.375c0-.39-.36-.75-.75-.75zM10 13.125a.625.625 0 1 1 0-1.25.625.625 0 0 1 0 1.25z"/>
                </svg>
            </div>
            <div>
                <p class="text-sm text-red-700 font-bold">Oops! There are errors in your form submission.</p>
                <ul class="list-disc list-inside text-sm text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif




    
<div class="overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <!-- Table Header -->
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">id</th>
                <th scope="col" class="px-6 py-3">type</th>
                <th scope="col" class="px-6 py-3">marque</th>
                <th scope="col" class="px-6 py-3">price</th>
                <th scope="col" class="px-6 py-3">description</th>
                <th scope="col" class="px-6 py-3">image</th>
                <th scope="col" class="px-6 py-3">action</th>
            </tr>
        </thead>
        <!-- Table Body -->
        <tbody>
            
        </tbody>
    </table>
</div>
    
</div>


@endsection