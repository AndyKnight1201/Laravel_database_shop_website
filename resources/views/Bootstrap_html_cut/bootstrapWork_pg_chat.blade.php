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
            <h1 class="py-4 border-top">留言板</h1>

            <div id="Order-area">
                <div>
                    {{-- <div class="border-bottom mb-5 d-flex flex-column justify-content-between">
                    <div class="d-flex">
                        <div class="" style="font-size: 30px;">姓名AAA</div>
                        <div class="d-flex" style="font-size: 20px;" >
                            <div class="" >時間2022419</div>
                            <div class="" >AAAAAA</div>
                        </div>
                    </div>
                    <p style="border: 2px solid rgb(255, 166, 0);">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi delectus aliquam ipsa perspiciatis exercitationem eveniet sed? Cupiditate velit exercitationem, molestias nesciunt ipsa, ratione tenetur architecto nam, perspiciatis incidunt optio aliquam?</p>
                </div> --}}

                    {{-- 設參數$chattext --}}
                    @foreach ($chat as $chattext)
                        <div class="border-bottom mb-5 d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center" style="font-size: 20px;">
                                    <div class="" style="font-size: 30px;">{{ $chattext->name }}</div>
                                    <div class="px-4">{{ $chattext->created_at }}</div>
                                </div>
                                <div class="fs-3">{{ $chattext->title }}</div>
                            </div>
                            <p class="fs-4" style="border: 2px solid rgb(255, 166, 0);">{{ $chattext->content }}
                            </p>
                            <div>
                                @auth
                                    <a href="/Bootstrap-Cut-chat/delete/{{ $chattext->id }}">刪除</a>
                                    <a href="/Bootstrap-Cut-chat/edit/{{ $chattext->id }}">編輯</a>
                                @endauth
                            </div>
                        </div>
                    @endforeach

                </div>

                <form action="/Bootstrap-Cut-chat/save" method="GET">
                    <h4 class="pt-4 border-top">歡迎留言討論</h4>
                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-column w-100">
                            <h6 class="fs-5 mt-3">姓名</h6>
                            <input type="text" id="" name="name" placeholder="姓名">
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-column w-100">
                            <h6 class="fs-5 mt-3">標題</h6>
                            <input type="text" id="" name="title" placeholder="標題">
                        </div>
                    </div>

                    <div class="pb-5 d-flex border-bottom align-items-center">
                        <div class="d-flex flex-column w-100">
                            <h6 class="fs-5 mt-3">內容</h6>
                            <input type="text" id="" name="content" placeholder="內容">
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
