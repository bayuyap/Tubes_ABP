<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/about.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="/js/jquery.tiltedpage-scroll.js"></script>
    <link href='/css/tiltedpage-scroll.css' rel='stylesheet' type='text/css'> --}}

    <title>Licoworks | {{ $title }}</title>
    <link rel="icon" href="/image/lico.png">
  </head>
    <body>
        <div class="main">
        <section class="header">
            <div class="content-box">
                <div class="menu">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent" >
                        <div class="container-fluid">
                          <a class="navbar-brand px-5" href="/" style=""></a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav mx-auto">
                              <li class="nav-item px-4">
                                <a class="nav-link {{ ($active === "home") ? 'active' : '' }}"  href="/"><b>Home</b></a>
                              </li>
                              <li class="nav-item px-4">
                                <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts"><b>Event</b></a>
                              </li>
                              <li class="nav-item px-4">
                                <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about"><b>About Us</b></a>
                              </li>
                              {{-- <li class="nav-item px-4">
                                <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories"><b>Categories</b></a>
                              </li> --}}
                              <li class="nav-item px-4">
                                <a class="nav-link {{ ($active === "payment") ? 'active' : '' }}" href="/payment"><b>Payment</b></a>
                              </li>
                            </ul>
                            <ul class="navbar-nav px-4">
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
                                <a class="btn log-btn1 " href="/login"></i> Login </a>
                              @endauth
                            </ul>
                          </div>
                        </div>
                      </nav>
                      <div class="text-box">
                          <h1>LICOWORKS</h1>
                      </div>

                </div>
            </div>
        </section>

        {{-- service --}}
        <section class="service">
            <div class="row">
                <h1>Let's Interact Each Other</h1>
                <br>
                <br>
                <br>
                <div class="col-md">
                    <img src="/image/about.png" class="w-100" alt="">
                </div>
                <div class="col-md px-5">
                    <h2>Licoworks</h2>
                    <p>Licoworks adalah sebuah perusahaan start up inovatif yang menggabungkan semua kebutuhan dalam sebuah event festival maupun konser dengan teknologi yang kami namakan dengan Licosystem.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md px-5">
                    <h2>Licosystem</h2>
                    <p>Licosystem adalah ekosistem yang menawarkan solusi untuk membuat mempromosikan hingga memasarkan tiket konser dan festival. Bermodalkan teknologi canggih dan aplikasi inovatif, Licosystem membantu masyarakat meramaikan acara-acara hiburan dengan mudah dan praktis.</p>
                </div>
                <div class="col-md order-first order-lg-last">
                    <img src="/image/lala.png" class="w-100 rounded" alt="">
                </div>
            </div>
        </section>

        {{-- Feature --}}
        <section class="service2">
        </section>
        {{-- Who We Are --}}


        {{-- END --}}
        <section class="end">
            <div class="content-service">
                <h1>Our Service</h1>
                <div class="row">
                <div class="col-md-2 serv py-3 mx-5 mt-5">
                        {{-- <h2>Licotickets</h2>
                        <br>
                        <p>Licotickets adalah fitur yang memungkinkan Anda membeli atau menjual tiket film dengan mudah menggunakan ponsel cerdas Anda. Licotickets juga memberikan cashback ketika Anda membeli dengan kami atau menjual tiket Anda melalui kami.</p> --}}
                </div>
                <div class="col-md-2 serv py-1 mx-5 mt-3">
                        <h2>Licotickets</h2>
                        <br>
                        <p>Licotickets adalah fitur yang memungkinkan Anda membeli atau menjual tiket film dengan mudah menggunakan ponsel cerdas Anda. Licotickets juga memberikan cashback ketika Anda membeli dengan kami atau menjual tiket Anda melalui kami.</p>
                </div>
                <div class="col-md-2 serv py-1 mt-3 mx-3">
                        <h2>Licotion</h2>
                        <br>
                        <p>Licotion adalah fitur terbaik untuk menemukan event di daerah anda.Dapatkan informasi tentang event menyenangkan untuk didatangi bersama teman,keluarga,rekan kerja dan pasangan anda.</p>
                </div>
                <div class="col-md-2 serv py-1 mx-3 mt-3">
                        <h2>Licoworks</h2>
                        <br>
                        <p>Licoworks adalah fitur untuk pembuatan event.Kami menyediakan berbagai macam jenis layanan yang dapat kamu pesan sebagai acara andalan ataupun sebagai pendukung di dalam acara konser dan festival.</p>
                    </div>
            </div>
            </div>
            </section>

        {{-- Footer --}}
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
