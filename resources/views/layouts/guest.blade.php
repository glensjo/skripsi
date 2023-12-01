<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>CIGEM CREATIVE</title>
<link rel="icon" href="img/assets/icon.png" type="img/icon" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/no-ui-slider/jquery.nouislider.css" type="text/css" />
<link rel="stylesheet" href="css/colors/color.css"/>
</head>
<body>

<!-- Preloader -->
<!-- <div id="loader">
   
</div> -->

<!-- Header -->
<header>
    <nav class="navbar navbar-default navbar-alt" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" rel="home" href="/">
                    <img src="img/assets/logo cigem putih.png" alt="cigem creative" class="logo-big">
                    <img src="img/assets/logo cigem hitam.png" alt="cigem creative" class="logo-small">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="nav navbar-nav  navbar-right">
                <li>
                    <a href="/">Profile</a>
                </li>
                <li>
                    <a href="/products">Products</a>
                </li>
                <li>
                    <a href="/contact">Contact Us</a>
                </li>
                <li>
                    <a href="/blog">Blogs</a>
                </li>
                @if( auth()->check() )
                    <li>
                        <a href="/dashboard">Hi {{ auth()->user()->name }}</a>
                    </li>
                    <li>
                        <a href="/cart">Cart</a>
                    </li>
                    <li>
                        <a href="/logout">Log Out</a>
                    </li>
                @else
                    <li>
                        <a href="/login">Log In</a>
                    </li>
                    <li>
                        <a href="/register">Register</a>
                    </li>
                @endif
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- <section id="home-slider">
    <div class="hero">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="img/backgrounds/kaos.png" data-delay="10000" data-saveperformance="on" data-title="We Are Visual">
                    <img src="img/backgrounds/kaos.png" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <div class="tp-caption sft"
                                            data-x="center"  
                                            data-y="260"
                                            data-speed="1200"
                                            data-start="1100"
                                            data-easing="Power3.easeInOut"
                                            data-splitin="none"
                                            data-splitout="none"
                                            data-elementdelay="0.1"
                                            data-endelementdelay="0.1"
                                            data-endspeed="300"
                                            style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                        <h2 class="home-heading op-1">CIGEM CREATIVE ARTIKEL</h2>
                    </div>                  
                </li>
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
            <div class="home-bottom">
                <div class="container text-center">
                <div class="move bounce">
                    <a href="#blog" class="ion-ios-arrow-down btn-scroll">
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<div class="site-wrapper content">
    @yield('content')
    <footer id="footer">      
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="section-title wow fadeInUp">Cigem Creative</h3>
                    <p class="wow fadeInUp">Copyright © 2023 Cigem Creative and Glenda Jocelyn. All Rights Reserved.</p>
                    <ul class="social-icons subheading">
                        <li>
                            <a href="#">
                            <i class="icon ion-social-whatsapp-outline"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/cigemcreative/">
                            <i class="icon ion-social-instagram-outline"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tiktok.com/@cigemcreative">
                            <i class="icon ion-ios-musical-note"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>      
    </footer>
    <a id="back-to-top">
        <i class="icon ion-chevron-up"></i>
    </a>
</div>
<!-- jQuery -->
<script type="text/javascript" src="js/plugins/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/plugins/moderniz.min.js"></script>
<script type="text/javascript" src="js/plugins/smoothscroll.min.js"></script>
<script type="text/javascript" src="js/no-ui-slider/jquery.nouislider.all.min.js"></script>
<script type="text/javascript" src="js/plugins/revslider.min.js"></script>
<script type="text/javascript" src="js/plugins/waypoints.min.js"></script>
<script type="text/javascript" src="js/plugins/parallax.min.js"></script>
<script type="text/javascript" src="js/plugins/easign1.3.min.js"></script>
<script type="text/javascript" src="js/plugins/cubeportfolio.min.js"></script>
<script type="text/javascript" src="js/plugins/owlcarousel.min.js"></script>
<script type="text/javascript" src="js/plugins/tweetie.min.js"></script>
<script type="text/javascript" src="js/plugins/maps.js"></script>
<script type="text/javascript" src="js/plugins/gmap3.min.js"></script>
<script type="text/javascript" src="js/plugins/wow.min.js"></script>
<script type="text/javascript" src="js/plugins/counterup.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>