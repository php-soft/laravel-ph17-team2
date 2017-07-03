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
            <h6>Quản lý shop</h6>
            <a href="{{ url('user/shop/'.Auth::user()->id.'/create') }}" class="btn btn-warning btn-sm pull-left"><span class="glyphicon glyphicon-plus"></span> Thêm một shop mới</a>
            <br>
            <hr>
            <div class="row">
                <!-- Advanced Tables -->                    
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="example">
                            <thead>
                                <tr class="orders">
                                    <th class="text-center">STT</th>
                                    <th class="text-center">discount</th>
                                    <th class="text-center">code</th>
                                    <th class="text-center">quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $stt=0; ?>
                                @foreach($voucher as $vouchers)
                                <?php $stt=$stt+1?>
                                <tr class="odd gradeX">
                                    <td class="text-center">{{$stt}}</td>
                                    <td class="text-center">{{$vouchers->discount}}</td>
                                    <td class="text-center">{{$vouchers->code}}</td>
                                    <td class="text-center">{{$vouchers->quantity}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('user/shop/'.$user->id.'/show') }}" class="btn btn-info btn-sm pull-right"><span class="glyphicon glyphicon-book"></span> Quản lý shop </a>
                                        <a href="{{ url('user/shop/'.$shop->id.'/edit') }}" class="btn btn-success btn-sm pull-right"><span class="glyphicon glyphicon-pencil"></span> Chỉnh sửa </a>
                                        <a href="{{ url('user/shop/'.$shop->id.'/delete') }}" class="btn btn-sm btn-danger pull-right"><span class="glyphicon glyphicon-trash"></span> Xóa </a>
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