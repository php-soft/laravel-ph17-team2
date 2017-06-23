	<div id="header">
		<div class="">
			<div class="container">
				
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						<li><a href="#"><i class="fa fa-user"></i>Hướng dẫn</a></li>
						<li><a href="#">Kiểm tra đơn hàng</a></li>
						<li><a href="wishlist.html">Yêu thích </a></li>
						<li><a href="#">Mở shop</a></li>
					</ul>
				</div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="/">
					        <div>
					        	<input type="text" class="form-control" size="50" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
					        </div>
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>
					<!-- headr cart -->
					<div class="beta-comp">
						<div class="cart">
							<div class="beta-select">
							
								<i class="fa fa-shopping-cart btn btn-danger"> Giỏ hàng 0 </i>  
							</div>
							<div class="beta-dropdown cart-body">
								<div class="cart-item">
									 <div class="media">
										<a class="pull-left" href="#"><img src="source/assets/dest/images/products/cart/1.png" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Sample Woman Top</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div> 
								</div>

							    <div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="source/assets/dest/images/products/cart/2.png" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Sample Woman Top</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div> 

								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="source/assets/dest/images/products/cart/3.png" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Sample Woman Top</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div> 

								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">$34.55</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div> 
						</div> <!-- .cart  -->
					</div>
					<div class="beta-comp">
					
					@if (Auth::guest())
                            <button class="btn btn-primary"><a href="{{ route('login') }}" style="color:white;">Đăng nhập</a></button>
                            <button class="btn btn-success"><a href="{{ route('register') }}" style="color:white;">Đăng kí</a></button>
                    @else
                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
					</div>
				</div>
				<div class="space60">&nbsp;</div>
			<div class="clearfix"></div> 
		</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						
						<li><a href="#">Sản phẩm</a>
							<ul class="sub-menu">
								<li><a href="product_type.html">Sản phẩm 1</a>
									<ul class="sub-menu">
					                    <li><a href="#">sản phẩm 1.1</a></li>
					                    <li><a href="#">sanr phẩm 1.2</a></li>
					                    <li><a href="#">sản phẩm 1.3</a></li>
					                </ul>
				                </li>
								<li><a href="product_type.html">Sản phẩm 2</a>
									<ul class="sub-menu">
					                    <li><a href="#">sản phẩm 2.1</a></li>
					                    <li><a href="#">sản phẩm 2.2</a></li>
					                    <li><a href="#">sản phẩm 2.3</a></li>
					                </ul>
								</li>
								<li><a href="product_type.html">Sản phẩm 3</a>
									<ul class="sub-menu">
					                    <li><a href="#">sản phẩm 3.1</a></li>
					                    <li><a href="#">sanr phẩm 3.2</a></li>
					                    <li><a href="#">sanr phẩm 3.3</a></li>
					                </ul>
					            </li>
							</ul>
						</li>
						<li><a href="">Trang chủ</a></li>
						<li><a href="voucher.html">Khuyến mãi</a></li>
						<li><a href="#">Bán chạy</a></li>
						<li><a href="about.html">Giới thiệu</a></li>
						<li><a href="#">Tin tức</a></li>
						<li><a href="contacts.html">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
