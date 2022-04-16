<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/home-page.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="/js/jquery.tiltedpage-scroll.js"></script>
    <link href='/css/tiltedpage-scroll.css' rel='stylesheet' type='text/css'> --}}

  </head>
    <body>
        <div class="main">
        <section class="header">
            <div class="content-box">
                <div class="menu">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent" >
                        <div class="container-fluid">
                          <a class="navbar-brand px-5" href="/" style=""><img src="/image/logoml.png" alt=""></a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav mx-auto">
                              <li class="nav-item px-4">
                                <a class="nav-link {{ ($active === "home") ? 'active' : '' }}"  href="/"><b>Home</b></a>
                              </li>
                              <li class="nav-item px-4">
                                <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts"><b>Place</b></a>
                              </li>
                              <li class="nav-item px-4">
                                <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about"><b>About Us</b></a>
                              </li>
                              <li class="nav-item px-4">
                                <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories"><b>Categories</b></a>
                              </li>
                              {{-- <li class="nav-item px-4">
                                <a class="nav-link {{ ($active === "payment") ? 'active' : '' }}" href="/payment"><b>Payment</b></a>
                              </li> --}}
                            </ul>
                            <ul class="navbar-nav px-4">
                            @auth
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-light" style="font-size:20px;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><b style="font-size: 30px;">
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
                                <a class="btn log-btn1 " href="/login"></i> Login </a>
                              @endauth
                            </ul>
                          </div>
                        </div>
                      </nav>
                    <div class="text-box px-5">
                        <p><i class="px-5">Let's go!!!</i></p>
                        <h1><i>Me-Lali</i></h1>
                        <h2>Forget your problem let's go vacation</h2>
                    </div>
        </section>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script>
         $(".main").tiltedpage_scroll({
    sectionContainer: "> section",
    angle: 50,
    opacity: true,
    scale: true,
    outAnimation: true
  });
    </script>
  </body>
</html>
