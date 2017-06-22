@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        @foreach($shopProducts as $shopProduct)
            <div class="col-md-2" style="border: 2px solid cyan; padding: 5px; width: 200px; height: 200px">
                {!! $shopProduct->product->name !!}
            </div>
        @endforeach
    </div>
@endsection