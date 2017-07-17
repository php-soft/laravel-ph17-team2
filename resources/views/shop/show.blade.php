@extends('layouts.app')
@section('content')
<style type="text/css" media="screen">
    span{
        color: red;
    }
    span a{
        color: red;
    }
    p{
        margin-bottom: 7px;
    }
    .pull-left{
        margin-right: 20px;
    }
</style>
<div class="container">
    <div class="row content">
        @include('layouts.sidebar')
        <div class="col-sm-9">

            <h6>Quản lý chi tiết shop</h6>
            <a href="{{ url('shop/'.$shop->id.'/create') }}" class="btn btn-warning btn-sm pull-left"><span class="glyphicon glyphicon-plus"></span> Đăng sản phẩm cho shop: <span>{{$shop->name}}</span></a>
            <br>

            <hr>
            <div class="row">
                <!-- Advanced Tables -->
                <div class="panel-body">
                <h6>Danh sách sản phẩm của shop: <span>{{$shop->name}}</span> Địa chỉ: <span>{{$shop->address}}</span></h6>
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="example">
                        <thead>
                            <tr class="orders">
                                <th class="text-center">ID</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">Tên sản phẩm</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Discount</th>
                                <th class="text-center" >Create_at</th>
                                <th class="text-center" >Update_ad</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt =0 ?>
                            @foreach($shop->shopProducts as $shopProduct)
                                <?php $stt= $stt+1?>
                                <tr class="odd gradeX">
                                    <td class="text-center">{{ $stt }}</td>
                                    <td class="text-center">
                                        <img src="source/image/product/{!! $shopProduct->product->image !!}" alt="image_product" width="40px" height="40px" style="border-radius: 5px">
                                    </td>
                                    <td class="text-center">{{$shopProduct->product->name}}</td>
                                    <td class="center">{{$shopProduct->price}} VNĐ</td>
                                    <td class="center">{{$shopProduct->discount}} %</td>
                                    <td class="text-center" >{{$shopProduct->created_at}}</td>
                                    <td class="text-center" >{{$shopProduct->updated_at}}</td>
                                    <td class="text-center" >
                                        <a href="{{ url('shop/'.$shopProduct->id.'/edit') }}">
                                            <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </div>
</div>
@endsection