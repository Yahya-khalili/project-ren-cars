<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\clientRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerUserController extends Controller
{
    public function index()
    {
        
        
        return view('frontend.registerUser');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        return view('pages.clients.client' , compact("clients"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(clientRequest $request)
    {
        $FormFielsd = $request->validated();
        $FormFielsd['password'] = Hash::make($FormFielsd['password']);
        Client::create($FormFielsd);
        return  redirect('/user/login');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect('/dashboard/userAuth');
    }
}
