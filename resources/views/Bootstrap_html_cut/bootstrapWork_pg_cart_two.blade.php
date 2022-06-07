@extends('Bootstrap_html_cut.temple')

@section('chat')
    <title>cart</title>
@endsection

@section('pagecss')
    <link rel="stylesheet" href="{{ asset('css/Bootstrap_html_cut_css/bootstrapWork_pg_cart_two.css') }}">
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

            <h4 class="pt-4 border-top">付款方式</h4>
            @if ($Null == '' || $Null == null)
                <div class="d-flex justify-content-center flex-column align-items-center">
                    <p style="font-size: 100px;font-weight: 600;color:rgb(192, 33, 33)">沒有彩蛋，回頭是岸</p>
                    <p style="font-size: 75px;font-weight: 600;color:rgb(192, 33, 33)">欸不是，真的沒有加入商品</p>
                    <img src="{{asset('Bootstrap_html_cut_image/cartnocommodity.jpg')}}" width="75%" alt="">
                </div>
                <div id="foot-button" class="pt-4 d-flex justify-content-start">
                    <div>
                        <button class="btn btnA" type="button"
                            onclick="location.href='/Bootstrap-Cut-index';">回首頁</button>
                    </div>
                </div>
            @else
                <form action="/Bootstrap-Cut-cartTree" method="POST">
                    @csrf
                    <div class="Order-area">

                        <div class=" py-4 border-bottom d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div>
                                    <input name="pay" type="radio" id="pay1" value="1">
                                </div>
                                <div>
                                    <label for="pay1" class="fs-5 m-0">信用卡付款</label>
                                </div>
                            </div>
                        </div>

                        <div class=" py-4 border-bottom d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div>
                                    <input name="pay" type="radio" id="pay2" value="2">
                                </div>
                                <div>
                                    <label for="pay2" class="fs-5 m-0">網路 ATM</label>
                                </div>
                            </div>
                        </div>

                        <div class=" py-4 border-bottom d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div>
                                    <input name="pay" type="radio" id="pay3" value="3">
                                </div>
                                <div>
                                    <label for="pay3" class="fs-5 m-0">超商代碼</label>
                                </div>
                            </div>
                        </div>

                    </div>

                    <h4 class="pt-4 border-top">運送方式</h4>

                    <div class="Order-area">
                        <div class=" py-4 border-bottom d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div>
                                    <input name="shipping_way" type="radio" id="shipping_way1" value="1">
                                </div>
                                <div>
                                    <label for="shipping_way1" class="fs-5 m-0">黑貓宅配</label>
                                </div>
                            </div>
                        </div>

                        <div class=" py-4 border-bottom d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div>
                                    <input name="shipping_way" type="radio" id="shipping_way2" value="2">
                                </div>
                                <div>
                                    <label for="shipping_way2" class="fs-5 m-0">超商店到店</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div id="totle" class="py-4 border-bottom row justify-content-end">
                        <div class="col-lg-3 col-md-4">
                            <div class="py-1 d-flex justify-content-between">
                                <span>數量:</span>
                                <span>3</span>
                            </div>

                            <div class="py-1 d-flex justify-content-between">
                                <span>小計:</span>
                                <span>$24.90</span>
                            </div>

                            <div class="py-1 d-flex justify-content-between">
                                <span>運費:</span>
                                <span>$24.90</span>
                            </div>

                            <div class="py-1 d-flex justify-content-between">
                                <span>總計:</span>
                                <span>$74.70</span>
                            </div>
                        </div>

                    </div>

                    <div id="foot-button" class="pt-4 d-flex justify-content-between">
                        <div>
                            <button class="btn btnA" type="submit"
                                onclick="location.href='/Bootstrap-Cut-cart';">上一步</button>
                        </div>
                        <div>
                            <button class="btn btnB" type="submit">下一步</button>
                        </div>
                    </div>
                </form>
            @endif
        </div>
    </div>
@endsection
