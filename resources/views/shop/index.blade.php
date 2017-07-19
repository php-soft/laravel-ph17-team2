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
    .pull-left{
        margin-right: 20px;
    }
</style>
<div class="container">
    <div class="row content">
        @include('layouts.sidebar')
        <div class="col-sm-9">
            <h6>Quản lý shop</h6>
            <a href="" class="btn btn-warning btn-sm pull-left" id="addShop" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Thêm một shop mới</a>
            <br>
            <hr>
            <div class="row">
                <!-- Advanced Tables -->                    
                <div class="panel-body" id="shops">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="example">
                            <thead>
                                <tr class="orders">
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Name Shop</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center">Address</th>
                                    <th class="text-center">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $stt =0 ?>
                                @foreach($user->shops as $shop)
                                <?php $stt= $stt+1?>
                                <tr class="odd gradeX">
                                    <td class="text-center">{{ $stt }}</td>
                                    <td class="text-center">{{$shop->name}}</td>
                                    <td class="text-center">{{$shop->description}}</td>
                                    <td class="text-center">{{$shop->address}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('shop/'.$shop->id.'/show') }}" class="btn btn-info btn-sm pull-right"><span class="glyphicon glyphicon-book"></span> Quản lý shop </a>
                                        <a href="{{ url('user/shop/'.$shop->id.'/edit') }}" class="btn btn-success btn-sm pull-right"><span class="glyphicon glyphicon-pencil"></span> Chỉnh sửa </a>
                                        <a href="{{ url('user/shop/'.$shop->id.'/delete') }}" class="btn btn-sm btn-danger pull-right"><span class="glyphicon glyphicon-trash"></span> Xóa </a>
                                    </td>                                 
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
            
            <div class="modal show" tabindex="-1" role="dialog" id="myModal">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Add New Shop</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Tên Shop của bạn: <span></span></label>
                        <input type="text" class="form-control" id="name" placeholder="Nhập tên shop của bạn" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ Shop : <span></span></label>
                        <input type="text" class="form-control" id="address" placeholder="Nhập địa chỉ shop của bạn" name="address" value="">
                    </div>
                    <div class="form-group">
                        <label for="description">Mô tả Shop :</label>
                        <textarea class="form-control" rows="5" id="description" name="description" placeholder="Nhập mô tả shop của bạn vào đây: ngành nghề, sản phẩm Shop của bạn"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="logo">Logo Shop: <span></span></label>
                        <input type="text" class="form-control" id="logo" placeholder="Cập nhật logo" name="logo" value="">
                    </div>
                    <input type="hidden" name="user_id" id="user_id" value="{{$user->id}}">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="display: none">Close</button>
                    <button type="button" class="btn btn-primary" id="addButton">Add Shop</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            {{csrf_field()}}
            <script
              src="https://code.jquery.com/jquery-3.2.1.min.js"
              integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
              crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            <script type="text/javascript">
                $('#addShop').click(function(event) {
                    $('#name').val("");
                    $('#address').val("");
                    $('#description').val("");
                    $('#logo').val("");
                    $('#user_id').val("");
                });

                $('#addButton').click(function(event) {
                    var text1 = $('#name').val();
                    var text2 = $('#address').val();
                    var text3 = $('#description').val();
                    var text4 = $('#logo').val();
                    var text5 = $('#user_id').val();
                    $.post('user/shop/5/index', {'text': text, '_token': $('input[name=_token]').val()}, function(data) {
                        console.log(data);
                        $('#shops').load(location.href + ' #shops')
                    });
                });
            </script>

        </div>
    </div>
</div>
@endsection