{{-- @extends('Bootstrap_html_cut.temple') --}}
@extends('layouts.app')

@section('chat')
    <title>banner編輯</title>
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
                <h2 class="">Banner 新增</h2>
            </div>
            <div id="">
                <form class="d-flex flex-column" action="/banner/update/{{ $edit->id }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div>目前圖片</div>
                    <img src="{{ $edit->img_path }}" alt="" width="500">
                    <label class="fs-3" for="">上傳圖片</label>
                    <input class="mb-3" type="file" id="banner_img" name="img_path">

                    <label class="fs-3" for="img_opacity">圖片透明度</label>
                    <input class="mb-3" type="text" id="img_opacity" name="img_opacity"
                        value="{{ $edit->img_opacity }}">

                    <label class="fs-3" for="weight">欄位權重</label>
                    <input class="mb-3" type="number" id="weight" name="weight" value="{{ $edit->weight }}">

                    <div class="py-3">
                        <a href="/banner" style="text-decoration: none">
                            <div class="btn btn-secondary">取消</div>
                        </a>
                        <button class="btn btn-success" type="submit">編輯完成</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('JSJQlink')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous">
    </script>

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
@endsection
