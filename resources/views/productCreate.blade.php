@extends('layouts.app')

@section('content')
	{!! Form::open(['url' => '/home/shop']) !!}
		@include('partials.forms.product')
	{!! Form::close() !!}
@endsection