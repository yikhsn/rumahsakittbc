<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function __construct()
    {
        $pasien = Pasien::all();

        dd($pasien);
        
        $this->middleware('auth');
    }

    public function index(){
        return  view('pasien.index');
    }

    public function show($id){
        return view('pasien.show', compact(['id']));
    }

    public function insert(){
        return view('pasien.insert');
    }
}
