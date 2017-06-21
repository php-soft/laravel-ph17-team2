@extends('layouts.admin')
@section('content')
<div class="container">
<form action="{{ url('admin/user/'.$user->id) }}">
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
@endsection