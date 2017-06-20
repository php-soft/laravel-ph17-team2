@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    @foreach($shops as $shop)
        {!! $shop->name !!}
    @endforeach
    <br>
    <img src="{{ $product->image }}" alt="{{ $product->image }}" id="image">
    <br>
    <label for="name">Tên</label>
    <p id="name">{{ $product->name }}</p>
    <br>
    <label for="price">Giá</label>
    <p id="price">{{ $product->price }} VNĐ</p>
    <label for="">Thuộc tính</label>
    <br>
    @foreach($attributes as $attribute)
        {!! $attribute->value !!}
        <br>
    @endforeach
</div>
@stop
