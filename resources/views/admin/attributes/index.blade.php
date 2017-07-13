@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">List of attributes
                <div class="pull-right">
                    <a href="{{ route('adminAttributeCreate') }}"><button class="btn btn-xs btn-primary ">Create new attribute</button></a>
                </div>
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="example">
                        <thead class="orders">
                            <th>STT</th>
                            <th>Tên Danh Mục</th>
                            <th>Category ID</th>
                            <th>Thuộc Tính</th>
                            <th class="text-center">Actions</th>
                        </thead>
                        <tbody>
                        @foreach($categoryAttributes as $categoryAttribute)
                            <tr id="categoryAttribute{{$categoryAttribute->id}}">
                                <td>{{ $categoryAttribute->id }}</td>
                                <td>
                                    <a href="{{ route('adminAttributeShow', ['id' => $categoryAttribute->id]) }}">{{ $categoryAttribute->category->name }}</a>
                                </td>
                                <td>{{ $categoryAttribute->category->id }}</td>
                                <td>{{ $categoryAttribute->name }}</td>
                                <td class="text-center">
                                    <a href="{{ route('adminAttributeEdit', ['id' => $categoryAttribute->id]) }}"><button class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-pencil"></span>Edit</button></a>
                                    <button class="btn btn-sm btn-danger delete-task" value="{{$categoryAttribute->id}}"><span class="glyphicon glyphicon-trash"></span>Delete</button>
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