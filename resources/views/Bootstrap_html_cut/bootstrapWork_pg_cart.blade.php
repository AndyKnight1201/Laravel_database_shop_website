@extends('Bootstrap_html_cut.temple')

@section('chat')
    <title>cart</title>
@endsection

@section('pagecss')
    <link rel="stylesheet" href="{{ asset('css/Bootstrap_html_cut_css/bootstrapWork_pg_cart.css') }}">
@endsection

@section('cart')
    <div id="cart" class="container-fluid">
        <form action="/Bootstrap-Cut-cartTwo" method="POST" id="cart-inner" class="p-5">
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

            <h4 class="py-4 border-top">訂單明細</h4>

            <div id="Order-area">
                {{-- <form action=""></form> --}}
                <div class="border-bottom d-flex flex-column">
                    {{-- 如果沒有放商品/購物車是空值 --}}
                    @if ($Null == '' || $Null == null)
                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <p style="font-size: 100px;font-weight: 600;color:rgb(192, 33, 33)">沒有放商品啊哥</p>
                            <img src="{{asset('Bootstrap_html_cut_image/cartnocommodity.jpg')}}" width="75%" alt="">
                        </div>
                    @else
                        @foreach ($Cart as $item)
                            <div id="commodity{{ $item->id }}"
                                class="py-4 d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="me-3">
                                        <img src="{{ $item->commodity->img_path }}" width="150" alt="">
                                    </div>
                                    <div>
                                        <h6 class="m-0">{{ $item->commodity->commodity_name }}</h6>
                                        <p class="m-0 number" data-commodity_qty="{{ $item->commodity->quantity }}"
                                            data-commodity_price="{{ $item->commodity->commodity_price }}">
                                            {{ Auth::user()->name }}</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <p class="fs-6 pe-4 m-0">
                                        商品單價{{ $item->commodity->commodity_price }}</p>
                                    <div class="pe-4 d-flex align-items-center">

                                        <span>數量</span>
                                        {{-- <span>{{ $item->qty }}</span> --}}

                                        <i id="dash" class="bi bi-dash dash"></i>
                                        <input type="text" name="qty[]" class="px-2 mx-2 qty" value="{{ $item->qty }}"
                                            readonly>
                                        <i id="plus" class="bi bi-plus plus"></i>

                                    </div>
                                    <p class="fs-6 pe-4 m-0 price">
                                        價格總計${{ $item->qty * $item->commodity->commodity_price }}
                                    </p>
                                    {{-- <a href="/cartlist/delete/{{$item->id}}"> --}}
                                    <div class="btn btn-danger delete_commodity" data-item_id="{{ $item->id }}">刪除商品
                                    </div>
                                    {{-- <div class="btn btn-danger delete_commodity" data-item_id="'{{ $item->id }}'" onclick="delete_cart_commodity('{{ $item->id }}')">刪除商品</div> --}}
                                    {{-- </a> --}}
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div id="totle" class="py-4 border-bottom row justify-content-end">
                    <div class="col-lg-3 col-md-4">
                        <div class="py-1 d-flex justify-content-between">
                            <span>商品數量:</span>
                            {{-- count()為PHP語言抓forEach陣列資料長度的寫法 --}}
                            <span class="count">{{ count($Cart) }}</span>
                        </div>

                        <div class="py-1 d-flex justify-content-between">
                            <span>各項數量總和:</span>
                            <span class="totle_qty">{{ $totle_qty }}</span>
                        </div>

                        <div class="py-1 d-flex justify-content-between">
                            <span>小計:</span>
                            <span>$
                                <span class="small-count">{{ $totle_price }}</span>
                            </span>
                        </div>

                        <div class="py-1 d-flex justify-content-between">
                            <span>運費:</span>
                            <span>24</span>
                        </div>

                        <div class="py-1 d-flex justify-content-between">
                            <span>總計:</span>
                            <span>$
                                <span class="total-price">{{ $totle_price + 24 }}</span>
                            </span>
                        </div>
                    </div>

                </div>

                <div id="foot-button" class="pt-4 d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <!-- <div>
                                                        <i class="fs-4 bi bi-arrow-left-short"></i>
                                                      </div>
                                                      <div>返回購物</div> -->
                    </div>
                    <div>
                        <button class="btn" type="submit">下一步</button>
                    </div>
                </div>

        </form>
    </div>
