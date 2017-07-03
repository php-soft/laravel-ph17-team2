@extends('layouts.admin')

@section('content')
<div class="container font">
    <div class="row" style="margin: 5px 4%">
        <div class="block-img-attr">
            <div class="block-pro-img">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/test.png" alt="{{ $product->image }}" width="350px" height="350px">
                @if (!empty($product->productImages))
                <div class="small-img">

                    <ul>
                        @foreach($product->productImages as $productImage)
                        <li><img src="{!! $productImage->thumb !!}" alt="{!! $productImage->thumb !!}"></li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <div class="block-pro-attr">
                <div class="box-name">
                    <h1><strong>{!! $product->name !!}</strong></h1>
                </div>
                <div class="box-price">
                    <div class="inline">
                        {{ Form::label('price', 'Giá đề nghị') }}
                        <strong class="price" style="display: inline;">{{ $product->price }} đ</strong>
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <div class="form-attr"  style="padding-bottom: 10px;">
                            <div class="form-lb">
                                <div class="form-lb-lb"><strong>Danh mục</strong></div>
                            </div>
                            <div class="attr">{{ $product->category->name }}</div>
                            @foreach($category->categoryAttributeValues as $attribute)
                            <div class="form-controls form-inline" style="height: 45px;">
                                <div class="form-lb">
                                    <div class="form-lb-lb">{!! $attribute->name !!}</div>
                                </div>
                                <div class="attr">
                                    @foreach($attribute->productAttributeValues as $key)
                                    <span>{{ $key->value }}</span>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#detail" aria-controls="home" role="tab" data-toggle="tab">CHI TIẾT SẢN PHẨM</a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active box-item" id="detail">
                @if (!empty($product->description))
                {{ $product->description }}
                @else
                <p>Chưa có chi tiết sản phẩm</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
