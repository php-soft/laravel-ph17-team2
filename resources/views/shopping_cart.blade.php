@extends('layouts.app')

@section('content')

<div class="inner-header" style="background-color: #f5f5f5;">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title"> Giỏ hàng </h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a href="{!! url('/home') !!}">Trang chủ</a> / <span> Giỏ hàng</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="container">
	<div id="content">
		<div class="cart-info">
			<table class="table table-striped table-bordered shopping-qty">
				<tr>
					<th class="image">Hình ảnh</th>
					<th class="name">Tên sản phẩm</th>
					<th class="quantity">Số lượng</th>
					<th class="total">Chức năng</th>
					<th class="price">Đơn giá</th>
					<th class="total">Tổng tiền</th>
				</tr>
				@foreach($content as $contents)
				{{Form::open(['route'=>['shoppingEditQty', $contents->id,$contents->qty], 'method'=>'put', 'class'=>'form-status'])}}
						<tr>
							<td class="image"><a href="#"><img title="product" alt="" src="" height="50" width="50"></a></td>
							<td  class="name"><a href="#">{!! $contents->name !!}</a></td>
							<td class="quantity"><input class="qty" type="text" size="1" value='{!! $contents->qty !!}' name="quantity[40]" />
							</td>
							<td class="total">
								<a href="#"  class="updateCart" id="{!! $contents->rowId  !!}" ><img class="tooltip-test" data-original-title="Cập nhật" src="{!! asset('/user/img/update.png') !!}" alt=""></a>
								<a href="{!! url('xoa-san-pham',['id'=>$contents->rowId]) !!}"><img class="tooltip-test" data-original-title="Xóa"  src="{!! asset('/user/img/remove.png') !!}" alt=""></a>
							</td>
							<td class="price">{!! number_format($contents->price,0,",",".") !!} Đ </td>
							<td class="total">{!! number_format($contents->price*$contents->qty,0,",",".") !!} Đ </td>
						</tr>
				{{ Form::close() }}
				@endforeach
			</table>
		</div>
		<div class="container">
			<div class="pull-right">
				<div class="span4 pull-right">
					<table class="table table-striped table-bordered ">
						<tr>
							<td><span class="extra bold totalamout">Tổng tiền thanh toán :</span></td>
							<td><span class="bold totalamout">{!! ($total) !!}</span></td>
						</tr>
					</table>
					<a href="{!! url('dat-hang') !!}">
						<input type="submit" value="Đặt hàng" class="btn btn-orange pull-right">
					</a>
					<a href="{!! url('/home') !!}">
						<input type="submit" value="Tiếp tục mua sắm" class="btn btn-orange pull-right mr10" >
					</a>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="clearfix"></div>
</div> <!-- #content --> <!-- .container -->
@endsection
