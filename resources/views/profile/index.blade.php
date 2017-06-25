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
				<li><a href="{{ url('user/profile/'.Auth::user()->id.'/index')}}">Quản lý tài khoản</a></li>
				<li><a href="#">Danh sách yêu thích</a></li>
				<li><a href="#">Đơn đặt hàng</a></li>
				<li><a href="#">Quản lý shop</a></li>
			</ul>
		</div>

		<div class="col-sm-9">
			<div class="col-sm-3">
				<div class="block-pro-img">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/test.png" alt="" width="200px" height="200px">
            </div>
			</div>
			<div class="col-sm-6">
				<p>Tên tài khoản: <span>{{$user->name}}</span></p>
				<p>Email: <span>{{$user->email}}</span></p>
				<p>Password: <span><a href="">Thay đổi password</a></span></p>
				<p>Điện thoại: <span>{{$user->profile->phone}}</span></p>
				<p>Địa chỉ: <span>{{$user->profile->address}}</span></p>
				<p>Ngày sinh: <span>{{$user->profile->date_of_birth}}</span></p>
				<p>Giới tính: 
				<span>
					@if(($user->profile->gender) == 1)
						Nam
					@endif
					@if(($user->profile->gender) == 2)
						Nữ
					@endif
				</span>
				</p>
			</div>
			
		</div>
	</div>
</div>
@endsection
