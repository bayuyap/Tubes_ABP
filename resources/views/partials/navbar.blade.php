<nav class="navbar navbar-expand-lg navbar-dark bg-transparent" >
    <div class="container-fluid">
      <a class="navbar-brand px-5" href="/" style=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto px-5 text-warning">
          <li class="nav-item">
            <a class="nav-link px-3 {{ ($active === "home") ? 'active' : '' }}" style="font-size:20px;"  href="/"><b>Home</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3 {{ ($active === "posts") ? 'active' : '' }}" style="font-size:20px;" href="/posts"><b>Event</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3 {{ ($active === "about") ? 'active' : '' }}" style="font-size:20px;" href="/about"><b>About Us</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3 {{ ($active === "categories") ? 'active' : '' }}" style="font-size:20px;" href="/categories"><b>Categories</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3 {{ ($active === "payment") ? 'active' : '' }}" style="font-size:20px;" href="/payment"><b>Payment</b></a>
          </li>
          @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" style="font-size:20px;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><b>
                  Welcome Back, {{ auth()->user()->name }}
                </b></a>
                <ul class="dropdown-menu bg-warning " aria-labelledby="navbarDropdown">
                {{-- <li><a class="dropdown-item" href="#">Profil</a></li>
                  <li><hr class="dropdown-divider"></li> --}}
                  <form action="/logout" method="post">
                        @csrf
                      <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i>Logout</a></li></button>
                  </form>
                </ul>
              </li>
          @else
          <div class="login-btn">
            <a class="btn log-btn1 log-btn2 " href="/login"></i> Login </a>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
