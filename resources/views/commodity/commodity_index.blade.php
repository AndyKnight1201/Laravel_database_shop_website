{{-- @extends('Bootstrap_html_cut.temple') --}}
@extends('layouts.app')
@section('chat')
    <title>商品管理</title>
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
                <h2 class="">商品管理</h2>
                <a href="/commodity/create">
                    <button class="btn btn-success" type="">新增商品</button>
                </a>
            </div>

            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>商品圖</th>
                        <th>品名</th>
                        <th>價格</th>
                        <th>數量</th>
                        <th>介紹</th>
                        <th>功能</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($commodity as $CommodityEach)
                        <tr>
                            <td>
                                <img src="{{ $CommodityEach->img_path }}" width="200" alt=""
                                    style="opacity:{{ $CommodityEach->img_opacity }}">
                            </td>
                            <td>{{ $CommodityEach->commodity_name }}</td>
                            <td>{{ $CommodityEach->commodity_price }}</td>
                            <td>{{ $CommodityEach->quantity }}</td>
                            <td style="width: 35%">{{ $CommodityEach->introduce }}</td>
                            <td style="width: 10%">
                                <a href="/commodity/edit/{{ $CommodityEach->id }}" style="text-decoration: none">
                                    <button class="btn btn-success">編輯</button>
                                </a>
                                <button class="btn btn-danger"
                                    onclick="document.querySelector('#deleteForm{{ $CommodityEach->id }}').submit()">刪除</button>

                                <form action="/commodity/delete/{{ $CommodityEach->id }}" method="post" hidden
                                    id="deleteForm{{ $CommodityEach->id }}">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    {{-- <tr>
                        <td>
                            <img src="{{ asset('image/ICON.png') }}" width="200" alt="">
                        </td>
                        <td>青草茶</td>
                        <td>26$</td>
                        <td>20</td>
                        <td style="width: 40%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima minus quaerat corrupti facilis quibusdam ratione unde perferendis numquam voluptates cupiditate quidem nulla eius cum tenetur nam aperiam soluta, impedit dolorem!</td>
                        <td style="width: 10%">
                            <button class="btn btn-success my-1" type="">編輯</button>
                            <button class="btn btn-danger my-1" type="">刪除</button>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('JSJQlink')
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
