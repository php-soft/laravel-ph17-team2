@extends('layouts.app')

@section('content')
<div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4>Tìm Kiếm</h4>
                             <div class="space30">&nbsp;</div>

                            <div class="row">
                                @foreach($sp as $sp)
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="{{ url('/home/san-pham/' . $sp->id) }}"><img src="upload/product/{!! $sp->image !!}" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title" style="text-transform: capitalize;">{!! $sp->name !!}</p>
                                                <p class="single-item-price">
                                                    <span>{!!number_format ($sp->price) !!} VNĐ</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="javascript:void(0)"><i class="fa fa-shopping-cart" id={!! $sp->id !!}></i></a>
                                                <a class="beta-btn primary" href="{{ url('/home/san-pham/' . $sp->id) }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div> <!-- .beta-products-list -->
						
                        
                   </div>
				</div>
				
</div>
            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div> <!-- .container -->
				                  
@endsection