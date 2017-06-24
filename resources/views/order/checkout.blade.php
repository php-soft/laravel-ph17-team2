@extends('layouts.app')

@section('content')
	<div class="inner-header">
		<div class="container">
		<div id="content">
				<div class="row">
					<h4>Đặt hàng</h4>
					<div class="col-sm-6">
						{{Form::open(['method'=>'put', 'class'=>'form-status'])}}
							<div class="your-order-head"><h5>B1 Nhập thông tin khách hàng</h5></div>
							<div class="space20">&nbsp;</div>
							@if (Auth::check())
							<div class="form-block">
								<label for="name">Họ tên người nhận <span>*</span></label>
								<input type="text" id="name" placeholder="Họ tên" required>
							</div>
							<div class="form-block">
								<label for="email">Email <span>*</span></label>
								<input type="email" id="email" required placeholder="expample@gmail.com">
							</div>

							<div class="form-block">
								<label for="adress">Địa chỉ <span>*</span></label>
								<input type="text" id="adress" placeholder="" required>
							</div>


							<div class="form-block">
								<label for="phone">Điện thoại <span>*</span></label>
								<input type="text" id="phone" required>
							</div>

							<div class="form-block">
								<label for="notes">Mã Code</label>
								<input type="text" id="phone">
							</div>
							@else
								<div class="form-block">
									<label for="name">Họ tên <span>*</span></label>
									<input type="text" id="name" placeholder="Họ tên" required>
								</div>
								<div class="form-block">
									<label for="name">Họ tên người nhận <span>*</span></label>
									<input type="text" id="name" placeholder="Họ tên" required>
								</div>
								<div class="form-block">
									<label for="email">Email <span>*</span></label>
									<input type="email" id="email" required placeholder="expample@gmail.com">
								</div>

								<div class="form-block">
									<label for="adress">Địa chỉ <span>*</span></label>
									<input type="text" id="adress" placeholder="" required>
								</div>


								<div class="form-block">
									<label for="phone">Điện thoại <span>*</span></label>
									<input type="text" id="phone" required>
								</div>

								<div class="form-block">
									<label for="notes">Mã Code</label>
									<input type="text" id="phone">
								</div>
							@endif
						</div>
						<div class="col-sm-6">
							<div class="your-order">
								<div class="your-order-head"><h5>B2 Xác nhận đơn hàng </h5></div>
								<div class="your-order-body" style="padding: 0px 10px">
									<div class="your-order-item">
										<div>
											@foreach($content as $contents)
												<div class="media">
													<img width="25%" src="assets/dest/images/shoping1.jpg" alt="" class="pull-left">
													<div class="media-body">
														<p class="font-large">{!! $contents->name !!}</p>
														<span class="color-gray your-order-info">Color: Red</span>
														<span class="color-gray your-order-info">Size: M</span>
														<span class="color-gray your-order-info">Qty: {!! $contents->qty !!}</span>
													</div>
												</div>
											@endforeach
										<!-- end one item -->
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="your-order-item">
										<div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
										<div class="pull-right"><h5 class="color-black">{!! ($total) !!}</h5></div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="your-order-head"><h5>B3 Hình thức thanh toán</h5></div>

								<div class="your-order-body">
									<ul class="payment_methods methods">
										<li class="payment_method_bacs">
											<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text="">
											<label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
											<div class="payment_box payment_method_bacs" style="display: block;">
												Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
											</div>
										</li>

										<li class="payment_method_cheque">
											<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="">
											<label for="payment_method_cheque">Chuyển khoản </label>
											<div class="payment_box payment_method_cheque" style="display: none;">
												Chuyển tiền đến tài khoản sau:
												<br>- Số tài khoản: 123 456 789
												<br>- Chủ TK: Nguyễn A
												<br>- Ngân hàng ACB, Chi nhánh TPHCM
											</div>
										</li>

									</ul>
								</div>

							</div> <!-- .your-order -->
						</div>
				</div>
			</div>
				<div class="your-order-head dat-hang"><h5>B4 Đặt hàng</h5></div>
						<button type="submit" class="btn-success btn" name="submit">Đặt hàng</button>
				</div>
			{{ Form::close() }}
		</div> <!-- #content -->

	</div> <!-- .container -->
	</div>
@endsection
