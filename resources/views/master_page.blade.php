<!DOCTYPE html>
<!--
	Template Name:Restored Multipurpose Responsive HTML Template
	Version: 1.0
	Author: DigiSamaritan
	Website: digisamaritan.com
	Purchase: http://themeforest.net/user/DigiSamaritan
	-->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js">
<![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js">
<![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8">
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="MobileOptimized" content="320">
    <!--srart theme style -->

    <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css">
    <!-- end theme style -->
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="../../public/images/favicon.png">
</head>
<body>
<!--Loader Start -->

    <!--Loader End -->
    <div class="menu-wrap">
        <div class="rs_menu">
            <div class="rs_menu_inner_section">
                <div class="rs_menu_pic">
                    <img src="{{asset('images/menubg.jpg')}}" class="img-responsive" alt="">
                    <div class="rs_menu_pic_overlay">
                        <div class="rs_menu_inner_pic">
                            <img src="{{asset('images/menulogo.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="rs_main_menu">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-user"></i> Usuarios</a>
                            <ul class="sub-menu">
                                @if (Auth::guest())
                                    <li><a href="{{ url('/login') }}">Login</a></li>
                                    <li><a href="{{ url('/register') }}">Register</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ url('/logout') }}"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>

                                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endif

                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart"></i> Bienes</a>
                            <ul class="sub-menu">
                                <li><a href="/properties"><i class="fa fa-angle-right"></i> Ver</a></li>
                                <li><a href="/properties_create"><i class="fa fa-angle-right"></i> Agregar</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <button class="close-button" id="close-button">Close Menu</button>
        <div class="morph-shape" id="morph-shape" data-morph-open="M-1,0h101c0,0,0-1,0,395c0,404,0,405,0,405H-1V0z">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800"
                 preserveAspectRatio="none">
                <path d="M-1,0h101c0,0-97.833,153.603-97.833,396.167C2.167,627.579,100,800,100,800H-1V0z"/>
            </svg>
        </div>
    </div>
    <div class="rs_topheader">
        <div class="container-fluid">
            <div class="row">
                <div class="rs_topheader_left">
                    <div class="rs_menubtn">
                        <span class="rs_bars" id="open-button"><i class="fa fa-bars"></i></span>
                        <!-- <span class="rs_close" id="close-button"><i class="fa fa-times"></i></span> -->
                    </div>
                </div>
                <div class="rs_topheader_right">
                    <div class="rs_user_pic">
                        <i class="glyphicon glyphicon-option-vertical" aria-hidden="true"></i>
                    </div>
                    <div class="rs_user_profile">
                        <ul>
                            <li><a href="author_dashboard.html"><i class="fa fa-user"></i> profile</a></li>
                            <li><a href="author_dashboard.html"><i class="fa fa-cog"></i> setting</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--Loader Start -->
    @yield('content')
 <!-- footer -->
    <div class="rs_footer rs_toppadder60 rs_bottompadder60">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="rs_footerdiv">
                        <img src="{{asset('images/footer_logo.png')}}" class="img-responsive" alt="">
                        <p>We have a number of different teams within our agency that specialise in different areas of
                            business.
                        </p>
                        <p>So you can be sure that you won’t receive a generic service and although we can’t boast years and
                            years of service.
                        </p>
                        <a href="#" class="rs_readmore">read more <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="rs_footerdiv">
                                <h5 class="rs_footerheading">Company Links</h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-double-right"> </i>about <i
                                                    class="fa fa-angle-double-right"> </i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"> </i>Terms <i
                                                    class="fa fa-angle-double-right"> </i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"> </i>Privacy Policy <i
                                                    class="fa fa-angle-double-right"> </i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"> </i>Careers <i
                                                    class="fa fa-angle-double-right"> </i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"> </i>Directory <i
                                                    class="fa fa-angle-double-right"> </i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"> </i>SimpleLicense <i
                                                    class="fa fa-angle-double-right"> </i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"> </i>Brand <i
                                                    class="fa fa-angle-double-right"> </i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="rs_footerdiv">
                                <h5 class="rs_footerheading">Earn & Goodies</h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-double-right"> </i>Open a Shop <i
                                                    class="fa fa-angle-double-right"> </i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"> </i>Become a Partner <i
                                                    class="fa fa-angle-double-right"> </i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"> </i>Free Goods <i
                                                    class="fa fa-angle-double-right"> </i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"> </i>Purchase Credits <i
                                                    class="fa fa-angle-double-right"> </i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"> </i>Gift Cards <i
                                                    class="fa fa-angle-double-right"> </i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"> </i>Branding ebook <i
                                                    class="fa fa-angle-double-right"> </i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="rs_footerdiv">
                                <h5 class="rs_footerheading">Community</h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-double-right"> </i>Discussions <i
                                                    class="fa fa-angle-double-right"> </i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"> </i>Blog <i
                                                    class="fa fa-angle-double-right"> </i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"> </i>Members <i
                                                    class="fa fa-angle-double-right"> </i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"> </i>Products <i
                                                    class="fa fa-angle-double-right"> </i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"> </i>Help Center <i
                                                    class="fa fa-angle-double-right"> </i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"> </i>Collections <i
                                                    class="fa fa-angle-double-right"> </i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"> </i>Meet up <i
                                                    class="fa fa-angle-double-right"> </i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="rs_footerdiv widget_tag_cloud">
                        <h5 class="rs_footerheading">Categories</h5>
                        <a href="#">Graphic</a>
                        <a href="#">Mockup</a>
                        <a href="#">Wordpress</a>
                        <a href="#">Html</a>
                        <a href="#">PSD</a>
                        <a href="#">Mobile UI Kit</a>
                        <a href="#">Vectors</a>
                        <a href="#">Icons</a>
                        <a href="#">Joomla</a>
                        <a href="#">Drupal</a>
                        <a href="#">Fonts</a>
                        <a href="#">Stock Images</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rs_bottomfooter rs_toppadder30 rs_bottompadder20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="rs_copyright">
                        <p>&copy; <a href="index_digital.htnl">Restored.</a> All rights reserved. Designed with Love by <a
                                    href="#">DigitalHeaps</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Script Start -->
    <script src="{{asset('/js/jquery-1.11.3.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/modernizr.custom.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/rating/star-rating.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/countto/jquery.countTo.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/countto/jquery.appear.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/owl/owl.carousel.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/revel/jquery.themepunch.tools.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/revel/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/revel/revolution.extension.actions.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/revel/revolution.extension.layeranimation.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/revel/revolution.extension.navigation.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/revel/revolution.extension.parallax.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/revel/revolution.extension.slideanims.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.mixitup.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/fancybox/jquery.fancybox.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/fancybox/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/bootstrap-slider/bootstrap-slider.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/offcanvasmenu/snap.svg-min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/offcanvasmenu/classie.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/offcanvasmenu/main3.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/jquery-ui/jquery-ui.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/c3_chart/d3.v3.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/c3_chart/c3.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/pgwslideshow.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>

    <!-- Script end -->
    @yield('scripts')
</body>
</html>