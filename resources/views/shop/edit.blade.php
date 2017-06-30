@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row content">
        @include('layouts.sidebar')
        <div class="col-sm-9">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ url('user/shop/'.$shop->id.'/edit') }}" method="POST">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <input name="_method" type="hidden" value="PUT">
                <h6>Chỉnh sửa shop</h6>
                <hr> 
                <div class="form-group">
                    <label for="name">Tên : <span>{{$shop->name}}</span></label>
                    <input type="text" class="form-control" id="name" placeholder="Chỉnh sửa tên" name="name" value="">
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ : <span>{{$shop->address}}</span></label>
                    <input type="text" class="form-control" id="address" placeholder="Chỉnh sửa địa chỉ" name="address" value="">
                </div>
                <div class="form-group">
                    <label for="description">Mô tả : <span>{{$shop->description}}</span></label>
                    <textarea class="form-control" rows="5" id="description" name="description" placeholder="Nhập mô tả shop của bạn vào đây: ngành nghề, sản phẩm Shop của bạn"></textarea>
                </div>
                <div class="form-group">
                    <label for="logo">Logo : <span>{{$shop->logo}}</span></label>
                    <input type="text" class="form-control" id="logo" placeholder="Chỉnh sửa logo" name="logo" value="">
                </div>
                <button type="submit" class="btn btn-default btn-success pull-right">Cập Nhật</button>
            </form>
            
        </div>
    </div>
</div>
@endsection