@endsection



@section('JS')
    <script>
        // 引入商品數量
        const qty = document.querySelectorAll('.qty');
        const dash = document.querySelectorAll('.dash');
        const plus = document.querySelectorAll('.plus');
        const price = document.querySelectorAll('.price');
        // 引入增加至購物車按鈕
        const number = document.querySelectorAll('.number');

        // 小計與總計的元素
        const small_count = document.querySelector('.small-count');
        const total_price = document.querySelector('.total-price');
        const totle_qty = document.querySelector('.totle_qty');
        const count_qty = document.querySelector('.count');

        //刪除按鈕
        const delete_commodity = document.querySelectorAll('.delete_commodity');


        for (let i = 0; i < qty.length; i++) {

            dash[i].onclick = function dash_qty() {
                if (parseInt(qty[i].value) > 1) {

                    qty[i].value = parseInt(qty[i].value) - 1;
                    price[i].innerHTML = '價格總計$' + (parseInt(number[i].dataset.commodity_price)) * (parseInt(qty[i]
                        .value))

                    totle_qty.innerHTML = parseInt(totle_qty.innerHTML) - 1;
                }
                // 用函數輸出總計
                get_total();

            }

            plus[i].onclick = function plus_qty() {
                if (parseInt(qty[i].value) < parseInt(number[i].dataset.commodity_qty)) {
                    qty[i].value = parseInt(qty[i].value) + 1;
                    price[i].innerHTML = '價格總計$' + (parseInt(number[i].dataset.commodity_price)) * (parseInt(qty[i]
                        .value));

                    totle_qty.innerHTML = parseInt(totle_qty.innerHTML) + 1;
                }
                get_total();
            }

            // 將每筆商品的刪除按鈕帶入
            delete_commodity[i].onclick = function delete_cart_commodity() {
                // 呼叫dataset設定的每筆加入購物車商品ID進來並宣告id
                // 為了要用在傳送表單和刪除自己div的id上
                var id = delete_commodity[i].dataset.item_id;
                // console.log(id);
                var formData = new FormData();
                formData.append('_token', '{!! csrf_token() !!}');
                fetch('/cartlist/delete/' + id, {
                        method: 'POST',
                        body: formData,
                    })
                    .then(function(response) {
                        var Element = document.querySelector('#commodity' + id);
                        Element.parentNode.removeChild(Element);
                    })
                    .then(res => {
                        // console.log(qty[i].value);
                        // console.log(number[i].dataset.commodity_price);
                        // console.log(small_count.innerHTML);
                        // console.log(total_price.innerHTML);
                        small_count.innerHTML = (parseInt(small_count.innerHTML)) - parseInt(number[i].dataset
                            .commodity_price) * parseInt(qty[i].value);
                        total_price.innerHTML = (parseInt(total_price.innerHTML)) - parseInt(number[i].dataset
                            .commodity_price) * parseInt(qty[i].value);
                        totle_qty.innerHTML = parseInt(totle_qty.innerHTML) - parseInt(qty[i].value);
                        // 每刪除一項商品，商品類型總數-1
                        count_qty.innerHTML = parseInt(count_qty.innerHTML) - 1;
                        // 該項刪除的商品數量要清0
                        qty[i].value = 0;
                    })

            }
        }

        // 總計函數
        function get_total() {
            var sum = 0;
            for (let j = 0; j < qty.length; j++) {
                sum += parseInt(number[j].dataset.commodity_price) * parseInt(qty[j].value)
            }
            small_count.innerHTML = sum;
            total_price.innerHTML = sum + 24;
        }
    </script>
@endsection
