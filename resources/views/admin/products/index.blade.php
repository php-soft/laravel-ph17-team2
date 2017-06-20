@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach($products as $product)
                <div class="col-lg-4 col-md 4 col-sm-6">
                    <div>
                        <a href="{{ url('/products/' . $product->id) }}"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/test.png" alt="This is an image" alt="{!! $product->image !!}"></a>
                    </div>
                    <div>
                        <span class="glyphicon glyphicon-heart-empty" style="font-size:36px;color:red"></span>
                    </div>
                    <div style="color:red">
                        {{ $product->price }}
                    </div>
                    <div>
                        {{ $product->description }}
                    </div>
                    <div>
                        <span class="glyphicon glyphicon-tag" style="font-size:24px"></span>{{ $product->buys }}
                        <span class="glyphicon glyphicon-eye-open" style="font-size:24px"></span>{{ $product->view }}
                    </div>
                    {{-- <div>
                        <p>{{ $product->shopProducts->shop->name }}</p>
                    </div> --}}
                </div>
            @endforeach
        </div>
    </div>
@stop
