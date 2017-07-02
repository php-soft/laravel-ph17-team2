@extends('layouts.admin')
{{-- Content --}}
@section('content')
		<!-- Tabs -->
<ul class="nav nav-tabs">
	<li class="active"><a href="#tab-general" data-toggle="tab"> Creat News</a></li>
</ul>
<!-- ./ tabs -->
@if (isset($news))
{!! Form::model($news, array('route' => array('news.update', $news->id), 'method' => 'PATCH')) !!}
@else
{!! Form::open(array('url' => 'admin/news')) !!}
@endif
	<!-- Tabs Content -->
	<div class="tab-content">
		<!-- General tab -->
			<div class="tab-pane active" id="tab-general">				

				<div class="form-group">
				  {!! Form::label('tile', 'Title') !!}
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
				    {!! Form::text('image', null, ['class' => 'form-control', 'placeholder' => 'Paste link image thumbnail...']) !!}
				  </div>
				</div>

				<div class="form-group">
				  {!! Form::label('user_id', 'User') !!}
				  <div class="form-controls">
				    {!! Form::text('user_id', $userData->id, ['class' => 'form-control', 'readonly' => true]) !!}
				  </div>
				</div>

				<div class="form-group">
					<div class="form-controls">
				  {!! Form::select('news_category_id', $arrnewscategory, null, ['placeholder' => 'Select news category']) !!}					
				  </div>
				</div>

				<!-- <div class="form-group">
				  {!! Form::label('news_category_id', 'New Category') !!}
				  <div class="form-controls">
				    {!! Form::text('news_category_id', null, ['class' => 'form-control']) !!}
				  </div>
				</div> -->
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
					@if (isset($news)) 
						{{ 'Edit' }}
					@else 
						{{ 'Create' }}
				    	@endif
				</button>
			</div>
		</div>
		<!-- ./ form actions -->

{!! Form::close() !!}
@endsection

