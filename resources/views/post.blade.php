
@extends('layouts.main')

@section('container')

<section class="mb-3">
    <h2>{{$post["title"]}}</h2>
    <h5>By: {{$post["author"]}}</h5>
    <p>{{$post["body"]}}</p>
</section>

<a href="/blogs">Kembali ke halaman blog</a>
@endsection