@extends('layouts.app')

@section('content')
<div class="container font">
    <div class="row" style="margin: 5px 4%">
        <div class="well">
            <div class="pull-left">
                <img src="upload/image_360.png" alt="{!! $shopProduct->shop->name !!}" width="80" height="40">
            </div>
            <div class="form-inline">
                <label for="shop" class="lb">Sản phẩm bán từ shop: </label>
                <a href="">{!! $shopProduct->shop->name !!}</a>
            </div>
        </div>
        <div class="block-img-attr">
            <div class="block-pro-img">
                <img src="source/image/product/{!! $shopProduct->product->image !!}" alt="{{ $shopProduct->product->image }}" width="350px" height="350px">
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
                    <p>{{ number_format($shopProduct->price) }} đ</p>
                </div>
                <div>
                <div class="form-group">
                    {{Form::open(['method'=>'put', 'class'=>'form-order-detail'])}}
                        {{ Form::hidden('id', $shopProduct->product->id) }}
                        {{ Form::hidden('name', $shopProduct->product->name) }}
                        {{ Form::hidden('price', $shopProduct->product->price) }}
                        {{ Form::hidden('image', $shopProduct->product->image) }}
                        <div class="form-attr">
                            @foreach($category->categoryAttributeValues as $attribute)
                                <div class="form-controls form-inline" style="height: 45px;">
                                    <fieldset id="{{ $attribute->name }}">
                                        <div class="form-lb">
                                            <div class="form-lb-lb">{!! $attribute->name !!}</div>
                                        </div>
                                        <div class="attr">
                                            @foreach($attribute->productAttributeValues as $key)
                                                @if($key->product_id == $shopProduct->product_id)
                                                    {{ Form::radio($attribute->name, $key->value) }} <span>{{ $key->value }}</span>
                                                @endif
                                            @endforeach
                                        </div>
                                    </fieldset>
                                </div>
                            @endforeach
                            <div class="form-inline">
                                <div class="form-lb">
                                    {!! Form::label('qty', 'Số lượng', ['class' => 'form-lb-lb']) !!}
                                </div>
                                <div class="form-controls" style="height: 45px;">
                                    {{ Form::number('qty', 1, ['class'=>'form-control form-quantity qty', 'min' => 1, 'max' => 99, 'size' => 1]) }} (Còn lại {!! $shopProduct->quantity !!} sản phẩm)
                                </div>
                            </div>
                        </div>
                        <div class="order">
                            <button class="btn w3-btn btn-order btn-add add" id="{!! $shopProduct->product->id  !!}">Thêm vào giỏ hàng <span class="glyphicon glyphicon-shopping-cart"></span></button>
                            <button class="btn w3-btn btn-order buy">Mua ngay <span class="glyphicon glyphicon-ok"></span></button>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
         </div>
    </div>
    @if(count($list) > 1)
    <div role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#relative" aria-controls="home" role="tab" data-toggle="tab">SẢN PHẨM LIÊN QUAN</a>
            </li>
        </ul>
    
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active row box-item" id="relative">
                @foreach ($list as $key)
                <div class="col-md-2 item-preview">
                    <a href="{{ url('home/san-pham/' . $key->product->id)}}" class="list-image">
                        <img src="source/image/product/{!! $key->product->image !!}" width="149" height="149" style="border: 1px solid #eee;">
                        <span class="price" style="color: red;">{!! number_format($key->product->price) !!} đ</span>
                        <p class="prod-name">{!! $key->product->name !!}</p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
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
            <div role="tabpanel" class="tab-pane active box-item" id="detail">{{ $shopProduct->product->description }}</div>
            <div role="tabpanel" class="tab-pane box-item" id="feedback">
                {{-- <fieldset>
                    <form action="">
                        <table>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="textarea">Bạn có câu hỏi với sản phẩm này? Đặt câu hỏi với shop.</label>
                                        <input type="textarea" class="form-control" id="textarea" placeholder="Đặt câu hỏi..." name="content" style="height: 30px;">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><button type="submit" class="btn btn-default">Gửi</button></td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
                <fieldset>
                    <ul>
                        <li>
                            <img src="" alt="avatar" class="pull-left">
                            <div>
                                <p><span>Name</span><span>Ngày cmt</span></p>
                                <p>Content <span class="pull-right">Trả lời</span></p>
                            </div>
                        </li>
                    </ul>
                </fieldset> --}}
                ...
            </div>
            <div role="tabpanel" class="tab-pane box-item" id="answer">...</div>
        </div>
    </div>
    <br>
</div>
@endsection
