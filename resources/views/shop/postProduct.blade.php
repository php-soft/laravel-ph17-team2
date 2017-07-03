@extends('layouts.app')
@section('content')
<style type="text/css" media="screen">
    span{
        color: #E53A40;
    }
</style>
<div class="container">
  <div class="row content">

    <div class="col-sm-4 sidenav">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/test.png" alt="" width="300px" height="300px">
        <p>Tên sản phẩm: <span>{{$product->name}}</span></p>
        <p>Giá đề nghị: <span>{{$product->price}}</span></p>
        <p>Mô tả: <span>{{$product->description}}</span></p>
        <p>Category: <span>{{$product->category->name}}</span></p>
        
    </div>

    <div class="col-sm-8">
      fff
  </div>

</div>
</div>
@endsection