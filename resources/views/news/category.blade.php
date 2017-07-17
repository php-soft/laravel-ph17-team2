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
				<img class="img-responsive" width="150" height="115" src="{!! $new->image !!}">
				</a>
					
				</figure>
		<div class="col-sm-9">
			<header>

				<h5><a href="{{ url('news/'.$new->alias) }}">{!! $new->title !!}</a></h5>		
				</header>

			<div>{!! $new->description !!}</div>

			
				<div>
					<div> 
						<span class="glyphicon glyphicon-user"> Post: {!! $new->user->name !!}</span>
						<span class="glyphicon glyphicon-calendar"> On: {!! $new->created_at!!}</span>
						<span class="glyphicon glyphicon-calendar"> Views: {!! $new->views!!}</span>
						<span class="glyphicon glyphicon-folder-open"> Category: {!! $new->newsCategory->name !!}</span>				
					</div>
				</div>

		<footer>
			<a href="{{ url('news/'.$new->alias) }}"><span>Read more</span></a>			
		</footer>
	</div>
</div></article>
		@endforeach
		
<nav style="text-align: center;">
  {{ $news->links() }}
</nav>
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
