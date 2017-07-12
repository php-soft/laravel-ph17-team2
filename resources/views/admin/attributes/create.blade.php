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
    {!! Form::open(['route' => 'adminAttributeStore']) !!}
        @include('admin.attributes.partials.forms.attribute')
        <div class="container">
            {!! Form::submit('Tạo thuộc tính', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection