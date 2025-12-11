@extends('layouts.main')

@section('container')
    <article class="mt-4">
        <h2>Judul {{ $post['title'] }}</h2>
        <h5>Penulis by {{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
    </article>

    <a href="/blog">Kembali ke Blog</a>
@endsection