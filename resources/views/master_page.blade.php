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
    <!--meta name="csrf-token" content="{{ csrf_token() }}"-->
    <!--srart theme style -->

    <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/profile.css')}}" rel="stylesheet" type="text/css">

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
                </div>
                <div class="rs_main_menu">
                    <ul>
                        @if (Auth::user()->type == 'Admin')
                        <li>
                            <a href="#"><i class="fa fa-user"></i> Usuarios</a>
                            <ul class="sub-menu">
                                <li><a href="/users">Ver todos</a></li>
                            </ul>
                        </li>
                       @endif
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart"></i> Bienes</a>
                            <ul class="sub-menu">
                                <li><a href="/properties"><i class="fa fa-angle-right"></i> Ver</a></li>
                                @if (Auth::user()->type == 'Admin')
                                <li><a href="/properties_create"><i class="fa fa-angle-right"></i> Agregar</a>
                                </li>
                                @endif

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
                <div class="rs_topheader_right" style="position: absolute; margin-left: 85%">
                    <div class="rs_user_pic">
                        <i class="glyphicon glyphicon-option-vertical" aria-hidden="true">{{ Auth::user()->name }}</i>
                    </div>
                    <div class="rs_user_profile">
                        <ul>
                        <li><a href="/profile/{{ Auth::user()->id }}"><i class="fa fa-user"></i> profile</a></li>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--Loader Start -->
    @yield('content')
 <!-- footer -->
    <div class="rs_bottomfooter rs_toppadder30 rs_bottompadder20">
        <div class="container">
            <div class="row">
            <div class="container">
        
    <div class="col-sm-8 contact-form">
        <form id="contact" method="post" class="form" role="form">
        <div class="row">
        <div class="col-xs-6 col-md-6 form-group">
        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
        </div>
        <div class="col-xs-6 col-md-6 form-group">
        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
        </div>
        </div>
        <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
        <br />
        <div class="row">
        <div class="col-xs-12 col-md-12 form-group">
        <button class="btn btn-primary pull-right" type="submit">Submit</button>
        </form>
    </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="rs_copyright">
                        <p>&copy;&nbsp; All rights reserved. Designed with Love by:&nbsp;&nbsp;<strong>Bryan Ruiz - Erwin Salas</strong> </p>
                    </div>
                </div>
            </div>
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
        </div>
        </path>
        </svg>
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