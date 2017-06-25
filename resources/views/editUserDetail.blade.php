@extends('layouts.app')
@section('content')
<style type="text/css" media="screen">

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
			<form action="{{ url('user/profile/'.$user->id).'/edit' }}">
				<div class="form-group">
					<label for="text">Thay đổi Tên :</label>
					<input type="text" class="form-control" id="name" placeholder="Edit tên" name="name">
				</div>
				<div class="form-group">
					<label for="email">Thay đổi Email :</label>
					<input type="email" class="form-control" id="email" placeholder="Edit Email" name="email">
				</div>
				<button type="submit" class="btn btn-default">cập Nhật</button>
			</form>	
		</div>
	</div>
</div>
@endsection