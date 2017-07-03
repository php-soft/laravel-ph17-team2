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
<<<<<<< HEAD
							<div class="beta-select">
								<i class="fa fa-shopping-cart btn btn-danger" onclick="newCart()">Giỏ hàng (<span id="cart-count">{!! Cart::count() !!}</span>)</i>
							</div>
							<script>
                                function newCart() {
                                    window.location.assign("{!! url('/cart/show') !!} ")
                                }
							</script>
							</a>
						</div>
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
                                        <a href="{{ url('user/profile/'.Auth::user()->id.'/index')}}">Quản lý tài khoản
                                        </a>
                                        <a href="{{ url('user/shop/'.Auth::user()->id.'/index')}}">Quản lý Shop
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
				
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="#">Sản phẩm</a>
							<ul class="sub-menu">
								@foreach ($categories as $category)
								<li><a href="">{!! $category->name !!}</a>
									<ul class="sub-menu"  >
										@foreach ($category->getCategoriesByParent($category->id) as $subcat)
					                    	<li><a href="{{!! URL('categories',[$subcat->id]) !!}}">{!! $subcat->name !!}</a>
					                   	
										<ul class="sub-menu" >
											@foreach ($subcat->getCategoriesByParent($subcat->id) as $subcat1)
						                    	<li><a href="{{!! URL('categories',[$subcat1->id]) !!}}">{!! $subcat1->name !!}</a>
											     
						                    	</li>
					                		@endforeach
						                </ul>
						               
					                    	</li>
				                		@endforeach
					                </ul>
				                </li>
				                @endforeach
				                
								
							</ul>
						</li>
					
						
						<li><a href="{{ url('/')}}">Trang chủ</a></li>
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
