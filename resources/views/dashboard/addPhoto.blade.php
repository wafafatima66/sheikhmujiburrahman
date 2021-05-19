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
    <div class="row">


        <div class="col-lg-2">

            <table class="table table-info">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Album Name</th>
                        {{-- <th scope="col">Remove</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($albumList as $album)
                    <tr>
                        <td>{{$album->album_name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>



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

@endsection
