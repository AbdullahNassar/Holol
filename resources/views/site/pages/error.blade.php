
<!DOCTYPE html>
<html>
    <head>
        <!-- Meta Tags
        ========================== -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!-- Site Title
        ========================== -->
        <title>@if (Config::get('app.locale') == 'ar') حلول @else Holol @endif</title>

        
        <!-- Favicon
        ===========================-->
        <link rel="shortcut icon" href="{{asset('assets/site/images/fav-icon.png')}}">
        
        <!-- Base & Vendors
        ========================== -->
        <link href="{{asset('assets/site/vendor/normalize/normalize.css')}}" rel="stylesheet">
        <link href="{{asset('assets/site/vendor/bootstrap-grid/bootstrap-grid.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/site/vendor/perfect-scrollbar/css/perfect-scrollbar.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/site/vendor/font-awesome/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/vendor/bxslider/css/jquery.bxslider.css')}}">
        <!-- Site Style
        ========================== -->
        <link rel="stylesheet" href="{{asset('assets/site/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/css/test.css')}}">
        <link href="{{asset('assets/site/sweetalert.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/site/custom.css')}}" rel="stylesheet">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
        <![endif]-->
    </head>
    <body>
       <div id="preloader">
           <div class="cogs-1" id="loading">
               <i class="fa fa-cog layer-1"></i>
               <i class="fa fa-cog layer-2"></i>
               <i class="fa fa-cog layer-3"></i>
           </div>
       </div>
       <div id="wrapper">   
           <div id="main">
               <div id="home" class="page home" data-pos="home">
                    <div class="header">
                        <div class="container">
                            <a href="{{route('site.home')}}" class="logo">
                                <img src="{{asset('assets/site/images/logo.png')}}" alt="logo-img">
                            </a>
                        </div><!-- End container -->
                    </div><!-- End Header -->
                    <div class="home-slider">
                        <div class="slider">
                            @foreach($sliders as $slider)
                            <div class="slider-item @if($loop->index==0) active @endif">
                                <img src="{{asset('storage/uploads/slider').'/'.$slider->image}}" alt="">
                            </div><!--End slider-item-->
                            @endforeach
                        </div><!--End <!-End slider-->
                        <div class="slider-caption">
                            @if (Config::get('app.locale') == 'ar')
                            <p>
                                خطأ 404 <br> لا يوجد محتوى فى هذه الصفحة
                            </p>
                            @else
                            <p>
                                Error 404
                                <br>There's No Content In This Page
                            </p>
                            @endif
                            <br>
                            <a href="{{route('site.home')}}" class="title" style="color: #63c3ec;">@if (Config::get('app.locale') == 'ar') العودة الى الرئيسية @else Back To Home Page @endif</a>
                        </div><!-- End Slider-Caption -->
                    </div><!--End home-slider-->  
                </div><!--End home-->

               <div id="overlay"></div>
            </div><!--end main-->
        </div><!--wrapper-->

        <!-- JS Base & Vendors
        ========================== -->
        <script src="{{asset('assets/site/vendor/jquery/jquery.js')}}"></script>

        <script src="{{asset('assets/site/vendor/bxslider/js/jquery.bxslider.js')}}"></script>
        
        <script type="text/javascript">
        $(window).load(function() {
    "use strict";
    $("#loading").fadeOut(500, function() {
        $("body").css({
            position: "static",
            top: "auto",
            bottom: "auto",
            height: "auto"
        });
        $(this).parent().fadeOut(500, function() {
            $(this).remove();
        });
    });
});


$(document).ready(function () {
    "use strict";
    $('.slider').bxSlider({
        auto: 'true',
        mode: 'fade',
        captions: false,
        pager: false
    });
});
        </script>
    </body>
</html>