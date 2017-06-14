@extends('layouts.master')

@section('title')
Login
@endsection

@section('content')
<style>
	form{
		width: 400px;
		margin-left: auto;
		margin-right: auto;
	}
</style>
<form>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-success btn-block">Submit</button>
</form>
@endsection
