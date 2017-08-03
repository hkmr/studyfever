<!--
//////////////////////////////////////////////////////

    ###### STUDYFEVER.NET #######

//////////////////////////////////////////////////////
 -->

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Studyfever - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Studyfever | @yield('meta_description', 'Default Description')" />
    <meta name="keywords" content="@yield('meta_keywords', 'Default Keywords')" />
    <meta name="author" content="STUDYFEVER.NET" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/icon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Webfont -->
    <link href='https://fonts.googleapis.com/css?family=PT+Mono' rel='stylesheet' type='text/css'>
    <!--Google fontawsome -->
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Icomoon Icons -->
    <link rel="stylesheet" href="css/icomoon-icons.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Easy Responsive Tabs -->
    <link rel="stylesheet" href="css/easy-responsive-tabs.css">
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- highlight code area links -->
    <link rel="stylesheet" href="highlight/styles/monokai.css">


    <!-- FOR IE9 below -->
    <!--[if lte IE 9]>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    </head>
    
    <body>
        @section('sidebar')
            <!-- Header -->
        <header id="fh5co-header" role="banner">
            <div class="container">
                <!-- Logo -->
                <div id="fh5co-logo">
                    <a href="/">
                        <img src="images/logo.png" width="150px" alt="studyfever">
                    </a>

                </div>
                <!-- Logo -->

                <!-- Mobile Toggle Menu Button -->
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>

                <!-- Main Nav -->
                <div id="fh5co-main-nav">
                    <nav id="fh5co-nav" role="navigation">
                        <ul>
                            <li class="fh5co-active">
                                <a href="/">Home</a>
                            </li>
                            <li class="fh5co-active">
                                <a href="/about">About us</a>
                            </li>
                            <li class="fh5co-active">
                                <a href="/blogs">Blogs</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Main Nav -->
            </div>
        </header>
        <!-- Header -->
        <main role="main">
            <!-- Start Intro -->
            <div id="fh5co-intro">
                <div class="container" style="float:right; ">

        
                    <!-- Search engine starts -->

                    <center>
                    <form method="get" action="/search-result" >
                        <input type="search" name="search" placeholder=" Enter Your Query here..." class="search-box" />
                        <select name="lan" class="search-select">
                            <option value="all">All</option>
                            <option value="java">Java</option>
                            <option value="cpp">C++</option>
                            <option value="c">C</option>
                            <option value="python">Python</option>
                        </select>
                        <input type="submit" name="submit" value="Search" class="search-button"/>
                    </form>
                    </center>


                    <!-- Search engine work finish -->

                </div>
            </div>
            <!-- End Intro -->

            <div class="fh5co-spacer fh5co-spacer-sm"></div>

            @show

            <!-- Start Work -->
            <div id="fh5co-work" style="clear: both; ">
                <div class="container">
                    <div class="row">
                        
@yield('content')

                    </div>


                </div>
            </div>
            <!-- End Work -->

            @yield('fb-connect')
            
            <div class="fh5co-spacer fh5co-spacer-sm"></div>

        </main>

        <footer id="fh5co-footer" role="contentinfo">
            <div class="container">
                <div class="row">
                    <div class="col-md-push-6 col-md-6">
                        <h4>Follow us</h4>
                        
                        <ul class="fh5co-footer-social">
                            <a href="https://www.facebook.com/studyfevr/" class="fa fa-facebook"></a>
                            <!-- <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i><a href="https://www.facebook.com/studyfevr/">Facebook</a> -->
                            <a href="https://twitter.com/studyfvr/" class="fa fa-twitter"></a>
                            <!-- <i class="fa fa-twitter fa-2x" aria-hidden="true"></i><a href="https://twitter.com/studyfvr/">Twitter</a> -->
                            <a href="https://www.plus.google.com/studyfvr/" class="fa fa-google"></a>
                            <!-- <i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i><a href="https://www.plus.google.com/studyfvr/">Google+</a> -->
                        </ul>
                        <p class="fh5co-copyright">
                            <small>(c) 2017 <a href="/">Studyfever</a>. All Rights Reserved. <br></small>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Go To Top -->
        <a href="#" class="fh5co-gotop"><i class="ti-shift-left"></i></a>


        <!-- jQuery -->
        <script src="js/jquery-1.10.2.min.js"></script>
        <!-- jQuery Easing -->
        <script src="js/jquery.easing.1.3.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.js"></script>
        <!-- Owl carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Magnific Popup -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Easy Responsive Tabs -->
        <script src="js/easyResponsiveTabs.js"></script>
        <!-- FastClick for Mobile/Tablets -->
        <script src="js/fastclick.js"></script>
        <!-- Velocity -->
        <script src="js/velocity.min.js"></script>
        <!-- Main JS -->
        <script src="js/main.js"></script>
        <!-- code highlight -->
        <script src="highlight/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
            
        
    </body>
</html>