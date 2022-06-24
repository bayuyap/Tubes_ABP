@extends('layouts.main')

@section('container')

<div class="container">
<div class="row justify-content-center">
    <div class="col-md-4 logy">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <main class="form-signin">
            <form action="/login" method="post">
                @csrf
                <center>
              <h1 class="text-light"><b>Let's Interact Each Other</b></h1>
            </center>
              <div class="form-floating shadow-lg mt-5">
                <input type="email" name="email" class="form-control @error('email')is-invalid
                @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}" style="background: transparent">
                <label for="email" class="text-light">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>

                @enderror
              </div>
              <div class="form-floating shadow-lg mt-2">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required style="background: transparent">
                <label for="password" class="text-light">Password</label>
              </div>
              <button class="login mt-3" type="submit">Login</button>
            </form>
            <div class="log" style="margin-top: 50px">
            <a class="d-block text-center text-light text-decoration-none">
                Not Register? <a class="d-block text-center text-light" href="/register">Register Now!</a>
            </a>
            </div>
          </main>
        </div>
    </div>
</div>

@endsection
