@extends('Bootstrap_html_cut.temple')

@section('chat')
    <title>cart</title>
@endsection

@section('pagecss')
    <link rel="stylesheet" href="{{ asset('css/Bootstrap_html_cut_css/bootstrapWork_pg_cart_four.css') }}">
@endsection

@section('cart')
    <div id="cart" class="container-fluid">
        <div id="cart-inner" class="p-5">
            <h3 class="fw-bold mb-4">購物車</h3>

            <div class="progress-line-box d-flex">
                <div class="progress-line">
                    <div>
                        <div class="curcle">
                            <p>1</p>
                        </div>
                    </div>
                    <p class="p-text">確認購物車</p>
                </div>

                <div class="progress-line">
                    <div>
                        <div class="bar-line-left progress1"></div>
                        <div class="curcle">
                            <p>2</p>
                        </div>
                    </div>
                    <p class="p-text">付款與運送方式</p>
                </div>

                <div class="progress-line">
                    <div>
                        <div class="bar-line-left progress2"></div>
                        <div class="curcle">
                            <p>3</p>
                        </div>
                    </div>
                    <p class="p-text">填寫資料</p>
                </div>

                <div class="progress-line">
                    <div>
                        <div class="bar-line-left progress3"></div>
                        <div class="curcle">
                            <p>4</p>
                        </div>
                    </div>
                    <p class="p-text">完成訂購</p>
                </div>

            </div>

            <h1 class="OrderText text-center border-top">訂單成立</h1>
            <h4>訂單明細</h4>


            <div id="Order-area">
                @foreach ($order->detail as $item)
                    <div class="py-4 border-bottom d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            {{-- <div class="head-img me-3"></div> --}}
                            <img src="{{$item->product->img_path}}" width="150" alt="">
                            <div>
                                <h6 class="m-0">{{$item->product->commodity_name}}</h6>
                                <p class="m-0">{{$item->product->introduce}}</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="pe-4 d-flex align-items-center">
                                {{-- <span>-</span>
                                <input type="text" class="px-2 mx-2" value="1">
                                <span>+</span> --}}
                                <p>{{$item->qty}}</p>
                            </div>
                            <p class="pe-4 m-0">${{$item->qty*$item->price}}</p>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="py-4 border-bottom d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="head-img2 me-3"></div>
                        <div>
                            <h6 class="m-0">Spicy Mexican potatoes</h6>
                            <p class="m-0">#66999</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="pe-4 d-flex align-items-center">
                            <span>-</span>
                            <input type="text" class="px-2 mx-2" value="1">
                            <span>+</span>
                        </div>
                        <p class="pe-4 m-0">$10.50</p>
                    </div>
                </div>

                <div class="py-4 border-bottom d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="head-img3 me-3"></div>
                        <div>
                            <h6 class="m-0">Breakfast</h6>
                            <p class="m-0">#86577</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="pe-4 d-flex align-items-center">
                            <span>-</span>
                            <input type="text" class="px-2 mx-2" value="1">
                            <span>+</span>
                        </div>
                        <p class="pe-4 m-0">$10.50</p>
                    </div>
                </div> --}}
            </div>

            <h4 class="pt-4 border-top">寄送資料</h4>

            <div class="pb-4 d-flex flex-column">

                <div class="py-3 d-flex align-items-center w-100">
                    <div class="fs-5" style="width: 75px;">姓名</div>
                    <div class="fs-5 m-0">{{$order->user_name}}</div>
                </div>

                <div class="py-3 d-flex align-items-center w-100">
                    <div class="fs-5" style="width: 75px;">電話</div>
                    <div class="fs-5 m-0">{{$order->phone}}</div>
                </div>

                <div class="py-3 d-flex align-items-center w-100">
                    <div class="fs-5" style="width: 75px;">Email</div>
                    <div class="fs-5 m-0">{{$order->email}}</div>
                </div>


                <div class="py-3 d-flex align-items-center w-100">
                    @if ($order->shipping_way == 1)
                    <div class="fs-5" style="width: 75px;">地址</div>
                    <div class="fs-5 m-0">
                        {{$order->address}}
                    </div>
                    @else
                    <div class="fs-5" style="width: 75px;">超商地址</div>
                    <div class="fs-5 m-0">
                        {{$order->store_address}}
                    </div>
                    @endif
                </div>

            </div>

            <div id="totle" class="py-4 border-bottom border-top row justify-content-end">
                <div class="col-lg-3 col-md-4">
                    <div class="py-1 d-flex justify-content-between">
                        <span>數量:</span>
                        <span>{{$order->qty}}</span>
                    </div>

                    <div class="py-1 d-flex justify-content-between">
                        <span>小計:</span>
                        <span>{{$order->commodity_price}}</span>
                    </div>

                    <div class="py-1 d-flex justify-content-between">
                        <span>運費:</span>
                        <span>{{$order->shipping_fee}}</span>
                    </div>

                    <div class="py-1 d-flex justify-content-between">
                        <span>總計:</span>
                        <span>{{$order->price_total}}</span>
                    </div>
                </div>
            </div>

            <div id="foot-button" class="pt-4 d-flex justify-content-end">
                <div>
                    <button class="btn" type="submit"
                        onclick="location.href='/Bootstrap-Cut-index';">返回首頁</button>
                </div>
            </div>

        </div>
    </div>
@endsection
