@extends('layouts.main')

@section('content')
<!--Carousel Wrapper-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="{{ asset('images/products/img2.jpg') }}" class="slider-image" alt="Los Angeles">
        </div>

        <div class="item">
            <img src="{{ asset('images/products/img6.jpg') }}" class="slider-image" alt="Chicago">
        </div>

        <div class="item">
            <img src="{{ asset('images/products/img7.jpg') }}" class="slider-image" alt="New York">
        </div>

        <div class="top-left">
            Prem<br>Steel Works!
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        {{--<span class="glyphicon glyphicon-chevron-left"></span>--}}
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        {{--<span class="glyphicon glyphicon-chevron-right"></span>--}}
        <span class="sr-only">Next</span>
    </a>
</div>

<!--Start welcome area-->
<section class="welcome-area">
  <div class="container clearfix">
    <div class="sec-title">
      <h2>Welcome to
        <span>Prem Engineering Works</span>
      </h2>
      <strong style="font-size: 20px; color: #252525;">(Prem Steel)</strong>
      {{--<span class="decor">
      </span>--}}
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="text-holder">
          <h3>The Studio of Railing & Doorways since 1995.</h3>
          <p>We started in 1995 with the name "Prem Welding Works". In 2010 we registered as "Prem Engineering Works". More than 25 years experience in making steel fabricating products like Gates and Railings. In Karnal, we are famous as "Prem Steel"..</p>
          <div class="bottom">
            <div class="button">
              <a class="thm-btn bg-cl-1" href="{{ route('contact') }}">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
      {{--<div class="col-md-6 col-sm-12 col-xs-12">
        <div class="gallery clearfix">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="video-gallery">
                <img src="images/welcome/main-gallery.jpg">
                <div class="overlay-gallery">
                  <div class="icon-holder">
                    <div class="icon">
                      <a class="video-fancybox" title="" href="https://www.youtube.com/watch?v=q8_X6GG-sn8">
                        <img src="images/icon/play-btn.png" alt="Play Button" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="gallery-bg-img">
                <img src="images/welcome/1.jpg" alt="Awesome Image">
              </div>
            </div>
          </div>
        </div>
      </div>--}}
    </div>
  </div>
</section>
<!--End welcome area-->


<!--Start service area-->
<section class="service-area" style="background-image:url(images/services/bg.html);">
  <div class="container">
    <div class="sec-title">
      <h2>Our Products</h2>
    </div>
    <div class="row">
      <!--Start single service item style="height:300px;"-->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="single-service-item">
          <div class="img-holder">
            <img src="{{ asset('images/products/img12.jpg') }}">
            </div>
          <div class="text-holder">
            <a href="javascript:void(0)">
              <h3>Gateway</h3>
            </a>
            <p>All type of Steel Gate are available</p>
          </div>
        </div>
      </div>
      <!--End single service item-->
      <!--Start single service item-->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="single-service-item">
          <div class="img-holder">
            <img src="{{ asset('images/products/img1.jpg') }}">
          </div>
          <div class="text-holder">
            <a href="javascript:void(0)">
              <h3>Staircase Railing</h3>
            </a>
            <p>All type of Steel Staircase Railing are available</p>
          </div>
        </div>
      </div>
      <!--End single service item-->
      <!--Start single service item-->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="single-service-item">
          <div class="img-holder">
            <img src="{{ asset('images/products/img14.jpg') }}">
          </div>
          <div class="text-holder">
            <a href="javascript:void(0)">
              <h3>Railing</h3>
            </a>
            <p>All type of Steel Wall Railing are available</p>
          </div>
        </div>
      </div>
      <!--End single service item-->
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a class="thm-btn bg-cl-1" href="{{ route('products') }}" style="padding: 17px 30px 15px;">All Products</a>
        </div>
    </div>
  </div>
</section>
<!--End service area-->

<!--Start choose area--> 
<section class="choose-area">
    <div class="container">
        <div class="sec-title text-center">
            <h2>Why choose Us</h2><br>
            <p>We have achieved a remarkable and strong position in national market due to our excellent quality and highly durable range of products that we provide in several specifications within limited time period. Following are the some of the unique reasons due to which we have achieved the belief of our valued patrons:</p>
        </div>
        <div class="row">
            <!--Start single item-->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-item">
                    <div class="icon-holder">
                        <span class="flaticon-internet"></span>
                    </div>
                    <div class="text-holder">
                        <h3><strong>Since 1995</strong></h3>
                        <p>We brings 26 years of designs experience</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-item">
                    <div class="icon-holder">
                        <span class="flaticon-construction"></span>
                    </div>
                    <div class="text-holder">
                        <h3><strong>Quality Products</strong></h3>
                        <p>We provide high quality products only to our customers, our products are certified with ISO.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-item">
                    <div class="icon-holder">
                        <span class="flaticon-idea"></span>
                    </div>
                    <div class="text-holder">
                        <h3><strong>Highly experienced workforce</strong></h3>
                        <p>Our Highly experienced workforce team designs with your taste and budget.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-item">
                    <div class="icon-holder">
                        <span class="flaticon-cup"></span>
                    </div>
                    <div class="text-holder">
                        <h3><strong>Fair business practice</strong></h3>
                        <p> we won the best railing and doorways Design  award from organization.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-item">
                    <div class="icon-holder">
                        <span class="flaticon-interface"></span>
                    </div>
                    <div class="text-holder">
                        <h3><strong>Free Consultation</strong></h3>
                        <p>We providing free consultation about  quality, space, budget and etc but it is free for all.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->                       
        </div>
    </div>    
</section>
<!--End choose area-->

@endsection