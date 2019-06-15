<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function daftar_user()
    {
        $users = User::all();
        $number = 0;

        // dd($users);

        return view('sessions.user', compact(['users', 'number']));
    }

    public function edit($id)
    {
        $user = User::find($id);

        // dd($user);

        return view('sessions.edit', compact(['user']));
    }

    public function update($id)
    {        
        // validate the form
        $this->validate(\request(), [
            'password'  =>  'required|confirmed',
        ]);

        $credentials = [
            'password'  => \Hash::make(request('password')),
        ];

        // create and save the user
        $user = User::find($id)->update($credentials);

        // redirect to the homepage
        return redirect('/daftar-user');
    }

    public function delete($id)
    {
        User::find($id)->delete();

        return redirect('/daftar-user');
    }
}