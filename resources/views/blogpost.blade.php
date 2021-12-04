@extends('layout.main')
@section('container')
<article>
    <h2>{{ $itemPost['title'] }}</h2>
    <h5>{{ $itemPost['author'] }}</h5>
    <p>{{ $itemPost['body'] }}</p>
</article>
<a href="/blogs">Back to blogs</a>

@endsection