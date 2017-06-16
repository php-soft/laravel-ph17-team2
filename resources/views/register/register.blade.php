@extends('layouts.master')

@section('title')
Register
@endsection

@section('content')
<style>
	form{
		width: 400px;
		margin-left: auto;
		margin-right: auto;
	}
</style>
<form action="register_action" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
		<label for="name">Name:</label>
		<input type="text" name="username" class="form-control" id="name">
	</div>

	<div class="form-group">
		<label for="email">Email:</label>
		<input type="email" name="email" class="form-control" id="email">
	</div>

	<div class="form-group">
		<label for="pwd">Password:</label>
		<input type="password" name="password" class="form-control" id="pwd">
	</div>

	<div class="form-group">
		<label for="pwd">Re-Password:</label>
		<input type="password" name="cpassword" class="form-control" id="pwd">
	</div>

	<div class="checkbox">
		<label><input type="checkbox"> Remember me</label>
	</div>
	<button type="submit" class="btn btn-success btn-block">Submit</button>
</form>
@endsection
