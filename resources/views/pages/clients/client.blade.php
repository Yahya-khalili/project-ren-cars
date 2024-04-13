
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
<h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All Users</h1> <br>


<div class="overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <!-- Table Header -->
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">id</th>
                <th scope="col" class="px-6 py-3">full name</th>
                <th scope="col" class="px-6 py-3">cin</th>
                <th scope="col" class="px-6 py-3">password</th>
                <th scope="col" class="px-6 py-3">email</th>
                <th scope="col" class="px-6 py-3">phone</th>
                <th scope="col" class="px-6 py-3">action</th>
                
            </tr>
        </thead>
        <!-- Table Body -->
        <tbody>
            @foreach ($clients as $client)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"> {{$client->id}} </td>
                <td class="px-6 py-4"> {{$client->fullName}} </td>
                <td class="px-6 py-4"> {{$client->cin}} </td>
                <td class="px-6 py-4"> ******** </td>
                <td class="px-6 py-4"> {{$client->email}} </td>
                <td class="px-6 py-4"> {{$client->phone}} </td>
                
                <td class="px-6 py-4">
                  <form method="POST" action="{{ route('register.destroy', $client) }}" style="display: inline;">
                    @method("DELETE")
                    @csrf
                    <button type="submit" value="delete" class="px-4 py-2 bg-red-500 text-white font-medium rounded-md transition-colors duration-300 ease-in-out hover:bg-red-600">Delete</button>
                </form>
                 </td>
                
            </tr>
 
            @endforeach
        </tbody>
    </table>

    @endsection