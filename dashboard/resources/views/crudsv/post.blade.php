@extends('layouts.defaut')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
    @if(!empty($posts))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Surveys List </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('crudsv.add') }}"> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th>Surveys_id</th>
                        <th>Title</th>
                        <th>Version</th>
                        <th>Token</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Hidden Open</th>
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($crdsv as $post)
                        <tr>
                            <td class="table-text">
                                <div>{{$post->surveys_id}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->title}}</div>
                            </td>
                                <td class="table-text">
                                <div>{{$post->version}}</div>
                            </td>
                            </td>
                                <td class="table-text">
                                <div>{{$post->token}}</div>
                            </td>
                            </td>
                                <td class="table-text">
                                <div>{{$post->created_at}}</div>
                            </td>
                            </td>
                                <td class="table-text">
                                <div>{{$post->updated_at}}</div>
                            </td>
                            <td>
                                
                                <a href="{{ route('crudsv.edit', $post->id) }}" class="label label-warning">Edit</a>
                                <a href="{{ route('crudsv.delete', $post->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    </div>
</div>
@endsection