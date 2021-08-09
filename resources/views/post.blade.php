
@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
        <section class="mb-3">
            <h2 class="mb-2">{{$post->title}}</h2>
            <p>By. <a href="/authors/{{$post->author->username}}" class="text-decoration-none"> in <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a></p>

            <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="img-fluid" alt="{{$post->category->name}}">

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>

        </section>
        <a href="/blogs" class="text-decoration-none">Kembali ke halaman blog</a>

        </div>
    </div>
</div>
@endsection