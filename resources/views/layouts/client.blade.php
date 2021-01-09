<!DOCTYPE html>
<html lang="zxx">
    

<head>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

        <!-- Title -->
        <title>   LIBRARIA  </title>

        <!-- Favicon -->
        <link href="{{ asset('images/icon.png') }}" rel="icon" type="image/x-icon" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        
        <!-- Mobile Menu -->
        <link href="{{ asset('css/mmenu.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/mmenu.positioning.css') }}" rel="stylesheet" type="text/css" />

        <!-- Stylesheet -->
        <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>

    <body class="layout-v2">

        <!-- Start: Header Section -->
        <header id="header" class="navbar-wrapper">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="col-sm-12">
                            <!-- Header Topbar -->
                            <div class="header-topbar hidden-sm hidden-xs">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="topbar-info">
                                            <a href="tel:+61-3-8376-6284"><i class="fa fa-phone"></i>+61-3-8376-6284</a>
                                            <span>/</span>
                                            <a href="mailto:support@libraria.com"><i class="fa fa-envelope"></i>support@libraria.com</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="topbar-links">
                                        <div class="flex-center position-ref full-height">
                                              <ul>
                                                @guest
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-lock"></i>Login</a> |
                                            @if (Route::has('register'))
                                                    <a class="nav-link" href="{{ route('register') }}"><i class="fa fa-lock"></i>Register</a>
                                                </li>
                                            @endif
                                            @else
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        <h5><i class="fa fa-user"></i>{{ Auth::user()->name }}</h5>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" style="color: black; margin-left: 70px;" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                               <i class="fa fa-lock"></i> {{ __('Logout') }}
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                            @endguest
                                              </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-light">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="navbar-header">
                                            <div class="navbar-brand">
                                                <h1>
                                                    <a href="index-2.html">
                                                        <img src="images/libraria-logo-v2.png" alt="LIBRARIA" />
                                                    </a>
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="navbar-collapse hidden-sm hidden-xs">
                                            <ul class="nav navbar-nav">
                                                <li class="dropdown active">
                                                    <a class="dropdown-toggle disabled" href="/">Acceuil</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle disabled" href="{{url('/livres')}}">Livres &amp; Media</a>
                                                </li>
                                                <li><a href="#">Services</a></li>
                                                <li><a href="#">Contact</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md">
                        <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                            <div id="mobile-menu">
                                <ul>
                                    <li class="mobile-title">
                                        <h4>Navigation</h4>
                                        <a href="#" class="close"></a>
                                    </li>
                                    <li>
                                        <a href="/">Acceuil</a>
                                    </li>
                                    <li>
                                        <a href="/">Livre &amp; Media</a>
                                    </li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End: Header Section -->
        
        @yield('content')

        <!-- Start: Footer -->
        <footer class="site-footer">
            <div class="container">
                <div id="footer-widgets">
                    <div class="row">
                        <div class="col-md-2 widget-container">
                            <div class="widget widget_social_icons">
                                <ul>
                                    <li>
                                        <a class="facebook" href="#" target="_blank">
                                            <span>
                                                <i class="fa fa-facebook-f"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="#" target="_blank">
                                            <span>
                                                <i class="fa fa-twitter"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="google" href="#" target="_blank">
                                            <span>
                                                <i class="fa fa-google-plus"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="rss" href="#" target="_blank">
                                            <span>
                                                <i class="fa fa-rss"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="linkedin" href="#" target="_blank">
                                            <span>
                                                <i class="fa fa-linkedin"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="youtube" href="#" target="_blank">
                                            <span>
                                                <i class="fa fa-youtube"></i>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 widget-container">
                            <div id="text-2" class="widget widget_text">
                                <h3 class="footer-widget-title">About Libraria</h3>
                                <span class="underline left"></span>
                                <div class="textwidget">
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking.
                                </div>
                                <address>
                                    <div class="info">
                                        <i class="fa fa-location-arrow"></i>
                                        <span>21 King Street, Melbourne, Victoria 3000 Australia</span>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-envelope"></i>
                                        <span><a href="mailto:support@libraria.com">support@libraria.com</a></span>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-phone"></i>
                                        <span><a href="tel:012-345-6789">+ 012-345-6789</a></span>
                                    </div>
                                </address>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 widget-container">
                            <div id="nav_menu-2" class="widget widget_nav_menu">
                                <h3 class="footer-widget-title">Quick Links</h3>
                                <span class="underline left"></span>
                                <div class="menu-quick-links-container">
                                    <ul id="menu-quick-links" class="menu">
                                        <li><a href="#">Library News</a></li>
                                        <li><a href="#">History</a></li>
                                        <li><a href="#">Meet Our Staff</a></li>
                                        <li><a href="#">Board of Trustees</a></li>
                                        <li><a href="#">Budget</a></li>
                                        <li><a href="#">Annual Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-lg hidden-md hidden-xs tablet-margin-bottom"></div>
                        <div class="col-md-2 col-sm-6 widget-container">
                            <div id="text-4" class="widget widget_text">
                                <h3 class="footer-widget-title">Timing</h3>
                                <span class="underline left"></span>
                                <div class="timming-text-widget">
                                    <time datetime="2017-02-13">Mon - Thu: 9 am - 9 pm</time>
                                    <time datetime="2017-02-13">Fri: 9 am - 6 pm</time>
                                    <time datetime="2017-02-13">Sat: 9 am - 5 pm</time>
                                    <time datetime="2017-02-13">Sun: 1 pm - 6 pm</time>
                                    <ul>
                                        <li><a href="#">Closings</a></li>
                                        <li><a href="#">Branches</a></li>
                                    </ul>
                                </div>
                            </div>			
                        </div>
                        <div class="col-md-3 col-sm-6 widget-container">
                            <div class="widget twitter-widget">
                                <h3 class="footer-widget-title">Latest Tweets</h3>
                                <span class="underline left"></span>
                                <div id="twitter-feed">
                                    <ul>
                                        <li>
                                            <p><a href="#">@TemplateLibraria</a> Sed ut perspiciatis unde sit voluptatem. <a href="#">template-libraria.com</a></p>
                                        </li>
                                        <li>
                                            <p><a href="#">@TemplateLibraria</a> Sed ut perspiciatis unde sit voluptatem. <a href="#">template-libraria.com</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>			
                        </div>
                    </div>
                </div>                
            </div>
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-text col-md-3">
                            <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                        </div>
                        <div class="col-md-9 pull-right">
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="books-media-list-view.html">Books &amp; Media</a></li>
                                <li><a href="news-events-list-view.html">News &amp; Events</a></li>
                                <li><a href="#">Kids &amp; Teens</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="#">Research</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End: Footer -->

        <!-- jQuery Latest Version 1.x -->
        <script type="text/javascript" src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
        
        <!-- jQuery UI -->
        <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
        
        <!-- jQuery Easing -->
        <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        
        <!-- Mobile Menu -->
        <script type="text/javascript" src="{{ asset('js/mmenu.min.js') }}"></script>
        
        <!-- Harvey - State manager for media queries -->
        <script type="text/javascript" src="{{ asset('js/harvey.min.js') }}"></script>
        
        <!-- Waypoints - Load Elements on View -->
        <script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>

        <!-- Facts Counter -->
        <script type="text/javascript" src="{{ asset('js/facts.counter.min.js') }}"></script>

        <!-- MixItUp - Category Filter -->
        <script type="text/javascript" src="{{ asset('js/mixitup.min.js') }}"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
        
        <!-- Accordion -->
        <script type="text/javascript" src="{{ asset('js/accordion.min.js') }}"></script>
        
        <!-- Responsive Tabs -->
        <script type="text/javascript" src="{{ asset('js/responsive.tabs.min.js') }}"></script>
        
        <!-- Responsive Table -->
        <script type="text/javascript" src="{{ asset('js/responsive.table.min.js') }}"></script>
        
        <!-- Masonry -->
        <script type="text/javascript" src="{{ asset('js/masonry.min.js') }}"></script>
        
        <!-- Carousel Swipe -->
        <script type="text/javascript" src="{{ asset('js/carousel.swipe.min.js') }}"></script>
        
        <!-- bxSlider -->
        <script type="text/javascript" src="{{ asset('js/bxslider.min.js') }}"></script>
        
        <!-- Custom Scripts -->
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

    </body>


</html>