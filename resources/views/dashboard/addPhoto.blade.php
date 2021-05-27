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
Photo Gallery Setting
@endsection
@section('content')

<div class="container" style="width: 90%">

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

    @if(in_array($addPhoto, $modules) || Auth::user()->id == $admin)
    <div class="row">


    

        <div class="col-lg-5 ">


            <h6>Add Photo</h6>
            <form enctype="multipart/form-data" action="{{route('storePhoto') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Photo Title </label>
                    <input name="photo_name" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <input name="photo_link" type="file" class="form-control">
                </div>

                <div class="form-group">
                    <label for="sel1">Album list:</label>
                    <select class="form-control" name="album_id" required>
                        <option value=""> Select Album</option>
                        @foreach ($albumList as $album)
                        <option value="{{$album->id}}">{{$album->album_name}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>

        </div>

        <div class="col-lg-5 ">
            <h6>Add Album</h6>
            <form enctype="multipart/form-data" action="{{route('storeAlbum') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Album Title </label>
                    <input name="album_name" type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>

        </div>

    </div>

</div>

@else

<div class="container">

    <div class="alert alert-danger">NO ACCESS ! </div>

</div>

@endif

@endsection
