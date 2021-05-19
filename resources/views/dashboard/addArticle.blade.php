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
    Add Article
@endsection
@section('content')



<div class="container">

<form enctype="multipart/form-data" action="{{route('savearticle')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">title</label>
    <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">photo</label>
    <input name="photo" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Article Hint</label>
    <input name="articleHint" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">article</label>
    <textarea name="article" id="summernote" cols="30" rows="10"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">writer</label>
    <input name="writer" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
  			    tooltip: false
  			  })
  			});
  		</script>
@endsection




