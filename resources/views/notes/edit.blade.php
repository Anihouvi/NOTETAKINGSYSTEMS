@extends('layouts.base')

@section('content')
<div class="container text-center">
    <form action="{{route('notes.update',$note->id)}}" method="POST">
        <div class="form-group">
            <label for="title">
                Note Title
            </label>
            <input class="form-control" name="title" placeholder="Note Title" type="text" value="{{ $note->title }}">
            
        </div>

        <div class="form-group">
            <label for="body">
                Notes
            </label>
            <input class="form-control" name="body" placeholder="Notes" type="textarea" rows="3" value="{{ $note->body }}">
        </div>
        {{-- <input type="hidden" name="notebook_id" value="{{$note->notebook_id}}"> --}}
{{csrf_field()}}
        <input type="submit" class="btn btn-primary" value="Done">
    </form>
</div>
@endsection
