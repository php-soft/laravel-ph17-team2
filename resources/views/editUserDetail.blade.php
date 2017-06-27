@extends('layouts.app')
@section('content')
<div class="container">
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
			@if(empty($user->profile))
				<form method="post" action="{{ url('user/profile/'.Auth::user()->id.'/index') }}">
				<h3>Cập nhật thông tin cá nhân</h3>
				<hr>
				<div class="form-group">
					<label for="text">Tên : <span>{{$user->name}}</span></label>
					<input type="text" class="form-control" id="name" placeholder="Update tên" name="name">
				</div>
				<div class="form-group">
					<label for="email">Email : <span>{{$user->email}}</span></label>
					<input type="email" class="form-control" id="email" placeholder="Update Email" name="email">
				</div>
				<div class="form-group">
					<label for="phone">Điện thoại : <span>Chưa cập nhật</span></label>
					<input type="text" class="form-control" id="phone" placeholder="Update điện thoại" name="phone">
				</div>
				<div class="form-group">
					<label for="address">Địa chỉ : <span>Chưa cập nhật</span></label>
					<input type="text" class="form-control" id="address" placeholder="Update địa chỉ" name="address">
				</div>
				<div class="form-group">
					<label for="gender">Giới tính : 
						<span>
							Chưa cập nhật
						</span>
					</label><br>
					<label class="radio-inline"><input type="radio" name="gender" value="1">Nam</label>
					<label class="radio-inline"><input type="radio" name="gender" value="2">Nữ</label>
				</div>
				<div class="form-group">
					<label for="date_of_birth">Ngày sinh : <span>Chưa cập nhật</span></label>
					<input type="date" class="form-control" id="date_of_birth" placeholder="Update giới tính" name="date_of_birth">
				</div>
				<button type="submit" class="btn btn-default btn-success pull-right">Cập Nhật</button>
			</form>
			@else
				<form action="{{ url('user/profile/'.Auth::user()->id.'/index') }} " method="put" value="{!! csrf_token() !!}">
				<h3>Cập nhật thông tin cá nhân</h3>
				<hr> 
				<div class="form-group">
					<label for="text">Tên : <span>{{$user->name}}</span></label>
					<input type="text" class="form-control" id="name" placeholder="Update tên" name="name">
				</div>
				<div class="form-group">
					<label for="email">Email : <span>{{$user->email}}</span></label>
					<input type="email" class="form-control" id="email" placeholder="Update Email" name="email">
				</div>
				<div class="form-group">
					<label for="phone">Điện thoại : <span>{{$user->profile->phone}}</span></label>
					<input type="text" class="form-control" id="phone" placeholder="Update điện thoại" name="phone">
				</div>
				<div class="form-group">
					<label for="address">Địa chỉ : <span>{{$user->profile->address}}</span></label>
					<input type="text" class="form-control" id="address" placeholder="Update địa chỉ" name="address">
				</div>
				<div class="form-group">
					<label for="gender">Giới tính : 
						<span>
							@if(($user->profile->gender) == 1)
							Nam
							@endif
							@if(($user->profile->gender) == 2)
							Nữ
							@endif
						</span>
					</label><br>
					<label class="radio-inline"><input type="radio" name="gender" value="1">Nam</label>
					<label class="radio-inline"><input type="radio" name="gender" value="2">Nữ</label>
				</div>
				<div class="form-group">
					<label for="date_of_birth">Ngày sinh : <span>{{$user->profile->date_of_birth}}</span></label>
					<input type="date" class="form-control" id="date_of_birth" placeholder="Update giới tính" name="date_of_birth">
				</div>
				<button type="submit" class="btn btn-default btn-success pull-right">Cập Nhật</button>
			</form>
			@endif
			
		</div>
	</div>
</div>
@endsection