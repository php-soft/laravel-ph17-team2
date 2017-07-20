@extends('layouts.admin')

@section('content')
<div class="container font">
    <div class="row" style="margin: 5px 4%">
        <div class="block-img-attr">
            <div class="block-pro-img">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/test.png" alt="{{ $product->image }}" width="350px" height="350px">
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
                            <div class="form-group">
                                {!! Form::label('category', 'Danh Mục', ['style' => 'font-weight: bold; font-size: 18px;']) !!}
                                <div class="attr">{{ $product->category->name }}</div>
                            </div>
                            @foreach($product->category->categoryAttributeValues as $attribute)
                            {!! Form::Open(['route' => 'adminProductAttributeStore']) !!}
                            <div class="form-controls form-inline">
                                <div class="form-group">
                                    {!! Form::label('name', $attribute->name, ['class' => 'form-lb-lb', 'style' => 'font-weight: bold; font-size: 18px;']) !!}
                                    <div class="attr">
                                        @foreach($attribute->productAttributeValues as $key)
                                        @if($key->product_id == $product->id)
                                        <span class="label label-info" style="font-size: 15px;">{{ $key->value }} <a href="{{ route('adminProductAttributeDetele', ['id' => $key->id]) }}">X</a></span>
                                        @endif
                                        @endforeach
                                    </div>
                                    <div>
                                        {{ Form::text('value', null, ['class' => 'form-control']) }}
                                        {{ Form::hidden('category_attribute_value_id', $attribute->id) }}
                                        {{ Form::hidden('product_id', $product->id) }}
                                        {{ Form::submit('Add', ['class' => 'btn btn-primary']) }}
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
