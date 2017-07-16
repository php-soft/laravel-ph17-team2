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
                            <th>STT</th>
                            <th>Tên</th>
                            <th>Giá đề nghị</th>
                            <th>Category</th>
                            <th>Alias</th>
                            <th class="text-center">Actions</th>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>
                                    <a href="{{ route('adminProductShow', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                </td>
                                <td>{{ number_format($product->price) }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->alias }}</td>
                                <td class="text-center">
                                    <a href="{{ route('adminProductEdit', ['id' => $product->id]) }}"><button class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-pencil"></span>Edit</button></a>
                                    <a href="{{ route('adminProductDetele', ['id' => $product->id]) }}" data-toggle="modal"><button class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</button></a>
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