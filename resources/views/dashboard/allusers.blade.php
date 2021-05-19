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
    Users Setting 
@endsection
@section('content')

<div class="container " style="width: 90%">

      <table class="table table-info">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
            {{-- <th scope="col">Remove</th> --}}
          </tr>
        </thead>
        <tbody>
              @foreach ($allusers as $item)
                  @if ($item->userType == 1 )
                  <tr>
                      <td>{{$item->name}}</td>
                      <td>{{$item->email}}</td>
                      <td>
                        @if ($item->userActivation == 1)
                          <a href="{{url("deactive/user")}}/{{$item->id}}" class="btn btn-success" style="width:105px;">Activated</a>
                        @else
                          <a href="{{url("active/user")}}/{{$item->id}}" class="btn btn-danger" style="width:105px;">Deactivated</a>
                        @endif
                        <a href="{{url("editUser")}}/{{$item->id}}" class="btn btn-danger">Edit</a>
                    </td>
                  </tr>
                  @endif
              @endforeach
        </tbody>
      </table>
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




