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
		@foreach($news as $new)
			<article class="row">
	<div>


			<figure class="col-sm-3">
				<a href="{{ url('news/'.$new->alias) }}">
				<img class="img-responsive" width="150" height="115" src="https://ld-wp.template-help.com/wordpress_58404_v4/wp-content/uploads/2016/02/LeBron_James_1-150x115.jpg" alt="LeBron James">
				</a>
					
				</figure>


		<div class="col-sm-9">
			<header>

				<h5><a href="{{ url('news/'.$new->alias) }}">{!! $new->title !!}</a></h5>		
				</header><!-- .entry-header -->

			<div>
				{!! $new->description !!}			</div><!-- .entry-content -->

			
				<div>
					<div> 
						<span class="glyphicon glyphicon-user"> Post: {!! $new->user->name !!}</span>
						<span class="glyphicon glyphicon-calendar"> On: {!! $new->created_at!!}</span>
						<span class="glyphicon glyphicon-folder-open"> Category: {!! $new->newsCategory->name !!}</span>				
					</div>
				</div>

			

		<footer>
			<a href="{{ url('news/'.$new->alias) }}"><span>Read more</span></a>			
		</footer>
	</div>
</div></article>
		@endforeach
		
<nav aria-label="Page navigation" style="text-align: center;">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
	</div>
	<div class="col-sm-3">
		<aside>
			
			<h5>Danh mục</h5>
			<div class="list-group">
			@foreach($categories_badges as $categories_badge)
				<a href="{{ url('news/'.$categories_badge->newsCategory->alias) }}" class="list-group-item">{!! $categories_badge->newsCategory->name !!}<span class="badge">{{ $categories_badge->categories_badge_count }}</span></a>
			@endforeach
</div>
		</aside>
	</div>
		


	
		
	</div>
		</div>
@endsection
