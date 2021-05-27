@extends('layouts.dashboard.frontEndApp')

@section('addNewCss')

    <link href="{{ asset('summ/github.css') }}" rel="stylesheet">

    <link href="{{ asset('summ/medium-editor.css') }}" rel="stylesheet">
    <link href="{{ asset('summ/default.css') }}" rel="stylesheet">
    <link href="{{ asset('summ/summernote-bs4.css') }}" rel="stylesheet">

@endsection



@section('searchpanel')

@endsection
@section('pageHeading')
    Article Edit
@endsection
@section('content')

<div class="container">


<form enctype="multipart/form-data" action="{{route('savearticleEdit')}}" method="POST">
    @csrf
    
<input value="{{$allProducts->id}}" name="id" style="display:none;">
  <div class="form-group">
    <label for="exampleInputEmail1">title</label>
    <input value="{{$allProducts->title}}" name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">photo</label>
    <input name="photo" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Article Hint</label>
    <input value="{{$allProducts->articleHint}}" name="articleHint" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">article</label>
    <textarea value="{{$allProducts->article}}" name="article" id="summernote" cols="30" rows="10"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">writer</label>
    <input value="{{$allProducts->writer}}" name="writer" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>


@endsection
@section('addNewScript')
  		<script src="{{ asset('summ/highlight.pack.js') }}"></script>
      <script src="{{ asset('summ/summernote-bs4.min.js') }}"></script>
  		<script src="{{ asset('summ/medium-editor.js') }}"></script>


  <script>
  			$(function(){
  			  'use strict';
  			  // Inline editor
  			  var editor = new MediumEditor('.editable');
  			  // Summernote editor
  			  $('#summernote').summernote({
  			    height: 300,
                  placeholder:'Add Notice',
  			    tooltip: false,
            //toolbar: [
            //  ['style', ['style']],
            //  ['font', ['bold', 'underline', 'clear']],
            //  ['fontname', ['fontname']],
            //  ['color', ['color']],
            //  ['para', ['ul', 'ol', 'paragraph']],
            //  ['table', ['table']],
            //  //['insert', ['link', 'picture', 'video']],
            //  ['insert', ['link']],
            //  ['view', ['fullscreen', 'codeview',]],
            //],
  			  })
  			});
  		</script>
@endsection



