@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <label for="shop">Sản phẩm bán từ shop: </label>
    @foreach($shops as $shop)
        {!! $shop->name !!}
    @endforeach
    <br>
    <span title="Đã có {!! $product->buys !!} lượt mua">
        <span class="glyphicon glyphicon-tag" style="font-size:24px"></span>{!! $product->buys !!}
    </span>
    <span title="Đã có {!! $product->view !!} lượt views">
        <span class="glyphicon glyphicon-eye-open" style="font-size:24px"></span>{!! $product->view !!}
    </span>
    <br>
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/test.png" alt="{{ $product->image }}" id="image">
    <br>
    <label for="name">Tên</label>
    <p id="name">{{ $product->name }}</p>
    <br>
    <label for="price">Giá</label>
    <p id="price">{{ $product->price }} VNĐ</p>
    <div>
    <label for="">Size  màu</label>
    @foreach($attributes as $attribute)
        {!! $attribute->value !!}
        <br>
    @endforeach
    <p>
        <label for="quantity">Số lượng:</label> <input type="number" min="1" max="9999" autofocus="autofocus" required value="1">&nbsp;&nbsp;(Còn lại 
        @foreach($shop_products as $shop_product)
            {!! $shop_product->quantity !!}
        @endforeach
         sản phẩm)
     </p>
</div>
    <div>Sản phẩm liên quan</div>
    <br>
    <br>
    <div style="border-top: 2px solid black">
        <br>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#">Chi tiết sản phẩm</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Đánh giá phản hồi</a>
            </li>
            <li><a href="#">Hỏi đáp</a></li>
        </ul>
    </div>
</div>
@stop
