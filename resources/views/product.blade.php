@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <label for="shop">Sản phẩm bán từ shop: </label>
    {!! $shopProduct->shop->name !!}
    <br>
    <span title="Đã có {!! $shopProduct->product->buys !!} lượt mua">
        <span class="glyphicon glyphicon-tag" style="font-size:24px"></span>{!! $shopProduct->product->buys !!}
    </span>
    <span title="Đã có {!! $shopProduct->product->view !!} lượt views">
        <span class="glyphicon glyphicon-eye-open" style="font-size:24px"></span>{!! $shopProduct->product->view !!}
    </span>
    <br>
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/test.png" alt="{{ $shopProduct->product->image }}" id="image">
    <br>
    <label for="name">Tên</label>
    <p id="name">{{ $shopProduct->product->name }}</p>
    <br>
    <label for="price">Giá</label>
    <p id="price">{{ $shopProduct->product->price }} VNĐ</p>
    <div>
    <p>
        <label for="quantity">Số lượng:</label> <input type="number" min="1" max="9999" autofocus="autofocus" required value="1">&nbsp;&nbsp;(Còn lại 
        {!! $shopProduct->quantity !!}
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
@endsection
