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
    Bongobondhu Speech List
@endsection
@section('content')

<div class="container">

  @php

    $permissions = App\Permission::where('user_id', Auth::user()->id)->get();

    $modules = [];

    foreach($permissions as $permission){

    $modules[] = $permission->module_id;
    }

    $modules = array_unique($modules);

    $admin = 2 ;
    $articleList = 2 ;
    $addArticle = 3 ;
    $logo= 4 ;
    $firstPage = 5 ;
    $banner = 6 ;
    $historySettings = 7 ;
    $mujibHistorydash = 8 ;
    $mujibLifedash = 9 ;
    $mujibLifedashAdd = 10;
    $mujibSpeechdash = 11;
    $mujibSpeechdashAdd = 12;
    $mujibPublicationdash = 13;
    $knowmoredash = 14;
    $addPhoto= 15;

    @endphp

    @if(in_array($mujibSpeechdash, $modules) || Auth::user()->id == $admin)

<div class="container">


<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Photo</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
        @foreach ($mujibSpeechdash as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td><textarea cols="30" rows="10" readonly>{{$item->dis}}</textarea></td>
                <td><img width="200" src="{{asset('frontEnd/uploads/mujib_Speech')}}/{{$item->photo}}" alt="No Photo" srcset=""></td>
                <td><a class="btn btn-danger" href="{{url('/delete_mujibSpeechdash/delete')}}/{{$item->id}}">Delete</a></td>
                <td><a class="btn btn-success" href="{{url('/delete_mujibSpeechdash/edit')}}/{{$item->id}}">Edit</a></td>
            </tr>
        @endforeach
  </tbody>
</table>
<br><br>
</div>
{{-- 
<div class="container">


<form enctype="multipart/form-data" action="{{route('savemujib_Speech')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input name="title" type="text" class="form-control">
  </div>

  <div class="form-group">
      <label for="exampleInputEmail1">Description</label>
      <textarea name="dis" cols="30" rows="10" class="form-control" placeholder="Write Here"></textarea>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Photo</label>
      <input name="photo" type="file" class="form-control">
    </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>

</div> --}}
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

@else

<div class="container">

    <div class="alert alert-danger">NO ACCESS ! </div>

</div>

@endif
@endsection




