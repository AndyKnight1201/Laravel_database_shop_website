<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Andy Chao">
    <meta name="description" content="本網站作品僅提供本人作品集使用，無任何商業行為。">
    @yield('chat')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    @yield('JQlink')
    @yield('pagecss')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        /* Snippets Prevent Quick Suggestions close*/

    </style>
</head>

<body>
    <main>
        <!-- navbar -->
        <section>
            <div class="container-fluid p-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
                    <div class="container">
                        <a class="" href="/Bootstrap-Cut-index">
                            <img src="{{ asset('Bootstrap_html_cut_image/logo.svg') }}" alt="" width="100" height="98"
                                class="d-inline-block align-text-top">
                        </a>


                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="navbarSupportedContent" class="collapse navbar-collapse justify-content-end ">
                            <ul class="navbar-nav align-items-center">

                                {{-- <li class="nav-item">
                                    <a class="" href="#">
                                        <button class="btn btn-hover" type="submit">Blog</button>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/commodity">
                                        <button class="btn btn-hover" type="submit">商品管理</button>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/banner">
                                        <button class="btn btn-hover" type="submit">Banner</button>
                                    </a>
                                </li> --}}

                                <li class="nav-item">
                                    <a href="/Bootstrap-Cut-chat">
                                        <button class="btn btn-hover" type="submit">留言板管理</button>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/Bootstrap-Cut-cart">
                                        <button class="btn btn-hover" type="submit">
                                            購物車
                                        </button>
                                    </a>
                                </li>

                                @auth
                                    @if (Auth::user()->power == 1)
                                        <li class="nav-item">
                                            <a href="/dashboard">
                                                <button class="btn btn-hover" type="submit">後台
                                                </button>
                                            </a>
                                        </li>
                                    @endif

                                    <li class="nav-item">
                                        <a href="/order_list">
                                            <button class="btn btn-hover" type="submit">訂單列表
                                            </button>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href=""
                                            onclick="event.preventDefault();document.querySelector('#log-out').submit()">
                                            {{-- <button class="btn btn-hover" type="button"> --}}
                                            <i class="bi bi-person-circle"></i>{{ Auth::user()->name }}您好。Logout
                                            {{-- </button> --}}
                                        </a>
                                    </li>

                                    <form method="POST" action="/logout" id="log-out">
                                        @csrf
                                    </form>
                                @endauth

                                @guest
                                    <li class="nav-item dropdown">
                                        <a class="drop-link" href="" id="navbarScrollingDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-person-circle"></i>
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                            <li>
                                                <a class="dropdown-item" href="/Bootstrap-Cut-Login">Login</a>
                                            </li>
                                        </ul>
                                    </li>
                                @endguest

                            </ul>
                        </div>

                    </div>
                </nav>
        </section>


        <!-- cart -->
        <section>

            @yield('cart')
        </section>




        <!-- CATEGORIES -->
        <section>
            <div class="container-sm">
                <div id="CATEGORIES" class="row align-items-center ">
                    <div class="col-lg-3 col-md-5 col-5">
                        <div class="d-flex align-items-center">
                            <div>
                                <img src="{{ asset('Bootstrap_html_cut_image/數位.jpg') }}" width="50" alt="">
                            </div>
                            <h5 class="m-0 px-2">數位方塊</h5>
                        </div>
                        <p>Air plant banjo lyft occupy retro adaptogen indego</p>
                    </div>


                    <div class="ps80 col-lg-9 col-md-7 row row-cols-lg-4 row-cols-md-2 row-cols-1">

                        <div class="col">
                            <h5>CATEGORIES</h5>
                            <div>
                                <a href="">First Link</a>
                            </div>
                            <div>
                                <a href="">Second Link</a>
                            </div>
                            <div>
                                <a href="">Third Link Link</a>
                            </div>
                            <div>
                                <a href="">Fourth Link Link</a>
                            </div>
                        </div>

                        <div class="col">
                            <h5>CATEGORIES</h5>
                            <div>
                                <a href="">First Link</a>
                            </div>
                            <div>
                                <a href="">Second Link</a>
                            </div>
                            <div>
                                <a href="">Third Link Link</a>
                            </div>
                            <div>
                                <a href="">Fourth Link Link</a>
                            </div>
                        </div>

                        <div class="col">
                            <h5>CATEGORIES</h5>
                            <div>
                                <a href="">First Link</a>
                            </div>
                            <div>
                                <a href="">Second Link</a>
                            </div>
                            <div>
                                <a href="">Third Link Link</a>
                            </div>
                            <div>
                                <a href="">Fourth Link Link</a>
                            </div>
                        </div>

                        <div class="col">
                            <h5>CATEGORIES</h5>
                            <div>
                                <a href="">First Link</a>
                            </div>
                            <div>
                                <a href="">Second Link</a>
                            </div>
                            <div>
                                <a href="">Third Link Link</a>
                            </div>
                            <div>
                                <a href="">Fourth Link Link</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- foot -->
        <section id="foot" style="background-color: rgb(235, 235, 235);">
            <div class="container-sm">
                <div class=" d-flex  justify-content-between align-items-center">
                    <div class="d-flex">
                        <p style="font-size: 15px;">©2022 Copyright 趙耕誼Andy Chao. All rights reserved.</p>
                        <p style="font-size: 15px;"></p>
                    </div>
                    <div class="d-flex right">
                        <div>
                            <i class="bi bi-facebook"></i>
                        </div>
                        <div>
                            <i class="bi bi-twitter"></i>
                        </div>
                        <div>
                            <i class="bi bi-instagram"></i>
                        </div>
                        <div>
                            <p>in</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>


    @yield('JSJQlink')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    @yield('JS')

</body>

</html>
