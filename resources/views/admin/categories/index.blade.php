@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">List of categories
                <div class="pull-right">
                    <a href="{{ route('adminCategoriesCreateCategory') }}"><button class="btn btn-xs btn-primary ">Create new main category</button></a>
                    <a href="{{ route('adminCategoriesCreateSubCategory') }}"><button class="btn btn-xs btn-primary ">Create new sub category</button></a>
                </div>
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="example">
                        <thead class="orders">
                            <th>ID</th>
                            <th>Tên Danh Mục</th>
                            <th>Parent_id</th>
                            <th>Slug</th>
                            <th class="text-center">Actions</th>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>
                                    <a href="{{ route('adminCategoriesShow', ['id' => $category->id]) }}">{{ $category->name }}</a>
                                </td>
                                <td>{{ $category->parent_id }}</td>
                                <td>{{ $category->slug }}</td>
                                <td class="text-center">
                                    <a href="{{ route('adminCategoriesEdit', ['id' => $category->id]) }}"><button class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-pencil"></span>Edit</button></a>
                                    <a href="{{ route('adminCategoriesDetele', ['id' => $category->id]) }}" data-toggle="modal"><button class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</button></a>
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