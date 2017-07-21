@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">List of attributes
                <div class="pull-right">
                    {{-- <a href="{{ route('adminAttributeCreate') }}"></a> --}}<button class="btn btn-xs btn-primary " id="btn-add-a">Create new attribute</button>
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
                        <tbody id="categoryAttribute-list" name="categoryAttribute-list">
                        @foreach($categoryAttributes as $categoryAttribute)
                            <tr id="categoryAttribute{{$categoryAttribute->id}}">
                                <td>{{ $categoryAttribute->id }}</td>
                                <td>
                                    <a href="{{ route('adminAttributeShow', ['id' => $categoryAttribute->id]) }}">{{ $categoryAttribute->category->name }}</a>
                                </td>
                                <td>{{ $categoryAttribute->category->id }}</td>
                                <td>{{ $categoryAttribute->name }}</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary edit-a" value="{{$categoryAttribute->id}}"><span class="glyphicon glyphicon-pencil"></span>Edit</button>
                                    <button class="btn btn-sm btn-danger delete-a" value="{{$categoryAttribute->id}}"><span class="glyphicon glyphicon-trash"></span>Delete</button>
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
<div class="modal fade" id="myAttr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Create New Main Category</h4>
            </div>
            <div class="modal-body">
                <form id="frmAttr" name="frmAttr" class="form-horizontal" novalidate="">
                    <div class="form-group error">
                        <label for="category_id" class="col-sm-3 control-label">Danh Mục Chính</label>
                        <div class="col-sm-9">
                            {!! $categories !!}
                        </div>
                    </div>

                    <div class="form-group error">
                        <label for="name" class="col-sm-3 control-label">Tên Thuộc Tính</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" placeholder="name" value="">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btn-save-a" value="add">Save changes</button>
                <input type="hidden" id="task_id" name="task_id" value="0">
            </div>
        </div>
    </div>
</div>
@endsection