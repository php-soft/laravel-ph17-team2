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
    <div class="container">
        {!! Form::Open(['route' => 'adminCategoriesStoreSubCategory']) !!}
            <div class="form-group">
                {!! Form::label('parent_id', 'Danh Mục chính') !!}
                <div class="form-conrols">
                    {!! $categories !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('name', 'Tên Danh Mục Phụ - Danh Mục Con') !!}
                <div class="form-conrols">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                <div class="form-conrols">
                    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('discription', 'Mô Tả') !!}
                <div class="form-conrols">
                    {!! Form::text('discription', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="container">
                {!! Form::submit('Tạo danh mục', ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection