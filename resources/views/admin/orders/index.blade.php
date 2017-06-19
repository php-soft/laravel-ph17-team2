@extends('layouts.admin')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Danh sách đơn hàng
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="example">
                                <thead>
                                    <tr class="orders">
                                        <th class="text-center">ID</th>
                                        <th class="text-center">Order time</th>
                                        <th class="text-center">User</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Total Price</th>
                                        <th class="text-center" >Processor</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                        <tr class="odd gradeX">
                                            <td class="text-center">{!! $order->id !!}</td>
                                            <td class="text-center">{!! $order->updated_at !!}</td>
                                            <td class="text-center">
                                                <a href="{{ url('admin/orders/'.$order->id) }}">{!! $order->name !!}</a>
                                            </td>
                                            <td class="center">{{ $order->orderProducts->sum('quantity') }}</td>
                                            <td class="center">{!! $order->total_price !!}</td>
                                            <td class="text-center">{{ $order->statusText() }}</td>
                                            <td class="text-center">
                                                <a href="{{ url('admin/orders/'.$order->id) }}">
                                                    show
                                                </a>
                                            </td>
                                            <td class="text-center" ></td>
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
