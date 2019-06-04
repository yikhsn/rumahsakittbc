<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('registration.create');
    }

    public function store(Request $request)
    {
        // validate the form
        $this->validate(\request(), [
            'name'  =>  'required',
            'email'  =>  'required|email',
            'password'  =>  'required|confirmed',
        ]);

        $credentials = [
            'email'     => $request['email'],
            'name'  => $request['name'],
            'password'  => \Hash::make($request['password']),
        ];

        // create and save the user
        $user = User::create($credentials);

        // sign them in
        // auth()->login($user);

        // redirect to the homepage
        return redirect('/');
    }
}
