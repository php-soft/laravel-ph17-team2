@extends('layouts.app')

@section('content')
<div class="container font">
    <div class="row" style="margin: 5px 4%">
        <div class="well">
            <div class="pull-left">
                <img src="{!! $shopProduct->shop->logo !!}" alt="{!! $shopProduct->shop->logo !!}" width="80" height="40">
            </div>
            <label for="shop" class="lb">Sản phẩm bán từ shop: </label>
            <a href="">{!! $shopProduct->shop->name !!}</a>
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
                    <span class="glyphicon glyphicon-tag box-rating-span" data-toggle="tooltip" data-placement="top" title="Đã có {!! $shopProduct->product->buys !!} lượt mua"></span>{!! $shopProduct->product->buys !!}
                    </span>
                    <span class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Đã có {!! $shopProduct->product->view !!} lượt views"></span>{!! $shopProduct->product->view !!}
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
                            @foreach($category->categoryAttributeValues as $attribute)
                                <div class="form-controls" style="height: 45px;">
                                    <div class="form-lb">
                                        {!! $attribute->name !!}
                                    </div>
                                    <div class="attr">
                                        @foreach($attribute->productAttributeValues as $key)
                                            {!! $key->value !!}
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
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
                            <button class="btn w3-btn btn-order add">Thêm vào giỏ hàng <span class="glyphicon glyphicon-shopping-cart"></span></button>
                            <button class="btn w3-btn btn-order buy">Mua ngay <span class="glyphicon glyphicon-ok"></span></button>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
         </div>
    </div>
    <div role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#home" aria-controls="home" role="tab" data-toggle="tab">SẢN PHẨM LIÊN QUAN</a>
            </li>
        </ul>
    
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">...</div>
        </div>
    </div>
    <br>
    <div role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#detail" aria-controls="home" role="tab" data-toggle="tab">CHI TIẾT SẢN PHẨM</a>
            </li>
            <li role="presentation">
                <a href="#feedback" aria-controls="tab" role="tab" data-toggle="tab">ĐÁNH GIÁ/PHẢN HỒI</a>
            </li>
            <li role="presentation">
                <a href="#answer" aria-controls="tab" role="tab" data-toggle="tab">HỎI ĐÁP</a>
            </li>
        </ul>
    
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="detail">...</div>
            <div role="tabpanel" class="tab-pane" id="feedback">...</div>
            <div role="tabpanel" class="tab-pane" id="answer">...</div>
        </div>
    </div>
</div>
@endsection
