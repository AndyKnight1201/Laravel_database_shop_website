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
                <h2 class="">帳號編輯</h2>
            </div>
            <div id="">
                <form class="d-flex flex-column" action="/account/update/{{ $edit->id }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <label class="fs-3" for="account_name">帳號名稱</label>
                    <input class="mb-3" type="text" id="account_name" name="name"
                        value="{{ $edit->name }}">

                    <label class="fs-3" for="account_email">帳號信箱</label>
                    <input class="mb-3" type="text" id="account_email" readonly
                        value="{{ $edit->email }}">

                    <label class="fs-3" for="power">權限</label>
                    <select name="power" id="">
                        <option value="1" @if ($edit->power == 1) selected @endif>管理者</option>
                        <option value="2" @if ($edit->power == 2) selected @endif>一般帳戶</option>
                    </select>

                    <label class="fs-3" for="password">密碼</label>
                    <input class="mb-3" type="text" id="password" name="password"
                        value="{{ $edit->password }}">

                    <div class="py-3">
                        <a href="/commodity" style="text-decoration: none">
                            <div class="btn btn-secondary">取消</div>
                        </a>
                        <button class="btn btn-success" type="submit" style="background-color: green">編輯完成</button>
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
