@extends('layouts.admin')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <a href="{{ url('/admin/orders') }}">Back to overview</a>
                                <h2>Customer  Informations</h2>
                                <div class="col-md-6">
                                    @if (!empty($orders->user_id))
                                        @foreach($users as $user)
                                            <h3><strong>Tên khách hàng mua:{!! $user->name !!}</strong></h3>
                                        @endforeach
                                    <h3>Đia chỉ khách hàng:{!! $user->address !!}</h3>
                                    <h3>Số điện thoại khách hàng:{!! $user->phone !!}</h3>
                                    <h3>Email khách hàng :{!! $user->email !!} </h3>
                                    @else
                                        <p>Name:{!! $orders->name !!}</p>
                                        <p>Email: None</p>
                                        <p>Address: None</p>
                                        <p>Phone: None</p>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <h3><strong>Tên người nhận:{!! $orders->shipping_name !!}</strong></h3>
                                    <h3>Địa chỉ người nhận:{!! $orders->shipping_address !!}</h3>
                                    <h3>Số điện thoại người nhận:{!! $orders->shipping_phone !!}</h3>
                                    <h3>Mã khuyến mãi:{!! $orders->voucher_code !!}</h3>
                                    <h3>Thời gian mua:{!! $orders->updated_at !!}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <h2>Product Informations</h2>

                            <div class="col-md-12 order-status-actions">
                                <div class="col-md-1">
                                    {{Form::open(['route'=>['adminOrderEditStatus', $orders->id, 0], 'method'=>'put', 'class'=>'form-status'])}}
                                    @if(($orders->status)==0)
                                    {{ Form::submit('NEW',['class'=>'btn btn-danger']) }}
                                    @else
                                    {{ Form::submit('NEW',['class'=>'btn btn-primary']) }}
                                    @endif
                                    {{ Form::close() }}
                                </div>
                                <div class="col-md-1">
                                    {{Form::open(['route'=>['adminOrderEditStatus', $orders->id, 1], 'method'=>'put', 'class'=>'form-status'])}}
                                    @if(($orders->status)== 1)
                                        {{ Form::submit('Confirm',['class'=>'btn btn-danger']) }}
                                    @else
                                        {{ Form::submit('Confirm',['class'=>'btn btn-primary']) }}
                                    @endif
                                    {{ Form::close() }}
                                </div>
                                <div class="col-md-1">
                                    {{Form::open(['route'=>['adminOrderEditStatus', $orders->id, 2], 'method'=>'put', 'class'=>'form-status'])}}
                                    @if(($orders->status)== 2)
                                        {{ Form::submit('Payment',['class'=>'btn btn-danger']) }}
                                    @else
                                        {{ Form::submit('Payment',['class'=>'btn btn-primary']) }}
                                    @endif
                                    {{ Form::close() }}
                                </div>
                                <div class="col-md-1">
                                    {{Form::open(['route'=>['adminOrderEditStatus', $orders->id, 3], 'method'=>'put', 'class'=>'form-status'])}}
                                    @if(($orders->status)== 3)
                                        {{ Form::submit('Shipping',['class'=>'btn btn-danger']) }}
                                    @else
                                        {{ Form::submit('Shipping',['class'=>'btn btn-primary']) }}
                                    @endif
                                    {{ Form::close() }}
                                </div>
                                <div class="col-md-1">
                                    {{Form::open(['route'=>['adminOrderEditStatus', $orders->id, 4], 'method'=>'put', 'class'=>'form-status'])}}
                                    @if(($orders->status)== 4)
                                        {{ Form::submit('Return',['class'=>'btn btn-danger']) }}
                                    @else
                                        {{ Form::submit('Return',['class'=>'btn btn-primary']) }}
                                    @endif
                                    {{ Form::close() }}
                                </div>
                                <div class="col-md-1">
                                    {{Form::open(['route'=>['adminOrderEditStatus', $orders->id, 5], 'method'=>'put', 'class'=>'form-status'])}}
                                    @if(($orders->status)== 5)
                                        {{ Form::submit('Done',['class'=>'btn btn-danger']) }}
                                    @else
                                        {{ Form::submit('Done',['class'=>'btn btn-primary']) }}
                                    @endif
                                    {{ Form::close() }}
                                </div>
                            </div>
                        </div>
                        <div class="panel-heading">
                            <h2>Product Informations</h2>
                        </div>
                        <table class="table table-striped table-bordered table-hover" id="example">
                            <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Amount</th>
                                <th class="text-center">Shop</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($orders->orderProducts as $Products)
                                    <tr class="odd gradeX">
                                        <td class="text-center">{!! $Products->id !!}</td>
                                        <td class="text-center">{!! $Products->product->name !!}</td>
                                        <td class="text-center">{!! $Products->quantity !!}</td>
                                        <td class="text-center">{!! $Products->price !!}</td>
                                        <td class="text-center">{!! $Products->price*$Products->quantity!!}</td>
                                        @foreach($Products->product->ShopProducts as $Shops)
                                            <td class="text-center">{!! $Shops->shop->name!!} </td>
                                        @endforeach
                                    </tr>
                                @endforeach
                                <tr>
                                    <td>Total</td>
                                    <td></td>
                                    <td class="center">{{ $orders->orderProducts->sum('quantity') }}</td>
                                    <td></td>
                                    <td class="center">{{ $total_amount }}</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!--End Advanced Tables -->
            </div>
        </div>
@endsection
