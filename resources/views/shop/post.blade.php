@extends('layouts.app')
@section('content')
<style type="text/css" media="screen">
    span{
        color: red;
    }
    span a{
        color: red;
    }
    p{
        margin-bottom: 7px;
    }
</style>
<div class="container">
    <div class="row content">
        @include('layouts.sidebar')
        <div class="col-sm-9">

            <h6>Đăng sản phẩm shop: <span>{{ $shop->name }}</span></h6>
            <hr>
        </div>
    </div>




    <div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                List Orders
            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="example">
                        <h3><a href="" title=""><span class="glyphicon glyphicon-trash"></span>Thùng Rác</a></h3>
                        <thead>
                            <tr class="orders">
                                <th class="text-center">ID</th>
                                <th class="text-center">Order time</th>
                                <th class="text-center">User</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Total Price</th>
                                <th class="text-center" >Status</th>
                                <th class="text-center" >Actions</th>
                                <th class="text-center">Delete</th>
                                <th class="text-center">Handler</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt =0 ?>
                            <?php $stt= $stt+1?>
                                <tr class="odd gradeX">
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center">
                                        <a href=""></a>
                                    </td>
                                    <td class="center"></td>
                                    <td class="center"></td>
                                    <td class="text-center" id="stutustext"></td>
                                    <td class="text-center">
                                        <a href="">
                                            show
                                        </a>
                                    </td>
                                    <td class="text-center" ><a href="" title=""><span class="glyphicon glyphicon-trash"></span></a></td>
                                    <td class="text-center" ></td>
                                </tr>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    <!--End Advanced Tables -->
    </div>
</div>








</div>
@endsection