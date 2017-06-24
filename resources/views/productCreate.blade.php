@extends('layouts.app')

@section('content')
    {!! Form::open(['url' => '/home/shop/create']) !!}
        @include('partials.forms.product')
    {!! Form::close() !!}
@endsection