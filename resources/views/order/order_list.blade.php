@extends('Bootstrap_html_cut.temple')
{{-- @extends('layouts.app') --}}
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
                <h2 class="">訂單管理</h2>
            </div>

            <table id="order_list" class="display">
                <thead>
                    <tr>
                        <th>姓名</th>
                        <th>訂單編號</th>
                        <th>信箱</th>
                        <th>總金額</th>
                        <th>訂單狀態</th>
                        <th>功能</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($order as $orderEach)
                        <tr>
                            <td>{{ $orderEach->user_name}}</td>
                            <td>{{ $orderEach->id}}</td>
                            <td>{{ $orderEach->email }}</td>
                            <td>{{ $orderEach->price_total }}</td>
                            <td style="width: 35%">
                                @if ( $orderEach->status == 1)
                                訂單成立未付款
                                @elseif ($orderEach->status == 2)
                                已付款
                                @elseif ($orderEach->status == 3)
                                已出貨
                                @elseif ($orderEach->status == 4)
                                已結單
                                @else
                                已取消
                                @endif
                            </td>

                            <td style="width: 10%">
                                <a href="/show_order/{{$orderEach->id}}" style="text-decoration: none">
                                    <button class="btn btn-success">查看訂單</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
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
            $('#order_list').DataTable();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
