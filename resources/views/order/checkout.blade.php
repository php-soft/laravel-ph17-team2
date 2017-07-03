@extends('layouts.app')

@section('content')
<div class="shopping-cart-area">
    <div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				@if(count($errors)>0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{!! $error !!}</li>
							@endforeach
						</ul>
					</div>
				@endif()
				@if(Session::has('success'))
					<div class="alert alert-success">
						{{Session::get('success')}}
					</div>
				@endif
				<div class="s-cart-all">
					<div class="checkoutsteptitle down">Bước 1: Xác nhận đơn hàng</div>
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover" id="example">
							<tr>
								<th>STT</th>
								<th>Hình ảnh</th>
								<th>Tên sản phẩm </th>
								<th>Số lượng</th>
								<th>Đơn giá</th>
								<th>Tổng tiền</th>
							</tr>
							<?php
							$stt=0;
							?>
							@foreach($content as $contents)
							<?php $stt=$stt+1 ?>
								<tr>
									<td class="sop-icon">
										{!! $stt  !!}
									</td>
									<td class="sop-cart">{!! $contents->name  !!}</td>
									<td class="sop-cart">{!! $contents->name  !!}</td>
									<td class="sop-cart">{!! $contents->qty  !!}</td>
									<td class="sop-cart">{!! $contents->price  !!}</td>
									<td class="sop-cart">{!! $contents->price* $contents->qty  !!}</td>
								</tr>

							@endforeach
							<tr>
								<td colspan="5">Tổng tiền<br>
								<td>
									<span>{!! $subtotal !!}</span><br>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="checkoutsteptitle down">Bước 2: Nhập thông tin khách hàng</div>
		<div style="clear: both;"></div>
		<div class="checkoutstep" style="display: block;">
			{!! Form::open(['url' => '/order']) !!}
			@if(Auth::check()==false)
			<div class="col-xs-6">
					<div class="span4">
						<div class="control-group">
							{!! Form::label('name', 'Họ tên người mua :') !!}
							<div class="controls">
								{!! Form::text('name', null, ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="control-group">
							{!! Form::label('phone', 'Số điện thoại người mua :') !!}
							<div class="controls">
								{!! Form::text('phone', null, ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="control-group">
							{!! Form::label('address', 'Đia chỉ người nhận :') !!}
							<div class="controls">
								{!! Form::text('address', null, ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="control-group">
							{!! Form::label('email', 'Đia chỉ email người mua :') !!}
							<div class="controls">
							{!! Form::text('email', null, ['class' => 'form-control']) !!}
							</div>
						</div>

					</div>
			</div>
			<div  class="col-xs-6">
				<div class="span4">
					<div class="control-group">
						{!! Form::label('shipping_address', 'Đia chỉ người nhận :') !!}
						<div class="controls">
							{!! Form::text('shipping_address', null, ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="control-group">
						{!! Form::label('shipping_name', 'Họ tên người nhận :') !!}
						<div class="controls">
							{!! Form::text('shipping_name', null, ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="control-group">
						{!! Form::label('shipping_phone', 'Số điện thoại người nhận :') !!}
						<div class="controls">
							{!! Form::text('shipping_phone', null, ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="control-group">
						{!! Form::label('voucher_code', 'Mã khuyến mãi :') !!}
						<div class="controls">
							{!! Form::text('voucher_code', null, ['class' => 'form-control']) !!}
						</div>
					</div>
				</div>
			</div>
		@else
		<div  class="col-xs-6">
			<div class="span4">
				<div class="control-group">
					<label for="text">Họ tên người mua : <span></span></label>
					<input type="text" class="form-control" id="name" placeholder="Update tên" name="name" value="{{Auth::user()->name}}">
				</div>
				<div class="control-group">
					<label for="email">Email : <span></span></label>
					<input type="email" class="form-control" id="email" placeholder="Update Email" name="email" value="{{Auth::user()->email}}">
				</div>
				<div class="control-group">
					<label for="phone">Số điện thoại người mua : <span></span></label>
					<input type="text" class="form-control" id="phone" placeholder="Update điện thoại" name="phone" value="{{Auth::user()->profile['phone']}}">
				</div>
				<div class="control-group">
					<label for="address">Đia chỉ email người mua : <span></span></label>
					<input type="text" class="form-control" id="address" placeholder="Update địa chỉ" name="address" value="{{Auth::user()->profile['address']}}">
				</div>
			</div>
		</div>
		<div  class="col-xs-6">
			<div class="span4">
				<div class="control-group">
					{!! Form::label('shipping_phone', 'Số điện thoại người nhận :') !!}
					<div class="controls">
						{!! Form::text('shipping_phone', null, ['class' => 'form-control']) !!}
					</div>
				</div>
				<div class="control-group">
					{!! Form::label('voucher_code', 'Mã khuyến mãi :') !!}
					<div class="controls">
						{!! Form::text('voucher_code', null, ['class' => 'form-control']) !!}
					</div>
				</div>
				<div class="control-group">
					{!! Form::label('shipping_address', 'Đia chỉ người nhận :') !!}
					<div class="controls">
						{!! Form::text('shipping_address', null, ['class' => 'form-control']) !!}
					</div>
				</div>
				<div class="control-group">
					{!! Form::label('shipping_name', 'Họ tên người nhận :')  !!}
					<div class="controls">
						{!! Form::text('shipping_name', null, ['class' => 'form-control']) !!}
					</div>
				</div>
			</div>
		</div>


		@endif
		<div style="clear: both;"></div>
	</div>
	<div class="checkoutsteptitle down">Bước 3: Đặt Hàng</div>
			{!! Form::submit('Đặt hàng', ['class' => 'btn btn-primary order']) !!}
	{{ Form::close() }}
	</div>
</div>
@endsection
