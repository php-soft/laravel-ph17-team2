@extends('layouts.app')
@section('content')
<style type="text/css" media="screen">
    span{
        color: #E53A40;
    }
</style>
<div class="container">
  <div class="row content">

    <div class="col-sm-4 sidenav">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/test.png" alt="" width="300px" height="300px">
        <h6>Sản phẩm đang chọn</h6>
        <p><span class="glyphicon glyphicon-ok"></span> Tên sản phẩm: <span>{{$product->name}}</span></p>
        <p><span class="glyphicon glyphicon-ok"></span> Giá đề nghị: <span>{{$product->price}}</span></p>
        <p><span class="glyphicon glyphicon-ok"></span> Mô tả: <span>{{$product->description}}</span></p>
        <p><span class="glyphicon glyphicon-ok"></span> Category: <span>{{$product->category->name}}</span></p>
        
    </div>

    <div class="col-sm-8">
      <form action="" method="POST">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <input name="_method" type="hidden" value="PUT">
                <input type="hidden" name="user_id" value="">
                <div class="well"><h4>{{$product->name}}</h4></div>
                <div class="form-group">
                    <label for="price">Giá bán của bạn : <span></span></label>
                    <input type="text" class="form-control" id="price" placeholder="Giá đề nghị: {{$product->price}}" name="price" value="">
                </div>
                <div class="form-group">
                    <label for="quantity">Số lượng sản phẩm : <span></span></label>
                    <input type="text" class="form-control" id="quantity" placeholder="Nhập số lượng" name="quantity" value="">
                </div>
                <div class="form-group">
                    <label for="discount">Phần trăm giảm giá: <span></span></label>
                    <input type="text" class="form-control" id="discount" placeholder="" name="discount" value="0">
                </div>
                <button type="submit" class="btn btn-default btn-success pull-left">Đăng sản phẩm</button>
            </form>
    </div>

</div>
</div>
@endsection