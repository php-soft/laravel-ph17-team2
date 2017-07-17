@extends('layouts.app')
@section('content')
	<div class="container-fluid">
	<div class="row">
	<div class="col-sm-9">
		<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Library</a></li>
  <li class="active">Data</li>
</ol>
			<article class="row">
	<div>
		<div class="col-sm-12">
			<header>
				<h5>{!! $new->title !!}</h5>		
			</header><!-- .entry-header -->
			<div>
				{!! $new->content !!}
            </div>
				<div style="text-align: right;">
					<div> 
						<span class="glyphicon glyphicon-heart"> Like:</span>
						<span class="glyphicon glyphicon-share-alt"> Share:</span>									
					</div>
					
				</div>	
                
                    
                    


                    <div class="detailBox">
    
    <h6>Bình luận</h6>
    
        <ul class="commentList" style="list-style: none;">
           		
            	@foreach($news_comment as $new_comment)
                            <li>
                            
								<div class="commenterImage" style="width:30px;
    margin-right:5px;
    height:100%;
    float:left;">
                  <span class="glyphicon glyphicon-user"></span>

                </div>
                <div>
                	<p>{{ $new_comment->name }}</p>
                    <p class="">{{ $new_comment->comments }}</p> <span class="date sub-text">on {{ $new_comment->created_at }}</span>

                </div>
                            </li>
                        @endforeach 
                </ul>
            

    


                    <form action="commentpost/{{$new->id}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="news_id" value="{{$new->id}}">    
                        <input type="text" name="name" placeholder="Tên của bạn">                  
                        <textarea name="comments" required placeholder="Bình luận của bạn về bài viết này"></textarea>
                        <button type="submit" name="add_comment" class="btn btn-primary">Gởi bình luận</button>
                    </form>

                </div>	
				
			
	</div>
	</article>	
	</div>
	<div class="col-sm-3">
		<aside>
			
			<h5>Danh mục</h5>
			<div class="list-group">

			@foreach($categories_badges as $categories_badge)
				<a href="{{ url('news/category/'.$categories_badge->newsCategory->id) }}" class="list-group-item">{!! $categories_badge->newsCategory->name !!}<span class="badge">{{ $categories_badge->categories_badge_count }}</span></a>
			@endforeach
</div>
		</aside>
	</div>				
	</div>
	</div>
@endsection