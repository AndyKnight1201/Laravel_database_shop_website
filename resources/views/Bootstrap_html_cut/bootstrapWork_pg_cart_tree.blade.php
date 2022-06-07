@extends('Bootstrap_html_cut.temple')

@section('chat')
    <title>cart</title>
@endsection

@section('pagecss')
    <link rel="stylesheet" href="{{ asset('css/Bootstrap_html_cut_css/bootstrapWork_pg_cart_tree.css') }}">
@endsection

@section('cart')
    <div id="cart" class="container-fluid">
        <form action="/Bootstrap-Cut-cartFour" method="POST" id="cart-inner" class="p-5">
            @csrf
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

            <h4 class="pt-4 border-top">寄送資料</h4>

            <div id="Order-area">
                <div class="d-flex align-items-center">
                    <div class="d-flex flex-column w-100">
                        <h6 class="fs-5 mt-3">姓名</h6>
                        <input type="text" id="name" name="name" placeholder="王小明">
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="d-flex flex-column w-100">
                        <h6 class="fs-5 mt-3">電話</h6>
                        <input type="text" id="phone" name="phone" placeholder="0912345678">
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="d-flex flex-column w-100">
                        <h6 class="fs-5 mt-3">Email</h6>
                        <input type="text" id="email" name="email" placeholder="abc123@gmail.com">
                    </div>
                </div>

                <div class="pb-5 d-flex border-bottom align-items-center">
                    <div class="d-flex flex-column w-100">
                        <h6 class="fs-5 mt-3">
                            @if ($shipping_way == 1)
                                    地址
                            @else
                                超商地址
                            @endif
                        </h6>
                        <div class="mb-3 d-flex justify-content-between">
                            <input type="text" id="city" name="city"  placeholder="城市" style="width: 49%;">
                            <input type="text" id="code" name="code"  placeholder="郵遞區號" style="width: 49%;">
                        </div>
                        <input type="text" id="address" name="address"  placeholder="地址">
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
                        onclick="location.href='/Bootstrap-Cut-cartTwo';">上一步</button>
                </div>
                <div>
                    {{-- <button class="btn btnB" type="button"
                        onclick="button()">前往結帳</button> --}}
                        <button class="btn btnB" type="submit">前往結帳</button>
                </div>
            </div>

        </form>
    </div>
@endsection

@section('JS')
    {{-- <script>
        const name= document.querySelector('#name');
        const phone= document.querySelector('#phone');
        const email= document.querySelector('#email');
        const city= document.querySelector('#city');
        const code= document.querySelector('#code');
        const address= document.querySelector('#address');

        console.log(name.value);

        function button() {
            if (name.value == '' ||phone.value == '' || email.value == '' || city.value == '' || code.value == '' || address.value == '') {
                alert('請輸入資訊');
                location.reload();
            }else{
                location.href='/Bootstrap-Cut-cartFour'.submit();
            }

        }


    </script> --}}
@endsection
