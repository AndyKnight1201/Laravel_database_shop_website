{{-- @extends('Bootstrap_html_cut.temple') --}}
@extends('layouts.app')
@section('chat')
    <title>商品編輯</title>
@endsection

@section('pagecss')
    <link rel="stylesheet" href="{{ asset('css/Bootstrap_html_cut_css/bootstrapWork_pg_cart.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection
@section('JQlink')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection

@section('cart')
    <div id="cart" class="container-fluid">
        <div id="cart-inner" class="p-5">
            <h3 class="fw-bold mb-4">訂單管理修改狀態</h3>

            <h4>訂單明細</h4>

            <div id="Order-area">
                @foreach ($order->detail as $item)
                    <div class="py-4 border-bottom d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            {{-- <div class="head-img me-3"></div> --}}
                            <img src="{{ $item->product->img_path }}" width="150" alt="">
                            <div>
                                <h6 class="m-0">{{ $item->product->commodity_name }}</h6>
                                <p class="m-0">{{ $item->product->introduce }}</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="pe-4 d-flex align-items-center">
                                {{-- <span>-</span>
                                <input type="text" class="px-2 mx-2" value="1">
                                <span>+</span> --}}
                                <p>{{ $item->qty }}</p>
                            </div>
                            <p class="pe-4 m-0">${{ $item->qty * $item->price }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <h4 class="pt-4 border-top">寄送資料</h4>

            <div class="pb-4 d-flex flex-column">

                <div class="py-3 d-flex align-items-center w-100">
                    <div class="fs-5" style="width: 75px;">姓名</div>
                    <div class="fs-5 m-0">{{ $order->user_name }}</div>
                </div>

                <div class="py-3 d-flex align-items-center w-100">
                    <div class="fs-5" style="width: 75px;">電話</div>
                    <div class="fs-5 m-0">{{ $order->phone }}</div>
                </div>

                <div class="py-3 d-flex align-items-center w-100">
                    <div class="fs-5" style="width: 75px;">Email</div>
                    <div class="fs-5 m-0">{{ $order->email }}</div>
                </div>


                <div class="py-3 d-flex align-items-center w-100">
                    @if ($order->shipping_way == 1)
                        <div class="fs-5" style="width: 75px;">地址</div>
                        <div class="fs-5 m-0">
                            {{ $order->address }}
                        </div>
                    @else
                        <div class="fs-5" style="width: 75px;">超商地址</div>
                        <div class="fs-5 m-0">
                            {{ $order->store_address }}
                        </div>
                    @endif
                </div>

            </div>

            <div id="totle" class="py-4 border-bottom border-top row justify-content-end">
                <div class="col-lg-3 col-md-4">
                    <div class="py-1 d-flex justify-content-between">
                        <span>數量:</span>
                        <span>{{ $order->qty }}</span>
                    </div>

                    <div class="py-1 d-flex justify-content-between">
                        <span>小計:</span>
                        <span>{{ $order->commodity_price }}</span>
                    </div>

                    <div class="py-1 d-flex justify-content-between">
                        <span>運費:</span>
                        <span>{{ $order->shipping_fee }}</span>
                    </div>

                    <div class="py-1 d-flex justify-content-between">
                        <span>總計:</span>
                        <span>{{ $order->price_total }}</span>
                    </div>
                </div>
            </div>

            <form action="/order/update/{{ $order->id }}" method="POST" id="foot-button">
                @csrf
                <div class="py-4 border-bottom">
                    <h2>訂單狀態</h2>
                    <select name="status" id="status">
                        <option value="1" @if ($order->status == 1)  @endif>未付款</option>
                        <option value="2" @if ($order->status == 2)  @endif>已付款</option>
                        <option value="3" @if ($order->status == 3)  @endif>已出貨</option>
                        <option value="4" @if ($order->status == 4)  @endif>已結單</option>
                        <option value="5" @if ($order->status == 5)  @endif>已取消</option>
                    </select>

                    <h2>訂單備註</h2>
                    {{-- textarea的值不是輸入在value是直接輸入於區塊中，當然回傳時也能回傳到 --}}
                    <textarea name="ps" id="ps" style="width:100%;height:60px;resize:none">
                    {{$order->ps}}
                    </textarea>
                </div>
                <div class="pt-4 d-flex justify-content-end">
                    <button class="btn ms-2" type="submit">取消修改</button>
                    <button class="btn ms-2" type="submit">修改狀態</button>
                </div>
            </form>

        </div>
    </div>
@endsection
