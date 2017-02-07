@extends('layouts.base')

@section('content')

<script src='//cloud.tinymce.com/stable/tinymce.min.js?apiKey=32fmwdk444ji0u6nzmrwnu0mh5wl9akik9178k5aj9a6a7o3'></script>
<!-- <script  type="text/javascript" src= "notebookapp/tinymce/js/tinymce/inymce.min.js"> </script>
   <script type="text/javascript" src= "notebookapp/tinymce/js/tinymce/jquery.tinymce.min.js"> </script> -->


<script type="text/javascript">
  tinymce.init({
    selector: '#mytextarea',

     /* theme of the editor */
    theme: "modern",
    skin: "lightgray",

     /* display statusbar */
    statubar: true,
    

    /* width and height of the editor */
    width: "100%",
    height: 300,

     /* plugin */
    plugins: [
        "advlist autolink link image lists charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "save table contextmenu directionality emoticons template paste textcolor"
    ],

    /* toolbar */
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
    
    /* style */
    style_formats: [
        {title: "Headers", items: [
            {title: "Header 1", format: "h1"},
            {title: "Header 2", format: "h2"},
            {title: "Header 3", format: "h3"},
            {title: "Header 4", format: "h4"},
            {title: "Header 5", format: "h5"},
            {title: "Header 6", format: "h6"}
        ]},
        {title: "Inline", items: [
            {title: "Bold", icon: "bold", format: "bold"},
            {title: "Italic", icon: "italic", format: "italic"},
            {title: "Underline", icon: "underline", format: "underline"},
            {title: "Strikethrough", icon: "strikethrough", format: "strikethrough"},
            {title: "Superscript", icon: "superscript", format: "superscript"},
            {title: "Subscript", icon: "subscript", format: "subscript"},
            {title: "Code", icon: "code", format: "code"}
        ]},
        {title: "Blocks", items: [
            {title: "Paragraph", format: "p"},
            {title: "Blockquote", format: "blockquote"},
            {title: "Div", format: "div"},
            {title: "Pre", format: "pre"}
        ]},
        {title: "Alignment", items: [
            {title: "Left", icon: "alignleft", format: "alignleft"},
            {title: "Center", icon: "aligncenter", format: "aligncenter"},
            {title: "Right", icon: "alignright", format: "alignright"},
            {title: "Justify", icon: "alignjustify", format: "alignjustify"}
        ]}
    ]
  
  });
  </script>
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
           <!--  <input class="form-control" name="body" placeholder="Notes" type="textarea" rows="3" value="{{ $note->body }}"> -->
           <!--  <textarea id="mytextarea" name="body" type="textarea" value="{{ $note->body }}"> </textarea> -->
           <input id="mytextarea" name="body" value ="{{ $note->body }}">

        </div>

        {{-- <input type="hidden" name="notebook_id" value="{{$note->notebook_id}}"> --}}
{{csrf_field()}}
        <input type="submit" class="btn btn-primary" value="Done">
    </form>
</div>
@endsection
