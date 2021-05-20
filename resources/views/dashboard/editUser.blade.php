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

<div class="container " style="width: 50%">

 
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

              <input name="photo" type="file" class="form-control" onchange="previewFile(this);" required>
             
              <img class="mt-2" id="previewImg" src="{{asset('assets/images/users/'.$user->photo)}}" alt="Placeholder" style="height:100px">
           
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

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection




