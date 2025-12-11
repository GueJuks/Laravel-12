@extends('layouts.main')

@section('container')
    <h1>Selamat Datang Di Halaman {{ $title }}</h1>
    <h4>nama Saya {{ $nama }}</h4>
    <h4>Email Saya <b>{{ $email }}</b></h4>
    <img src="img/{{ $image }}" alt="{{ $nama }}" width="200px">    
@endsection