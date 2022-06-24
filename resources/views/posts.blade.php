
@extends('layouts.main')

@section('container')


<h1 class="mb-3 text-dark text-center" style="font-weight: 600">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/posts">
            @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if(request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn" type="submit" ><img src="image/search1.png" class="img-fluid" width="30px" height="30px"></button>
              </div>
        </form>
    </div>
</div>

<div class="row justify-content-center">
@if($posts->count())
<div class="col-lg-10">
<div class="card">
 <div class="card mb-3">
    @if($posts[0]->image)
    <div style="max-height:50%; overflow:hidden;">
        <img src="{{ asset('storage/' .$posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
    </div>

    @else
    <img src="http://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">

    @endif

    <div class="card-body position-absolute text-light">
      <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-light">{{ $posts[0]->title }}</a></h3>
      <p>
        <small class="text-light">
        Writted By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none"> {{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
        </small>
    </p>

      <p class="card-text">{{ $posts[0]->excerpt }}</p>

      <div class="posts-event">
      <a href="/posts/{{ $posts[0]->slug }}"
         class="btn pst-1 pst-2 py-2"> Detail <i class="bi bi-arrow-right"></i></a>
      </div>


    </div>
  </div>
</div>
</div>

<div class="container text-light">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute">
                    <a href="/posts?category={{ $post->category->slug }}" class="text-light text-decoration-none">
                    {{ $post->category->name }}
                    </a>
                </div>
                @if($post->image)
                    <img src="{{ asset('storage/' .$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                @else
                    <img src="http://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">

                @endif

                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p>
                    <small class="text">
                    By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                    </small>
                </p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a class="btn dtl-1 dtl-2 py-2" href="{{ $posts[0]->slug }}"> Detail <i class="bi bi-arrow-right"></i></a>
                  {{-- <a class="btn btn-success btn-cart"> Add to cart <i class="bi bi-cart3"></i> </a> --}}
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>

@else
<p class="text-center fs-4 text-light" style="padding-bottom: 600px">No Post Found</p>

@endif

<div class="d-flex justify-content-center ">
{{ $posts->links() }}
</div>
</div>


@endsection
