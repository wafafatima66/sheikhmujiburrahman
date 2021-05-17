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
    <link rel="stylesheet" href="{{ asset('frontEnd/css/fontawesome-free-5.12.1-web/css') }}/all.css">
  </head>
  <body>
      <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=2607143702689659&autoLogAppEvents=1"></script>

    <!-- =======================
          menu bar start
    ===========================-->
    <nav class="menuBar afWarMenu detail_page">
        <div class="container">
           <div class="row justify-content-between">
               <div class="col-lg-4 col-md-6 col-sm-4 col-9">
                   <a href="{{url('/')}}" class="logo">
                       <img src="{{ asset('frontEnd/uploads/logo') }}/{{$logo->logo}}" alt="logo">

                   </a>
                   <h2 class="logo_title">বঙ্গবন্ধু</h2>
               </div>
               <div class="col-lg-2 col-md-6 col-sm-4 col-3 btn-center">
                    <button id="menu_btn"></button>
               </div>
           </div>
           @include('layouts.menu')
        </div>
    </nav>

    <!-- =======================
          menu bar end
    ===========================-->
    <!--==========================
        Detail page  start
   =============================== -->
    <section class="detailPage">
    <div class="detail_banner" style="background:url({{asset('frontEnd/uploads/article')}}/{{$article->photo}}) no-repeat center;">
                 <div class="detail_banner_text">
                        <h1>
                            {{$article->title}}
                        </h1>
                        <h4>{{$article->writer}}</h4>
                 </div>
                {{-- <img class="w-100 shape" src="{{asset('frontEnd/uploads/article')}}/{{$article->photo}}" alt="shape"> --}}
                <img class="w-100 shape" src="{{asset('images/roundShape.png')}}" alt="shape">
        </div>
        <div class="container">
            <div class="share-icons text-center">
                <div class="addthis_inline_share_toolbox_her8"></div>
            </div>

        </div>
        <div class="text_detail">
            <div class="container">
                <div class="row">
                    {!! html_entity_decode($article->article) !!}

                    <div class="col-lg-12">
                            <h2>Writer: {{$article->writer}}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="suggesation_part">
                <div class="row mx-0">
                     <div class="col-lg-8">
                         <div class="row">
                                <div class="col-lg-5 col-sm-8 col-md-8 pl-0 pr-5 mb-5 pb-3">
                                        <div class="post_image">
                                                <img class="w-100" src="{{asset('frontEnd/uploads/article')}}/{{$suggestion->photo}}" alt="post_image">
                                        </div>
                                    </div>
                                    <div class="col-lg-7 mb-5 pb-3 d-flex align-items-center">
                                         <div class="post_content">
                                                <h2>{{$suggestion->title}}</h2>
                                                <p>{{$suggestion->articleHint}}
                                                </p>
                                                <a href="{{url('article/details')}}/{{$suggestion->id}}">সম্পূর্ণ আর্টিকেল পড়ুন</a>
                                         </div>
                                    </div>
                         </div>
                         <!-- post one -->
                     </div>
                     <div class="col-lg-4 d-flex align-items-center">
                            <a class="more_article" href="{{route('readMore')}}">আরো আর্টিকেল</a>
                     </div>

                </div>
                </div>

    </section>

    <!--==========================
        Detail page  end
   =============================== -->

    <script src="{{ asset('frontEnd/js') }}/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('frontEnd/js') }}/popper.min.js"></script>
    <script src="{{ asset('frontEnd/js') }}/bootstrap.min.js"></script>
    <script src="{{ asset('frontEnd/js') }}/custom.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e77cbe711aa9f6d"></script>

  </body>
</html>
