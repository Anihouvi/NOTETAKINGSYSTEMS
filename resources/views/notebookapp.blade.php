@extends('layouts.base')

@section('content')
	<div class="jumbotron">
            <h1>Notebook</h1>
            <center>
            <br><br><br>
            <img src="dist/img/unisalogo.png" width="450px" height="100px" >
            <!-- <h2>Note Taking System</h2> -->
            
            <br><br><br>
            <p>Store and organise your thoughts in notebook and NoteBook app makes this easier than ever!!</p>
            <br><br>

            <p>
                <a class="btn btn-lg btn-primary" href="{{route('notebooks.index')}}" role="button">Your NoteBooks</a>
            </p>
            </center>
        </div>
@endsection