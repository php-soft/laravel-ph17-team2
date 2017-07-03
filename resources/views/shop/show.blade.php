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
</style>
<div class="container">
    <div class="row content">
        @include('layouts.sidebar')
        <div class="col-sm-9">
            <h6>Quản lý chi tiết shop</h6>
            <a href="" class="btn btn-warning btn-sm pull-left"><span class="glyphicon glyphicon-plus"></span> Đăng sản phẩm cho shop</a>
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
                                    <th class="text-center">Product_ID</th>
                                    <th class="text-center">Buys</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Discount</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-success btn-sm pull-right"><span class="glyphicon glyphicon-pencil"></span> Chỉnh sửa </a>
                                        <a href="" class="btn btn-sm btn-danger pull-right"><span class="glyphicon glyphicon-trash"></span> Xóa </a>
                                    </td>                                 
                                </tr>
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