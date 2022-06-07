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
            <div class="border-top py-4">
                <h2 class="">新增商品</h2>
            </div>
            <div id="">
                <form class="d-flex flex-column" action="/commodity/update/{{ $edit->id }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div>目前圖片</div>
                    <img src="{{ $edit->img_path }}" alt="" width="500">
                    <label class="fs-3" for="">上傳圖片</label>
                    <input class="mb-3" type="file" id="img_path" name="img_path">

                    <div>目前次要圖片</div>
                    <div class="d-flex flex-wrap align-items-start">
                        {{-- //利用Model的imgs關聯函式，呼叫另一個資料表，和這個資料ID對應關聯的相同product_id的每筆資料 --}}
                        @foreach ($edit->imgs as $item)
                            <div class="d-flex flex-column me-3" style="width: 150px;" id="ImgParentDiv{{ $item->id }}">
                                {{-- 印出每單筆資料的img_path 欄位紀錄的路徑字串到src中 --}}
                                <img src="{{ $item->img_path }}" alt="" class="w-100">
                                {{-- 使用正統方式發送form表單刪除次要圖片資料 --}}
                                {{-- <button type="button" class="btn btn-danger w-100"onclick="document.querySelector('#deleteForm{{ $item->id }}').submit()">刪除</button> --}}

                                {{-- 使用業界fetch方式 --}}
                                <button type="button" class="btn btn-danger w-100"
                                    onclick="delete_Form({{ $item->id }})">刪除</button>
                            </div>
                        @endforeach
                    </div>

                    <label class="fs-3" for="second_img">增加上傳商品次要圖片</label>
                    {{-- accept限定input只能上傳圖片的檔案 --}}
                    {{-- name名稱加上[]將上傳的多個值建成陣列，[]告訴後端此多個值可以陣列表示 --}}
                    <input class="mb-3" type="file" id="second_img" name="second_img[]" multiple accept='image/*'>

                    <label class="fs-3" for="commodity_name">商品名稱</label>
                    <input class="mb-3" type="text" id="commodity_name" name="commodity_name"
                        value="{{ $edit->commodity_name }}">

                    <label class="fs-3" for="commodity_price">價格</label>
                    <input class="mb-3" type="text" id="commodity_price" name="commodity_price"
                        value="{{ $edit->commodity_price }}">

                    <label class="fs-3" for="quantity">數量</label>
                    <input class="mb-3" type="number" id="quantity" name="quantity"
                        value="{{ $edit->quantity }}">

                    <label class="fs-3" for="introduce">介紹</label>
                    <input class="mb-3" type="text" id="introduce" name="introduce"
                        value="{{ $edit->introduce }}">

                    <div class="py-3">
                        <a href="/commodity" style="text-decoration: none">
                            <div class="btn btn-secondary">取消</div>
                        </a>
                        <button class="btn btn-success" type="submit">編輯完成</button>
                    </div>

                </form>

                {{-- 對應上面foreach的次要圖片 --}}
                {{-- @foreach ($edit->imgs as $item)
                    <form action="/commodity/delete_img/{{ $item->id }}" id="deleteForm{{ $item->id }}"
                        method="post">
                        @method('DELETE') --}}
                {{-- 只要是POST就要@csrf --}}
                {{-- @csrf
                    </form>
                @endforeach --}}

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

    <script>
        function delete_Form(id) {
            // 創建表單及內部資料
            var formdata = new FormData();
            formdata.append('_method', 'DELETE');
            formdata.append('_token', '{{ csrf_token() }}');

            // fetch發送表單至後台，或為發送表單到指定的請求網址
            //這裡的網址對應路由和Controller內容為刪除次要圖片。
            fetch("/commodity/delete_img/" + id, {
                // 發送資料方式
                method: "POST",
                // 發送表單名稱
                body: formdata,

            }).then(function(response) {
                // 將要做刪除動作的元素導入並宣告變數
                var ImgElement = document.querySelector('#ImgParentDiv' + id);
                //刪除ImgElement的父層中的子層名為ImgElement的元素，也就是刪除ImgElement他自己。
                // 目前只能用這種方式刪除元素自己。
                ImgElement.parentNode.removeChild(ImgElement);
            })
        }
    </script>
@endsection
