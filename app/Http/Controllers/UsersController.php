<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('user.is.type:admin', ['except' => ['show', 'tourguidesIndex', 'agenciesIndex']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->get();
        
        return view('admin.users', compact('users'));
    }

    public function tourguidesIndex()
    {
        $users = User::where('type', 'tourguide')->latest()->get();
        
        return view('admin.tourguides', compact('users'));
    }

    public function agenciesIndex()
    {
        $users = User::where('type', 'agency')->latest()->get();
        
        return view('admin.agencies', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('admin.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.edit', compact('user'));                
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        
        $user->name = $request->get('name');
        $user->licence = $request->get('licence');
        $user->email = $request->get('email');
        $user->type = $request->get('type');
        $user->save();

        return redirect('/users/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        // Deletes All User's Posts
        $user->posts()->delete();

        // Deletes User
        $user->delete();

        return redirect('/users');
    }
}
