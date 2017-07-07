@extends('layouts.app')

@section('content')
<div class="space60">&nbsp;</div>
<div class="inner-header" style="background-color: #f5f5f5;">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title"></h6>
			</div>
			<div class="pull-right">
			   
				<div class="beta-breadcrumb">
					<a href="{!! url('/') !!}">Trang Chủ</a> / 
					<a href="{!! url('/categories/{id}') !!}"> Sản Phẩm</a> 
				</div>
				
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			
					<div class="space60">&nbsp;</div>
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Sản Phẩm Mới</h4>
							<div class="space30">&nbsp;</div>

							<div class="row">
							@foreach($categories as $category)
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="{{ url('/home/san-pham/' . $category->id) }}"><img src="source/image/product/{!! $category->image !!}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{!! $category->name !!}</p>
											<p class="single-item-price">
												<span>{!! number_format($category->price) !!} VNĐ</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href=""><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{ url('/home/san-pham/' . $category->id) }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div> <!-- .beta-products-list -->
					 {!! $cate->links() !!}
						
					</div>
				</div> <!-- end section with sidebar and main content -->
			 

			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
	
@endsection