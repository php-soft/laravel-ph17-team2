@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                List of Product-attributes
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="example">
                        <thead class="orders">
                            <th>STT</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Category</th>
                            <th>Thuộc Tính</th>
                            <th>Giá trị thuộc tính</th>
                            <th class="text-center">Actions</th>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td><div style="margin: 7px 0;">{{ $product->id }}</div></td>
                                <td>
                                    <div style="margin: 7px 0;">{{-- <a href="{{ route('adminProductShow', ['id' => $product->id]) }}"></a> --}}{{ $product->name }}</div>
                                </td>
                                <td><div style="margin: 7px 0;">{{ $product->category->name }}</div></td>
                                <td>
                                    @foreach($product->category->categoryAttributeValues as $categoryAttribute)
                                        <div style="margin: 7px 0;">{{ $categoryAttribute->name }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($product->category->categoryAttributeValues as $categoryAttribute)
                                        <div style="margin: 7px 0;">
                                            @foreach($categoryAttribute->productAttributeValues as $productAttribute)
                                                <span class="label label-info">{{ $productAttribute->value }}</span>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </td>
                                <td class="text-center">
                                    <div style="margin: 7px 0;">
                                        <a href="{{ route('adminProductAttributeShow', ['id' => $product->id]) }}"><button class="btn btn-md btn-primary"><span class="glyphicon glyphicon-pencil"></span>Edit</button></a>
                                    </div> 
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