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
                <h2 class="">新增商品</h2>
            </div>
            <div id="">
                <form class="d-flex flex-column" action="/commodity/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <label class="fs-3" for="img_path">上傳商品圖片</label>
                    <input class="mb-3" type="file" id="img_path" name="img_path">

                    <label class="fs-3" for="second_img">上傳商品次要圖片</label>
                    {{-- accept限定input只能上傳圖片的檔案 --}}
                    {{-- name名稱加上[]將上傳的多個值建成陣列，[]告訴後端此多個值可以陣列表示 --}}
                    <input class="mb-3" type="file" id="second_img" name="second_img[]" multiple accept='image/*'>

                    <label class="fs-3" for="commodity_name">商品名稱</label>
                    <input class="mb-3" type="text" id="commodity_name" name="commodity_name">

                    <label class="fs-3" for="commodity_price">價格</label>
                    <input class="mb-3" type="text" id="commodity_price" name="commodity_price">

                    <label class="fs-3" for="quantity">數量</label>
                    <input class="mb-3" type="number" id="quantity" name="quantity">

                    <label class="fs-3" for="introduce">介紹</label>
                    <input class="mb-3" type="text" id="introduce" name="introduce">

                    <div class="py-3">
                        <a href="/commodity" style="text-decoration: none">
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
