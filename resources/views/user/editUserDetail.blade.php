@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row content">
		@include('layouts.sidebar')
		<div class="col-sm-9">
			@if(empty($user->profile))
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<form action="{{ url('user/profile/'.$user->id.'/index') }}" method="POST">
				<input name="_token" type="hidden" value="{{ csrf_token() }}">
				<input name="_method" type="hidden" value="PUT">
				<input type="hidden" name="user_id" value="{{$user->id}}">
				<input type="hidden" name="image" value="null">
				<h3>Cập nhật thông tin cá nhân</h3>
				<hr> 
				<div class="form-group">
					<label for="text">Tên : <span></span></label>
					<input type="text" class="form-control" id="name" placeholder="Update tên" name="name" value="{{$user->name}}">
				</div>
				<div class="form-group">
					<label for="email">Email : <span></span></label>
					<input type="email" class="form-control" id="email" placeholder="Update Email" name="email" value="{{$user->email}}">
				</div>
				<div class="form-group">
					<label for="phone">Điện thoại : <span></span></label>
					<input type="text" class="form-control" id="phone" placeholder="Update điện thoại" name="phone" value="123456789">
				</div>
				<div class="form-group">
					<label for="address">Địa chỉ : <span></span></label>
					<input type="text" class="form-control" id="address" placeholder="Update địa chỉ" name="address" value="Chưa cập nhật">
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
					<label for="date_of_birth">Ngày sinh : <span></span></label>
					<input type="date" class="form-control" id="date_of_birth" placeholder="Update giới tính" name="date_of_birth" value="Chưa cập nhật">
				</div>
				<button type="submit" class="btn btn-default btn-success pull-right">Cập Nhật</button>
			</form>
			@else
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<form action="{{ url('user/profile/'.$user->id.'/index') }}" method="POST">
				<input name="_token" type="hidden" value="{{ csrf_token() }}">
				<input name="_method" type="hidden" value="PUT">
				<h3>Cập nhật thông tin cá nhân</h3>
				<hr> 
				<div class="form-group">
					<label for="text">Tên : <span></span></label>
					<input type="text" class="form-control" id="name" placeholder="Update tên" name="name" value="{{$user->name}}">
				</div>
				<div class="form-group">
					<label for="email">Email : <span></span></label>
					<input type="email" class="form-control" id="email" placeholder="Update Email" name="email" value="{{$user->email}}">
				</div>
				<div class="form-group">
					<label for="phone">Điện thoại : <span></span></label>
					<input type="text" class="form-control" id="phone" placeholder="Update điện thoại" name="phone" value="{{$user->profile->phone}}">
				</div>
				<div class="form-group">
					<label for="address">Địa chỉ : <span></span></label>
					<input type="text" class="form-control" id="address" placeholder="Update địa chỉ" name="address" value="{{$user->profile->address}}">
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
					<label for="date_of_birth">Ngày sinh : <span></span></label>
					<input type="date" class="form-control" id="date_of_birth" placeholder="Update giới tính" name="date_of_birth" value="{{$user->profile->date_of_birth}}">
				</div>
				<button type="submit" class="btn btn-default btn-success pull-right">Cập Nhật</button>
			</form>
			@endif
			
		</div>
	</div>
</div>
@endsection