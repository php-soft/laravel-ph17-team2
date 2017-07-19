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
    h5{
        display: block;
    }
    .btn-primary{
        left:0;
    }
</style>
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
            <form action="{{ url('shop/'.$shop->id.'/Voucher/create') }}" method="post">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <input name="_method" type="hidden" value="post">
                <input type="hidden" name="user_id" value="{{$shop->id}}">
                <div class="form-group">
                    <label for="name">Discount  : <span></span></label>
                    <input type="text" class="form-control" id="name" placeholder="Nhập phần trăm giảm giá code" name="discount" value="">
                </div>
                <div class="form-group">
                    <label for="address">Mã code   : <span></span></label>
                    <input type="text" class="form-control" id="address" placeholder="Nhập mã code" name="code" value="">
                </div>
                <div class="form-group">
                    <label for="description">Quantity  :</label>
                    <input type="text" class="form-control" id="address" placeholder="Nhập số lượng code" name="quantity" value="">
                </div>
                <div class="form-group">
                    <label for="address">Start_date</label>:
                    <input type="date" class="form-control" id="address" placeholder="Nhập mã code" name="start_date" value="">
                </div>
                <div class="form-group">
                    <label for="description">End_date   :</label>
                    <input type="date" class="form-control" id="address" placeholder="Nhập số lượng code" name="end_date" value="">
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </form>
            
        </div>
    </div>
</div>
@endsection