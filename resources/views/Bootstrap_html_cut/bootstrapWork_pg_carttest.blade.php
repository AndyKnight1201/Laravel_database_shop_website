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
                    @foreach ($Cart as $item)
                        <div id="commodity{{$item->id}}" class="py-4 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <img src="{{ $item->commodity->img_path }}" width="150" alt="">
                                </div>
                                <div>
                                    <h6 class="m-0">{{ $item->commodity->commodity_name }}</h6>
                                    <p class="m-0 number"
                                        data-commodity_qty="{{ $item->commodity->quantity}}"
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
                                <p class="fs-6 pe-4 m-0 price">價格總計${{ $item->qty * $item->commodity->commodity_price }}
                                </p>
                                {{-- <a href="/cartlist/delete/{{$item->id}}"> --}}
                                <div class="btn btn-danger" onclick="delete_cart_commodity('{{ $item->id }}')">刪除商品
                                </div>
                                {{-- </a> --}}
                            </div>
                        </div>
                    @endforeach
                </div>

                <div id="totle" class="py-4 border-bottom row justify-content-end">
                    <div class="col-lg-3 col-md-4">
                        <div class="py-1 d-flex justify-content-between">
                            <span>商品數量:</span>
                            {{-- count()為PHP語言抓forEach陣列資料長度的寫法 --}}
                            <span>{{ count($Cart) }}</span>
                        </div>

                        <div class="py-1 d-flex justify-content-between">
                            <span>各項數量總和:</span>
                            <span class="totle_qty">{{ $totle_qty }}</span>
                        </div>

                        <div class="py-1 d-flex justify-content-between">
                            <span>小計:</span>
                            <span class="small-count">{{ $totle_price }}</span>
                        </div>

                        <div class="py-1 d-flex justify-content-between">
                            <span>運費:</span>
                            <span>24</span>
                        </div>

                        <div class="py-1 d-flex justify-content-between">
                            <span>總計:</span>
                            <span class="total-price">{{ $totle_price + 24 }}</span>
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

        // console.log(qty);
        // console.log(dash);
        // console.log(plus);
        // console.log(price);

        var pricetotle = 0;
        // 使用for迴圈處理querySelectorAll的陣列資料，當然，使用foreach也可以
        for (let i = 0; i < qty.length; i++) {

            // console.log(number[i].dataset.commodity_price);
            // 使用i代替foreach的value，當dash陣列中的每一筆資料使用onclick觸發時，執行內容。
            dash[i].onclick = function() {
                if (parseInt(qty[i].value) > 1) {
                    // qty[i]是input元素有顯示值，調用裡面的值需要.value
                    qty[i].value = parseInt(qty[i].value) - 1;

                    totle_qty.innerHTML = parseInt(totle_qty.innerHTML) - 1;
                    // 調用存在元素中的dataset
                    // 使用JS計算時可以外包()
                    // 輸出div內容用.innerHTML
                    // 計算小計，商品價格乘以商品數量
                    price[i].innerHTML = '價格總計$' + (parseInt(number[i].dataset.commodity_price)) * (parseInt(qty[i].value))
                    // pricetotle = (parseInt(number[i].dataset.commodity_price)) * (parseInt(qty[i].value));
                    // var pricetotle = price[i].innerHTML

                }
                // 用函數輸出總計
                get_total();
            }

            plus[i].onclick = function() {
                if (parseInt(qty[i].value) < parseInt(number[i].dataset.commodity_qty)) {
                    qty[i].value = parseInt(qty[i].value) + 1;
                    totle_qty.innerHTML = parseInt(totle_qty.innerHTML) + 1;

                    price[i].innerHTML = '價格總計$' + (parseInt(number[i].dataset.commodity_price)) * (parseInt(qty[i].value));

                    // pricetotle += (parseInt(number[i].dataset.commodity_price)) * (parseInt(qty[i].value));
                    // var pricetotle = price[i].innerHTML;

                }
                get_total();
            }

        }

        // 總計函數
        function get_total() {
            var sum = 0;
            for (let j = 0; j < qty.length; j++) {
                // i=i+1概念來總計所有小計
                sum += parseInt(number[j].dataset.commodity_price) * parseInt(qty[j].value)
            }
            small_count.innerHTML = '$' + sum;
            // +24是運費
            total_price.innerHTML = '$' + (sum + 24);
        }

        // function change_total() {
        //     small_count.innerHTML = (parseInt(small_count.innerHTML)) - (parseInt(pricetotle));
        //     total_price.innerHTML = (parseInt(total_price.innerHTML)) - (parseInt(pricetotle)) + 24;
        // }
        for (let j = 0; j < qty.length; j++) {
                    // i=i+1概念來總計所有小計
                    console.log(price[j].innerHTML);
                    console.log(pricetotle);
                }



        function delete_cart_commodity(id) {

                // for (let j = 0; j < qty.length; j++) {
                //     // i=i+1概念來總計所有小計
                //     small_count.innerHTML = (parseInt(small_count.innerHTML)) - (parseInt(price[j].innerHTML));
                //     total_price.innerHTML = (parseInt(total_price.innerHTML)) - (parseInt(price[j].innerHTML)) + 24;
                //     console.log(price[j].innerHTML);
                // }


            // 建立虛擬form表單
            var formData = new FormData();
            // 架設表單的欄位
            formData.append('_token', '{!! csrf_token() !!}');
            fetch('/cartlist/delete/' + id, {
                    method: 'POST',
                    body: formData,
                })

                // JS重新整理頁面
                // location.reload();
                // 或
                // .then(location.reload())
                //或
                // .then(res => {
                //     location.reload();
                // })
                .then(function(response) {
                // 將要做刪除動作的元素導入並宣告變數
                var Element = document.querySelector('#commodity'+id);
                //刪除ImgElement的父層中的子層名為ImgElement的元素，也就是刪除ImgElement他自己。
                // 目前只能用這種方式刪除元素自己。
                Element.parentNode.removeChild(Element);
                })
                .then(res => {
                    small_count.innerHTML = (parseInt(small_count.innerHTML)) + 1;
                    total_price.innerHTML = (parseInt(total_price.innerHTML)) + 1;
                })

        }
    </script>
@endsection

