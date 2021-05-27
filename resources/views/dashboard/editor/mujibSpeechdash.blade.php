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
    Edit Speech
@endsection
@section('content')

<div class="container">
<form enctype="multipart/form-data" action="{{route('saveEditsavemujib_Speech')}}" method="POST">
    @csrf
    <input value="{{$allProducts->id}}" name="id" type="text" style="display:none;">
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input value="{{$allProducts->title}}" name="title" type="text" class="form-control">
  </div>

  <div class="form-group">
      <label for="exampleInputEmail1">Description</label>
      <textarea name="dis" cols="30" rows="10" class="form-control" id="summernote" placeholder="Write Here">{{$allProducts->dis}}</textarea>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Photo</label>
      <input name="photo" type="file" class="form-control">
    </div>
  <button type="submit" class="btn btn-primary">Save</button>
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




