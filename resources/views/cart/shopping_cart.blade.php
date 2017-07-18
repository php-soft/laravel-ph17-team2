@extends('layouts.app')

@section('content')

<div class="inner-header" style="background-color: #f5f5f5;">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title"> Giỏ hàng </h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a href="{!! url('') !!}">Trang chủ</a> / <span> Giỏ hàng</span>
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
					<th class="image">STT</th>
					<th class="image">Hình ảnh</th>
					<th class="name">Tên sản phẩm</th>
					<th class="quantity">Số lượng</th>
					<th class="total">Chức năng</th>
					<th class="price">Đơn giá</th>
					<th class="total">Tổng tiền</th>
					<th class="total">Shop</th>
				</tr>
				<?php $STT=0;?>
				@foreach($content as $contents)
					<?php $STT=$STT+1;
                   			 $countt=$contents->price*$contents->qty;
					?>
				{{Form::open(['route'=>['shoppingEditQty', $contents->id,$contents->qty,$contents->rowId], 'method'=>'put', 'class'=>'form-status'])}}
						<tr id="content{{$contents->rowId}}">
							<td class="id">{!! $STT !!}</td>
							<td class="image"><img title="product" alt="" src="{!! asset('/upload/'.$contents->options->shopImages) !!}" height="50" width="50"></td>
							<td  class="name"><a href="#">{!! $contents->name !!}</a></td>
							<td class="quantity" id="quantity" ><input  class="qty" type="number" size="1" value='{!! $contents->qty !!}' id="quantity" name="quantity[40]" />
							</td>
							<td class="total">
								<input  class="id" type="hidden" size="1" value='{!! $contents->id !!}' id="quantity" name="quantity[40]" />
								<a href="#"  class="updateCart" id="{!! $contents->rowId  !!}" value="add" ><img class="tooltip-test" data-original-title="Cập nhật" src="{!! asset('/user/img/update.png') !!}" alt=""></a>
								<a href="#"  class="deleteeCart" id="{!! $contents->rowId  !!}" ><img class="tooltip-test" data-original-title="Xóa"  src="{!! asset('/user/img/remove.png') !!}" alt=""></a>
							</td>
							<td class="total" id="pricee" >{!! number_format($contents->price,0,",",".") !!}</td>
                            <td class="total" id="totalprice{{ $contents->rowId }}" >{{$contents->subtotal(0)}} </td>
							<td>{!! $contents->options->shop !!}</td>
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
							<td><span class="bold" id="totalamout">{!! ($subtotal) !!}</span></td>
						</tr>
					</table>
					<a href="{!! url('order') !!}">
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
