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

<!--Start service area-->
<section class="service-area" style="background-image:url(images/services/bg.html);">
  <div class="container">
    <div class="sec-title">
      <h2>Our Products</h2>
      <span class="decor">
      </span>
    </div>
    <div class="row">
      <!--Start single service item style="height:300px;"-->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="single-service-item">
          <div class="img-holder">
            <img src="img/p1.jpg">
            </div>
          <div class="text-holder">
            <a href="categorya01c.html?name=Wrought-Iron-Railings-and-Doorways">
              <h3>Wrought Iron
                <span>Gateway</span>
              </h3>
            </a>
            <p>Wrought Iron Gateway, Solid Wrought Iron Gateway, Wrought Iron Main Gate</p>
          </div>
        </div>
      </div>
      <!--End single service item-->
      <!--Start single service item-->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="single-service-item">
          <div class="img-holder">
            <img src="img/p2.jpg">
          </div>
          <div class="text-holder">
            <a href="category65e9.html?name=Wrought-Iron-Staircase-Railing">
              <h3>Wrought Iron
                <span>Staircase Railing</span>
              </h3>
            </a>
            <p>Floral Wrought Iron Staircase Railing ...</p>
          </div>
        </div>
      </div>
      <!--End single service item-->
      <!--Start single service item-->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="single-service-item">
          <div class="img-holder">
            <img src="img/p3.jpg">
          </div>
          <div class="text-holder">
            <a href="category2827.html?name=Laser-Cutting">
              <h3>Parapet Laser
                <span>Cutting Railing</span>
              </h3>
            </a>
            <p>Parapet Laser Cutting Railing, Stair Laser Cutting Railing ..</p>
          </div>
        </div>
      </div>
      <!--End single service item-->
      <!--Start single service item-->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="single-service-item">
          <div class="img-holder">
            <img src="img/p4.jpg">
          </div>
          <div class="text-holder">
            <a href="category19d7.html?name=Stainless-Steel-Railings-and-Gates">
              <h3>SS
                <span>Gates</span>
              </h3>
            </a>
            <p>SS Gate With Funder Max, Stainless Steel Gate with Funder max</p>
          </div>
        </div>
      </div>
      <!--End single service item-->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="single-service-item">
          <div class="img-holder">
            <img src="images/project/p4.jpg" style="height:200px;">
          </div>
          <div class="text-holder">
            <a href="categoryf3f0.html?name=Aluminum-Gate">
              <h3>Aluminium Profile
                <span>Main Gates</span>
              </h3>
            </a>
            <p>Residental Aluminum Profile Gates Aluminium Profile Main Gate Residental aluminium Gate</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End service area-->

@endsection