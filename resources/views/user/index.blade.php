@extends('layouts.user')
@section('content')
<div class="container">
	<h2>Manager User</h2>
	<h3><a href="" title=""><span class="glyphicon glyphicon-trash"></span>Thùng Rác</a></h3>
	@foreach($users as $user)
	<table class="table" >
		<tr>
			<th width="200px">{{$user->name}}</th>
			<th width="500px">{{$user->email}}</th>
			<th>
				<a href="{{ url('user/'.$user->id.'/delete')}}" title=""><span class="glyphicon glyphicon-trash"></span>Xóa User</a>
				<a href="{{url('user/'.$user->id.'/edit')}}" title=""><span class="glyphicon glyphicon-edit"></span>Chỉnh sửa User</a>
			</th>
		</tr>
	</table>
	@endforeach
</div>
@endsection