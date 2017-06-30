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
                        <h4><a href="" title="" class="pull-right"><span class="glyphicon glyphicon-trash pull-right"></span>Thùng Rác</a></h4>
                        <thead>
                            <tr class="orders">
                                <th class="text-center">ID</th>
                                <th class="text-center">Name Shop</th>
                                <th class="text-center">Address</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Logo</th>
                                <th class="text-center" >Create_at</th>
                                <th class="text-center" >Update_ad</th>
                                <th class="text-center">Action</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt =0 ?>
                                @foreach($shops as $shop)
                                <?php $stt= $stt+1?>
                                <tr class="odd gradeX">
                                    <td class="text-center">{!! $stt !!}</td>
                                    <td class="text-center">{{ $shop->name}}</td>
                                    <td class="text-center">{{ $shop->address}}</td>
                                    <td class="center">{{ $shop->description}}</td>
                                    <td class="center">{{ $shop->logo}}</td>
                                    <td class="text-center" id="stutustext">{{ $shop->created_at}}</td>
                                    <td class="text-center" >{{ $shop->updated_at}}</td>
                                    <td class="text-center">
                                        <a href="">
                                            <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></button>
                                        </a>
                                    </td>
                                    <td class="text-center" ><a href="" title=""><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>
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

