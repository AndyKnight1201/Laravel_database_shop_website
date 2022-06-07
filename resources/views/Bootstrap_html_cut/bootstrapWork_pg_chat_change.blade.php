@extends('Bootstrap_html_cut.temple')

@section('chat')
    <title>chat</title>
@endsection

@section('pagecss')
    <link rel="stylesheet" href="{{ asset('css/Bootstrap_html_cut_css/bootstrapWork_pg_cart_tree.css') }}">
@endsection

@section('cart')
    <div id="cart" class="container-fluid">
        <div id="cart-inner" class="p-5">

            <div id="Order-area">
                <form action="/Bootstrap-Cut-chat/updata/{{ $chatedit->id }}" method="GET">

                    <h1 class="py-4 border-top">編輯討論</h1>

                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-column w-100">
                            <h6 class="fs-5 mt-3">姓名</h6>
                            <input type="text" id="" name="name" placeholder="姓名" value="{{ $chatedit->name }}">
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-column w-100">
                            <h6 class="fs-5 mt-3">標題</h6>
                            <input type="text" id="" name="title" placeholder="標題" value="{{ $chatedit->title }}">
                        </div>
                    </div>

                    <div class="pb-5 d-flex border-bottom align-items-center">
                        <div class="d-flex flex-column w-100">
                            <h6 class="fs-5 mt-3">內容</h6>
                            <input type="text" id="" name="content" placeholder="內容" value="{{ $chatedit->content }}">
                        </div>
                    </div>

                    <div id="foot-button" class="pt-4 d-flex justify-content-between">
                        <div>
                            <button class="btn btnB" type="submit">確認留言</button>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
@endsection
