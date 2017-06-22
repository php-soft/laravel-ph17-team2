@extends('layouts.app')
@section('content')
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
		
		{{$user->name}}
		
		</div>
	</div>
</div>
@endsection
