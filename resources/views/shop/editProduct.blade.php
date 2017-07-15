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
        <h6 style="text-align: center">Thông tin chi tiết</h6>
        <img src="source/image/product/{!! $shopProduct->product->image !!}" alt="image_product" width="100%" height="100%" style="border-radius: 20px; box-shadow: -5px 5px 35px #EC7357"><br><br>
        <p><span class="glyphicon glyphicon-ok"></span> Tên sản phẩm: <span>{{$shopProduct->product->name}}</span></p>
        <p><span class="glyphicon glyphicon-ok"></span> Giá đề nghị: <span>{{$shopProduct->product->price}}</span></p>
        <p><span class="glyphicon glyphicon-ok"></span> Mô tả: <span>{{$shopProduct->product->description}}</span></p>
        <p><span class="glyphicon glyphicon-ok"></span> Category: <span>{{$shopProduct->product->category->name}}</span></p>
        
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
        <form action="{{ url('shop/'.$shopProduct->id.'/show') }}" method="POST">
            <input name="_token" type="hidden" value="{{ csrf_token() }}">
            <input name="_method" type="hidden" value="PUT">
            <input type="hidden" name="buys" value="{{$shopProduct->buys}}">
            <input type="hidden" name="user_id" value="{{$shopProduct->user_id}}">
            <input type="hidden" name="product_id" value="{{$shopProduct->product_id}}">
            <input type="hidden" name="shop_id" value="{{$shopProduct->shop_id}}">

            <h6 style="text-align: center">Cập nhật sản phẩm</h6>
            <div class="well"><h4><span>{{$shopProduct->product->name}}</span></h4></div>
            <div class="form-group">
                <label for="price">Giá bán của bạn : <span>{{$shopProduct->price}}</span></label>
                <input type="text" class="form-control" id="price" placeholder="Thay đổi giá: " name="price" value="">
            </div>
            <div class="form-group">
                <label for="quantity">Số lượng sản phẩm : <span>{{$shopProduct->quantity}}</span></label>
                <input type="text" class="form-control" id="quantity" placeholder="Thay đổi số lượng" name="quantity" value="">
            </div>
            <div class="form-group">
                <label for="discount">Phần trăm giảm giá: <span>{{$shopProduct->discount}}%</span></label>
                <input type="text" class="form-control" id="discount" placeholder="Thay đổi phần trăm giảm giá" name="discount" value="">
            </div>
            <button type="submit" class="btn btn-default btn-success pull-left">Cập nhật sản phẩm</button>

        </form>
    </div>

</div>
</div>
@endsection