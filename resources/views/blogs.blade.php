@extends('layouts.main')

@section('container')

<h1 >{{$title}}</h1>

@if ($posts->count())
<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{$posts[0]->category->name}}" class="card-img-top" alt="{{$posts[0]->category->name}}">
    <div class="card-body text-center">
      <h3 class="card-title">{{$posts[0]->title}}</h3>
    <p>
        <small class="text-muted">By. <a href="/authors/{{$posts[0]->author->username }}" class="text-decoration-none"> {{$posts[0]->author->name}} </a> in <a href="/categories/{{$posts[0]->category->slug}}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{$posts[0]->updated_at->diffForHumans()}}
        </small>
    </p>
      <p class="card-text">{{$posts[0]->excerp}}...</p>
      <p><a href="post/{{$posts[0]->slug}}" class="text-decoration-none btn btn-primary">Baca Selengkapnya..</a></p>
    </div>
  </div>
  @else
  <p class="text-center fs-4">No post found</p>
@endif


<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="my-3  pb-3 col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="position-absolute px-3 py-2 bg-dark" ><a href="/categories/{{$post->category->slug}}" class="text-white text-decoration-none">{{$post->category->name}}</a></div>
                <img src="https://source.unsplash.com/500x400?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}">
                <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p>
                    <small class="text-muted">By. <a href="/authors/{{$post->author->username }}" class="text-decoration-none"> {{$post->author->name}} </a>  {{$post->updated_at->diffForHumans()}}
                    </small>
                </p>
                <p class="card-text">{{$post->excerp}}....</p>
                <a href="post/{{$post->slug}}" class="btn btn-primary text-decoration-none">Baca Selengkapnya ...</a>
                </div>
            </div>
    </div>
    @endforeach
    </div>
</div>
          


{{-- 
    <h2><a href="post/{{$post->slug}}" class="text-decoration-none">{{$post->title}}</a></h2>
    
    <p>By. <a href="/authors/{{$post->author->username }}" class="text-decoration-none"> {{$post->author->name}} </a> in <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{ $post->category->name }}</a></p>

    <p>{{$post->excerp}}....</p>
    <p><a href="post/{{$post->slug}}" class="text-decoration-none">Baca Selengkapnya..</a></p>
 --}}

@endsection