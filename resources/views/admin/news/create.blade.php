@extends('layouts.admin')
{{-- Content --}}
@section('content')
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab-general" data-toggle="tab"> Creat News</a></li>
		</ul>
		@if (isset($news))
		{!! Form::model($news, array('route' => array('news.update', $news->id), 'method' => 'PATCH')) !!}
		@else
		{!! Form::open(array('url' => 'admin/news', 'enctype' => 'multipart/form-data')) !!}
		@endif
		<!-- Tabs Content -->
	<div class="tab-content">
		<!-- General tab -->
			<div class="tab-pane active" id="tab-general">				

				<div class="form-group">
				  {!! Form::label('title', 'Tiêu đề bài viết') !!}
				  <div class="form-controls">
				    {!! Form::text('title', null, ['class' => 'form-control']) !!}
				  </div>
				</div>

				<div class="form-group">
				  {!! Form::label('alias', 'Alias') !!}
				  <div class="form-controls">
				    {!! Form::text('alias', null, ['class' => 'form-control']) !!}
				  </div>
				</div>

				<div class="form-group">
				  {!! Form::label('description', 'Description') !!}
				  <div class="form-controls">
				    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
				  </div>
				</div>

				<div class="form-group">
				  {!! Form::label('content', 'Content') !!}
				  <div class="form-controls">
				    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
				    <script>
       			 	CKEDITOR.replace( 'content' );
    		</script>
				  </div>
				</div>

				<div class="form-group">
				  {!! Form::label('image', 'Thumbnail') !!}
				  <div class="form-controls">
				    {!! Form::text('image', null, ['class' => 'form-control']) !!}
				  </div>
				</div>

				<div class="form-group">
				  {!! Form::label('user_id', 'User ID') !!}
				  <div class="form-controls">
				    {!! Form::text('user_id', $userData->id, ['class' => 'form-control', 'readonly' => true]) !!}
				  </div>
				</div>

				<div class="form-group">
				  {!! Form::label('news_category_id', 'New Category ID') !!}
				  <div class="form-controls">
				    {!! Form::text('news_category_id', null, ['class' => 'form-control']) !!}
				  </div>
				</div>
				


			</div>
			<!-- ./ general tab -->
		</div>
		<!-- ./ tabs content -->

		<!-- Form Actions -->

		<div class="form-group">
			<div class="col-md-12">
				<button type="reset" class="btn btn-sm btn-warning close_popup">
					<span class="glyphicon glyphicon-ban-circle"></span> Cancel
				</button>
				<button type="reset" class="btn btn-sm btn-default">
					<span class="glyphicon glyphicon-remove-circle"></span> Reset
				</button>
				<button type="submit" class="btn btn-sm btn-success">
					<span class="glyphicon glyphicon-ok-circle"></span> 
					@if (isset($newscategory)) 
						{{ 'Edit' }}
					@else 
						{{ 'Create' }}
				    	@endif
				</button>
			</div>
		</div>
		<!-- ./ form actions -->
		<!------------------
			<input type="text" name="title" placeholder="Tên chủ đề..." style="width: 100%; margin-bottom: 15px;">
			<input type="text" name="alias" placeholder="Alias..." style="width: 100%; margin-bottom: 15px;">
			<textarea name="description" placeholder="Mô tả ngắn..." style="width: 100%; margin-bottom: 15px;"></textarea>	
			Category: <select name="news_category_id">
			@if (isset($news))
				<option value="{!! $news->id !!}">{!! $news->name !!}</option>				
			@else
				@foreach($newscategorys as $newscategory)
				<option value="{!! $newscategory->newsCategory->id !!}">{!! $newscategory->newsCategory->name !!}</option>
				@endforeach		
			@endif		
			</select>
			Thumbnail: <input type="text" name="image" placeholder="Paste Image's link at here">			
			<textarea name="content"></textarea>
			<script>
       			 CKEDITOR.replace( 'content' );
    		</script>
    		<input type="hidden" name="user_id" value="{!! $userData->id !!}">	
    		<input type="button" value="Xem trước">		
    		<input type="reset" value="Reset">
    		<input type="submit" value="Đăng bài"> -->
		{!! Form::close() !!}
@endsection

