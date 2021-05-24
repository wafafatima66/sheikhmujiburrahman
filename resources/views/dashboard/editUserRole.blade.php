

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
    Assign Permission to {{ $user->name }} 
@endsection

@php

$modulesList = [];
    $permissions = App\Permission::where('user_id', $user->id )->get();
    
    foreach($permissions as $permission){
    
    $modulesList[] = $permission->module_id;
}

$modulesList = array_unique($modulesList);


@endphp

@section('content')



<div class="container " style="width: 90%">

    <form action="{{route('updateUserRole') }}" method="post">
        @csrf 
    <input type="hidden" name="user_id" value="{{ $user->id}}">
    
      <table class="table table-info">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Features</th>
            <th scope="col">Permission</th>
          </tr>
        </thead>
        <tbody>
            
              @foreach ($modules as $module)
                <tr>
                    <td>{{$module->module_name}}</td>
                    <td><input type="checkbox" name="module[]" value="{{ $module->id }}" @if(in_array($module->id, $modulesList))  checked  @endif  ></td>
                    {{-- @if(in_array($module->module_id, $modulesList))  checked  @endif --}}
                </tr>
              @endforeach
            
        </tbody>
      </table>

      <button class="btn btn-primary">Save</button>
    </form>
    </div>

@endsection





