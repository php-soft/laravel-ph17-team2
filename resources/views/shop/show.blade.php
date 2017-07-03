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
        <h6>Quản lý sản phẩm trong shop</h6>
            <a href="{{ url('user/shop/'.Auth::user()->id.'/') }}" class="btn btn-warning btn-sm pull-left"><span class="glyphicon glyphicon-plus"></span> Đăng bán sản phẩm</a>
            <a href="" class="btn btn-warning btn-sm pull-left"><span class="glyphicon glyphicon-plus"></span> Danh sách voucher</a><br>
            <hr>
            <div class="row">
                <!-- Advanced Tables -->                    
                <div class="panel-body">
                <h6>Danh sách sản phẩm đã đăng</h6>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="example">
                            <thead>
                                <tr class="orders">
                                    <th class="text-center">Tên sản phẩm</th>
                                    <th class="text-center">Giá sản phẩm</th>
                                    <th class="text-center">Số lượng</th>
                                    <th class="text-center">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td class="text-center">Iphone</td>
                                    <td class="text-center">300000</td>
                                    <td class="text-center">10</td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-info btn-sm pull-right"><span class="glyphicon glyphicon-book"></span> Quản lý sản phẩm </a>
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