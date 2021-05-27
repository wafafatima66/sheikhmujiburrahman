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
Add Users
@endsection
@section('content')

<div class="container " style="width: 50%">

    @if(count($errors) > 0)
    <div class="p-1">
        @foreach($errors->all() as $error)
        <div class="alert alert-warning alert-danger fade show" role="alert">{{$error}} <button type="button"
                class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>
        @endforeach
    </div>
    @endif


    <form enctype="multipart/form-data" action="{{ route('storeUser') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror">

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input name="password" type="password" class="form-control">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Confirm Password</label>
            <input name="password_confirmation" type="password" class="form-control">
        </div>


        <div class="form-group">
            <input id="country_code" type="hidden" class="form-control @error('country_code') is-invalid @enderror"
                name="country_code" value="880" placeholder="880" >

            @error('country_code')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">Phone Number</label>
            <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" required>
            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">Photo</label>
            <input name="photo" type="file" class="form-control @error('photo') is-invalid @enderror">
            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
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
    $(function () {
        'use strict';
        // Inline editor
        var editor = new MediumEditor('.editable');
        // Summernote editor
        $('#summernote').summernote({
            height: 300,
            placeholder: 'Add Notice',
            tooltip: false
        })
    });

</script>
@endsection
