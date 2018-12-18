<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic page needs -->
  <meta charset="utf-8">
  <!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>@yield('title')</title>
  <meta name="description" content="best template, template free, responsive theme, fashion store, responsive theme, responsive html theme, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
  <meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive theme, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template"
  />
  <!-- Mobile specific metas  , -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon  -->
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Dosis:400,300,200,500,600,700,800' rel='stylesheet' type='text/css'>

  <!-- CSS Style -->

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">

  <!-- font-awesome & simple line icons CSS -->
  <link rel="stylesheet" type="text/css" href="{{url('css/font-awesome.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{url('css/simple-line-icons.css')}}" media="all">

  <!-- owl.carousel CSS -->
  <link rel="stylesheet" type="text/css" href="{{url('css/owl.carousel.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('css/owl.theme.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('css/owl.transitions.css')}}">

  <!-- animate CSS  -->
  <link rel="stylesheet" type="text/css" href="{{url('css/animate.css')}}" media="all">

  <!-- flexslider CSS -->
  <link rel="stylesheet" type="text/css" href="{{url('css/flexslider.css')}}">

  <!-- jquery-ui.min CSS  -->
  <link rel="stylesheet" type="text/css" href="{{url('css/jquery-ui.css')}}">

  <!-- Revolution Slider CSS -->
  <link href="{{url('css/revolution-slider.css')}}" rel="stylesheet">

  <!-- style CSS -->
  <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}" media="all">
</head>

