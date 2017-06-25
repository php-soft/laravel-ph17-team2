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
<div class="container-fluid">
	<div class="row content">
		<div class="col-sm-3 sidenav">
			<ul class="nav nav-pills nav-stacked">
				<li><a href="{{ url('user/profile/'.Auth::user()->id.'/index')}}">Quản lý tài khoản</a></li>
				<li><a href="#">Danh sách yêu thích</a></li>
				<li><a href="#">Đơn đặt hàng</a></li>
				<li><a href="#">Quản lý shop</a></li>
			</ul>
		</div>

		<div class="col-sm-9">
			<div class="col-sm-3">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/test.png" alt="" width="200px" height="200px">
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
				<a href="{{ url('user/profile/'.Auth::user()->id.'/edit')}}" title=""><button type="button" class="btn btn-success" >Thay đổi</button></a>
			</div>
			
		</div>
	</div>
</div>
@endsection