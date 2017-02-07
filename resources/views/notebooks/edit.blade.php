<div class="container text-center">
    <form action="{{route('notebooks.update',$notebook->id)}}" method="POST">

        <div class="form-group">
            <label for="name">
               Notebook Name
            </label>
            <input class="form-control" name="name" placeholder="input" type="text" value="{{ $notebook->name }}">
            </input>
        </div>
</form>
        <input type="submit" class="btn btn-primary" value="Done">

        <form action="{{route('notebooks.delete',$notebook->id)}}" method="POST">
        
            <div class="form-group">
                {{-- <a href="{{}}"></a> --}}
            <input type="submit" class="btn btn-danger" value="Delete">

            </div>
        </form>    
        
    </form>
</div>