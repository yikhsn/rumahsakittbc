<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = [
            'email'     => $request['email'],
            'password'  => $request['password'],
        ];

        $auth = auth()->attempt($credentials);

        if ( !$auth ) return back();
        
        return redirect('/');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/login');
    }
}
