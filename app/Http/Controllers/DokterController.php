<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('dokter.index');
    }

    public function show($id){
        return view('dokter.show', compact(['id']));
    }

    public function insert(){
        return view('dokter.insert');
    }
}
