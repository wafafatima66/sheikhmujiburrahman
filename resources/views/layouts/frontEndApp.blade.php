<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Bongobondhu</title>
    <link rel="stylesheet" href="{{ asset('frontEnd/css') }}/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontEnd/css') }}/slick.css">
    <link rel="stylesheet" href="{{ asset('frontEnd/css') }}/animate.min.css">
    <link rel="stylesheet" href="{{ asset('frontEnd/css') }}/style.css"/>
    <link rel="stylesheet" href="{{ asset('frontEnd/css') }}/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
    @yield('css')
  </head>
  <body>

    <!-- =======================
          menu bar start
    ===========================-->
    <nav class="menuBar">
        <div class="container">
           <div class="row justify-content-between">
               <div class="col-lg-4 col-md-6 col-sm-8 col-9">
                   <div class="logo" id="home_logo">
                       <img src="{{ asset('frontEnd/uploads/logo') }}/{{$logo->logo}}" alt="logo">

                   </div>
                   <h2 class="logo_title">বঙ্গবন্ধু</h2>
               </div>
               <div class="col-lg-2 btn-center col-md-6 col-sm-4 col-3">
                    <button id="menu_btn"></button>
               </div>
           </div>
           <div class="menu_list">
               <ul>
                   <li><a href="{{route('readMore')}}">প্রবন্ধ</a></li>
               	   <li><a href="#">আলোকচিত্র</a></li>
                   <li><a href="#">চলমান চিত্র</a></li>
               	   <li><a href="#">বেতার</a></li>
                   <li><a href="{{route('mujibHistory')}}">ইতিহাসের পাতায়</a></li>
                   <li><a href="{{route('mujibLife')}}">সচিত্র জীবনী</a></li>
                   <li><a href="{{route('mujibSpeech')}}">উক্তি</a></li>
                   <li><a href="{{route('mujibPublication')}}">প্রকাশনা</a></li>
                   <li><a href="#">আমাদের সম্পর্কে</a></li>
               </ul>

           </div>
        </div>
    </nav>

    <!-- =======================
          menu bar end
    ===========================-->



        @yield('contents')


    <!-- =======================
          js part here
    ===========================-->
    <script src="{{ asset('frontEnd/js') }}/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('frontEnd/js') }}/popper.min.js"></script>
    <script src="{{ asset('frontEnd/js') }}/bootstrap.min.js"></script>
    <script src="{{ asset('frontEnd/js') }}/slick.js"></script>
    <script src="{{ asset('frontEnd/js') }}/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
    @yield('js')
  </body>
</html>
