@extends('layouts.admin')

@section('content')
    {!! Form::model($product, ['route' => ['adminProductUpdate', $product->id], 'method' => 'put']) !!}
        @include('admin.products.partials.forms.product')
        <div class="container">
            {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@stop