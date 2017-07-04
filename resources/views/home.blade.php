@extends('layouts.app')

@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <div class="bannercontainer" >
                <div class="banner" >
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>

                            <!-- Wrapper for slides -->
                 <div class="carousel-inner">
                        <div class="item active">
                            <img src="source/image/slide/slider-1.jpg " alt="Chicago" alt="Los Angeles" style="width:1400px; height:500px;">
                        <div class="carousel-caption">
                            <h3 style="color:#ca2a04;">Fs Là Nơi Tốt Nhất Để Mua Sắm!</h3>
                            <p style="color:#57a7c6">Luôn vui vẻ!</p>
                        </div>
                    </div>
                        <div class="item">
                            <img src="source/image/slide/slider-2.jpg" alt="Chicago" style="width:1400px; height:500px;">
                             <div class="carousel-caption">
                                <h3 style="color:#ca2a04;">Fs Style</h3>
                                <p style="color:#57a7c6"> Fs style, Cảm ơn!</p>
                            </div>
                        </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right"></span>
                              <span class="sr-only">Next</span>
                            </a>                                 
                            </ul>
                            </div>
                                </div>
                                    <div class="tp-bannertimer"></div>
                                        </div>
                                        
                            </div>
        <!--slider-->
                            </div>

    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4>Sản Phẩm Mới</h4>
                             <div class="space30">&nbsp;</div>

                            <div class="row">
                                @foreach($shopProducts as $shopProduct)
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href=""><img src="source/image/product/{!! $shopProduct->product->image !!}" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title" style="text-transform: capitalize;">{!! $shopProduct->product->name !!}</p>
                                                <p class="single-item-price">
                                                    <span>{!!number_format ($shopProduct->product->price) !!} VNĐ</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="javascript:void(0)"><i class="fa fa-shopping-cart" id={!! $shopProduct->product->id !!}></i></a>
                                                <a class="beta-btn primary" href="{{ url('/home/san-pham/' . $shopProduct->id) }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div> <!-- .beta-products-list -->

                        <div class="space50">&nbsp;</div>

                        <div class="beta-products-list">
                            <h4>Sản Phẩm Bán Chạy</h4>
                            <div class="space30">&nbsp;</div>
                       
                            <div class="row">
                            @foreach($sp as $sp)
                                <div class="col-sm-3">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href=""><img src="source/image/product/{!! $sp->product->image !!}" alt=""></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title" style="text-transform: capitalize;">{!! $sp->product->name !!}</p>
                                            <p class="single-item-price">
                                                <span>{!! number_format ($sp->product->price) !!} VNĐ</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{ url('/home/san-pham/' . $sp->id) }}">Chi tiết<i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                  
                                </div>
                              @endforeach  
                   </div>

                   </div>
                   
              

</div>
            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection
