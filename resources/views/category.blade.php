@extends('layouts.main')

@section('container')
<h1>Post Category : {{$category}}</h1>

@foreach ($posts as $post)
<section class="mb-3">
    <h2><a href="post/{{$post->slug}}" class="text-decoration-none">{{$post->title}}</a></h2>
    <p>By: {{$post->author}}</p>
    <p>{{$post->excerp}}....</p>
    <p><a href="post/{{$post->slug}}" class="text-decoration-none">Baca Selengkapnya..</a></p>
</section>
@endforeach

@endsection