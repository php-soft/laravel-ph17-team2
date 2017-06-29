@component('mail::message' )
    <html>
        <head>
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">

            <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
            <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <!-- jQuery -->
            <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
            <!-- DataTables -->
            <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
            <style>
                span{
                    color:red;
                }
                .date{
                }
                .namecustomer{
                    text-transform:uppercase;
                }
            </style>
        </head>
        <body>
            # Order Shipped

            <h2>Kính chào quý khách <strong class="namecustomer">:{!! $order->name !!}</strong></h2>,

            <p>Chúng Tôi vừa nhận được đơn hàng <span>#{!! $order->id !!}</span> của quý khách đặt vào lúc
            <strong class="date">{!! $order->created_at !!}</strong> Chúng tôi sẽ liên lạc đến khách hàng 1 cách
            sớm nhất.
            </p>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Đơn hàng sẽ được giao tới quý khách<strong class="namecustomer">:{!! $order->shipping_name!!}</strong></h2>,
                            <p>Tại đia chỉ {!! $order->shipping_address !!}</p>
                            <p>Số điện thoại liên hệ{!! $order->shipping_phone !!}</p>
                            .Đây là đơn hàng của quý khách
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="example">
                                <thead>
                                    <tr class="orders">
                                        <th class="text-center">Số thự tự</th>
                                        <th class="text-center">Số lượng</th>
                                        <th class="text-center">Tên sản phẩm</th>
                                        <th class="text-center" >Giá bán</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $stt =0 ?>
                                    @foreach($content as $contents)
                                        <?php $stt= $stt+1?>
                                        <tr class="odd gradeX">
                                            <td class="text-center">{!! $stt !!}</td>
                                            <td class="center">{{ $contents->qty }}</td>
                                            <td class="center">{{ $contents->name }}</td>
                                            <td class="text-center">{{ $contents->price }}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td class="text-center">Tổng tiền</td>
                                        <td></td>
                                        <td class="text-center"></td>
                                        <td class="text-center">{!! ($subtotal) !!}</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">Mã giảm giá</td>
                                        <td></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        Thanks,<br>
                        Bấm vào để xác nhận đơn hàng
                            <a href="{{ $order->activation_link }}"><button type="button" class="btn btn-success order">Xác nhận đã đặt hàng</button></a>
                        </div>
                    </div></div>
            </div>
            <script src="{{ asset('js/app.js') }}"></script>
            <script src="{{ asset('js/myscript.js') }}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js" integrity="sha384-tIwI8+qJdZBtYYCKwRkjxBGQVZS3gGozr3CtI+5JF/oL1JmPEHzCEnIKbDbLTCer" crossorigin="anonymous"></script>
            <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
            <script>
                $(function(){
                    $("#example").dataTable();
                })
            </script>
            </body>
    </html>

@endcomponent