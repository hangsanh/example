
@extends('layouts.defaut')

@section('content')

<div class="row">

    <div class="col-lg-12">

        <h1 class="page-header">Dashboard</h1>

    </div>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Survey</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('articles.create') }}"> Create New Survey</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th>Time Start</th>
            <th>Deadline Time</th>
            <th>Limit People</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($articles as $article)
    <tr>
        
         <td>{{ ++$i }}</td>
         <td>{{ $article->title }}</td>
         <td>{{ $article->description }}</td>
         <td>{{ $article->time_start }}</td>
         <td>{{ $article->deadline_time }}</td>
         <td>{{ $article->limit_people }}</td>



        <td>
            <a class="btn btn-info" href="{{ route('articles.show',$article->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('articles.edit',$article->id) }}">Edit</a>

 
             {!! Form::open(['method' => 'DELETE','route' => ['articles.destroy', $article->id],'style'=>'display:inline']) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!!Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>


    {!! $articles->links() !!}

</div>



@endsection