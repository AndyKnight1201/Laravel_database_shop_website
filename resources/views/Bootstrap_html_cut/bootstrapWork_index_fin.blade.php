<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Bootstrap_html_cut_css/bootstrapWork5.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        /* Snippets Prevent Quick Suggestions close*/

    </style>
</head>

<body>

    <nav>
        <!-- navbarc橫條 -->
        <section>
            <div class="container-fluid p-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
                    <div class="container">
                        <a class="" href="/">
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
                                        <button class="btn btn-hover" type="submit">Banner管理</button>
                                    </a>
                                </li> --}}

                                <li class="nav-item">
                                    <a href="/Bootstrap-Cut-chat">
                                        <button class="btn btn-hover" type="submit">留言板管理
                                        </button>
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

        <!-- 大圖carousel -->
        <section>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner ">
                    <div class="carousel-item active ">
                        <div class="d-block imgA heigh100vh"></div>
                        <!-- <img src="./image/色溫練習-調.jpg" class="d-block w-100" alt="..."> -->
                    </div>
                    <div class="carousel-item">
                        <div class="d-block imgB heigh100vh"></div>
                        <!-- <img src="./image/色溫練習-調.jpg" class="d-block w-100" alt="..."> -->
                    </div>
                    <div class="carousel-item">
                        <div class="d-block imgA heigh100vh"></div>
                        <!-- <img src="./image/色溫練習-調.jpg" class="d-block w-100" alt="..."> -->
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </nav>

    <main>
        <!-- tree-icon -->
        <section>
            <div class="container-lg">
                <div id="tree-icon" class="row py-80">
                    <div class="text-center">
                        <h2 class="">Raw Denim Heirloom Man Braid</h2>
                        <p class="w-50 mx-auto">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                            taxidermy. Gastropub
                            indxgo
                            juice poutine,
                            ramps microdosing banh mi pug.</p>
                    </div>
                </div>

                <div class="row">


                    @foreach ($data as $news)
                        <div class=" col-lg-4 col-sm-12 text-center">
                            @if ($news->img == '' || $news->img == null)
                                <div class="P mx-auto mb-4">
                                    <p>{{ mb_substr($news->title, 0, 1) }}</p>
                                </div>
                            @else
                                <img class="mb-4" width="100" src="{{ $news->img }}" alt="">
                            @endif
                            <h3 class="">{{ $news->title }}</h3>
                            <p>{{ $news->content }}</p>
                            <a href="#" class="card-link">Card link</a>
                        </div>
                    @endforeach


                            {{-- @foreach ($data as $news)
                        <div class=" col-lg-4 col-sm-12 text-center">
                            <img class="mb-4" width="100" src="
                                @if ($news->img == '' || $news->img == null)
                                    {{asset ('Bootstrap_html_cut_image/logo.svg')}}
                                @else
                                    {{$news->img}}
                                @endif" alt="">
                            <h3 class="">{{$news->title}}</h3>
                            <p>{{$news->content}}</p>
                            <a href="#" class="card-link">Card link</a>
                        </div>
                    @endforeach --}}


                            {{-- @if (!($data[0]->img == ''))
                        <div class="col-lg-4 col-sm-12 text-center">
                            <div class="P">
                                <p>{{substr($data[0]->title, 0, 1)}}</p>
                            </div>
                            <h3 class="">{{$data[0]->title}}</h3>
                            <p>{{$data[0]->content}}</p>
                            <a href="#" class="card-link">Card link</a>
                        </div>
                    @endif --}}

                            {{-- @if (!($data[0]->img == ''))
                        <div class=" col-lg-4 col-sm-12 text-center">
                            <img class="mb-4" width="100" src="{{$data[0]->img}}" alt="">
                            <h3 class="">{{$data[0]->title}}</h3>
                            <p>{{$data[0]->content}}</p>
                            <a href="#" class="card-link">Card link</a>
                        </div>
                        <div class=" col-lg-4 col-sm-12 text-center">
                            <img class="mb-4" width="100" src="{{$data[1]->img}}" alt="">
                            <h3 class="">{{$data[1]->title}}</h3>
                            <p>{{$data[1]->content}}</p>
                            <a href="#" class="card-link">Card link</a>
                        </div>
                        <div class=" col-lg-4 col-sm-12 text-center">
                            <img class="mb-4" width="100" src="{{$data[2]->img}}" alt="">
                            <h3 class="">{{$data[2]->title}}</h3>
                            <p>{{$data[2]->content}}</p>
                            <a href="#" class="card-link">Card link</a>
                        </div>
                    @endif --}}

                            {{-- @foreach ($data as $news)
                        <div class=" col-lg-4 col-sm-12 text-center">
                            <img class="mb-4" width="100" src="{{$news->img}}" alt="">
                            <h3 class="">{{$news->title}}</h3>
                            <p>{{$news->content}}</p>
                            <a href="#" class="card-link">Card link</a>
                        </div>
                    @endforeach --}}


                    {{-- <div class=" col-lg-4 col-sm-12 text-center">
                        <img class="mb-4" width="100" src="{{ $title[1]->img }}" alt="">
                        <h3 class="">{{ $content[1]->title }}</h3>
                        <p>{{ $img[1]->content }}</p>
                        <a href="#" class="card-link">Card link</a>
                    </div> --}}

                    {{-- <div class=" col-lg-4 col-sm-12 text-center">
                        <img class="mb-4" width="100" src="{{ $data[2]->img }}" alt="">
                        <h3 class="">{{ $data[2]->title }}</h3>
                        <p>{{ $data[2]->content }}</p>
                        <a href="#" class="card-link">Card link</a>
                    </div> --}}
                </div>

                <div class="row pt-5">
                    <button class="btn btn-primary mx-auto " style="width:200px ;" type="submit">Button</button>
                </div>
            </div>
        </section>

        <!-- 六塊圖區 -->
        <section id="six-pic">
            <div class="container-lg">
                <div class="row justify-content-center">

                    <div id="text" class="row">
                        <div class="col-lg-5">Master Cleanse Reliac Heirloom</div>
                        <div class="col-lg-7">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical
                            gentrify, subway tile
                            poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies
                            heirloom.
                        </div>
                    </div>

                    <!-- 經典圖片寬高連動式多層flex案例 -->
                    <!-- 用圖片撐起所有的長寬 -->
                    <!-- 其他設置寬100% -->
                    <div class="row">
                        <!-- 左半 -->
                        <div class="w-50 d-flex flex-wrap">
                            <div class="d-flex pb-3">
                                <div style="width: 50%;padding-right: 2%">
                                    <img src="{{ asset('Bootstrap_html_cut_image/500.jpg') }}" width="100%" alt="">
                                </div>
                                <div style="width: 50%;padding-left: 2%">
                                    <img src="{{ asset('Bootstrap_html_cut_image/500.jpg') }}" width="100%" alt="">
                                </div>
                            </div>
                            <div>
                                <img src="{{ asset('Bootstrap_html_cut_image/600.jpg') }}" width="100%" alt="">
                            </div>
                        </div>
                        <!-- 右半 -->
                        <div class="w-50 d-flex flex-wrap flex-column-reverse">
                            <div class="d-flex ">
                                <div style="width: 50%;padding-right: 2%">
                                    <img src="{{ asset('Bootstrap_html_cut_image/500.jpg') }}" width="100%" alt="">
                                </div>
                                <div style="width: 50%;padding-left: 2%">
                                    <img src="{{ asset('Bootstrap_html_cut_image/500.jpg') }}" width="100%" alt="">
                                </div>
                            </div>
                            <div class="pb-3">
                                <img src="{{ asset('Bootstrap_html_cut_image/600.jpg') }}" width="100%" alt="">
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>


        <!-- Pricing -->
        <section id="Pricing-area" class="p-5">
            <div class="container">
                <div class="row py-80">
                    <div class="text-center">
                        <h2 class="">Pricing</h2>
                        <p class="w-75 mx-auto">Banh mi cornhole echo park skateboard authentic crucifix neutra tilde
                            lyft biodiesel
                            artisan direct trade mumblecore 3 wolf moon twee</p>
                    </div>
                </div>


                <div id="list-Pricing" class="list-group">
                    <div class="d-flex align-content-center justify-content-between list-group-item">
                        <p>Plan</p>
                        <p>Speed</p>
                        <p>Storage</p>
                        <p>Free</p>
                        <div>
                            <input name="Pricing" type="radio">
                        </div>
                    </div>
                    <div class="d-flex align-content-center justify-content-between list-group-item">
                        <p>Start</p>
                        <p>5 Mb/s</p>
                        <p>15 GB</p>
                        <p>$24</p>
                        <div>
                            <input name="Pricing" type="radio">
                        </div>
                    </div>
                    <div class="d-flex align-content-center justify-content-between list-group-item">
                        <p>Pro</p>
                        <p>25 Mb/s</p>
                        <p>25 GB</p>
                        <p>$50</p>
                        <div>
                            <input name="Pricing" type="radio">
                        </div>
                    </div>
                    <div class="d-flex align-content-center justify-content-between list-group-item">
                        <p>Business</p>
                        <p>36 Mb/s</p>
                        <p>40 GB</p>
                        <p>$60</p>
                        <div>
                            <input name="Pricing" type="radio">
                        </div>
                    </div>
                    <div class="d-flex align-content-center justify-content-between list-group-item">
                        <p>Exclusive</p>
                        <p>48 Mb/s</p>
                        <p>120GB</p>
                        <p>$72</p>
                        <div>
                            <input name="Pricing" type="radio">
                        </div>
                    </div>
                    <div class="py-4 d-flex align-content-center justify-content-between list-group-item">
                        <a class="d-flex" href="">
                            <p>Learn More</p>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        <div>
                            <button class="btn btn-primary" type="submit">Button</button>
                        </div>
                    </div>
                </div>
            </div>



        </section>

        <!-- Pitchfork -->
        <section id="Pitchfork-area">
            <div class="container-sm">
                <div class="row justify-content-center">

                    <div id="Pitchfork" class="row">
                        <div class="col-lg-6 ">
                            <div class="afterLine fs-3">
                                Pitchfork Kickstarter Taxidermy
                            </div>
                        </div>

                        <div class="col-lg-6 ">
                            Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke
                            farm-to-table.
                            Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food
                            truck ugh
                            squid
                            celiac humblebrag.</div>
                    </div>



                    <!-- 有四格右邊距的問題待釐清 -->
                    <div id="Pitchfork-Card" class="row ">
                        <div class="col-xl-6 row flex-wrap flex-grow-1 ">

                            <div class="col-md-6 d-flex py-5 ">
                                <div class="card  flex-grow-1 w18em">
                                    <div class="p-4">
                                        <img src="{{ asset('Bootstrap_html_cut_image/500.jpg') }}"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body pt-0">
                                        <p class="m-0">SUBTITLE</p>
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title
                                            and make up the bulk of the
                                            card's content.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex py-5">
                                <div class="card  flex-grow-1 w18em">
                                    <div class="p-4">
                                        <img src="{{ asset('Bootstrap_html_cut_image/500.jpg') }}"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body pt-0">
                                        <p class="m-0">SUBTITLE</p>
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title
                                            and make up the bulk of the
                                            card's content.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-6 row flex-row-reverse flex-grow-1">
                            <div class="col-md-6 d-flex py-5">
                                <div class="card  flex-grow-1 w18em">
                                    <div class="p-4">
                                        <img src="{{ asset('Bootstrap_html_cut_image/500.jpg') }}"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body pt-0">
                                        <p class="m-0">SUBTITLE</p>
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title
                                            and make up the bulk of the
                                            card's content.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex py-5">
                                <div class="card  flex-grow-1 w18em">
                                    <div class="p-4">
                                        <img src="{{ asset('Bootstrap_html_cut_image/500.jpg') }}"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body pt-0">
                                        <p class="m-0">SUBTITLE</p>
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title
                                            and make up the bulk of the
                                            card's content.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


        </section>

        <!-- shooting -->
        <section id="shooting-area">
            <div class="container-lg">
                <div id="shooting" class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div>
                            <img src="{{ asset('Bootstrap_html_cut_image/ICON1.png') }}" width="110" alt="">
                        </div>
                        <div>
                            <h5>shooting</h5>
                            <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub
                                indxgo juice
                                poutine.</p>
                            <a href="">
                                <span>Learn More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8 flex-row-reverse">
                        <div>
                            <img src="{{ asset('Bootstrap_html_cut_image/ICON2.png') }}" width="110" alt="">
                        </div>
                        <div>
                            <h5>shooting</h5>
                            <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub
                                indxgo juice
                                poutine.</p>
                            <a href="">
                                <span>Learn More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8 ">
                        <div>
                            <img src="{{ asset('Bootstrap_html_cut_image/ICON3.png') }}" width="110" alt="">
                        </div>
                        <div>
                            <h5>shooting</h5>
                            <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub
                                indxgo juice
                                poutine.</p>
                            <a href="">
                                <span>Learn More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <span class="d-flex col-lg-8 ">
                        <button class="btn btn-primary mx-auto w-25" type="submit">Button</button>
                    </span>

                </div>
            </div>
        </section>

        <!-- Catcher -->
        <section id="Catchera-area">
            <div class="container-sm">
                <!-- 使用flex+上object-fit: cover;達到自由壓縮圖片卻不變形的效果 -->
                {{-- <img class="col-lg-6 col-md-12 imgC" src="{{$commodityone->img_path??''}}"
                        alt=""> --}}

                {{-- swiper內容 --}}
                <div id="carouselE" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselE" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselE" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselE" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active row" style="display: flex">
                            <img class="col-lg-6 col-md-12 imgC" src="" alt="">
                        </div>
                        @foreach ($commodityone as $commodityEach)
                            <div class="carousel-item" style="display: flex">

                            </div>
                        @endforeach







                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselE"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselE"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>
                {{-- swiper界線 --}}



            </div>
        </section>

        <!-- Catcher -->
        <section id="Catchera-area">
            <div class="container-sm">
                <div id="Catcher" class="row m-auto">
                    <!-- 使用flex+上object-fit: cover;達到自由壓縮圖片卻不變形的效果 -->
                    <img class="col-lg-6 col-md-12 imgC" src="{{ $commodityone->img_path ?? '' }}" alt="">
                    <div class="col-lg-6 col-md-12 p-4">
                        <p class="m-0">COMMODITY NAME</p>
                        <h1 class="fs-2 my-1">{{ $commodityone->commodity_name ?? '' }}</h1>

                        <div class="mb-4 Icon-Box d-flex align-items-center">
                            <div>
                                <span class="d-flex align-items-center" style="color:#6366f1;">
                                    <svg width="80px" fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                        </path>
                                    </svg>
                                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                        </path>
                                    </svg>
                                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                        </path>
                                    </svg>
                                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                        </path>
                                    </svg>
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                        </path>
                                    </svg>
                                </span>
                            </div>

                            <div class="p-2 border-R">4 Reviews</div>

                            <div class="mx-3" style="font-size: 20px;">
                                <i class="bi bi-facebook"></i>
                                <i class="bi bi-twitter"></i>
                                <i class="bi bi-chat-fill"></i>
                            </div>

                        </div>

                        <p>{{ $commodityone->introduce ?? '' }}</p>

                        <div class="curcle-box my-4 d-flex align-items-center">
                            <p class="pe-2 m-0">Color</p>
                            <div class="curcle"></div>
                            <div class="curcle"></div>
                            <div class="curcle"></div>
                            <p class="px-3 m-0">Size</p>
                            <select class="p-2" style="border-radius: 5px;" required>
                                <option value="" selected disabled>請選擇</option>
                                <option value="">SM</option>
                                <option value="">M</option>
                                <option value="">L</option>
                                <option value="">XL</option>
                            </select>
                        </div>

                        <div class="line"></div>

                        <div class="d-flex border-top py-4 align-items-center justify-content-between">
                            <h3 class="m-0">{{ $commodityone->commodity_price ?? '' }}</h3>
                            <div class="d-flex ">
                                <button class="btn btn-Color" type="submit">Button</button>
                                <button class="btn-Color2" type="submit">
                                    <i class="bi bi-heart-fill"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>



        <!-- CATEGORY -->
        <Section id="CATEGORY-area">
            <div class="container-sm">
                <div id="CATEGORY" class="row CATEGORY">

                    @foreach ($commodity as $CommodityEach)
                        <div class="col-lg-3 col-md-6 col-sm-12 card p-2 ">
                            <a href="/Commodity-Inner/{{ $CommodityEach->id }}">
                                <div class="">
                                    <img src="{{ $CommodityEach->img_path ?? '' }}" class="card-img-top" alt="..."
                                        width="200">
                                </div>
                                <div class="card-body p-2">
                                    <p class="m-0">CATEGORY</p>
                                    <h5 class="card-title">{{ $CommodityEach->commodity_name }}</h5>
                                    <p class="card-text">{{ $CommodityEach->commodity_price }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach

                    {{-- <div class="col-lg-3 col-md-6 col-sm-12 card p-2 ">
                        <div class="">
                            <img src="./image/500.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body p-0">
                            <p class="m-0">CATEGORY</p>
                            <h5 class="card-title">Neptune</h5>
                            <p class="card-text">$21.15</p>
                        </div>
                    </div> --}}

                </div>


            </div>
        </Section>

        <!-- MAP -->
        <section>
            <div class="container-fluid p-0">
                <div id="map-area" class="">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3641.4411329073982!2d120.65936901478388!3d24.12114148440791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d750627a6b7%3A0xbcfe6bac3289fc4!2z5pW45L2N5pa55aGK5pyJ6ZmQ5YWs5Y-4!5e0!3m2!1szh-TW!2stw!4v1649649534230!5m2!1szh-TW!2stw"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                    <div class="Feedback-area">
                        <div class="Feedback d-flex flex-column">
                            <h6>Feedback</h6>
                            <p>Post-ironic portland shabby chic echo park, banjo fashion axe</p>
                            <div class="pt-4">
                                <p>Email</p>
                                <input class="email" type="email">
                            </div>
                            <div class="pt-4">
                                <p>Message</p>
                                <textarea class="Message" cols="50" rows="5">欸幹穿山甲欸!</textarea>
                            </div>

                            <button class="btn btn-primary my-3 py-2" type="submit">
                                Button
                            </button>

                            <p>Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
                        </div>
                    </div>

                </div>
            </div>
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








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
