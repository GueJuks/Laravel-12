
@extends('layouts.main')

@section('container')
    @foreach ($komiks as $komik)
    <article class="mt-4">
        <h3>Judul Komik Marvel 
            <a href="/komik/{{ $komik['slug_komik'] }}">{{ $komik['title_komik'] }}</a>
        </h3>
        <h5>Penulis Komik Marvel <b>{{ $komik['penulis_komik'] }}</b></h5>
        <h6>Penerbit Komik Marvel <b>{{ $komik['penerbit_komik'] }}</b></h6>
        <p>{{ $komik['body_komik'] }}</p>
    </article>
    @endforeach
    
@endsection