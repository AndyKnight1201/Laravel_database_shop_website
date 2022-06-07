{{-- @extends('Bootstrap_html_cut.temple') --}}
@extends('layouts.app')
@section('chat')
    <title>商品新增</title>
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
            <div class="border-top py-4">
                <h2 class="">新增帳號</h2>
                <p style="color: red">{{session('problem')}}</p>
            </div>
            <div id="">
                <form class="d-flex flex-column" action="/account/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <label class="fs-3" for="account_name">帳號名稱</label>
                    <input class="mb-3" type="text" id="account_name" name="name">

                    <label class="fs-3" for="email">帳號信箱</label>
                    <input class="mb-3" type="text" id="account_email" name="email">

                    {{-- <label class="fs-3" for="power">權限</label>
                    <input class="mb-3" type="number" id="power" name="power"> --}}

                    <label class="fs-3" for="password">密碼</label>
                    <input class="mb-3" type="password" id="password" name="password">

                    <label class="fs-3" for="password">密碼確認</label>
                    <input class="mb-3" type="password" id="password" name="password_confirmation">

                    <div class="py-3">
                        <a href="/account" style="text-decoration: none">
                            <div class="btn btn-secondary">取消</div>
                        </a>
                        <button class="btn btn-success" type="submit">建立新增</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('JSJQlink')
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous">
    </script>

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
