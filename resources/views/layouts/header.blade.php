
<!--Start header-search  area-->
<section class="header-search">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="search-form pull-right">
                    <form action="#">
                        <div class="search">
                            <input type="search" name="search" value="" placeholder="Search Something">
                            <button type="submit"><span class="icon fa fa-search"></span></button>
                        </div>
                    </form>
                </div>
          </div>
        </div>
    </div>
</section>
<!--End header-search  area-->  

<!--Start header area-->
<header class="header-area stricky">
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-12 col-sm-12 col-xs-12"> -->
                <div class="outer-box clearfix">
                    <!--Start logo-->
                    <div class="col-md-6 col-sm-6 col-xs-6">

                        <div class="logo my-1">
                            <a href="{{ route('index') }}">
                                <img src="images/new-logo.png" width="90" height="112">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="{{ (Request::segment(1) == '') ? 'active' : '' }}"><a href="{{ route('index') }}">Home</a></li>
                                    <li class="{{ (Request::segment(1) == 'products') ? 'active' : '' }}"><a href="{{ route('products') }}">Our Products</a></li>
                                    {{--<li class="{{ (Request::segment(1) == 'about') ? 'active' : '' }}"><a href="{{ route('about') }}">About Us</a></li>--}}
                                    <li class="{{ (Request::segment(1) == 'contact-us') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact Us</a></li>
                                    @if (Session::has('user'))
                                    <li class="{{ (Request::segment(1) == 'log-out') ? 'active' : '' }}"><a href="{{ route('log-out') }}">Log Out</a></li>
                                    @endif
                                </ul>
                            </div>
                        </nav>
                        <!--End mainmenu-->
                    </div>
                </div>
          <!-- </div> -->
        </div>
    </div>
</header>
<!--End header area-->     

  