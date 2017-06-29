@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">List of products
                <div class="pull-right">
                    <a href="{{ route('adminProductCreate') }}"><button class="btn btn-xs btn-primary ">Create new product</button></a>
                </div>
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="example">
                            <thead class="orders">
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Shop</th>
                                <th>Category</th>
                                <th class="text-center">Actions</th>
                            </thead>
                            <tbody>
                            @foreach($shopProducts as $shopProduct)
                                <tr>
                                    <td>{{ $shopProduct->id }}</td>
                                    <td><a href="{{ route('adminProductShow', ['id' => $shopProduct->id]) }}">{{ $shopProduct->product->name }}</a></td>
                                    <td>{{ number_format($shopProduct->price) }}</td>
                                    <td>{{ $shopProduct->quantity }}</td>
                                    <td>{{ $shopProduct->shop->name }}</td>
                                    <td>{{ $shopProduct->product->category->name }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('adminProductEdit', ['shopProductId' => $shopProduct->id])}}"><button class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-pencil"></span>Edit</button></a>
                                        <a href="{{ route('adminProductDetele', ['shopProductId' => $shopProduct->id]) }}" data-toggle="modal"><button class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</button></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection