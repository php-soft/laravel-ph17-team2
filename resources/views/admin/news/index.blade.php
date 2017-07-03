@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                News

                <div class="pull-right">
                <div class="pull-right">
                    <a href="{!! url('admin/news/create') !!}"
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
                                <th class="text-center">Title</th>
                                <th class="text-center">Alias</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Content</th>
                                <th class="text-center">Thumbnail</th>
                                <th class="text-center">User</th>
                                <th class="text-center">Category</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($news as $new)                              
                                <tr class="odd gradeX">
                                    <td class="text-center">{!! $new->id !!}</td>
                                    <td class="text-center">{!! $new->title !!}</td>
                                    <td class="text-center">{!! $new->alias !!}</td>
                                    <td class="text-center">{!! $new->description !!}</td>
                                    <td class="text-center">{!! $new->content !!}</td>
                                    <td class="text-center">{!! $new->image !!}</td>                                  
                                    <td class="text-center">{!! $new->user->name !!}</td>
                                    <td class="text-center">{!! $new->newsCategory->name !!}</td>
                                    <td class="text-center">
										<a href="{!! url('admin/news/edit', [$new->id]) !!}" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span>  Edit</a>
										<a href="{!! url('admin/news/delete', [$new->id]) !!}" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
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
