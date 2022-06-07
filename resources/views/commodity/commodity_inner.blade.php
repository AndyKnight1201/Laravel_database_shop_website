<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="author" content="Andy Chao">
    <meta name="description" content="本網站作品僅提供本人作品集使用，無任何商業行為。">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Bootstrap_html_cut_css/commodity_inner.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <style>
        /* Snippets Prevent Quick Suggestions close*/

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            text-align: center;
            font-size: 18px;
            background: #fff;
            background-size: cover;
            background-position: center;
        }

        .swiper {
            width: 100%;
            height: 100%;
            margin-left: auto;
            margin-right: auto;
        }


        .mySwiper2 {
            height: 500px;
            width: 100%;
        }

        .mySwiper {
            height: 20%;
            box-sizing: border-box;
            padding: 10px 0;
        }

        .mySwiper .swiper-slide {
            width: 25%;
            height: 200px;
            opacity: 0.4;
        }

        .mySwiper .swiper-slide-thumb-active {
            opacity: 1;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

    </style>
</head>

<body>
    <!-- 商品名稱/價格/剩餘數量/描述/主要圖片/次要圖片 -->

    <nav>
        <!-- navbarc橫條 -->
        <section>
            <div id="store-navbar" class="container-fluid p-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-green">
                    <div class="d-flex flex-wrap justify-content-between align-items-center w-100">
                        <div class="d-flex me-4">
                            <a  href="/Bootstrap-Cut-index">
                                <img src="{{ asset('Bootstrap_html_cut_image/BAHAlogo.svg') }}" alt="" width="150"
                                    class="d-inline-block align-text-top">
                            </a>
                        </div>


                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="navbarSupportedContent" class="collapse navbar-collapse justify-content-between">

                            <div class="d-flex" style="position: relative;">
                                <input class="input" type="text">
                                <i class="bi bi-search fs-5 px-2"
                                    style="position: absolute;right: 0px;top: 50%;transform: translateY(-50%);"></i>
                            </div>

                            <ul class="navbar-nav align-items-center">

                                <li class="nav-item">
                                    <a class="" href="#">
                                        <i class="bi bi-volume-down-fill fs-2" style="color: white;"></i>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#">
                                        <i class="bi bi-soundwave fs-3" style="color: white;"></i>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#">
                                        <i class="bi bi-hand-thumbs-up-fill fs-4" style="color: white;"></i>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#">
                                        <i class="bi bi-chat-dots-fill fs-4" style="color: white;"></i>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#">
                                        <i class="bi bi-envelope-fill fs-4" style="color: white;"></i>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#">
                                        <i class="bi bi-bookmarks-fill fs-4" style="color: white;"></i>
                                    </a>
                                </li>


                                <li class="nav-item dropdown">
                                    <a class="drop-link" href="" id="navbarScrollingDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="user-img"></div>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                        <li><a class="dropdown-item" href="./bootstrapWork_pg_login.html">Login</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
    </nav>

    <main class="container-fluid">
        <section>
            <div id="store-title" class="pt-4">
                <div class="d-flex px-5 pt-5 pb-3 align-items-center justify-content-between">
                    <div class="pe-4">
                        {{-- <img src="./image/baha_shopping_logo.png" width="200" alt=""> --}}

                        <img src="{{ asset('Bootstrap_html_cut_image/baha_shopping_logo.png') }}" width="200" alt="">

                    </div>

                    <div class="search1 flex-grow-1">
                        <div style="position: relative;">
                            <input class="w-100" type="text" value="搜尋商品">
                            <i class="bi bi-search fs-5 px-2"
                                style="position: absolute;right: 0px;top: 50% ;transform: translateY(-50%);"></i>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="">
                            <div class="d-flex flex-column align-items-center ps-4">
                                <div class="logo-imgA  mb-1"></div>
                                <p style="color: gray;font-size: 13px;">購物車</p>
                            </div>
                        </a>
                        <a href="">
                            <div class="d-flex flex-column align-items-center ps-4">
                                <div class="logo-imgB  mb-1"></div>
                                <p style="color: gray;font-size: 13px;">我的訂單</p>
                            </div>
                        </a>
                        <a href="">
                            <div class="d-flex flex-column align-items-center ps-4">
                                <div class="logo-imgC  mb-1"></div>
                                <p style="color: gray;font-size: 13px;">客服中心</p>
                            </div>
                        </a>
                        <a href="">
                            <div class="d-flex flex-column align-items-center ps-4">
                                <div class="logo-imgD  mb-1"></div>
                                <p style="color: gray;font-size: 13px;">公告</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="search2 flex-grow-1 px-5 mb-3">
                    <div style="position: relative;">
                        <input class="w-100" type="text" value="搜尋商品">
                        <i class="bi bi-search fs-5 px-2"
                            style="position: absolute;right: 0px;top: 50% ;transform: translateY(-50%);"></i>
                    </div>
                </div>

                <a href="">
                    <div class="d-flex align-items-center ps-5">
                        <i class="bi bi-arrow-left-square-fill fs-3 pe-3" style="color: #0088cc;"></i>
                        <div class="fs-3" style="text-decoration: none; color: #0088cc;">
                            返回商品列表
                        </div>
                    </div>
                </a>
            </div>
        </section>


        <section>
            <div id="commodity-box">
                <div id="commodity-area" class="d-flex p-4 border">
                    <div id="left-area" class="me-3 mb-4">
                        <div id="spec-area">
                            <div class="img-area">
                                <a href="">
                                    <div class="console-name text-center">商品</div>
                                    <div class="img">
                                        {{-- 商品主要圖片 --}}
                                        <img src="{{ $CommodityInf->img_path }}" width="100%" alt="">
                                    </div>
                                </a>
                            </div>

                            <div id="spec-box" class="d-flex flex-column flex-grow-1 ">
                                <div id="commodity-spec" class="border-bottom pb-3">

                                    <div class="d-flex align-items-center pb-2">
                                        <div class="console-name-sm">商</div>
                                        {{-- 商品名稱 --}}
                                        <h5>{{ $CommodityInf->commodity_name }}</h5>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <p>版本發行</p>
                                        <p class="px-4">中文代理版 / 任天堂</p>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <p>發售日期</p>
                                        <p class="px-4">2022-09-09</p>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <div class="d-flex align-items-center ">
                                                <p>預定取貨</p>
                                                <p class="px-4">發售日當天或隔天</p>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <p>商品狀態</p>
                                                <p class="px-4">熱烈預購中</p>
                                            </div>
                                        </div>

                                        <div>
                                            {{-- <img src="{{ asset('Bootstrap_html_cut_image/image/TW-6TO12.gif') }}"
                                                width="70" alt=""> --}}
                                        </div>
                                    </div>

                                </div>

                                <div id="commodity-price">


                                        <div class="d-flex pt-4">
                                            {{-- 商品價格 --}}
                                            <h3 style="color: palevioletred; font-weight: 600;">
                                                {{ $CommodityInf->commodity_price }}</h3>
                                            <h6 class="align-self-end ps-3" style="color: palevioletred;">紅利回饋：待更新</h6>
                                        </div>
                                        <p class="py-3" style="font-size: 13px;">此為預估售價，官方售價公佈後調整，多退少不補</p>

                                        <div class="d-flex align-items-center mb-4">
                                            <h5>需要數量</h5>
                                            <i id="dash" class="bi bi-dash"></i>
                                            <input id="qty" name="qty" value="1" type="number">
                                            <i id="plus" class="bi bi-plus"></i>
                                        </div>

                                        <div class="d-flex align-items-center">
                                            <h5>剩餘數量</h5>
                                            {{-- 商品數量 --}}
                                            <div class="ms-2">{{ $CommodityInf->quantity }}</div>
                                        </div>

                                        <div class="py-4 border-bottom">
                                            <button type="button" class="btn-primary">前往預購</button>
                                            <input type="text" id="commodity_id" value="{{ $CommodityInf->id }}"
                                                hidden>
                                            <button id="addcommodity"  type="button" class="btn-primary ms-2"
                                                style="background-color: white;color: #0088cc;">加入購物車</button>
                                        </div>



                                </div>
                            </div>
                        </div>

                        <div id="link-area" class="d-flex pt-3 align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <a href="">
                                    <i class="bi bi-facebook fs-1" style="color: #1877f2;"></i>
                                </a>
                                <a href="">
                                    <i class="bi bi-link fs-1 ms-3"></i>
                                </a>
                            </div>

                            <div class="target d-flex align-items-center justify-content-center">
                                <i class="bi bi-bullseye"></i>
                                <p class="ps-2">追蹤</p>
                            </div>

                        </div>

                    </div>

                    <div id="right-area" class="">

                        <div id="swiper-area" class="mb-5">
                            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                class="swiper mySwiper2">
                                <div class="swiper-wrapper">
                                    {{-- 商品次要圖片 --}}
                                    @foreach ($CommodityInf->imgs as $item)
                                        <div class="swiper-slide">
                                            <img src="{{ $item->img_path }}" />
                                        </div>
                                    @endforeach
                                    {{-- <div class="swiper-slide">
                                        <img src="{{ $item->img_path }}" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ $item->img_path }}" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ $item->img_path }}" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ $item->img_path }}" />
                                    </div> --}}
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div  class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    {{-- 商品次要圖片 --}}
                                    @foreach ($CommodityInf->imgs as $item)
                                        <div class="swiper-slide">
                                            <img src="{{ $item->img_path }}" />
                                        </div>
                                    @endforeach
                                    {{-- <div class="swiper-slide">
                                        <img src="./image/2.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./image/3.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./image/4.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./image/5.jpg" />
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                        {{-- <div id="vedio-area">
                            <iframe width="100%" height="500" src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div> --}}

                        <div id="introduce" class="py-5">
                            <h5 class="mb-3 ps-3" style="border-left: 5px solid #0088cc;">產品簡介</h5>
                            {{-- 商品介紹/描述 --}}
                            <p class="fs-6 pb-4">&emsp;&emsp;{{ $CommodityInf->introduce }}</p>
                        </div>

                        <div id="img-area">
                            @foreach ($CommodityInf->imgs as $item)
                                <img class="pb-5" src="{{ $item->img_path }}" width="100%" alt="">
                            @endforeach
                            {{-- <img class="pb-5" src="./image/1.jpg" width="100%" alt="">
                            <img class="pb-5" src="./image/2.jpg" width="100%" alt="">
                            <img class="pb-5" src="./image/3.jpg" width="100%" alt=""> --}}
                        </div>

                        {{-- <div id="introduce" class="">
                            <h5 class="mb-3 ps-3" style="border-left: 5px solid #0088cc;">其他注意事項</h5>
                            <ul class="fs-6">
                                <li>情節分類：暴力</li>
                                <li>請注意使用時間，避免沉迷於遊戲。</li>
                                <li>遊戲部分內容或服務可能須另備周邊機器或支付其他費用等。</li>
                                <li>本商品僅限於台灣地區使用。</li>
                                <li>電腦軟體、遊戲光碟及影音商品等，除瑕疵問題外，一經拆封後即不可退換貨。</li>
                                <li>中文版遊戲除遊戲本體內含中文外，亦可能透過網路進行更新為中文版，相關資訊請依官方公布為主。</li>
                            </ul>
                        </div> --}}

                    </div>
                </div>
            </div>
        </section>

        <section>
            <a href="" style="text-decoration: none;">
                <div class="fs-3 ms-5 ps-3" style="color: #0088cc;border-left: 5px solid #0088cc;">
                    部分商品列表
                </div>
            </a>

            <div id="all-commodity-area" class="row p-5">
                @foreach ($commodity as $CommodityEach)
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 p-2">
                        <a href="/Commodity-Inner/{{$CommodityEach->id}}" style="text-decoration: none;color: black;">
                            <div class="card p-2">
                                <div class="console-name">商品</div>
                                <div>
                                    <img src="{{ $CommodityEach->img_path ?? '' }}" alt="..." width="100%">
                                </div>
                                <div class="card-body p-2">
                                    <p class="card-title m-0">{{ $CommodityEach->commodity_name }}</p>
                                    <p class="card-text">{{ $CommodityEach->commodity_price }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

                {{-- <div class="col-lg-2 col-md-4 col-sm-6 col-12 p-2">
                    <a href="" style="text-decoration: none;color: black;">
                        <div class="card p-2">
                            <div class="console-name">NS</div>
                            <div>
                                <img src="./image/92837919ec15684329885315521g0y95.jpg" alt="..." width="100%">
                            </div>
                            <div class="card-body p-2">
                                <p class="m-0">《斯普拉遁 3 + 擴充票》</p>
                            </div>
                        </div>
                    </a>
                </div> --}}



            </div>
        </section>

    </main>
    <div style="background-color: rgb(0, 0, 0); text-align: center;color:white;">©2022 Copyright 趙耕誼Andy Chao. All rights reserved.</div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            loop: true,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>

    <script>
        // 引入商品數量
        const qty = document.querySelector('#qty');
        const dash = document.querySelector('#dash');
        const plus = document.querySelector('#plus');
        // 引入增加至購物車按鈕
        const addcommodity = document.querySelector('#addcommodity');

        plus.onclick = function() {
            if (parseInt(qty.value) < {!! $CommodityInf->quantity !!}) {
                qty.value = parseInt(qty.value) + 1;
            }
            // console.log(qty.value);
        }
        dash.onclick = function() {
            if (parseInt(qty.value) >= 2) {
                qty.value = parseInt(qty.value) - 1;
            }
            // console.log(qty.value);
        }



        //設加入購物車按鈕的點擊(onlick)觸發事件。
        addcommodity.onclick = function() {
            // 建立虛擬form表單
            var formData = new FormData();
            // 架設表單的欄位
            formData.append('add_qty', parseInt(qty.value));
            formData.append('commodity_id', {!! $CommodityInf->id !!});
            formData.append('_token', '{!! csrf_token() !!}');


            fetch('/add_to_cart', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .catch(error => {
                    alert('新增失敗，再嘗試一次')
                    return 'error';
                })
                .then(response => {
                    // alert('新增成功')
                    if (response != 'error') {
                        //不用中括號也可以喔鳩咪
                        if (response.result == 'success')
                            alert('新增成功')
                        else {
                            alert('新增失敗' + response.message)
                        }
                    }
                });


            }

    </script>



</body>

</html>
