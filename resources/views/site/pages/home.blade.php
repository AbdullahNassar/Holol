
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
        <link rel="stylesheet" href="{{asset('assets/site/vendor/prettyPhoto/css/prettyPhoto.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/vendor/Magnific-Popup-master/dist/magnific-popup.css')}}">
        
        <!-- Site Style
        ========================== -->
        <link rel="stylesheet" href="{{asset('assets/site/css/style.css')}}">
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
           <div class="side-menu closed" id="main-nav">
                <div class="side-menu-container">
                    <div class="icon-bar-container">
                        <a href="" class="icon-bar">
                            <i class="fa fa-align-right"></i>
                        </a><!--End icon-bar-->
                    </div><!--End icon-bar-container-->
                    <ul class="side-menu-nav side-nav" id="navigation">
                        <li class="currentmenu">
                            <a href="#home">
                                <img src="{{asset('assets/site/images/icons/home.png')}}">
                                <img src="{{asset('assets/site/images/icons/home-hover.png')}}">
                                @if (Config::get('app.locale') == 'ar') الرئيسية @else Home @endif
                            </a>
                        </li>        
                        <li>
                            <a href="#about">
                                <img src="{{asset('assets/site/images/icons/about.png')}}">
                                <img src="{{asset('assets/site/images/icons/about-hover.png')}}">       
                                @if (Config::get('app.locale') == 'ar') من نحن @else About Us @endif
                            </a>
                        </li>
                        <li>
                            <a href="#services">
                                <img src="{{asset('assets/site/images/icons/services.png')}}">
                                <img src="{{asset('assets/site/images/icons/services-hover.png')}}">
                                    
                                @if (Config::get('app.locale') == 'ar') خدماتنا @else Services @endif
                            </a>
                        </li>
                        <li>
                            <a href="#portfolio">
                                <img src="{{asset('assets/site/images/icons/portofolio.png')}}">
                                <img src="{{asset('assets/site/images/icons/portofolio-hover.png')}}">
                                    
                                @if (Config::get('app.locale') == 'ar') اعمالنا @else Portfolios @endif
                            </a>
                        </li>
                        <li>
                        <li>
                            <a href="#blog">
                                <img src="{{asset('assets/site/images/icons/blog.png')}}">
                                <img src="{{asset('assets/site/images/icons/blog-hover.png')}}">
                                @if (Config::get('app.locale') == 'ar') المدونة @else Blog @endif
                            </a>
                        </li>
                        <li>
                            <a href="#contact">
                                <img src="{{asset('assets/site/images/icons/contact.png')}}">
                                <img src="{{asset('assets/site/images/icons/contact-hover.png')}}">               
                                @if (Config::get('app.locale') == 'ar') اتصل بنا @else Contact Us @endif
                            </a>
                        </li>
                        <li class="external">
                          @if (Config::get('app.locale') == 'ar')
                        <a href="{{route('site.lang','en')}}">
                          <img src="{{asset('assets/site/images/icons/lang.png')}}">
                          <img src="{{asset('assets/site/images/icons/lang-hover.png')}}">  
                          English
                        </a>
                        @else
                        <a href="{{route('site.lang','ar')}}">
                          <img src="{{asset('assets/site/images/icons/lang.png')}}">
                          <img src="{{asset('assets/site/images/icons/lang-hover.png')}}">  
                          Arabic
                        </a>
                        @endif
                        {{ csrf_field() }}
                      </li>
                    </ul>
                </div><!--End side-menu-container-->
           </div><!--End side-menu-->
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
                                {{$data->get('slider_ar')}}
                                <br>{{$data->get('slider2_ar')}}
                            </p>
                            @else
                            <p>
                                {{$data->get('slider_en')}}
                                <br>{{$data->get('slider2_en')}}
                            </p>
                            @endif
                        </div><!-- End Slider-Caption -->
                    </div><!--End home-slider-->  
                </div><!--End home-->
               <div id="about" class="page">
                   <section class="about">
                       <div class="container-fluid">
                           <div class="row">
                               <div class="col-lg-7">
                                   <div class="section-head">
                                       <h3 class="section-title">
                                        @if (Config::get('app.locale') == 'ar')
                                           {{$data->get('about_head_ar')}}
                                        @else
                                            {{$data->get('about_head_en')}}
                                        @endif
                                       </h3>
                                       <p>
                                        @if (Config::get('app.locale') == 'ar')
                                           {{$data->get('about_content_ar')}}
                                        @else
                                            {{$data->get('about_content_en')}}
                                        @endif
                                       </p>
                                   </div><!-- End Section-Head -->
                                   <div class="section-content">
                                       <div class="row">
                                           <div class="col-md-6">
                                               <div class="feature-box">
                                                   <div class="feature-box-head">
                                                       <img src="{{asset('assets/site/images/icons/value.png')}}" alt="icon-1">
                                                   </div><!-- End feature-box-Head -->
                                                   <div class="feature-box-body">
                                                    @if (Config::get('app.locale') == 'ar')
                                                       <h3 class="title">قيمنا</h3>
                                                       <p>
                                                           {{$data->get('morals_ar')}}  
                                                       </p>
                                                    @else
                                                        <h3 class="title">Our Morals</h3>
                                                       <p>
                                                           {{$data->get('morals_en')}} 
                                                       </p>
                                                    @endif
                                                    </div><!-- End feature-box-Body -->
                                               </div><!-- End feature-box -->
                                            </div><!-- End col -->
                                            <div class="col-md-6">
                                                <div class="feature-box">
                                                    <div class="feature-box-head">
                                                        <img src="{{asset('assets/site/images/icons/vision.png')}}" alt="icon-2">
                                                    </div><!-- End feature-box-Head -->
                                                    <div class="feature-box-body">
                                                        @if (Config::get('app.locale') == 'ar')
                                                        <h3 class="title">رؤيتنا</h3>
                                                        <p>
                                                            {{$data->get('vision_ar')}}  
                                                        </p>
                                                        @else
                                                        <h3 class="title">Our Vision</h3>
                                                        <p>
                                                            {{$data->get('vision_en')}} 
                                                        </p>
                                                        @endif
                                                    </div><!-- End feature-box-Body -->
                                                </div><!-- End feature-box -->
                                            </div><!-- End col -->
                                            <div class="col-md-6">
                                                <div class="feature-box">
                                                    <div class="feature-box-head">
                                                        <img src="{{asset('assets/site/images/icons/message.png')}}" alt="icon-3">
                                                    </div><!-- End feature-box-Head -->
                                                    <div class="feature-box-body">
                                                        @if (Config::get('app.locale') == 'ar')
                                                        <h3 class="title">رسالتنا</h3>
                                                        <p>
                                                            {{$data->get('message_ar')}}      
                                                        </p>
                                                        @else
                                                        <h3 class="title">Our Message</h3>
                                                        <p>
                                                            {{$data->get('message_en')}}     
                                                        </p>
                                                        @endif
                                                    </div><!-- End feature-box-Body -->
                                                </div><!-- End feature-box -->
                                            </div><!-- End col -->
                                            <div class="col-md-6">
                                                <div class="feature-box">
                                                    <div class="feature-box-head">
                                                        <img src="{{asset('assets/site/images/icons/goals.png')}}" alt="icon-4">
                                                    </div><!-- End feature-box-Head -->
                                                    <div class="feature-box-body">
                                                        @if (Config::get('app.locale') == 'ar')
                                                        <h3 class="title">أهدافنا</h3>
                                                        <p>
                                                            {{$data->get('goals_ar')}}  
                                                        </p>
                                                        @else
                                                        <h3 class="title">Our Goals</h3>
                                                        <p>
                                                            {{$data->get('goals_en')}}   
                                                        </p>
                                                        @endif
                                                    </div><!-- End feature-box-Body -->
                                                </div><!-- End feature-box -->
                                            </div><!-- End col -->
                                        </div><!-- End row -->
                                    </div><!-- End Section-Content -->
                                </div><!--End col -->
                                <div class="col-lg-5">
                                    <div class="section-img">
                                        <img src="{{asset('storage/uploads/static').'/'.$data->get('about_image')}}" alt="about">
                                    </div><!-- End Section-Img -->
                                </div><!--End col -->
                            </div><!--End row -->
                        </div><!-- End container -->
                    </section><!-- En Section -->
                </div><!--End about Page-->
               <div id="services" class="page">
                   <section class="services">
                       <div class="container-fluid">
                           <div class="section-content">
                               <div class="row">
                                    @foreach($services as $service)
                                    @if($service->id == 1)
                                    <div class="col-lg-4">
                                       <div class="service-block service-lg">
                                           <div class="service-block-img">
                                               <img src="{{asset('storage/uploads/service').'/'.$service->icon}}">
                                           </div><!-- End service-block-img -->
                                           <ul class="service-block-body" id="more-page">
                                               <li>
                                                @if (Config::get('app.locale') == 'ar')
                                                   <a href="#single-service1" class="title">
                                                       {{$service->name_ar}}
                                                   </a>
                                                @else
                                                    <a href="#single-service1" class="title">
                                                       {{$service->name_en}}
                                                   </a>
                                                @endif
                                               </li>
                                           </ul><!-- End service-block-body -->
                                       </div><!-- End service-block -->
                                    </div><!-- End col -->
                                    @endif
                                   @endforeach
                                   <div class="col-lg-8">
                                        <div class="row">
                                            @foreach($services as $service)
                                            @if($service->id > 1 && $service->id < 6)
                                            <div class="col-md-6">
                                                <div class="service-block">
                                                    <div class="service-block-img">
                                                        <img src="{{asset('storage/uploads/service').'/'.$service->icon}}">
                                                    </div><!-- End service-block-img -->
                                                    <ul class="service-block-body" id="more-page">
                                                        <li>
                                                            @if (Config::get('app.locale') == 'ar')
                                                               <a href="#single-service{{$service->id}}" class="title">
                                                                   {{$service->name_ar}}
                                                               </a>
                                                            @else
                                                                <a href="#single-service{{$service->id}}" class="title">
                                                                   {{$service->name_en}}
                                                               </a>
                                                            @endif
                                                        </li>
                                                    </ul><!-- End service-block-body -->
                                                </div><!-- End service-block -->
                                            </div><!-- End col -->
                                            @endif
                                            @endforeach
                                        </div><!-- End row -->
                                    </div><!-- End col -->
                                </div><!-- End row -->
                            </div><!-- End Section-Content -->
                        </div><!--End container-fluid-->
                    </section><!--End services-->
                </div><!--End services Pages-->
                @foreach($services as $service)
                <div id="single-service{{$service->id}}" class="page">
                   <section class="box-detail">
                       <div class="container-fluid">
                           <div class="row">
                               <div class="col-lg-5">
                                   <div class="box-detail-img">
                                       <img src="{{asset('storage/uploads/service').'/'.$service->image}}">
                                   </div><!-- End box-detail-Img -->
                               </div><!-- End col -->
                               <div class="col-lg-7">
                                   <div class="box-detail-content">
                                    @if (Config::get('app.locale') == 'ar')
                                       <h3 class="title">
                                           {{$service->name_ar}}
                                       </h3>
                                       <p>
                                           {{$service->content_ar}}
                                       </p>
                                    @else
                                        <h3 class="title">
                                           {{$service->name_en}}
                                        </h3>
                                        <p>
                                           {{$service->content_en}}
                                        </p>
                                    @endif
                                   </div><!-- End box-detail-Content -->
                               </div><!-- End col -->
                           </div><!-- End row -->
                       </div><!-- End Container -->
                       <ul class="back-page" id="more-page">
                            <li>                
                                <a href="#services">
                                    رجوع
                                    <i class="fa fa-long-arrow-left"></i>
                                </a>
                            </li>
                       </ul><!-- End service-block-body -->
                   </section><!-- End Section -->
                </div><!--End Blog Post Pages-->
                @endforeach

                <div id="portfolio" class="page">
           <section class="works">
             <div class="page-head">
                            <h3 class="title">
                                  @if (Config::get('app.locale') == 'ar')
                                   حلولنا لنجاح مشروعك. 
                                  @else
                                   Solutions for project success
                                  @endif
                            </h3>   
                        </div><!-- End page-head -->
             <div class="container-fluid">
               <div id="filters">
                 <select id="cd-dropdown" name="cd-dropdown" class="cd-select">
                   <option class="filter" value="all" selected>
                     
                     @if (Config::get('app.locale') == 'ar')
                                             كل الاقسام
                                            @else
                                             All Categories
                                            @endif
                   </option>
                    @foreach($categories as $category)
                   <option class="filter" value="{{$category->value}}_{{$category->id}}">
                      @if (Config::get('app.locale') == 'ar')
                        {{$category->cat_name_ar}}
                      @else
                        {{$category->cat_name_en}}
                      @endif
                   </option>
                   @endforeach 
                 </select>
               </div><!--End filters-->
                <div id="pub-grid">
                @foreach($portfolios as $portfolio)
                <div class="item mix {{$portfolio->value}}_{{$portfolio->cat_id}}">
                  <div class="portofolio-item custom-hover" href="#">
                    <div class="portofolio-item-img custom-hover-holder">
                      <img src="{{asset('storage/uploads/portfolio/'. $portfolio->icon)}}" alt="work-1">
                    </div><!-- End Portofolio-Item-Img -->
                    <ul class="portofolio-item-content" id="more-page">
                      <li>
                        <a href="#work-detail{{$portfolio->id}}" class="title">
                          @if (Config::get('app.locale') == 'ar')
                            {{$portfolio->name_ar}}
                          @else
                            {{$portfolio->name_en}}
                          @endif
                        </a>
                      </li>
                    </ul><!-- End Portofolio-Item-Content -->
                  </div>  
                </div><!--End item-->
                @endforeach
              </div><!--End pub-grid-->
            </div><!--End container-fluid-->
          </section><!--End services-->
        </div><!--End services Pages-->


                
                @foreach($portfolios as $portfolio)
                <div id="work-detail{{$portfolio->id}}" class="page">
                 <section class="box-detail">
                   <div class="container-fluid">
                     <div class="row">
                       <div class="col-lg-5">
                            <div class="box-detail-img">
                                <a href="{{asset('storage/uploads/portfolio/'. $portfolio->image)}}">
                                    <img src="{{asset('storage/uploads/portfolio/'. $portfolio->image)}}">
                                </a>
                                @foreach($images as $image)
                                    @if($image->p_id == $portfolio->id)
                                        <a href="{{asset($image->pimage)}}"></a>
                                    @endif
                                @endforeach
                            </div><!--End-->
                       </div><!-- End col -->
                       <div class="col-lg-7">
                         <div class="box-detail-content">
                           <h3 class="title">
                             @if (Config::get('app.locale') == 'ar')
                               {{$portfolio->name_ar}}
                             @else
                               {{$portfolio->name_en}}
                             @endif
                           </h3>
                           <p>
                             @if (Config::get('app.locale') == 'ar')
                               {{$portfolio->content_ar}}
                             @else
                               {{$portfolio->content_en}}
                             @endif
                           </p>
                           <a href="{{$portfolio->url}}" class="custom-btn" data-type="prettyPhoto[gallery]">
                                        مشاهدة الفيديو
                          	</a><!--End about-video-->
										
                         </div><!-- End box-detail-Content -->
                       </div><!-- End col -->
                     </div><!-- End row -->
                   </div><!-- End Container -->
                   <ul class="back-page" id="more-page">
                            <li>                
                                <a href="#portfolio">
                                    رجوع
                                    <i class="fa fa-long-arrow-left"></i>
                                </a>
                            </li>
                   </ul><!-- End service-block-body -->
                 </section><!-- End Section -->
                </div><!--End Blog Post Pages--> 
                @endforeach
               <div id="blog" class="page">
                    <section class="blog">
                        <div class="page-head">
                            <h3 class="title">
                                @if (Config::get('app.locale') == 'ar') اخبار وحلول @else Holol Blog @endif
                            </h3>       
                        </div><!-- End page-head -->
                        <div class="section-content">
                            <div class="container-fluid">
                                <div class="row">
                                    @foreach($posts as $post)
                                    @if (Config::get('app.locale') == 'ar')
                                    <div class="col-md-6 col-lg-4">
                                        <div class="blog-box hover-active">
                                            <div class="blog-box-img custom-hover">
                                                <div class="blog-box-img custom-hover-holder">
                                                   <img src="{{asset('storage/uploads/blog').'/'.$post->icon}}">
                                                    <div class="date">
                                                        <span>{{(new DateTime($post->updated_at))->format('j M Y')}}</span>
                                                    </div><!--End date-->
                                               </div><!--End custom-hover-holder-->
                                            </div><!--End Blog-box-img-->
                                            <div class="blog-box-content">
                                                <h2 class="title title-md">
                                                    {{$post->title_ar}}
                                                </h2>
                                                <p>
                                                    @php
                                                    $brief = substr($post->content_ar, 0, 200);
                                                    @endphp
                                                    {{strip_tags($brief)}}...
                                                </p>
                                                <ul id="more-page">
                                                    <li>
                                                        <a href="#blog-post{{$post->id}}" class="more-btn">      
                                                            اقرا المزيد +
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!--End Blog-box-content-->
                                        </div><!-- End Blog-Box -->
                                    </div><!-- End col -->
                                    @else
                                    <div class="col-md-6 col-lg-4">
                                        <div class="blog-box hover-active">
                                            <div class="blog-box-img custom-hover">
                                                <div class="blog-box-img custom-hover-holder">
                                                   <img src="{{asset('storage/uploads/blog').'/'.$post->icon}}">
                                                    <div class="date">
                                                        <span>{{(new DateTime($post->updated_at))->format('j M Y')}}</span>
                                                    </div><!--End date-->
                                               </div><!--End custom-hover-holder-->
                                            </div><!--End Blog-box-img-->
                                            <div class="blog-box-content">
                                                <h2 class="title title-md">
                                                    {{$post->title_en}} 
                                                </h2>
                                                <p> @php
                                                    $brief2 = substr($post->content_en, 0, 200);
                                                    @endphp
                                                    {{strip_tags($brief2)}}...
                                                </p>
                                                <ul id="more-page">
                                                    <li>
                                                        <a href="#blog-post{{$post->id}}" class="more-btn">      
                                                            Read More +
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!--End Blog-box-content-->
                                        </div><!-- End Blog-Box -->
                                    </div><!-- End col -->
                                    @endif
                                    @endforeach
                                </div><!-- End row -->
                            </div><!-- End  container-fluid-->
                        </div><!-- End Section-Content -->
                    </section><!-- En Section -->
                </div><!--End Blog Pages-->
               <div id="contact" class="page">
                    <section class="contact">
                        <div class="page-head">
                            <h3 class="title">
                                @if (Config::get('app.locale') == 'ar')
                                {{$data->get('contact_ar')}} 
                                @else
                                {{$data->get('contact_en')}}
                                @endif  
                            </h3>       
                        </div><!-- End page-head -->
                        <div class="section-content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <form action="{{route('site.message')}}" enctype="multipart/form-data" method="post" onsubmit="return false;" class="form">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="@if (Config::get('app.locale') == 'en') Full Name @else الاسم بالكامل @endif" name="name">
                                            </div><!-- End Form-Group -->
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="@if (Config::get('app.locale') == 'en') Email Address @else البريد الالكترونى @endif" name="email">
                                            </div><!-- End Form-Group -->
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder=" @if (Config::get('app.locale') == 'en') Subject @else الموضوع @endif" name="subject">
                                            </div><!-- End Form-Group -->
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="@if (Config::get('app.locale') == 'en') Message @else الرسالة @endif" name="message"></textarea>
                                            </div><!-- End Form-Group -->
                                            <div class="form-group">
                                                <button type="submit" class="custom-btn addBTN">@if (Config::get('app.locale') == 'en') Send Message @else ارسل رسالة  @endif</button>
                                            </div><!-- End Form-Group -->
                                        </form><!-- End form -->
                                    </div><!-- End col -->
                                    <div class="col-lg-5">
                                        <div class="contact-info">
                                            <div class="contact-widget">
                                                <div class="contact-icon">
                                                    <i class="fa fa-map-marker"></i>
                                                </div><!-- End Contact-Widget-Head -->
                                                <div class="contact-body">
                                                    <span>@if (Config::get('app.locale') == 'en') Send Address @else العنوان  @endif</span>
                                                    <span> 
                                                        @if (Config::get('app.locale') == 'ar')
                                                            {{$contact->get('address_ar')}} 
                                                        @else
                                                            {{$contact->get('address_en')}}
                                                        @endif  
                                                    </span>
                                                </div><!-- End Contact-Body -->
                                            </div><!-- End Contact-Widget -->
                                            <div class="contact-widget">
                                                <div class="contact-icon">
                                                    <i class="fa fa-envelope"></i>
                                                </div><!-- End Contact-Widget-Head -->
                                                <div class="contact-body">
                                                    <span>@if (Config::get('app.locale') == 'en') Email Address @else البريد الالكترونى @endif </span>
                                                    <span class="en-text"> {{$contact->get('email')}} </span>
                                                </div><!-- End Contact-Body -->
                                            </div><!-- End Contact-Widget -->
                                            <div class="contact-widget">
                                                <div class="contact-icon">
                                                    <i class="fa fa-phone"></i>
                                                </div><!-- End Contact-Widget-Head -->
                                                <div class="contact-body">
                                                    <span> @if (Config::get('app.locale') == 'en') Phone @else الهاتف @endif</span>
                                                    <span class="en-text"> {{$contact->get('phone')}}</span>
                                                </div><!-- End Contact-Body -->
                                            </div><!-- End Contact-Widget -->
                                        </div><!-- End Contact-Info -->
                                    </div><!-- End col -->
                                </div><!-- End row -->
                            </div><!-- End container-fluid -->
                        </div><!-- End section-content -->
                    </section><!-- En Section -->
                </div><!--End Contact Pages-->

                @foreach($posts as $post)
               <div id="blog-post{{$post->id}}" class="page">
                   <section class="blog-post">
                       <div class="page-head">
                           <h3 class="title">
                            @if (Config::get('app.locale') == 'ar')
                               {{$post->title_ar}}
                            @else 
                                {{$post->title_en}}
                            @endif
                           </h3>         
                        </div><!-- End page-head -->
                        <div class="section-content">
                            <div class="blog-box blog-post">
                                <div class="blog-box-img">
                                    <div class="date">
                                        @if (Config::get('app.locale') == 'ar')
                                        <span class="en-text">{{$post->day_ar}} </span>
                                        <span>{{$post->month_ar}} {{$post->year_ar}}</span>
                                        @else 
                                        <span class="en-text">{{$post->day_en}} </span>
                                        <span>{{$post->month_en}} {{$post->year_en}}</span>
                                        @endif
                                    </div><!--End date-->
                                    <img src="{{asset('storage/uploads/blog').'/'.$post->image}}" alt="...">
                                </div><!--End Blog-box-img-->
                                <div class="blog-box-content">
                                    @if (Config::get('app.locale') == 'ar')
                                    <h2 class="title title-md">
                                        {{$post->head_ar}}
                                    </h2>   
                                    <p>
                                        {{$post->content_ar}}
                                    </p> 
                                    @else 
                                    <h2 class="title title-md">
                                        {{$post->head_en}}
                                    </h2>   
                                    <p>
                                        {{$post->content_en}}
                                    </p>
                                    @endif      
                                    <div class="blog-post-share">
                                        @if (Config::get('app.locale') == 'ar')
                                        <p>مشاركة: </p>
                                        @else 
                                        <p>Share: </p>
                                        @endif
                                        <ul class="social-list a2a_kit a2a_kit_size_32 a2a_default_style">
                                            <script async src="https://static.addtoany.com/menu/page.js"></script>
                                          <li>
                                              <a class="a2a_button_facebook">
                                                  <i class="fa fa-facebook"></i>
                                              </a>
                                          </li>
                                          <li>
                                              <a class="a2a_button_twitter">
                                                  <i class="fa fa-twitter"></i>
                                              </a>
                                          </li>
                                          <li>
                                              <a class="a2a_button_google_plus">
                                                  <i class="fa fa-google-plus"></i>
                                              </a>
                                          </li>
                                          <li>
                                              <a class="a2a_dd" href="https://www.addtoany.com/share">
                                                  <i class="fa fa-plus-square"></i>
                                              </a>
                                          </li>
                                        </ul><!-- End Social-List -->
                                    </div>
                                </div><!--End Blog-box-content-->
                            </div><!-- End Blog-Box -->
                                        
                        </div><!-- End section-content -->
                        <ul class="back-page" id="more-page">
                            <li>                
                                <a href="#blog">
                                    رجوع
                                    <i class="fa fa-long-arrow-left"></i>
                                </a>
                            </li>
                       </ul><!-- End service-block-body -->
                    </section><!-- En blog-post -->
                </div><!--End Blog Post Pages-->
                @endforeach
               <div id="overlay"></div>
            </div><!--end main-->
        </div><!--wrapper-->
        
        <!-- JS Base & Vendors
        ========================== -->
        <script src="{{asset('assets/site/vendor/jquery/jquery.js')}}"></script>
        <script src="{{asset('assets/site/vendor/TweenMax.min.js')}}"></script>
        <script src="{{asset('assets/site/vendor/bxslider/js/jquery.bxslider.js')}}"></script>
        <script src="{{asset('assets/site/vendor/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>

        <script src="{{asset('assets/site/vendor/modernizr.custom.63321.js')}}"></script>
        <script src="{{asset('assets/site/vendor/jquery.dropdownit.js')}}"></script>
        <script src="{{asset('assets/site/vendor/jquery.mixitup.min.js')}}"></script>
        <script src="{{asset('assets/site/vendor/prettyPhoto/js/jquery.prettyPhoto.js')}}"></script>
        <script src="{{asset('assets/site/vendor/Magnific-Popup-master/dist/jquery.magnific-popup.js')}}"></script>
        
        
        <!-- Site JS
        ========================== -->
        <script src="{{asset('assets/site/js/main.js')}}"></script>
        <script src="{{asset('assets/site/process.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/admin/sweetalert.min.js')}}" type="text/javascript"></script>
        
        
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5ad5d9d6227d3d7edc2405c7/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        
        
    </body>
</html>