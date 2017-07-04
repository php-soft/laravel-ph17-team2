@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="orders">
                            <th>Tên Danh Mục</th>
                            <th>Category ID</th>
                            <th>Thuộc Tính</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $categoryAttributeValue->category->name }}</td>
                                <td>{{ $categoryAttributeValue->category->id }}</td>
                                <td>{{ $categoryAttributeValue->name }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
@endsection