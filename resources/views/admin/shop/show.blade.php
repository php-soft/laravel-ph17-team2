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
            <div>
            <h4>Tên User: <span><a href=""></a></span> Tên Shop: <span><a href="">{{ $shop->name }}</a></span> Địa chỉ: <span><a href="">{{$shop->address}}</a></span></h4>
            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="example">
                        <h4><a href="" title="" class="pull-right"><span class="glyphicon glyphicon-trash pull-right"></span>Thùng Rác</a></h4>
                        <thead>
                            <tr class="orders">
                                <th class="text-center">ID</th>
                                <th class="text-center">Name Products</th>
                                <th class="text-center">Buys</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Discount</th>
                                <th class="text-center" >Create_at</th>
                                <th class="text-center" >Update_ad</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt =0 ?>
                                <?php $stt= $stt+1?>
                                <tr class="odd gradeX">
                                    <td class="text-center">1</td>
                                    <td class="text-center"></td>
                                    <td class="text-center">buys</td>
                                    <td class="center">10000</td>
                                    <td class="center">10%</td>
                                    <td class="text-center" id="stutustext"></td>
                                    <td class="text-center" ></td>
                                    <td class="text-center" ><a href="{{ url('admin/shop/'.$shop->id.'/delete') }}" title=""><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>
                                </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    <!--End Advanced Tables -->
    </div>
</div>
@endsection

