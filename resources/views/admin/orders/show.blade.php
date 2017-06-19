@extends('layouts.admin')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
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
                            <div class="col-md-12">
                                <div class="col-md-1"> {{Form::open(['route'=>['adminOrderEdit', $orders->id], 'method' => 'put'])}}
                                    {{ Form::hidden('status', 0) }}
                                    {{ Form::submit('NEW',['class'=>'btn btn-primary']) }}
                                    {{ Form::close() }}
                                </div>
                                <div class="col-md-1">
                                    {{Form::open(['route'=>['adminOrderEdit', $orders->id], 'method' => 'put'])}}
                                    {{ Form::hidden('status', 1) }}
                                    {{ Form::submit('CONFIRM',['class'=>'btn btn-primary']) }}
                                    {{ Form::close() }}
                                </div>
                                <div class="col-md-1">
                                    {{Form::open(['route'=>['adminOrderEdit', $orders->id], 'method' => 'put'])}}
                                    {{ Form::hidden('status', 2) }}
                                    {{ Form::submit('PAYMENT',['class'=>'btn btn-primary']) }}
                                    {{ Form::close() }}
                                </div>
                                <div class="col-md-1">
                                    {{Form::open(['route'=>['adminOrderEdit', $orders->id], 'method' => 'put'])}}
                                    {{ Form::hidden('status', 3) }}
                                    {{ Form::submit('SHIPPING',['class'=>'btn btn-primary']) }}
                                    {{ Form::close() }}
                                </div>
                                <div class="col-md-1">
                                    {{Form::open(['route'=>['adminOrderEdit', $orders->id], 'method' => 'put'])}}
                                    {{ Form::hidden('status', 4) }}
                                    {{ Form::submit('RETURN',['class'=>'btn btn-primary']) }}
                                    {{ Form::close() }}
                                </div>
                                <div class="col-md-1">
                                    {{Form::open(['route'=>['adminOrderEdit', $orders->id], 'method' => 'put'])}}
                                    {{ Form::hidden('status', 5) }}
                                    {{ Form::submit('DONE',['class'=>'btn btn-primary']) }}
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
