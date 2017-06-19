<!DOCTYPE html>
<html lang="en">
<head>
	<title>Manager User</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Manager User</h2>
		<h3><a href="" title=""><span class="glyphicon glyphicon-trash"></span>Thùng Rác</a></h3>

		@foreach($users as $user)
		<table class="table" >
			<tr>
				<th width="200px">{{$user->name}}</th>
				<th width="500px">{{$user->email}}</th>
				<th>
					<a href="{{ url('manager-user/'.$user->id.'/delete')}}" title=""><span class="glyphicon glyphicon-trash"></span>Xóa User</a>
					<a href="{{url('manager-user/'.$user->id.'/edit')}}" title=""><span class="glyphicon glyphicon-edit"></span>Chỉnh sửa User</a>
				</th>
			</tr>
		</table>
		@endforeach

	</div>

</body>
</html>
