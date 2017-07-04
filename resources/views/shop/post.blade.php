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
    <h6>Đăng sản phẩm cho shop: <span>{{ $shop->name }}</span></h6>
    <div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h6>Danh sách sản phẩm trong hệ thống</h6>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="example">
                        <thead>
                            <tr class="orders">
                                <th class="text-center">ID</th>
                                <th class="text-center">Tên sản phẩm</th>
                                <th class="text-center">Danh mục</th>
                                <th class="text-center">Mô tả</th>
                                <th class="text-center">Giá gợi ý</th>
                                <th class="text-center" >Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt =0 ?>
                            @foreach($products as $product)
                            <?php $stt= $stt+1?>
                                <tr class="odd gradeX">
                                    <td class="text-center">{{$stt}}</td>
                                    <td class="text-center">{{$product->name}}</td>
                                    <td class="text-center">{{$product->category->name}}</td>
                                    <td class="text-center">{{$product->description}}</td>
                                    <td class="center">{{$product->price}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('user/shop/post/'.$product->id.'/create') }}" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok"></span> Chọn sản phẩm </a>
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
</div>
@endsection