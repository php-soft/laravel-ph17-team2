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
    {!! Form::model($categoryAttributeValue, ['route' => ['adminAttributeUpdate', $categoryAttributeValue->id], 'method' => 'put']) !!}
        @include('admin.attributes.partials.forms.attribute')
        <div class="container">
            {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection