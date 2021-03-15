
@extends('layouts.frontEndApp')

@section('contents')

<!-- =======================
    banner part start
===========================-->




<section class="banner_part">
    <div class="banner_content">
        <div class="row justify-content-center">
            <div class="col-lg-6 w-center">
                 <div class="banner_text">
                     <div class="home-page-slide">
                         @foreach ($allbanners as $item)
                         <img class="w-100 banner_img" src="{{asset('frontEnd/uploads/banner')}}/{{$item->photo}}" alt="bondobondu_main">
                         @endforeach
                    </div>

                     <a class="banner_left_link" href="{{route('history')}}">ইতিহাস</a>
                     <span class="left_line home_line"></span>
                     <span class="right_line home_line"></span>
                      <a class="banner_right_link" href="{{route('knowmore')}}">জানুন</a>

                     <div class="banner_main_text">
                         <h2>{{$firstPageText->title}}</h2>
                         <p>{{$firstPageText->dis}}</p>

                         <a class="read_more_btn" href="{{route('readMore')}}">আরো পড়ুন</a>
                     </div>
                 </div>
            </div>
        </div>
    </div>
</section>





<!-- =======================
    banner part end
===========================-->

@endsection
