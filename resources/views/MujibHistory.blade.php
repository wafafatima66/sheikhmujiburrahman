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
  </head>
  <body>

    <!-- =======================
          menu bar start
    ===========================-->
    <nav class="menuBar ">
        <div class="container">
           <div class="row justify-content-between">
               <div class="col-lg-4 col-sm-8 col-md-6 col-9">
                   <a href="{{url('/')}}" class="logo">
                       <img src="{{ asset('frontEnd/uploads/logo') }}/{{$logo->logo}}" alt="logo">

                   </a>
                   <h2 class="logo_title">বঙ্গবন্ধু</h2>
               </div>
               <div class="col-lg-2 btn-center col-sm-4 col-md-6 col-3">
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
    <!-- =======================
          history page start
    ===========================-->
<section class="history_page">
<div class="row mx-0">
  <div class="col-lg-4">

    @foreach ($alldata as $item)
        @if ($loop->first)
            <div class="history_content hcOne aunShow">
                <h2 class="aunTitle">{{$item->title}}</h2>

                <p class="aunDis">{{$item->dis}}</p>

                <span class="changeBtn_one aunArro arroTOChange" data-imgUrl="frontEnd/uploads/mijib_history/{{$item->photo}}">
                    &#8595;
                </span>
            </div>
        @else
            <div class="history_content hcTwo d-none">
                <h2 >{{$item->title}}</h2>

                <p >{{$item->dis}}</p>

                <span class="changeBtn aunArro" data-imgUrl="{{asset('frontEnd/uploads/mijib_history')}}/{{$item->photo}}">
                    &#8595;
                </span>
            </div>
        @endif
    @endforeach



  </div>

  <div class="col-lg-8 order-0">
      <div class="history_main_image">
         <div class="history_img">

                @foreach ($alldata as $item)
                    @if ($loop->first)
                    <img class="w-100 timeLine-1 tm-1 aunShow aunImg" src="{{asset('frontEnd/uploads/mijib_history')}}/{{$item->photo}}" alt="Bongobondhu">
                    @else
                    <img class="w-100 timeLine-1 tm-2 d-none" src="{{asset('frontEnd/uploads/mijib_history')}}/{{$item->photo}}" alt="Bongobondhu">
                    @endif
                @endforeach

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
    {{-- <script src="{{ asset('frontEnd/js') }}/custom.js"></script> --}}
    <script src="{{ asset('frontEnd/js') }}/aunCustom.js"></script>
  </body>
</html>
