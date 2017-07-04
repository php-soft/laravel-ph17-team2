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
        {!! Form::model($category, ['route' => ['adminCategoriesUpdate', $category->id], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Tên Danh Mục') !!}
                <div class="form-conrols">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('parent_id', 'Parent_id') !!}
                <div class="form-conrols">
                    {!! Form::text('parent_id', null, ['class' => 'form-control']) !!}
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
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection