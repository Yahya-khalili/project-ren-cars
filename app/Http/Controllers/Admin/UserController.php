<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\userRequest;
use App\Http\Requests\UserRequest as RequestsUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(4);
        
        return view('pages.users.user' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestsUserRequest $request)
    {
        $FormFielsd = $request->validated();
        User::create($FormFielsd);
        return redirect('/dashboard/user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RequestsUserRequest $request, User $user)
    {
        $FormFielsd = $request->validated();
        $user->fill($FormFielsd )->save();
        return redirect('/dashboard/user');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/dashboard/user');
    }
    
    public function search(Request $request){
        $search = $request->search;
        $users = User::where("fullName" ,"like" ,"%".$search."%")->get();
        $noTasksFound = $users->isEmpty();
        session()->flash('noTasksFound', $noTasksFound);

        return view('pages.users.user' , compact("users" , "search" , "noTasksFound"));
    }
}
