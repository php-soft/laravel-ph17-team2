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
        <h6>Thông tin chi tiết</h6>
        <p><span class="glyphicon glyphicon-ok"></span> Tên sản phẩm: <span>{{$product->name}}</span></p>
        <p><span class="glyphicon glyphicon-ok"></span> Giá đề nghị: <span>{{$product->price}}</span></p>
        <p><span class="glyphicon glyphicon-ok"></span> Mô tả: <span>{{$product->description}}</span></p>
        <p><span class="glyphicon glyphicon-ok"></span> Category: <span>{{$product->category->name}}</span></p>
        <p><span class="glyphicon glyphicon-ok"></span> Tên shop đang đăng sản phẩm: <span>{{$shop->name}}</span></p>
        <p><span class="glyphicon glyphicon-ok"></span> ID User Quản lý shop: <span>{{$shop->user_id}}</span></p>
        
    </div>

    <div class="col-sm-8">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ url('user/shop/'.$shop->id.'/show') }}" method="POST">
            <input name="_token" type="hidden" value="{{ csrf_token() }}">
            <input name="_method" type="hidden" value="PUT">

            <input type="hidden" name="buys" value="1">
            <input type="hidden" name="user_id" value="{{$shop->user_id}}">
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <input type="hidden" name="shop_id" value="{{$shop->id}}">

            User_id: {{$shop->user_id}} Product_id: {{$product->id}} Shop_id: {{$shop->id}}
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
                <input type="text" class="form-control" id="discount" placeholder="" name="discount" value="">
            </div>
            <button type="submit" class="btn btn-default btn-success pull-left">Đăng sản phẩm</button>

        </form>
    </div>

</div>
</div>
@endsection