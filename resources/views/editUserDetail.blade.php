@extends('layouts.app')
@section('content')
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
			
			
		</div>
	</div>
</div>
@endsection