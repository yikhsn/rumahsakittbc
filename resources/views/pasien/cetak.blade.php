@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')
    <h4>Ini adalah halaman cetak</h4>

    @foreach($pasiens as $pasien)
        <ul>
            <li>{{ $pasien->id }}</li>
            <li>{{ $pasien->nama }}</li>
            <li>{{ $pasien->evaluasi->nama }}</li>
        </ul>
    @endforeach
@endsection