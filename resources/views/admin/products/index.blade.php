@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">List of products
                    <div class="pull-right">
                        <a href="{{ route('adminProductCreate') }}"><button class="btn btn-xs btn-primary ">Create new product</button></a>
                    </div>
                </div>

                <div class="panel-body">
                    <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Shop</th>
                                <th>Category</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        @foreach($shopProducts as $shopProduct)
                            <tr>
                                <td>{{ $shopProduct->id }}</td>
                                <td>{{ $shopProduct->product->name }}</td>
                                <td>{{ number_format($shopProduct->price) }}</td>
                                <td>{{ $shopProduct->quantity }}</td>
                                <td>{{ $shopProduct->shop->name }}</td>
                                <td>{{ $shopProduct->product->category->name }}</td>
                                <td>
                                    <a href="#"><button class="btn btn-xs btn-primary">Edit</button></a>
                                    <a href="" data-toggle="modal"><button class="btn btn-xs btn-danger">Delete</button></a>
                                    <div id="{{$shopProduct->product->id}}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Warning!</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Do you sure want to delete this product?</p><br>
                                                    <h4>{{$shopProduct->product->name}}</h4>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#"><button type="button" class="btn btn-danger">Yes</button></a>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection