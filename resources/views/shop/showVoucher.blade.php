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
    h6{
        display: inline;
    }
    .btn-primary
    {
        margin-bottom: 10px;
        margin-left:10px;
    }
    .btn-warning{
        float: right;
    }
    .btn-warning{
        margin-left: 15px;
        margin-right: 30px;
    }
</style>
<div class="container">
    <div class="row content">
        @include('layouts.sidebar')
        <div class="col-sm-9">
            <div class="row">
                <!-- Advanced Tables -->
                <a href="{{ url('shop/'.$shop->id.'/Voucher/create') }}" class="btn btn-warning btn-sm pull-left">Thêm Voucher mới</a>
                <div class="panel-body">
                <h6>Danh sách Voucher của shop: <span>{{$shop->name}}</span> Địa chỉ: <span>{{$shop->address}}</span></h6>

                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="example">
                        <thead>
                            <tr class="orders">
                                <th class="text-center">ID</th>
                                <th class="text-center">discount</th>
                                <th class="text-center">code</th>
                                <th class="text-center">quantity</th>
                                <th class="text-center">start_date</th>
                                <th class="text-center" >end_date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt =0 ?>
                            @foreach($Voucher as $Vouchers)
                                <?php $stt= $stt+1?>
                                <tr class="odd gradeX">
                                    <td class="text-center">{{ $stt }}</td>
                                    <td class="text-center">{{$Vouchers->discount}}</td>
                                    <td class="center">{{$Vouchers->code}}</td>
                                    <td class="center">{{$Vouchers->quantity}}</td>
                                    <td class="text-center" >{{$Vouchers->start_date}}</td>
                                    <td class="text-center" >{{$Vouchers->end_date}}</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </div>
</div>
@endsection