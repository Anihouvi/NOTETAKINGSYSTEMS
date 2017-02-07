@extends('layouts.base')

@section('content')
<div class="container">
    <h1 class="pull-xs-left">
        Notes
    </h1>
    <div class="pull-xs-right">
        <a class="btn btn-primary" href="{{route('createNote',$notebook->id)}}" role="button">
            New Note +
        </a>
        <br><br>
        <p>
        <a class="btn btn-primary" href="{{route('notebooks.index')}}" role="button"> Back to NoteBooks</a>
        </p>
    </div>
    <div class="clearfix">
    </div>
    <!-- notes -->
    <div class="card-block">
                    <!-- <a href="{{route('notebooks.show',$notebook->id)}}"> -->
                        <h1 class="pull-xs-left">
                            {{$notebook->name}}
                        </h1>
                    </a>
                </div>
    <div class="list-group notes-group">
        @foreach($notes as $note)
        <div class="card card-block">
            <a href="{{route('notes.show',$note->id)}}"><h4 class="card-title">
                {{ucfirst($note->title)}}
            </h4></a>
            <p class="card-text">
                {{str_limit($note->body,30)}}
            </p>
            <a class="btn btn-sm btn-info pull-xs-left" href="{{route('notes.edit',$note->id)}}">
                Edit
            </a>

            <a class="btn btn-sm btn-info pull-xs-left" href="{{route('notes.show',$note->id)}}">
                View Note
            </a>
            <form class="pull-xs-right" action="{{route('notes.destroy',$note->id)}}" method="POST">
                {{csrf_field()}}
            {{method_field('DELETE')}}
                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                
            </form>
        </div>
        @endforeach
    </div>
</div>
@endsection
