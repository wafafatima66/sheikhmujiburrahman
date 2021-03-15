<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bongobondhu</title>
    <link rel="stylesheet" href="{{asset('shawon/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('shawon/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('shawon/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('shawon/css/responsive.css')}}">
</head>
<body>
          <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=2607143702689659&autoLogAppEvents=1"></script>


    <section id="photo-history-part">

            <div class="row mx-0">
                <div class="col-lg-9 p-0">
                    <div class="jiboni-left-slider">

                        @foreach ($alldata as $item)
                        <div class="photoimg">
                            <img   src="{{asset("frontEnd/uploads/mujib_Life")}}/{{$item->photo}}" alt="leftimg">
                        </div>
                        @endforeach


                    </div>
                </div>
                <div class="col-lg-3 p-0">
                    <div class="jiboni-right-slider">
                        <h5 > <img style="cursor: pointer" onclick="window.history.back()" src="{{asset('images/prevb.png')}}" alt="prev"> <span onclick="window.history.back()" style="cursor: pointer" >পূর্বের পেজে ফেরত</span></h5>

                        <div class="jiboni-right-text-slider">

                            @foreach ($alldata as $item)
                            <div class="jiboni-text">
                                <h3>সচিত্র জীবনী</h3>
                                <h1>{{$item->title}}</h1>
                                <div class="jiboni-details">
                                    <p>{{$item->dis}}</p>

                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="count">
                            <span class="jibonicount"></span>/ <span class="jibonitotal"></span>
                        </div>
                       <div class="jiboni-shareicon">
                        {{-- <img width="100%" src="{{asset('images/all.png')}}" alt=""> --}}
                        <div class="share-icons text-center">
                            <div class="addthis_inline_share_toolbox_her8"></div>
                        </div>
                       </div>


                    </div>
                </div>
            </div>

    </section>


    <script src="js/script.js"></script>

    <script src="{{asset('shawon/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('shawon/js/popper.min.js')}}"></script>
    <script src="{{asset('shawon/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('shawon/js/slick.min.js')}}"></script>
    <script src="{{asset('shawon/js/script.js')}}"></script>
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e77cbe711aa9f6d"></script>


</body>
</html>
