
@extends('layouts.main')

@section('container')

<section class="mb-3">
    <h2>{{$post->title}}</h2>
    <p>By. Syaugi in <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a></p>

    {{-- {{$post["body"]}} --}}
    {!! $post->body !!}

</section>

<a href="/blogs">Kembali ke halaman blog</a>
@endsection