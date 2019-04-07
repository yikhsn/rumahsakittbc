<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RumahSakitController extends Controller
{
    public function index(){
        return view('rumah_sakit.index');
    }

    public function show($id){
        return view('rumah_sakit.show', compact(['id']));
    }

    public function insert(){
        return view('rumah_sakit.insert');
    }
}
