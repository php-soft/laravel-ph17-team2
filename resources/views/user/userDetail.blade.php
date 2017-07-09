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
			<div class="col-sm-3">

                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/test.png" alt="" width="200px" height="200px">
                <form action="{{ url('user/profile/'.Auth::user()->id.'/index')}}" method="post" accept-charset="utf-8" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="file" name="file" id="file" class="btn btn-link">
                    <input type="submit" value="Cập nhật hình ảnh" class="btn btn-info">
                </form>

			</div>
			<div class="col-sm-6">
			@if(empty($user->profile))
				<p>Tên tài khoản: <span>{{$user->name}}</span></p>
				<p>Email: <span>{{$user->email}}</span></p>
				<p>Password: <span><a href="">Thay đổi password</a></span></p>
				<p>Điện thoại: <span>Chưa cập nhật</span></p>
				<p>Địa chỉ: <span>Chưa cập nhật</span></p>
				<p>Ngày sinh: <span>Chưa cập nhật</span></p>
				<p>Giới tính: <span>Chưa cập nhật</span></p>
				<a href="{{ url('user/profile/'.Auth::user()->id.'/edit')}}" title=""><button type="button" class="btn btn-success" >Cập nhật thông tin</button></a>
			@else
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
				<a href="{{ url('user/profile/'.Auth::user()->id.'/edit')}}" title=""><button type="button" class="btn btn-success" >Cập nhật thông tin</button></a>
			@endif
			</div>
			
		</div>
	</div>
</div>
@endsection