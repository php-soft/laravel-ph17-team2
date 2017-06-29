@extends('layouts.admin')

@section('content')
	{!! Form::model($shopProduct, ['route' => ['adminProductUpdate', $shopProduct->id], 'method' => 'put']) !!}
		@include('admin.products.partials.forms.product')
		{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}
@stop