@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        @foreach($shops as $shop)
            <div class="col-md-2" style="border: 2px solid cyan; padding: 5px">
                <p>Shop: {!! $shop->name !!}</p>
                <img src="{!! $shop->logo !!}" alt="Logo {!! $shop->name !!}">
                <p>Yêu thích</p>
                <p>Gửi tin nhắn</p>
                <div>
                    Danh mục sản phẩm
                </div>
            </div>
        @endforeach
    </div>
@endsection