@extends('layouts.admin')
{{-- Content --}}
@section('content')
		{!! Form::open(array('url' => 'admin/news', 'enctype' => 'multipart/form-data')) !!}
			<input type="text" name="title" placeholder="Tên chủ đề..." style="width: 100%; margin-bottom: 15px;">
			<input type="text" name="alias" placeholder="Alias..." style="width: 100%; margin-bottom: 15px;">
			<textarea name="description" placeholder="Mô tả ngắn..." style="width: 100%; margin-bottom: 15px;"></textarea>	
			Category: <select name="news_category_id">
				@foreach($newscategorys as $newscategory)
				<option value="{!! $newscategory->newsCategory->id !!}">{!! $newscategory->newsCategory->name !!}</option>
				@endforeach				
			</select>
			Thumbnail: <input type="text" name="image" placeholder="Paste Image's link at here">
			Hoặc Upload Image: <input type="file" name="image" id="image">
			<textarea name="content"></textarea>
			<script>
       			 CKEDITOR.replace( 'content' );
    		</script>
    		<input type="hidden" name="user_id" value="{!! $userData->id !!}">	
    		<input type="button" value="Xem trước">		
    		<input type="reset" value="Reset">
    		<input type="submit" value="Đăng bài">
		{!! Form::close() !!}
@endsection

