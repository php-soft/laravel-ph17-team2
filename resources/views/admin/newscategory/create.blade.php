@extends('layouts.admin')
{{-- Content --}}
@section('content')
		<!-- Tabs -->
<ul class="nav nav-tabs">
	<li class="active"><a href="#tab-general" data-toggle="tab"> Creat News Category</a></li>
</ul>
<!-- ./ tabs -->
@if (isset($newscategory))
{!! Form::model($newscategory, array('route' => array('newscategory.update', $newscategory->id), 'method' => 'PATCH')) !!}
@else
{!! Form::open(array('url' => 'admin/newscategory')) !!}
@endif
	<!-- Tabs Content -->
	<div class="tab-content">
		<!-- General tab -->
			<div class="tab-pane active" id="tab-general">				

				<div class="form-group">
				  {!! Form::label('name', 'Title') !!}
				  <div class="form-controls">
				    {!! Form::text('name', null, ['class' => 'form-control']) !!}
				  </div>
				</div>

				<div class="form-group">
				  {!! Form::label('alias', 'Alias') !!}
				  <div class="form-controls">
				    {!! Form::text('alias', null, ['class' => 'form-control']) !!}
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

{!! Form::close() !!}
@endsection

