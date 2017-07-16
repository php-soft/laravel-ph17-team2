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
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Name Shop</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center">Address</th>
                                    <th class="text-center">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $stt =0 ?>
                                @foreach($user->shops as $shop)
                                <?php $stt= $stt+1?>
                                <tr class="odd gradeX">
                                    <td class="text-center">{{ $stt }}</td>
                                    <td class="text-center">{{$shop->name}}</td>
                                    <td class="text-center">{{$shop->description}}</td>
                                    <td class="text-center">{{$shop->address}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('shop/'.$shop->id.'/show') }}" class="btn btn-info btn-sm pull-right"><span class="glyphicon glyphicon-book"></span> Quản lý shop </a>
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