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
    <nav class="menuBar knowPage">
        <div class="container">
           <div class="row justify-content-between">
               <div class="col-lg-4 col-md-6 col-sm-8 col-9">
                   <a href="{{url('/')}}" class="logo">
                       <img src="{{ asset('frontEnd/uploads/logo') }}/{{$logo->logo}}" alt="logo">

                   </a>
                   <h2 class="logo_title">বঙ্গবন্ধু</h2>
               </div>
               <div class="col-lg-2 col-md-6 col-sm-4 col-3 btn-center">
                     <button id="menu_btn">
                      <span class="dark-blue-text" style="padding: 10px 14px;">
                      <i class="fa fa-bars fa-3x menu_icons" style="color: #000000 !important;"></i>
                    </span>
                    </button>
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
    <!-- =======================
          know page start
    ===========================-->
<section class="know_page">
<div class="row mx-0">

        <div class="col-lg-8 col-md-12">
                <div class="know_main_image">
                   <div class="know_img">
                       @foreach ($alldata as $item)
                       <img class="w-100 timeLine-11" src="{{asset('frontEnd/uploads/knowMore')}}/{{$item->photo}}" alt="Bongobondhu">
                       @endforeach
                   </div>
                </div>
            </div>


  <div class="col-lg-4 col-md-12">
        <div class="know_content">
            @foreach ($alldata as $item)

            <h2>{{$item->title}}</h2>

            <p>{{$item->dis}}</p>
            @endforeach

            <ul>
                <li><a href="{{route('readMore')}}">আর্টিকেল সমূহ</a></li>
                <li><a href="#">ভিডিও আর্কাইভ</a></li>
            </ul>
        </div>
  </div>


</div>
</section>
    <!-- =======================
          know page end
    ===========================-->

    <script src="{{ asset('frontEnd/js') }}/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('frontEnd/js') }}/popper.min.js"></script>
    <script src="{{ asset('frontEnd/js') }}/bootstrap.min.js"></script>
    <script src="{{ asset('frontEnd/js') }}/custom.js"></script>
  </body>
</html>
