@extends('layouts.admin')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(['route' => 'adminProductStore']) !!}
        @include('admin.products.partials.forms.product')
        <div class="container">
            {!! Form::submit('Tạo sản phẩm', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection