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
            <a href="" class="btn btn-warning btn-sm pull-left" data-toggle="modal" data-target="#createShop"><span class="glyphicon glyphicon-plus"></span> Thêm một shop mới</a>
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
                                <tr class="odd gradeX" id="shop_list">
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


        <div class="modal fade" tabindex="-1" role="dialog" id="createShop">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add New Shop</h4>
            </div>
            <div class="modal-body">
            <form action="" method="post" id="shops">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <input name="_method" type="hidden" value="PUT">
                    <input type="hidden" name="user_id" class="user_id" value="{{$user->id}}">
                    <div class="form-group">
                        <label for="name">Tên Shop của bạn: <span></span></label>
                        <input type="text" class="form-control" id="name" placeholder="Nhập tên shop của bạn" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ Shop : <span></span></label>
                        <input type="text" class="form-control" id="address" placeholder="Nhập địa chỉ shop của bạn" name="address" value="">
                    </div>
                    <div class="form-group">
                        <label for="description">Mô tả Shop :</label>
                        <textarea class="form-control" rows="5" id="description" name="description" placeholder="Nhập mô tả shop của bạn vào đây: ngành nghề, sản phẩm Shop của bạn"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="logo">Logo Shop: <span></span></label>
                        <input type="text" class="form-control" id="logo" placeholder="Cập nhật logo" name="logo" value="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="display: none">Close</button>
                <button type="button" class="btn btn-primary" id="addButton" value="addShop" data-dismiss="modal">Add Shop</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


</div>
</div>
@endsection