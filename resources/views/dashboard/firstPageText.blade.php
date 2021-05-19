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
First Page Text
@endsection
@section('content')

<div class="container" style="width: 90%">
    <div class="row">
        <div class="col-lg-6 mt-5">

            <table class="table table-info">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($firstPage as $item)
                    <tr>
                        <td>{{$item->title}}</td>
                        <td><textarea cols="30" rows="10" readonly>{{$item->dis}}</textarea></td>
                        {{-- <td>{!! html_entity_decode(Str::limit($item->article,20)) !!}</td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-lg-6">
            <form enctype="multipart/form-data" action="{{route('updateFirstPage')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input name="title" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea name="dis" cols="30" rows="10" class="form-control" placeholder="Write Here"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
    </div>

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
