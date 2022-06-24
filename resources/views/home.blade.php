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
        @include('sweetalert::alert')
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
                      <div class="banner-text">
                            <div class="container-fluid px-4">
                                <div class="row align-items-center gap-y">
                                  <div class="col-lg text-excerpt px-5">
                                    <h1 class="slide-left">Lorem: <img src="/image/lineword.png"
                                        style="margin-top: 100px; position:relative; margin-left:-150px; margin-top:60px"><br><h2 style="font-weight:700"
                                        class="slide-left">Lorem Ipsum</h2></h1> <br>
                                    <p class="slide-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quidem quibusdam, voluptates harum laborum at voluptatum nobis magnam saepe, cumque tempora vero veritatis itaque dignissimos minima illo dolorum nemo perferendis!
                                    </p>
                                    <br>
                                    <div class="buy">
                                        <a class="btn dtl slide-left"> Detail <img src="/image/arrow.png" alt=""></i></a>
                                    </div>
                                  </div>
                        <div class="col-lg order-first order-lg-last mb-5 mt-5 image2 slide-left">
                                <img src="/image/Image.png" class=" w-100" alt="...">
                        </div>
                </div>
            </div>
        </section>

        {{-- service --}}

        <section class="service">
        <div class="content-service">
            <div class="container">
                <div class="row services mx-auto">
                    <h1>Lorem Ipsum <br> Lorem Ipsum DOlor</h1>
                    <div class="row px-5">
                    <div class="col-md-3 px-5 py-5 mx-3 mt-5">
                            {{-- <h3>Licoworks</h3>
                            <p>Licoworks adalah fitur untuk pembuatan event.</p>
                            <a class="btn btn-srvc ms-auto"> Let's Go!!! <img src="/image/arrow.png" alt=""></i></a> --}}
                    </div>
                    <div class="col-md-3 serv px-5 py-5 mt-5 mx-3">
                            <h3>Lorem</span></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ullam a ea. Assumenda, rem dolorum? Quis adipisci, eaque minima corrupti necessitatibus harum illum. Quod aspernatur aliquam maxime tempore dignissimos? Veritatis.</p>
                            <br>


                            <br>
                            <a class="btn btn-srvc ms-auto"> Let's Go!!! <img src="/image/arrow.png" alt=""></i></a>
                    </div>
                    <div class="col-md-3 serv px-5 py-5 mx-3 mt-5">
                            <h3>Lorem </span> </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, nulla nostrum tempore exercitationem quasi excepturi debitis eaque quia, quisquam fugit laboriosam? Nisi repellendus voluptatibus ut sint officiis? Consectetur, nemo aperiam!</p>
                            <br>
                            <br>
                            <a class="btn btn-srvc ms-auto"> Let's Go!!! <img src="/image/arrow.png" alt=""></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

        {{-- Feature --}}

        <section class="feature">
        <div class="content-vid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 mt-5 py-5 text-center">
                        <h1>Lorem Ipsum Dolor</h1>
                            <img src="/image/meet.svg" class="mt-5 py-5" width="80%" height="80%"  alt="...">
                    </div>
                </div>
            </div>
        </div>
        </section>

        {{-- Who We Are --}}

        <section class="WWA">
        <div class="content-wwa">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 mb-5 py-5">
                    <img src="/image/models3.png" class="w-50" alt="">
                    </div>
                    <div class="col-md-4 justify-content-center py-5 mt-5">
                        <h1>Siapa kita ?</h1>
                        <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit vero qui recusandae cumque aliquam, explicabo eligendi voluptatum, commodi voluptatibus sunt a laborum nulla, tempora accusantium accusamus quisquam quos voluptate magni?</h3>
                        <h2>Mudah</h2>
                        <h2> Cepat</h2>
                        <h2> Effisien</h2>
                        <div class="py-3">
                            <a class="btn vid py-2" href="/posts/pop-art-town"> <img src="/image/vid.png" alt="" width="15px"> Watch Video </a>
                            <a class="btn knw-more" href="/posts/pop-art-town"> Know more </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>


        {{-- END --}}

        {{-- <section class="end">
        <div class="content-end">
            <div class="container-fluid mt-5">
                <div class="row px-5">
                    <div class="col-lg px-5 py-5">
                        <h1>Yuk Unduh Aplikasi <br>Kami</h1>
                        <a href=""><img src="/image/gplay.png" alt=""  class="w-50 py-5"></a>
                    </div>
                    <div class="col-lg">
                        <img src="/image/hand.png" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        </section> --}}

        {{-- Footer --}}

        <section>
        <div class="content-footer">
            <div class="container-fluid py-5">
                <div class="row">
                    <div class="col-md px-5">
                        <img src="/image/lico.png" alt="" width="120" height="80">>
                    </div>
                    <div class="col-md px-5">
                        <h1>Perusahaan</h1>
                        <br>
                        <p>Tentang</p>
                        <p>Product</p>
                        <p>Feature</p>
                        <p>Finance</p>
                    </div>
                    <div class="col-md">
                        <h1>Partner</h1>
                        <br>
                        <p>Mitra Perusahaan</p>
                        <p>Mitra Event Organizer</p>
                    </div>
                    <div class="col-md">
                        <h1>Karir</h1>
                        <br>
                        <p>Magang</p>
                        <p>Profesional</p>
                    </div>
                    <div class="col-md sos">
                        <h1>Contact Us</h1>
                        <br>
                        <p><img src="/image/location.png" alt=""> Jl. Tunjung Tutur, Ketewel, Kec. Sukawati, Kabupaten Gianyar, Bali</p>
                        <br>
                        <p><img src="/image/phone.png" alt=""> +62 123456789</p>
                        <br>
                        <h3>Find Us On</h3>
                        <img src="/image/instagram.png" alt=""><img src="/image/facebook.png" alt=""><img src="/image/twitter.png" alt="">
                    </div>
                </div>
            </div>
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
