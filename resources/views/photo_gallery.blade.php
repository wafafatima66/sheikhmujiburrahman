<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Bongobondhu</title>
    <link rel="stylesheet" href="{{ asset('frontEnd/css') }}/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontEnd/css') }}/animate.min.css">
    <link rel="stylesheet" href="{{ asset('frontEnd/css') }}/style.css" />
    <link rel="stylesheet" href="{{ asset('frontEnd/css') }}/responsive.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>


<style type="text/css">
    .btn:focus,
    .btn:active,
    button:focus,
    button:active {
        outline: none !important;
        box-shadow: none !important;
    }

    #image-gallery .modal-footer {
        display: block;
    }

    .thumb {
        margin-top: 15px;
        margin-bottom: 15px;
    }


    /* ALBUM TAB STYLING */



   
    
    .photo-gallery-section {
        margin-top: 100px;
    }
    .title {
        font-weight: 500;
        line-height: 1.2;
        font-size: 2.5rem ; 
    }
    .image-wrap{
        height: 300px;
        width: 100%;
        filter: grayscale(80%);
    }
    .image-wrap:hover{
        filter: grayscale(0);
    }
    .image-wrap .image-info {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 2;
        transform: translate(-50%, -50%);
    }
    .image-wrap .image-info h2{
        color: #fff ; 
        text-transform: capitalize ; 
    }
    .btn-outline-white{
        border-color: #fff;
        color: #fff;
        border-width: 2px;
        text-transform: uppercase;
        font-size: 11px;
        letter-spacing: .1em;
    }
    .btn-outline-white:hover{
        color: #fff;
        font-weight: bold;
    }
    .img-fluid {
        max-width: 100%;
        height: 100% ; 
    }

</style>

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
                    <button id="menu_btn">
                        <span class="dark-blue-text" style="padding: 10px;">
                            <i style="color: #FFFFFF;" class="fa fa-bars fa-3x menu_icons"></i>
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


    <section class="afterwar_part">

        <div class="row justify-content-between">
            <div class="container" style="max-width: 100%">
                <div class="col-lg-12" style="margin-top: 15%;">
                    <div class="row" >

                                

                                <div class="container" >

                                    <div class="text-center">
                                        <h6 class="title">OUR ALBUMS</h6>
                                    </div>
                                   

                                    <div class="row ">

                                        @foreach ($allAlbums as $album)

                                        @php
                                            $firstPhoto = App\GalleryPhoto::where('album_id', $album->id)->pluck('photo_link')->first();
                                            if ($firstPhoto == '') {
                                                $firstPhoto = 'no.png';
                                            }
                                        @endphp

                                        <div class="col-lg-4 mt-5">
                                            <div class="image-wrap ">
                                                <div class="image-info">
                                                    <h2 class="mb-3">{{$album->album_name}}</h2>
                                                    <a href="photos/{{ $album->id }}" class="btn btn-outline-white py-2 px-4 ">More Photos</a>
                                                </div>
                                                <img src="{{asset('assets/images/photoGallery/'.$firstPhoto)}}" alt=""
                                                    class="img-fluid" >
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                </div>

                           
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="{{ asset('frontEnd/js') }}/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('frontEnd/js') }}/popper.min.js"></script>
    <script src="{{ asset('frontEnd/js') }}/bootstrap.min.js"></script>
    <script src="{{ asset('frontEnd/js') }}/custom.js"></script>

</body>

</html>
