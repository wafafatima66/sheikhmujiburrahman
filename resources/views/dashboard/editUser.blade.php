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
    Update User
@endsection
@section('content')

<div class="container " style="width: 90%">

 
      <form enctype="multipart/form-data" action="{{route('updateUser') }}" method="POST" >
        @csrf

        <input value="{{$user->id}}" name="id" type="hidden">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input name="name" type="text" class="form-control" value="{{$user->name}}">
        </div>
      
        <div class="form-group">
          <label for="exampleInputEmail1">E-mail</label>
          <input name="email" type="email" class="form-control" value="{{$user->email}}">
        </div>

       {{--  <div class="form-group">
          <label for="exampleInputEmail1">Password</label>
          <input name="password" type="password" class="form-control" value="{{$user->password}}">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Confirm Password</label>
          <input name="password_confirmation" type="password" class="form-control" >
        </div> --}}

        <div class="form-group">
          <label for="exampleInputEmail1">Phone Number</label>
          <input class="form-control" type="tel"  name="phone" value="{{$user->phone}}"> 
        </div>
        
      
        <div class="form-group">
            <label for="exampleInputEmail1">Photo</label>

            <div class="d-flex flex-row">
              <input name="photo" type="file" class="form-control" required>

              <img src="{{asset('assets/images/users/'.$user->photo)}}" alt="user" style="width:50px; height:50px" class=" m-1">
            </div>
      </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>

    </div>



<br><br>





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




