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
    Banner Setting
@endsection
@section('content')

<div class="container">

<div class="container">


<table class="table table-info">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Logo</th>
      <th scope="col">Activation</th>
      <th scope="col">Action</th>
      {{-- <th scope="col">article</th> --}}
    </tr>
  </thead>
  <tbody>
        @foreach ($allbanners as $item)
            <tr>
                <td><img src="{{asset('frontEnd/uploads/banner')}}/{{$item->photo}}" alt="no" width="100"></td>
                @if ($item->activation == 1)
                    <td><p class="badge badge-success badge-pill">Activated</p></td>
                    <td><a class="btn btn-danger" href="{{url('banner/delete')}}/{{$item->id}}">Delete</a></td>
                @else
                    <td><a class="btn btn-danger" href="{{url('active/banner')}}/{{$item->id}}">Active now</a></td>
                    <td><a class="btn btn-danger" href="{{url('banner/delete')}}/{{$item->id}}">Delete</a></td>
                @endif
                {{-- <td>{!! html_entity_decode(Str::limit($item->article,20)) !!}</td> --}}
            </tr>
        @endforeach
  </tbody>
</table>
<br><br>
</div>
<div class="container">


<form enctype="multipart/form-data" action="{{route('saveBanner')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Choose Photo</label>
    <input name="photo" type="file" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

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




