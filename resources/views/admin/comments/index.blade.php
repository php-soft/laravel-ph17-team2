@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Comments

                <div class="pull-right">
                <div class="pull-right">
                    <a href="{!! url('admin/newscategory/create') !!}"
                       class="btn btn-sm  btn-primary iframe"><span
                                class="glyphicon glyphicon-plus-sign"></span>New</a>
                </div>
            </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="example">
                        <thead>
                            <tr class="orders">
                                <th class="text-center">ID</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Comments</th>
                                <th class="text-center">News ID</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comments as $comment)
                                <tr class="odd gradeX">
                                    <td class="text-center">{!! $comment->id !!}</td>
                                    <td class="text-center">{!! $comment->name !!}</td>
                                    <td class="text-center">{!! $comment->comments !!}</td>
                                    <td class="text-center">{!! $comment->news_id !!}</td>
                                    <td class="text-center">
                                    	{!! Form::open(['route' => ['comments.update', $comment->id], 'method' => 'post']) !!}
                                    	
                                    	<input type="submit" name="status" value="{{ ($comment->status == 'Show')? 'Hidden' : 'Show'}}">
                                    		
										<a href="{!! url('admin/comments/delete', [$comment->id]) !!}" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                    	{!! Form::close() !!}										
									</td>                                 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!--End Advanced Tables -->
    </div>
</div>
@endsection
