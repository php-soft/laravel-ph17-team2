@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">List of categories
                <div class="pull-right">
                    {{-- <a href="{{ route('adminCategoriesCreateCategory') }}"></a> --}}<button class="btn btn-xs btn-primary" id="btn-add-m">Create new main category</button>
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
                        <tbody id="categories-list" name="categories-list">
                        @foreach($categories as $category)
                            <tr id="category{{$category->id}}">
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Create New Main Category</h4>
            </div>
            <div class="modal-body">
                <form id="frmTasks" name="frmTasks" class="form-horizontal" novalidate="">
                    <div class="form-group error">
                        <label for="name" class="col-sm-3 control-label">Tên Danh Mục Chính</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control has-error" id="name" name="name" placeholder="Tên Danh Mục Chính" value="">
                        </div>
                    </div>

                    {{-- <div class="form-group error">
                        <label for="slug" class="col-sm-3 control-label">Danh Mục chính</label>
                        <div class="col-sm-9">
                            {!! $categories !!}
                        </div>
                    </div> --}}

                    <div class="form-group error">
                        <label for="slug" class="col-sm-3 control-label">Slug</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Mô Tả</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="description" name="description" placeholder="Mô Tả" value="">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button>
                <input type="hidden" id="parent_id" name="parent_id" value="0">
            </div>
        </div>
    </div>
</div>
@endsection