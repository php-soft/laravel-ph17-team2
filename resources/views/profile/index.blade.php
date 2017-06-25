@extends('layouts.app')
@section('content')
<style type="text/css" media="screen">
	span{
		color: red;
	}
	span a{
		color: red;
	}
</style>
<div class="container-fluid">
	<div class="row content">
		<div class="col-sm-3 sidenav">
			<h4>Tên User</h4>
			<ul class="nav nav-pills nav-stacked">
				<li><a href="">Quản lý tài khoản</a></li>
				<li><a href="{{ url('user/profile/information') }}">Thông tin cá nhân</a></li>
				<li><a href="#">Danh sách yêu thích</a></li>
				<li><a href="#">Đơn đặt hàng</a></li>
			</ul>
		</div>

		<div class="col-sm-9">
			<div class="col-sm-3">
				<h6>Hình ảnh</h6>
			</div>
			<div class="col-sm-6">
				<p>Tên tài khoản: <span>{{$user->name}}</span></p>
				<p>Email: <span>{{$user->email}}</span></p>
				<p>Password: <span><a href="">Thay đổi password</a></span></p>
				<p>Điện thoại: <span>{{ $phoneProfile }}</span></p>
			</div>
			
		</div>
	</div>
</div>
@endsection
