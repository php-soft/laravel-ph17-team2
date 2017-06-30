@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
            <a href="{{ url('admin/shop/index') }}" title=""><button type="button" class="btn btn-info">Danh sách Shop</button></a>
            <a href="{{ url('admin/shop/user') }}" title=""><button type="button" class="btn btn-info">Shop của User</button></a>
            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="example">
                        <thead>
                            <tr class="orders">
                                <th class="text-center">ID</th>
                                <th class="text-center">Tên</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Số lượng shop đang quản lý</th>
                                <th class="text-center">Xem chi tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt =0 ?>
                            @foreach($users as $user)
                            <?php $stt= $stt+1?>
                                <tr class="odd gradeX">
                                    <td class="text-center">{{ $stt }}</td>
                                    <td class="text-center">{{$user->name}}</td>
                                    <td class="text-center">{{$user->email}}</td>
                                    <td class="center"></td>
                                    <td class="text-center">
                                        <a href="">
                                            <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    <!--End Advanced Tables -->
    </div>
</div>
@endsection

