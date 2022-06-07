{{-- @extends('Bootstrap_html_cut.temple') --}}
@extends('layouts.app')

@section('chat')
    <title>banner</title>
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
            <div class="border-top py-4 d-flex justify-content-between">
                <h2 class="">Banner 管理</h2>
                <a href="/banner/create">
                    <button class="btn btn-success" type="">新增Banner</button>
                </a>
            </div>

            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>圖片預覽</th>
                        <th>圖片權重</th>
                        <th>功能</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($banner as $BannerEach)
                        <tr>
                            <td>
                                <img src="{{ $BannerEach->img_path }}" width="200" alt=""
                                    style="opacity:{{ $BannerEach->img_opacity }}">
                            </td>
                            <td>{{ $BannerEach->weight }}</td>
                            <td>
                                <a href="/banner/edit/{{ $BannerEach->id }}" style="text-decoration: none">
                                    <button class="btn btn-success">編輯</button>
                                </a>

                                {{-- <button class="btn btn-danger"  onclick="delete_Form({{$BannerEach->id}})">刪除</button> --}}
                                <button class="btn btn-danger"
                                    onclick="document.querySelector('#deleteForm{{ $BannerEach->id }}').submit()">刪除</button>
                                <form action="/banner/delete/{{ $BannerEach->id }}" method="post" hidden
                                    id="deleteForm{{ $BannerEach->id }}">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    {{-- <tr>
                        <td>
                            <img src="{{ asset('Bootstrap_html_cut_image/400.jpg') }}" width="100" alt="">
                        </td>
                        <td>1</td>
                        <td>
                            <button class="btn btn-success" type="">編輯</button>
                            <button class="btn btn-danger" type="">刪除</button>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
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
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js">
    </script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>

    {{-- <script>
        function delete_Form($id) {

            document.querySelector('#deleteForm'+$id).submit();

        }
    </script> --}}
@endsection
