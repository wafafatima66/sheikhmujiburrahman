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
    Article List
@endsection

@section('content')

<div class="container">

<div class="container">


<table class="table table-info">
  <thead class="thead-dark">
    <tr>
      <th scope="col">title</th>
      <th scope="col">photo</th>
      <th scope="col">writer</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
        @foreach ($allArticle as $item)
            <tr>
                <th scope="row"><p>{{$item->title}}</p></th>
                <td><img src="{{asset('frontEnd/uploads/article')}}/{{$item->photo}}" alt="no" width="100"></td>
                <td>{{$item->writer}}</td>
                <td><a href="{{url('/delete/article')}}/{{$item->id}}" class="btn btn-danger">Delete</a></td>
            <td><a href="{{url('/edit/article')}}/{{$item->id}}" class="btn btn-success">Edit</a></td>
                {{-- <td>{!! html_entity_decode(Str::limit($item->article,20)) !!}</td> --}}
            </tr>
        @endforeach
  </tbody>
</table>
<br><br>
</div>

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




