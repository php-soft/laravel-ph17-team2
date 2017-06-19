<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">

        <!-- jQuery -->
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>

        <!-- DataTables -->
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

    </head>
    <body>
        <div class="row">
            <div class="col-lg-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div class="tieu_de_ad" style="width:180px;margin-top: -20px;">
                                Thông tin khách hàng:
                            </div>
                            <div class="col-md-6">
                                @if (!empty($orders->user_id))
                                    @foreach($users as $user)
                                <p>Tên khách hàng mua:{!! $user->name !!}</p>
                                    @endforeach
                                <p>Đia chỉ khách hàng:{!! $user->address !!}</p>
                                <p>Số điện thoại khách hàng:{!! $user->phone !!}</p>
                                <p>Email khách hàng :{!! $user->email !!} </p>
                                @else
                                    <p>Name:{!! $orders->name !!}</p>
                                    <p>Email: None</p>
                                    <p>Address: None</p>
                                    <p>Phone: None</p>
                            @endif
                            </div>
                            <div class="col-md-6">
                                <p>Tên người nhận:{!! $orders->shipping_name !!}</p>
                                <p>Địa chỉ người nhận:{!! $orders->shipping_address !!}</p>
                                <p>Số điện thoại người nhận:{!! $orders->shipping_phone !!}</p>
                                <p>Mã khuyến mãi:{!! $orders->voucher_code !!}</p>
                                <p>Thời gian mua:{!! $orders->updated_at !!}</p>
                            </div>
                            <div class="panel-heading">
                                <h2>Dánh sách sản phẩm khách hàng</h2>
                            </div>
                            <table class="table table-striped table-bordered table-hover" id="example">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Amount</th>
                                    <th>Shop</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders->orderProducts as $Products)
                                        <tr class="odd gradeX">
                                            <td class="center">{!! $Products->id !!}</td>
                                            <td class="center">{!! $Products->product->name !!}</td>
                                            <td class="center">{!! $Products->quantity !!}</td>
                                            <td class="center">{!! $Products->price !!}</td>
                                            <td class="center">{!! $Products->price*$Products->quantity!!}</td>
                                            @foreach($Products->product->ShopProducts as $Shops)
                                                <td class="center">{!! $Shops->shop->name!!} </td>
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
                </div>

                <!--End Advanced Tables -->
            </div>
        </div>
    </body>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <script>
        $(function(){
            $("#example").dataTable();
        })
    </script>
</html>
