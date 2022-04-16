@extends('layouts.main')


@section('container')

<div class="container text-dark">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8 detail">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p>Writted By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/image/2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/image/lentera1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/image/5.jpeg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

            {{-- <img src="/image/6.jpeg" alt="{{ $post->category->name }}" style="width:800px; height:300px;" class="img-fluid"> --}}

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            <a href="/posts" class="d-block mt-3 text-light py-5"><b> Back to Events</b></a>
            <div class="beli-ticket">
                <a class="btn buy-tckt but-p py-2" href="/send/tickets"> Buy Ticket <img src="/image/arrow.png" class="mb-1" alt=""> </a>
            </div>
        </div>
    </div>
</div>


@endsection
