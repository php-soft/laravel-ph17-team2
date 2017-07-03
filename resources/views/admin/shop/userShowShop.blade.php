@extends('layouts.admin')
@section('content')
<style type="text/css" media="screen">
    span{
        color: #EC7357;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
            <a href="{{ url('admin/shop/index') }}" title=""><button type="button" class="btn btn-info">Danh sách Shop</button></a>
            <a href="{{ url('admin/shop/user') }}" title=""><button type="button" class="btn btn-info">Shop của User</button></a>
            </div>
            <div class="panel-body">
            <h4>Danh sách shop của User: <span>{{$user->name}}</span></h4>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="example">
                        <thead>
                            <tr class="orders">
                                <th class="text-center">ID</th>
                                <th class="text-center">Name Shop</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Address</th>
                                <th class="text-center">Logo</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt =0 ?>
                            @foreach($user->shops as $shop)
                            <?php $stt= $stt+1?>
                                <tr class="odd gradeX">
                                    <td class="text-center">{{ $stt }}</td>
                                    <td class="text-center">{{$shop->name}}</td>
                                    <td class="text-center">{{$shop->description}}</td>
                                    <td class="text-center">{{$shop->address}}</td>
                                    <td class="text-center">{{$shop->logo}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('admin/shop/'.$shop->id.'/show') }}">
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

