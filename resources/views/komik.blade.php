
@extends('layouts.main')

@section('container')
    <article>
        <h3>Judul {{ $komik['title_komik'] }}</h3>
        <h5>Penulis Komik Marvel <b>{{ $komik['penulis_komik'] }}</b></h5>
        <h6>Penerbit Komik Marvel <b>{{ $komik['penerbit_komik'] }}</b></h6>
        <p>{{ $komik['body_komik'] }}</p>
    </article>
    <a href="/komiks">Kembali Ke Halaman Komik</a>
@endsection