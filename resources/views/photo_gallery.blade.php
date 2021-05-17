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
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
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

          <style type="text/css">
          	.btn:focus, .btn:active, button:focus, button:active {
          		outline: none !important;
          		box-shadow: none !important;
          	}

          	#image-gallery .modal-footer{
          		display: block;
          	}

          	.thumb{
          		margin-top: 15px;
          		margin-bottom: 15px;
          	}
          </style>
          <section class="afterwar_part">
          	<div class="row  justify-content-between">
          		<div class="container">
          			<div class="col-lg-12" style="margin-top: 15%;">
          				<div class="row">
          					<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
          					<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
          					<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          					<!------ Include the above in your HEAD tag ---------->

          					<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
          					<div class="container">
          						<div class="row">
          							<div class="row">
          								
          					

                      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                        data-image="{{asset('images/photo_gallery/photo_3.png')}}"
                        data-target="#image-gallery">
                        <img class="img-thumbnail"
                        src="{{asset('images/photo_gallery/photo_3.png')}}"
                        alt="Another alt text">
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                      <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                      data-image="{{asset('images/photo_gallery/photo_4.png')}}"
                      data-target="#image-gallery">
                      <img class="img-thumbnail"
                      src="{{asset('images/photo_gallery/photo_4.png')}}"
                      alt="Another alt text">
                    </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                    data-image="{{asset('images/photo_gallery/photo_5.png')}}"
                    data-target="#image-gallery">
                    <img class="img-thumbnail"
                    src="{{asset('images/photo_gallery/photo_5.png')}}"
                    alt="Another alt text">
                  </a>
                </div>



                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                  data-image="{{asset('images/photo_gallery/photo_6.png')}}"
                  data-target="#image-gallery">
                  <img class="img-thumbnail"
                  src="{{asset('images/photo_gallery/photo_6.png')}}"
                  alt="Another alt text">
                </a>
              </div>
              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                data-image="{{asset('images/photo_gallery/photo_7.png')}}"
                data-target="#image-gallery">
                <img class="img-thumbnail"
                src="{{asset('images/photo_gallery/photo_7.png')}}"
                alt="Another alt text">
              </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
              data-image="{{asset('images/photo_gallery/photo_8.png')}}"
              data-target="#image-gallery">
              <img class="img-thumbnail"
              src="{{asset('images/photo_gallery/photo_8.png')}}"
              alt="Another alt text">
            </a>
          </div>



          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
            data-image="{{asset('images/photo_gallery/photo_9.png')}}"
            data-target="#image-gallery">
            <img class="img-thumbnail"
            src="{{asset('images/photo_gallery/photo_9.png')}}"
            alt="Another alt text">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
          data-image="{{asset('images/photo_gallery/photo_10.png')}}"
          data-target="#image-gallery">
        
        </a>
      </div>

       <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
          data-image="{{asset('images/photo_gallery/photo_10.png')}}"
          data-target="#image-gallery">
          <img class="img-thumbnail"
          src="{{asset('images/photo_gallery/photo_10.png')}}"
          alt="Another alt text">
        </a>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{asset('images/photo_gallery/photo_1.png')}}"
                            data-target="#image-gallery">
                            <img class="img-thumbnail"
                            src="{{asset('images/photo_gallery/photo_1.png')}}"
                            alt="Another alt text">
                          </a>
                        </div>
      
  </div>

  <script type="text/javascript">
   let modalId = $('#image-gallery');

   $(document)
   .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
      .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
        .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
        .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

     function loadGallery(setIDs, setClickAttr) {
      let current_image,
      selector,
      counter = 0;

      $('#show-next-image, #show-previous-image')
      .click(function () {
        if ($(this)
          .attr('id') === 'show-previous-image') {
          current_image--;
      } else {
        current_image++;
      }

      selector = $('[data-image-id="' + current_image + '"]');
      updateGallery(selector);
    });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
        .text($sel.data('title'));
        $('#image-gallery-image')
        .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
        .each(function () {
          counter++;
          $(this)
          .attr('data-image-id', counter);
        });
      }
      $(setClickAttr)
      .on('click', function () {
        updateGallery($(this));
      });
    }
  });

// build key actions
$(document)
.keydown(function (e) {
  switch (e.which) {
      case 37: // left
      if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
        $('#show-previous-image')
        .click();
      }
      break;

      case 39: // right
      if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
        $('#show-next-image')
        .click();
      }
      break;

      default:
        return; // exit this handler for other keys
      }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });

</script>


<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="image-gallery-title"></h4>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
				</button>
			</div>
			<div class="modal-body">
				<img id="image-gallery-image" class="img-responsive col-md-12" src="">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
				</button>

				<button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
				</button>
			</div>
		</div>
	</div>
</div>
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
