{{-- @dd($posts) --}}

@extends('layout.main')
@section('container')
@foreach ($posts as $post)
<main id="main">
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row gx-0">
                <article class="mb-5">
                    <h2>
                        <a href="/blogs/{{ $post['slug'] }}">{{ $post['title'] }}</a>
                    </h2>
                    <h5>by: {{ $post['author'] }}</h5>
                    <p>{{ $post['body'] }}</p>
                </article>
            </div>
        </div>

    </section>
</main>
@endforeach
@endsection