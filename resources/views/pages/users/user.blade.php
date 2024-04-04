@extends('base')
@section('title' , "dashboard ")
@section('content')



<nav class="flex mb-5" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
      <li class="inline-flex items-center">
        <a href="{{route("indexDash")}}" class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
          <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
          Dashboard
        </a>
      </li>
      <li>
        <div class="flex items-center">
          <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
          <a href="#" class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Clients</a>
        </div>
      </li>
      
    </ol>
</nav><br>
<h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All Clients</h1> <br>
<div class="relative overflow-x-auto">
    <div class="flex justify-between items-center mb-4 bg-gray-100 dark:bg-gray-800 rounded-lg p-4">
        <!-- Add Client Button -->
        <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-blue-900 dark:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            Add Client
        </button>
    
        <!-- Search Bar -->
        <form class="flex items-center" method="get" action="{{route('user.search')}}">   
            <input type="text" id="simple-search" name="search" value="{{isset($search) ? $search : ''}}" class="bg-gray-200 dark:bg-gray-600 border border-gray-300 dark:border-gray-700 text-gray-800 dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 pl-10 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 transition duration-300 ease-in-out" placeholder="Search for a client">
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
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">client information</h3>
                    <form class="space-y-6" action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="fullName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                            <input type="text" name="fullName" id="fullName"   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Your Name"  />
                        </div>
                        <div>
                            <label for="cin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cin</label>
                            <input type="text" name="cin" id="cin"    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder=""  />
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email"   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com"  />
                        </div>
                       
                        
                        <div>
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                            <input type="phone" name="phone" id="phone"   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="123-456-7890"   />
                        </div>
                       
                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Client</button>
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
                <th scope="col" class="px-6 py-3">full name</th>
                <th scope="col" class="px-6 py-3">cin</th>
                <th scope="col" class="px-6 py-3">email</th>
                <th scope="col" class="px-6 py-3">phone</th>
                <th scope="col" class="px-6 py-3">action</th>
            </tr>
        </thead>
        <!-- Table Body -->
        <tbody>
            @foreach ($users as $user)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"> {{$user->id}} </td>
                <td class="px-6 py-4"> {{$user->fullName}} </td>
                <td class="px-6 py-4"> {{$user->cin}} </td>
                <td class="px-6 py-4"> {{$user->email}} </td>
                <td class="px-6 py-4"> {{$user->phone}} </td>
                <td class="px-6 py-4">
                    
                        <!-- Delete Form -->
                        <form method="post" action="{{ route('user.destroy', $user) }}" style="display: inline;">
                            @method("DELETE")
                            @csrf
                           
                            <button type="submit" value="delete" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                        </form>
                        <!-- Update Button -->
                        
                        <button data-modal-target="update{{ $user->id }}" data-modal-toggle="update{{ $user->id }}" type="button" class="font-medium text-blue-600 dark:text-blue-500 hover:underline ml-2" 
                        data-user-id="{{ $user->id }}" 
                        data-user-fullName="{{ $user->fullName }}" 
                        data-user-cin="{{ $user->cin }}" 
                        data-user-email="{{ $user->email }}" 
                        data-user-phone="{{ $user->phone }}" >Update</button>
                    
                    
                </td>
            </tr>
            <div id="update{{ $user->id }}"   tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="update">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="px-6 py-6 lg:px-8">
                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">client information</h3>
                            <form class="space-y-6" action="{{route('user.update' , $user->id)}}" method="post" enctype="multipart/form-data">
                                @method("PUT")
                                @csrf
                                <div>
                                    <label for="fullName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                                    <input type="text" name="fullName" id="fullName"  value="{{ $user->fullName }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Your Name"  />
                                </div>
                                <div>
                                    <label for="cin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cin</label>
                                    <input type="text" name="cin" id="cin"  value="{{ $user->cin }}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder=""  />
                                </div>
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" name="email" id="email"  value="{{ $user->email }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com"  />
                                </div>
                                
                                
                                <div>
                                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                                    <input type="phone" name="phone" id="phone" value="{{ $user->phone }}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="123-456-7890"   />
                                </div><br>
                               
                                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">update Client</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            @endforeach
        </tbody>
    </table>
    
    
    <div>
        <script>
            document.querySelectorAll('[data-modal-target="update"]').forEach(item => {
                item.addEventListener('click', () => {
                    const userId = item.getAttribute('data-user-id');
                    document.getElementById('userId').value = userId;
                });
            });
        </script>
    </div>
</div>
    
</div>


@endsection