<body class="cms-index-index cms-home-page">

  <!-- mobile menu -->
  <div id="mobile-menu">
    <ul>
      <li>
        <a href="index.html" class="home1">Home</a>
      </li>
      <li>
        <a href="contact_us.html">Contact us</a>
      </li>
      <li>
        <a href="about_us.html">About us</a>
      </li>
      <li>
        <a href="blog_full_width.html">Blog</a>
      </li>
    </ul>
  </div>
  <!-- end mobile menu -->
  <div id="page">

    <!-- Header -->
    <header>
      <div class="header-container">
        <div class="header-top">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-sm-4 hidden-xs">
                <!-- Default Welcome Message -->
                <div class="welcome-msg ">Welcome to MyStore! </div>
                <span class="phone hidden-sm">Call Us: +123.456.789</span>
              </div>

              <!-- top links -->
              <div class="headerlinkmenu col-lg-8 col-md-7 col-sm-8 col-xs-12">
                <div class="links">
                  <div class="myaccount">
                    <a title="My Account" href="account_page.html">
                      <i class="fa fa-user"></i>
                      <span class="hidden-xs">My Account</span>
                    </a>
                  </div>

                  <div class="login">
                    <a href="account_page.html">
                      <i class="fa fa-unlock-alt"></i>
                      <span class="hidden-xs">Log In</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-md-3 col-xs-12">
              <!-- Header Logo -->
              <div class="logo">
                <a title="e-commerce" href="index.html">
                  <img alt="responsive theme logo" src="{{url('images/logo.png')}}">
                </a>
              </div>
              <!-- End Header Logo -->
            </div>
            <div class="col-xs-9 col-sm-6 col-md-6">
              <!-- Search -->

              <div class="top-search">
                <div id="search">
                  <form>
                    <div class="input-group">
                      <select class="cate-dropdown hidden-xs" name="category_id">
                        <option>All Categories</option>
                        <option>women</option>
                        <option>Men</option>
                        <option>Electronics</option>
                      </select>
                      <input type="text" class="form-control" placeholder="Search" name="search">
                      <button class="btn-search" type="button">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </form>
                </div>
              </div>

              <!-- End Search -->
            </div>
            <!-- top cart -->

            <div class="col-lg-3 col-xs-3 top-cart">
              <div class="top-cart-contain">
                <div class="mini-cart">
                  <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle">
                    <a href="#">
                      <div class="cart-icon">
                        <i class="fa fa-shopping-cart"></i>
                      </div>
                      <div class="shoppingcart-inner hidden-xs">
                        <span class="cart-title">Shopping Cart</span>
                        <span class="cart-total">4 Item(s): $520.00</span>
                      </div>
                    </a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->

    <!-- Navbar -->
    <nav>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-4">
            <div class="mm-toggle-wrap">
              <div class="mm-toggle">
                <i class="fa fa-align-justify"></i>
              </div>
              <span class="mm-label">Categories</span>
            </div>
            <div class="mega-container visible-lg visible-md visible-sm">
              <div class="navleft-container">
                <div class="mega-menu-title">
                  <h3>Categories</h3>
                </div>
                <div class="mega-menu-category" style="display:none;">
                  <ul class="nav">
                    <li>
                      <a href="#">
                        <i class="icon fa fa-camera fa-fw"></i> Camera & Photo</a>
                      <div class="wrap-popup column1">
                        <div class="popup">
                          <div class="row">
                            <div class="col-md-12">
                              <ul class="nav">
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Canon</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Nikon</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Olympus</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>ALPA</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Bolex</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Samsung </span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Panasonic</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Thomson </span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Bell & Howell</span>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon fa fa-desktop fa-fw"></i> Computers</a>
                      <div class="wrap-popup column1">
                        <div class="popup">
                          <div class="row">
                            <div class="col-md-12">
                              <ul class="nav">
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Canon</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Nikon</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Olympus</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>ALPA</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Bolex</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Samsung </span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Panasonic</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Thomson </span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Bell & Howell</span>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <a href="shop_grid.html">
                        <i class="icon fa fa-apple fa-fw"></i> Apple Store</a>
                      <div class="wrap-popup column1">
                        <div class="popup">
                          <div class="row">
                            <div class="col-md-12">
                              <ul class="nav">
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Canon</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Nikon</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Olympus</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>ALPA</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Bolex</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Samsung </span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Panasonic</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Thomson </span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Bell & Howell</span>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="nosub">
                      <a href="#">
                        <i class="icon fa fa-location-arrow fa-fw"></i> Car Electronic</a>
                    </li>
                    <li>
                      <a href="shop_grid.html">
                        <i class="icon fa fa-headphones fa-fw"></i> Headphones</a>
                      <div class="wrap-popup column1">
                        <div class="popup">
                          <ul class="nav">
                            <li>
                              <a href="shop_grid.html">
                                <span>Envent Stereo</span>
                              </a>
                            </li>
                            <li>
                              <a href="shop_grid.html">
                                <span>Sennheiser</span>
                              </a>
                            </li>
                            <li>
                              <a href="shop_grid.html">
                                <span>Philips</span>
                              </a>
                            </li>
                            <li>
                              <a href="shop_grid.html">
                                <span>Sony</span>
                              </a>
                            </li>
                            <li>
                              <a href="shop_grid.html">
                                <span>Avantree</span>
                              </a>
                            </li>
                            <li>
                              <a href="shop_grid.html">
                                <span>Bajaao</span>
                              </a>
                            </li>
                            <li>
                              <a href="shop_grid.html">
                                <span>FiiO</span>
                              </a>
                            </li>
                            <li>
                              <a href="shop_grid.html">
                                <span>Audio-Technica</span>
                              </a>
                            </li>
                            <li>
                              <a href="shop_grid.html">
                                <span>LUXA2</span>
                              </a>
                            </li>
                            <li>
                              <a href="shop_grid.html">
                                <span>Geekria</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon fa fa-microphone fa-fw"></i> Accessories</a>
                      <div class="wrap-popup column1">
                        <div class="popup">
                          <div class="row">
                            <div class="col-md-12">
                              <ul class="nav">
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Canon</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Nikon</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Olympus</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>ALPA</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Bolex</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Samsung </span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Panasonic</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Thomson </span>
                                  </a>
                                </li>
                                <li>
                                  <a href="shop_grid.html">
                                    <span>Bell & Howell</span>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="nosub">
                      <a href="shop_grid.html">
                        <i class="icon fa fa-gamepad fa-fw"></i> Game &amp; Video</a>
                    </li>
                    <li class="nosub">
                      <a href="shop_grid.html">
                        <i class="glyphicon glyphicon-time"></i> Watches</a>
                    </li>
                    <li class="nosub">
                      <a href="shop_grid.html">
                        <i class="icon fa fa-lightbulb-o fa-fw"></i> Lights &amp; Lighting</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9 col-sm-8">
            <div class="mtmegamenu">
              <ul>
                <li class="mt-root demo_custom_link_cms">
                  <div class="mt-root-item">
                    <a href="index.html">
                      <div class="title title_font">
                        <span class="title-text">Home</span>
                      </div>
                    </a>
                  </div>
                </li>
                <li class="mt-root">
                  <div class="mt-root-item">
                    <a href="contact_us.html">
                      <div class="title title_font">
                        <span class="title-text">Contact Us</span>
                      </div>
                    </a>
                  </div>
                </li>
                <li class="mt-root">
                  <div class="mt-root-item">
                    <a href="about_us.html">
                      <div class="title title_font">
                        <span class="title-text">about us</span>
                      </div>
                    </a>
                  </div>
                </li>
                <li class="mt-root demo_custom_link_cms">
                  <div class="mt-root-item">
                    <a href="blog_full_width.html">
                      <div class="title title_font">
                        <span class="title-text">Blog</span>
                      </div>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- end nav -->

    <!-- Home Slider Start -->
    <div class="slider">
      <div class="tp-banner-container clearfix">
        <div class="tp-banner">
          <ul>
            <!-- SLIDE 1 -->
            <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700">
              <!-- MAIN IMAGE -->
              <img src="{{url('images/slider/slider-img1.jpg')}}" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <!-- LAYERS -->
              <!-- LAYER NR. 1 -->
              <div class="tp-caption very_big_white skewfromrightshort fadeout" data-x="center" data-y="100" data-speed="500" data-start="1200"
                data-easing="Circ.easeInOut" style=" font-size:70px; font-weight:800; color:#fe0100;">Huge
                <span style=" color:#000;">sale</span>
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-caption medium_text skewfromrightshort fadeout" data-x="center" data-y="165" data-hoffset="0" data-voffset="-73"
                data-speed="500" data-start="1200" data-easing="Power4.easeOut" style=" font-size:20px; font-weight:500; color:#337ab7;">
              Sale off 75% all products </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="210" data-hoffset="0" data-voffset="98"
                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500" data-start="1500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none"
                data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="border: 2px solid #fed700;border-radius: 50px; font-size:14px; background-color:#fed700; color:#333; z-index: 12; max-width: auto; max-height: auto; white-space: nowrap; letter-spacing:1px;">
                <a href='#' class='largebtn slide1'>Learn More</a>
              </div>
            </li>

            <!-- SLIDE 2 -->
            <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700">
              <!-- MAIN IMAGE -->
              <img src="{{url('images/slider/slider-img2.jpg')}}" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <!-- LAYERS -->
              <!-- LAYER NR. 1 -->
              <div class="tp-caption white_heavy_60 customin ltl tp-resizeme" data-x="310" data-y="140" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="1200" data-start="700" data-easing="Power4.easeOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.1"
                data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power4.easeIn" style=" font-size:70px; font-weight:800; color:#333;">GREAT LOOKS </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption black_thin_blackbg_30 customin ltl tp-resizeme" data-x="310" data-y="220" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                data-speed="1500" data-start="1000" data-easing="Power4.easeInOut" data-splitin="none" data-splitout="none"
                data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power4.easeIn" style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap; color:#34bcec; font-size:20px; font-weight:500;">The perfect synthesis of innovative thinking </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption lfb ltb start tp-resizeme" data-x="310" data-y="270" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="1500" data-start="1600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none"
                data-elementdelay="0.01" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;">
                <a href='#' class='largebtn solid'>Get It Now!</a>
              </div>
            </li>

            <!-- SLIDE 3 -->
            <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700">
              <!-- MAIN IMAGE -->
              <img src="{{url('images/slider/slider-img3.jpg')}}" alt="slidebg3" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <!-- LAYERS -->
              <!-- LAYER NR. 1 -->
              <div class="tp-caption big_100_white lft start fadeout" data-x="310" data-y="120" data-speed="500" data-start="1200" data-easing="Circ.easeInOut"
                style=" font-size:70px; font-weight:800; color:#fff;">High</div>
              <div class="tp-caption big_100_white lft fadeout" data-x="310" data-y="180" data-speed="500" data-start="1200" data-easing="Circ.easeInOut"
                style=" font-size:50px; font-weight:800; color:#fed700;">Definition</div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-caption medium_text lfb fadeout" data-x="310" data-y="260" data-speed="500" data-start="1200" data-easing="Power4.easeOut"
                style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap; color:#34bcec; font-size:20px; font-weight:500;">Best Camera For You?</div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption fade fadeout tp-resizeme" data-x="310" data-y="320" data-hoffset="-100" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="1500" data-start="800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none"
                data-elementdelay="0.01" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;">
                <a href='#' class='largebtn solid'>Get It Now!</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- main container -->
    @yield('content')
    <!-- Footer -->

    <footer>
      <div class="footer-newsletter">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-7">
              <form id="newsletter-validate-detail" method="post" action="#">
                <h3 class="hidden-sm">Sign up for newsletter</h3>
                <div class="newsletter-inner">
                  <input class="newsletter-email" name='Email' placeholder='Enter Your Email' />
                  <button class="button subscribe" type="submit" title="Subscribe">Subscribe</button>
                </div>
              </form>
            </div>
            <div class="social col-md-4 col-sm-5">
              <ul class="inline-mode">
                <li class="social-network fb">
                  <a title="Connect us on Facebook" target="_blank" href="https://www.facebook.com/">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="social-network googleplus">
                  <a title="Connect us on Google+" target="_blank" href="https://plus.google.com/">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </li>
                <li class="social-network tw">
                  <a title="Connect us on Twitter" target="_blank" href="https://twitter.com/">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="social-network linkedin">
                  <a title="Connect us on Linkedin" target="_blank" href="https://www.pinterest.com/">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
                <li class="social-network rss">
                  <a title="Connect us on Instagram" target="_blank" href="https://instagram.com/">
                    <i class="fa fa-rss"></i>
                  </a>
                </li>
                <li class="social-network instagram">
                  <a title="Connect us on Instagram" target="_blank" href="https://instagram.com/">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4 col-xs-12 col-lg-3">
            <div class="footer-logo">
              <a href="index-2.html">
                <img src="{{url('images/footer-logo.png')}}" alt="fotter logo">
              </a>
            </div>
            <p>Lorem Ipsum is simply dummy text of the print and typesetting industry.</p>
            <div class="footer-content">
              <div class="email">
                <i class="fa fa-envelope"></i>
                <p>Support@themes.com</p>
              </div>
              <div class="phone">
                <i class="fa fa-phone"></i>
                <p>(800) 0123 456 789</p>
              </div>
              <div class="address">
                <i class="fa fa-map-marker"></i>
                <p> My Company, 12/34 - West 21st Street, New York, USA</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block">
            <div class="footer-links">
              <h3 class="links-title">Information
                <a class="expander visible-xs" href="#TabBlock-1">+</a>
              </h3>
              <div class="tabBlock" id="TabBlock-1">
                <ul class="list-links list-unstyled">
                  <li>
                    <a href="#s">Delivery Information</a>
                  </li>
                  <li>
                    <a href="#">Discount</a>
                  </li>
                  <li>
                    <a href="sitemap.html">Sitemap</a>
                  </li>
                  <li>
                    <a href="#">Privacy Policy</a>
                  </li>
                  <li>
                    <a href="faq.html">FAQs</a>
                  </li>
                  <li>
                    <a href="#">Terms &amp; Condition</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block">
            <div class="footer-links">
              <h3 class="links-title">Insider
                <a class="expander visible-xs" href="#TabBlock-3">+</a>
              </h3>
              <div class="tabBlock" id="TabBlock-3">
                <ul class="list-links list-unstyled">
                  <li>
                    <a href="sitemap.html"> Sites Map </a>
                  </li>
                  <li>
                    <a href="#">News</a>
                  </li>
                  <li>
                    <a href="#">Trends</a>
                  </li>
                  <li>
                    <a href="about_us.html">About Us</a>
                  </li>
                  <li>
                    <a href="contact_us.html">Contact Us</a>
                  </li>
                  <li>
                    <a href="#">My Orders</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-2 col-xs-12 col-lg-3 collapsed-block">
            <div class="footer-links">
              <h3 class="links-title">Service
                <a class="expander visible-xs" href="#TabBlock-4">+</a>
              </h3>
              <div class="tabBlock" id="TabBlock-4">
                <ul class="list-links list-unstyled">
                  <li>
                    <a href="account_page.html">Account</a>
                  </li>
                  <li>
                    <a href="wishlist.html">Wishlist</a>
                  </li>
                  <li>
                    <a href="shopping_cart.html">Shopping Cart</a>
                  </li>
                  <li>
                    <a href="#">Return Policy</a>
                  </li>
                  <li>
                    <a href="#">Special</a>
                  </li>
                  <li>
                    <a href="#">Lookbook</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-coppyright">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-xs-12 coppyright"> Copyright © 2018 MyStore. Edit by 
              <a href="https://www.facebook.com/huongnguyen.nh"> Huong </a>. All Rights Reserved. </div>
            <div class="col-sm-6 col-xs-12">
              <div class="payment">
                <ul>
                  <li>
                    <a href="#">
                      <img title="Visa" alt="Visa" src="{{url('images/visa.png')}}">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img title="Paypal" alt="Paypal" src="{{url('images/paypal.png')}}">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img title="Discover" alt="Discover" src="{{url('images/discover.png')}}">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img title="Master Card" alt="Master Card" src="{{url('images/master-card.png')}}">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <a href="#" class="totop"> </a>
    <!-- End Footer -->

  </div>


  <!-- JS -->

  <!-- jquery js -->
  <script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>

  <!-- bootstrap js -->
  <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>


  <!-- owl.carousel.min js -->
  <script type="text/javascript" src="{{url('js/owl.carousel.min.js')}}"></script>

  <!-- bxslider js -->
  <script type="text/javascript" src="{{url('js/jquery.bxslider.js')}}"></script>

  <!-- Slider Js -->
  <script type="text/javascript" src="{{url('js/revolution-slider.js')}}"></script>

  <!-- megamenu js -->
  <script type="text/javascript" src="{{url('js/megamenu.js')}}"></script>
  <script type="text/javascript">
    /* <![CDATA[ */
    var mega_menu = '0';

  /* ]]> */
  </script>

  <!-- jquery.mobile-menu js -->
  <script type="text/javascript" src="{{url('js/mobile-menu.js')}}"></script>

  <!--jquery-ui.min js -->
  <script type="text/javascript" src="{{url('js/jquery-ui.js')}}"></script>

  <!-- main js -->
  <script type="text/javascript" src="{{url('js/main.js')}}"></script>

  <!-- countdown js -->
  <script type="text/javascript" src="{{url('js/countdown.js')}}"></script>

  <!-- Revolution Slider -->
  <script type="text/javascript">
    jQuery(document).ready(function () {
      jQuery('.tp-banner').revolution(
        {
          delay: 9000,
          startwidth: 1170,
          startheight: 530,
          hideThumbs: 10,

          navigationType: "bullet",
          navigationStyle: "preview1",

          hideArrowsOnMobile: "on",

          touchenabled: "on",
          onHoverStop: "on",
          spinner: "spinner4"
        });
    });
  </script>



</body>

</html>