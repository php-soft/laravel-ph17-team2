@extends('layouts.admin')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <a href="{{ url('/admin/orders/withtrashed') }}">Back to overview</a>
                                <div class="panel-heading">
                                    <h2>Customer Informations</h2>
                                </div>
                                <div class="col-md-6">
                                    @if (!empty($orders->user_id))
                                        @foreach($users as $user)
                                            <h3><strong>Tên khách hàng mua:{!! $user->name !!}</strong></h3>
                                        @endforeach
                                    <h3>Đia chỉ khách hàng mua:{!! $user->address !!}</h3>
                                    <h3>Số điện thoại khách hàng mua:{!! $user->phone !!}</h3>
                                    <h3>Email khách hàng mua:{!! $user->email !!} </h3>
                                    @else
                                        <h3><strong>Tên người mua:{!! $orders->name !!}</strong></h3>
                                        <h3>Email người mua:{!! $orders->email !!}</h3>
                                        <h3>Đia chỉ người mua người mua:{!! $orders->address !!}</h3>
                                        <h3>Số điện thoại người mua: {!! $orders->phone !!}</h3>
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
                            <h2>Status Informations</h2>
                            <button type="button" class="btn btn-primary">{{ $orders->statusText() }}</button>
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
                                <?php $stt =0;?>
                                @foreach($orders->orderProducts as $Products)
                                    <?php $stt= $stt+1?>
                                    <tr class="odd gradeX">
                                        <td class="text-center">{!! $stt !!}</td>
                                        <td class="text-center">{!! $Products->product->name !!}</td>
                                        <td class="text-center">{!! $Products->quantity !!}</td>
                                        <td class="text-center">{!! number_format($Products->price,0,",",".") !!}</td>
                                        <td class="text-center">{!! number_format($Products->price * $Products->quantity,0,",","." ) !!}</td>
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
