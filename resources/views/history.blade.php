<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Bongobondhu</title>
    <link rel="stylesheet" href="{{ asset('frontEnd/css') }}/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontEnd/css') }}/animate.min.css">
    <link rel="stylesheet" href="{{ asset('frontEnd/css') }}/style.css"/>
    <link rel="stylesheet" href="{{ asset('frontEnd/css') }}/responsive.css">
  </head>
  <body>

    <!-- =======================
          menu bar start
    ===========================-->
    <nav class="menuBar">
        <div class="container">
           <div class="row justify-content-between">
               <div class="col-lg-4 col-md-6 col-sm-8 col-9">
                   <a href="{{url('/')}}" class="logo">
                       <img src="{{ asset('frontEnd/uploads/logo') }}/{{$logo->logo}}" alt="logo">

                   </a>
                   <h2 class="logo_title">বঙ্গবন্ধু</h2>
               </div>
               <div class="col-lg-2 btn-center col-md-6 col-sm-4 col-3">
                    <button id="menu_btn"></button>
               </div>
           </div>
           @include('layouts.menu')
        </div>
    </nav>

    <!-- =======================
          menu bar end
    ===========================-->
    <!-- =======================
          history page start
    ===========================-->
<section class="history_page">
<div class="row mx-0">
  <div class="col-lg-4 col-md-12">
        <div class="history_content">
            <h2>{{$history->title}}</h2>

            <p>{{$history->dis}}</p>

            <ul>
                <li><a href="{{route('mujibHistory')}}">ইতিহাসের পাতায় মুজিব</a></li>
                <li><a href="{{route('mujibLife')}}">সচিত্র জীবনী</a></li>
                <li><a href="{{route('mujibSpeech')}}">উক্তি</a></li>
                <li><a href="{{route('mujibPublication')}}"> প্রকাশনা</a></li>
            </ul>
        </div>
  </div>

  <div class="col-lg-8 order-0 col-md-12">
      <div class="history_main_image">
         <div class="history_img">
            <img class="w-100 timeLine-1" src="{{asset('frontEnd/uploads/history/')}}/{{$history->photo}}" alt="Bongobondhu">
         </div>
      </div>
  </div>
</div>
</section>
    <!-- =======================
          history page end
    ===========================-->

    <script src="{{ asset('frontEnd/js') }}/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('frontEnd/js') }}/popper.min.js"></script>
    <script src="{{ asset('frontEnd/js') }}/bootstrap.min.js"></script>
    <script src="{{ asset('frontEnd/js') }}/custom.js"></script>
  </body>
</html>
