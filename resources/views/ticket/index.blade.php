@extends('layouts.main')

@section('container')

<div class="container">
</div>
<div class="row justify-content-center">
    <div class="col-md-4 reg">
        <main class="form-registration ms-auto">
            <form action="/formticket" method="post">
                @csrf
                <center>
             <h1><b class="text-light">Let's Interact Each Other</b></h1>
            </center>
              <div class="form-floating shadow-lg mt-5">
                <input type="text" name="name" class="form-control @error('name') is-invalid
                @enderror" id="name" placeholder="" value="{{ old('name') }}" style="background: transparent">
                <label for="name" class="text-light">Name</label>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="form-floating shadow-lg mt-2">
                <input type="text" name="role" class="form-control @error('role') is-invalid
                @enderror" id="role" placeholder="Role" style="background: transparent">
                <label for="role" class="text-light">Role</label>
                @error('role')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <button class="login text-light shadow-lg mt-3" type="submit">Submit</button>
            </form>

          </main>
    </div>
</div>


@endsection
