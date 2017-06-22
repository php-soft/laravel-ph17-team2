@extends('layouts.app')

@section('content')
<div class="container font">
    <div class="row" style="margin: 5px 4%">
        <div class="well">
            <div class="pull-left">
                <img src="{!! $shopProduct->shop->logo !!}" alt="{!! $shopProduct->shop->logo !!}">
            </div>
            <label for="shop" class="lb">Sản phẩm bán từ shop: </label>
            {!! $shopProduct->shop->name !!}
        </div>
        <div class="block-img-attr">
            <div class="block-pro-img">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/test.png" alt="{{ $shopProduct->product->image }}" width="350px" height="350px">
                <div class="small-img">
                    <ul>
                        @foreach($shopProduct->product->productImages as $productImage)
                            <li><img src="{!! $productImage->thumb !!}" alt="{!! $productImage->thumb !!}"></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="block-pro-attr">
                <div class="box-name">
                    <h1><strong>{!! $shopProduct->product->name !!}</strong></h1>
                </div>
                <div class="box-rating">
                    <span></span>
                    <span class="glyphicon glyphicon-tag box-rating-span" title="Đã có {!! $shopProduct->product->buys !!} lượt mua"></span>{!! $shopProduct->product->buys !!}
                    </span>
                    <span class="glyphicon glyphicon-eye-open" title="Đã có {!! $shopProduct->product->view !!} lượt views"></span>{!! $shopProduct->product->view !!}
                </span>
                </div>
                <div class="box-price">
                    <p>{{ $shopProduct->product->price }} đ</p>
                </div>
                <div>
                <div class="form-group">
                    {{Form::open()}}
                        {{ Form::hidden('id', $shopProduct->product->id) }}
                        {{ Form::hidden('name', $shopProduct->product->name) }}
                        {{ Form::hidden('price', $shopProduct->product->price) }}
                        {{ Form::hidden('image', $shopProduct->product->image) }}
                        <div class="form-attr">
                            <div class="form-controls" style="height: 45px;">
                                <div class="form-lb">
                                    {!! Form::label('size', 'Size Màu', ['class' => 'form-lb-lb']) !!}
                                </div>
                                <div class="attr">
                                    @foreach($attributes as $attribute)
                                        {!! $attribute->value !!}
                                    @endforeach
                                </div>
                            </div>
                            <div>
                                <div class="form-lb">
                                    {!! Form::label('qty', 'Số lượng', ['class' => 'form-lb-lb']) !!}
                                </div>
                                <div class="form-controls" style="height: 45px;">
                                    {{ Form::number('qty', 1, ['class'=>'form-control form-quantity', 'min' => 1, 'max' => 99, 'size' => 1]) }}
                                </div>
                            </div>
                        </div>
                        <div class="order">
                            <button class="btn btn-success w3-btn btn-add">Thêm vào giỏ hàng <span class="glyphicon glyphicon-shopping-cart"></span></button>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
         </div>
     </div>
    <div>Sản phẩm liên quan</div>
    <br>
    <br>
    <div class="info">
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
