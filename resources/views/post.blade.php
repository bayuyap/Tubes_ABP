@extends('layouts.main')


@section('container')

<div class="container text-light">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            @if($post->image)
            <div style="max-height:50%; overflow:hidden;">
                <img src="{{ asset('storage/' .$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            </div>

            @else
            <img src="http://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">

            @endif
            <div class="post-dtl py-3">
            <article class="my-3 fs-5 px-5 post-dtl">
                    <h1 class="mb-3" style="font-weight: 700">{{ $post->title }}</h1>
                    <p>Writted By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                    {!! $post->body !!}
            </article>
            <a href="/posts" class="d-block mt-3 text-light py-5 px-3"><b> Back to Events</b></a>
            <div class="beli-ticket">
                <a class="btn buy-tckt but-p py-2" href="/formticket"> Buy Ticket <img src="/image/arrow.png" class="mb-1" alt=""> </a>
            </div>
        </div>
    </div>
</div>
</div>


@endsection
