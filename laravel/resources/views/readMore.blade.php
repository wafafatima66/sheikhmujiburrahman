<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
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
    <nav class="menuBar afWarMenu">
        <div class="container">
           <div class="row justify-content-between">
               <div class="col-lg-4 col-md-6 col-sm-8 col-9">
                   <a href="{{url('/')}}" class="logo">
                       <img src="{{ asset('frontEnd/uploads/logo') }}/{{$logo->logo}}" alt="logo">

                   </a>
                   <h2 class="logo_title">বঙ্গবন্ধু</h2>
               </div>
               <div class="col-lg-2 col-m-6 col-sm-4 col-3 btn-center">
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
    <section class="afterwar_part">
        <div class="row mx-0 justify-content-between">
            <div class="col-lg-7 col-12 no-flex after_war_content pl-lg-0">
                <!-- =======================
                 left site content start
                =========================== -->

                <div class="afterwar_banner">
                    @foreach ($allArticle as $item)
                        @if ($loop->first)
                        <div class="afterwar_banner_image">
                            <img class="w-100" src="{{asset('frontEnd/uploads/article')}}/{{$item->photo}}" alt="afwar_banner">
                        </div>
                        @endif
                    @endforeach
                </div>

                <div class="left_content_bottom">
                    <div class="row mx-0">
                        <div class="col-lg-10 pl-5 pt-2">
                            @foreach ($allArticle as $item)
                            @if ($loop->first)
                            <div class="left_inner_content">
                                <h2>{{$item->title}}</h2>
                                <p>{{$item->articleHint}}</p>
                                {{-- {!! Str::limit(html_entity_decode($item->article), 400) !!} --}}
                                <a href="{{url('article/details')}}/{{$item->id}}">সম্পূর্ণ আর্টিকেল পড়ুন</a>
                            </div>
                            @endif
                            @endforeach
                        </div>


                           <!-- post one -->
                           @foreach ($allArticle as $item)
                           @if (!$loop->first)
                           <div class="col-lg-5 pr-md-5 pr-lg-5 no-flex no-flex pl-0 mb-5 pb-3">
                            <div class="post_image">
                                    <img class="w-100" src="{{asset('frontEnd/uploads/article')}}/{{$item->photo}}" alt="post_image">
                            </div>

                        </div>
                        <div class="col-lg-7 mb-5 pb-3  no-flex d-flex align-items-center">
                            {{-- @foreach ($allArticle as $item) --}}
                            {{-- @if (!$loop->first) --}}
                             <div class="post_content">
                                <h2>{{$item->title}}</h2>
                                <p>{{$item->articleHint}}</p>
                                {{-- {!! Str::limit(html_entity_decode($item->article), 400) !!} --}}
                                <a href="{{url('article/details')}}/{{$item->id}}">সম্পূর্ণ আর্টিকেল পড়ুন</a>
                             </div>
                            </div>
                            @endif
                        @endforeach




                    </div>



                </div>


<!-- pagination -->
<div class="pagination">
    <div class="row w-100 mx-0">
        <div class="col-lg-12 text-center">
            <ul>
                <li><p class="pagi_title">আরো আর্টিকেল</p></li>
                <li>
                    <a class="active" href="#">১</a>
                    <a href="#">২</a>
                    <a href="#">৩</a>
                    <a href="#">৪</a>
                    <a href="#">৫</a>
                    <a href="#">৬</a>
                    <a href="#">৭</a>
                    <a href="#">৮</a>
                </li>
            </ul>
        </div>
    </div>
   </div>
                 <!-- =======================
                 left site content end
                =========================== -->

            </div>
            <div class="col-lg-4 col-md-12 col-12 no-flex order-0">
                <!-- =======================
                 right site content start
                =========================== -->
                    <div class="afterwar_round_image">
                        <div class="image_layer_3">
                            <div class="image_layer_2">
                                <div class="image_layer_1">
                                    <img class="w-100 bongobondhu" src="images/bongobondhu.jpg" alt="bongobondhu.jpg">
                                </div>
                            </div>
                        </div>
                    </div>


                   <div class="right_content offTop">
                      <p>এটাই হয়ত আমার শেষ বার্তা, আজ থেকে বাংলাদেশ স্বাধীন। আমি বাংলাদেশের মানুষকে আহ্বান জানাই, আপনারা যেখানেই থাকুন, আপনাদের সর্বস্ব দিয়ে দখলদার সেনাবাহিনীর বিরুদ্ধে শেষ পর্যন্ত প্রতিরোধ চালিয়ে যান। বাংলাদেশের মাটি থেকে সর্বশেষ পাকিস্তানি সৈন্যটিকে উৎখাত করা এবং চূড়ান্ত বিজয় অর্জনের আগ পর্যন্ত আপনাদের যুদ্ধ অব্যাহত থাকুক।</p>

                      <h2>শেখ মুজিবুর রহমান, ১৯৭১</h2>
                      <a href="#">আরো উক্তি</a>
                   </div>

                <!-- =======================
                 right site content end
                =========================== -->
            </div>
        </div>
    </section>



    <script src="{{ asset('frontEnd/js') }}/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('frontEnd/js') }}/popper.min.js"></script>
    <script src="{{ asset('frontEnd/js') }}/bootstrap.min.js"></script>
    <script src="{{ asset('frontEnd/js') }}/custom.js"></script>
  </body>
</html>
