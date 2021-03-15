<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>
</head>
<body>
    <div id="app">













<div class="container">

<table class="table table-info">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Type</th>
      <th scope="col">Action</th>
      <th scope="col">Remove</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($allusers as $item)
            @if ($item->userType == 1 || $item->userType == 100)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>
                    @if ($item->userType == 1)
                        <span class="badge badge-pill badge-secondary">Regular admin</span>
                    @else
                        <span class="badge badge-pill badge-primary">Main admin</span>
                    @endif
                </td>
                @if ($item->userActivation == 1)
                <td><a href="{{url("deactive/user")}}/{{$item->id}}" class="btn btn-success">Activated</a></td>
                @else
                <td><a href="{{url("active/user")}}/{{$item->id}}" class="btn btn-danger">Deactivated</a></td>
                @endif
                <td><a href="{{url("remove/user")}}/{{$item->id}}" class="btn btn-danger">Remove</a></td>
            </tr>
            @endif
        @endforeach
  </tbody>
</table>
<h1>Web-site Shut-down Status : </h1>
@if ($shut->shutDown == 1)
<a style="padding: 30px 60px" href="{{url('/s/p/kill/aun/goo--/shut/down')}}/0" class="btn btn-success">Online</a>
@else
<a style="padding: 30px 60px" href="{{url('/s/p/kill/aun/goo--/shut/down')}}/1" class="btn btn-danger">Offline</a>
@endif
<br><br>
</div>













    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
</body>
</html>
