@extends('layouts.app')
@section('content')
<style type="text/css" media="screen">
    span{
        color: red;
    }
    span a{
        color: red;
    }
    p{
        margin-bottom: 7px;
    }
</style>
<div class="container">
    <div class="row content">
        @include('layouts.sidebar')
        <div class="col-sm-9">
            <h5>Thêm một shop</h5>
            <hr>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ url('user/shop/'.$user->id.'/index') }}" method="POST">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <input name="_method" type="hidden" value="PUT">
                <input type="hidden" name="user_id" value="{{$user->id}}">
                <div class="form-group">
                    <label for="name">Tên Shop của bạn: <span></span></label>
                    <input type="text" class="form-control" id="name" placeholder="Nhập tên shop của bạn" name="name" value="">
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ Shop : <span></span></label>
                    <input type="text" class="form-control" id="address" placeholder="Nhập địa chỉ shop của bạn" name="address" value="">
                </div>
                <div class="form-group">
                    <label for="description">Mô tả Shop :</label>
                    <textarea class="form-control" rows="5" id="description" name="description" placeholder="Nhập mô tả shop của bạn vào đây: ngành nghề, sản phẩm Shop của bạn"></textarea>
                </div>
                <div class="form-group">
                    <label for="logo">Logo Shop: <span></span></label>
                    <input type="text" class="form-control" id="logo" placeholder="Cập nhật logo" name="logo" value="">
                </div>
                <button type="submit" class="btn btn-default btn-success pull-right">Cập Nhật</button>
            </form>
            
        </div>
    </div>
</div>
@endsection