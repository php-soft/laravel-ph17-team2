@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
            <a href="{{ url('admin/shop/index') }}" title=""><button type="button" class="btn btn-info">Danh sách Shop</button></a>
            <a href="{{ url('admin/shop/user') }}" title=""><button type="button" class="btn btn-info">Shop của User</button></a>
            </div>
            <div>
            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="example">
                        <h4><a href="" title="" class="pull-right"><span class="glyphicon glyphicon-trash pull-right"></span>Thùng Rác</a></h4>
                        <thead>
                            <tr class="orders">
                                <th class="text-center">ID</th>
                                <th class="text-center">Tên sản phẩm</th>
                                <th class="text-center">Buys</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Discount</th>
                                <th class="text-center" >Create_at</th>
                                <th class="text-center" >Update_ad</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <h4>Danh sách sản phẩm của shop: <a href="">{{ $shop->name }}</a> Địa chỉ: <a href="">{{$shop->address}}</a></h4>
                            <?php $stt =0 ?>
							@foreach($shop->shopProducts as $shopProduct)
                                <?php $stt= $stt+1?>
                                <tr class="odd gradeX">
                                    <td class="text-center">{{ $stt }}</td>
                                    <td class="text-center">{{$shopProduct->product->name}}</td>
                                    <td class="text-center">{{$shopProduct->buys}}</td>
                                    <td class="center">{{$shopProduct->price}}</td>
                                    <td class="center">{{$shopProduct->discount}}</td>
                                    <td class="text-center" >{{$shopProduct->created_at}}</td>
                                    <td class="text-center" >{{$shopProduct->updated_at}}</td>
                                    <td class="text-center" ><a href="" title=""><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    <!--End Advanced Tables -->
    </div>
</div>
@endsection

