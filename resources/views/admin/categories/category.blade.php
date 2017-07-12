@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="orders">
                            <th>Tên Danh Mục</th>
                            <th>Parent_id</th>
                            <th>Slug</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->parent_id }}</td>
                                <td>{{ $category->slug }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
@endsection