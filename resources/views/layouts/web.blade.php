<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Webzine Entertainment & Blog Category Responsive Website Template | Home </title>
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/style-starter.css">
    <!-- Template CSS -->
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700,800&display=swap" rel="stylesheet">
    <!-- Template CSS -->


</head>

<body>
    <!-- Headers-4 block -->
    <section class="w3l-header-6-main mobile-header">
        <div class="header-section-hny">
            <div class="header-top">
                <div class="container">
                    <!-- /header-top-inn-->
                    <div class="header-inn-top row">
                        <div class="logo-brand col-6">
                            <a class="navbar-brand" href="{{url('/')}}">
                                <img src="{{asset('/')}}assets/images/logo.png" alt="" title="Webzine" style="max-height:30px;width:100%;" />
                            </a>
                        </div>
                        <div class="menu-overlay-left col-6 ml-auto">
                            <div class="two-pops d-flex">
                                <a href="#" class="author-user"><span class="fa fa-user" aria-hidden="true"></span></a>


                                <!-- overlay-menuv-menu -->
                                <div class="overlay-menuv-hny">
                                    <input type="checkbox" id="op"></input>
                                    <div class="side-menu-hny">
                                        <label for="op" class="menuopen">
                                            <span class="fa fa-bars" aria-hidden="true"></span></label>
                                    </div>
                                    <div class="overlay-menuv overlay-menuv-hugeinc">
                                        <label for="op" class="menuclose"><span class="fa fa-times" aria-hidden="true"></span></label>
                                        <div class="side-show-content text-left">

                                            <div class="quick-links-side gap-top">
                                                <h3 class="side-title">About Webzine</h3>
                                                <p> Lorem ipsum dolor sit amet, adipi scingelit. Vestibulum orci justo,
                                                    vehicula vel sapien sit amet.
                                                </p>

                                            </div>

                                            <div class="quick-links-side gap-top">
                                                <h3 class="side-title">Top Authors</h3>
                                                <ul>
                                                    <li><a href="#">John Smith</a></li>
                                                    <li><a href="#">Jackson</a></li>
                                                    <li><a href="#">Lucas Smith</a></li>
                                                    <li><a href="#">Daniel Doe</a></li>
                                                </ul>
                                            </div>
                                            <div class="quick-links-side gap-top">
                                                <h3 class="side-title">Categories</h3>
                                                <ul>
                                                    <li><a href="index.html">Home</a></li>
                                                    <li><a href="lifestyle.html">Lifestyle</a></li>
                                                    <li><a href="contact.html">Contact Us</a></li>
                                                    <li><a href="#">Author</a></li>
                                                </ul>
                                            </div>
                                            <div class="quick-links-side follow-us gap-top">
                                                <h3 class="side-title">Follow Us</h3>
                                                <ul class="social-icons-top">
                                                    <li><a class="facebook" href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                                    </li>
                                                    <li><a class="twitter" href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
                                                    <li><a class="google" href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                                                    </li>
                                                    <li><a class="instagram" href="#"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="search-right">

                                    <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                                    <!-- search popup -->


                                    <div id="search" class="pop-overlay">
                                        <div class="popup">

                                            <form action="#" method="post" class="search-box">
                                                <input type="search" placeholder="Keyword" name="search" required="required" autofocus="">
                                                <button type="submit" class="btn mt-3">Search</button>
                                            </form>

                                        </div>

                                        <a class="close" href="#">×</a>
                                    </div>
                                    <!-- /search popup -->
                                </div>
                            </div>
                            <!-- overlay-menuv-menu -->
                        </div>
                    </div>
                    <!-- //header-top-inn-->
                </div>
            </div>
            <header class="header-hny-block">
                <div class="container">
                    <!-- /.nav-collapse -->
                    <nav class="navbar navbar-expand-lg navbar-light">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav mr-lg-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('lifestyle')}}">Lifestyle</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                                </li>
                            </ul>
                            <div class="social-right">
                                <ul class="social-icons-top">
                                    <li><a class="facebook" href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                    </li>
                                    <li><a class="twitter" href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
                                    <li><a class="google" href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                                    </li>
                                    <li><a class="instagram" href="#"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <!-- /.nav-collapse -->
            </header>
        </div>
    </section>

    @yield('content')

    <!-- footer-66 -->
    <footer class="w3l-footer-66">
        <section class="footer-inner-main py-md-5 py-5">
            <div class="container">
                <div class="footer-top row">
                    <div class="sub-one-left col-lg-4 col-md-6">
                        <h6>About Webzine</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris.</p>
                        <div class="columns-2">
                            <ul class="social-footer">
                                <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                </li>
                                <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                                </li>
                                <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                                </li>
                                <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="sub-two-right col-lg-4 col-md-6 my-md-0 my-5">
                        <h6>Editor Pics</h6>
                        <div class="row editor-pics mb-3">
                            <div class="col-3 item-pic">
                                <img src="{{asset('/')}}assets/images/m4.jpg" class="img-fluid" alt="">

                            </div>
                            <div class="col-9 item-details">
                                <a href="#">
                                    <h5 class="inner">More Than 120 ER Visits Linked To Synthetic WordPress In
                                        NYC...</h5>
                                </a>
                                <div class="td-post-date">Jan 22, 2019</div>
                            </div>

                        </div>
                        <div class="row editor-pics mb-3">
                            <div class="col-3 item-pic">
                                <img src="{{asset('/')}}assets/images/m1.jpg" class="img-fluid" alt="">

                            </div>
                            <div class="col-9 item-details">
                                <a href="#">
                                    <h5 class="inner">More Than 120 ER Visits Linked To Synthetic WordPress In
                                        NYC...</h5>
                                </a>
                                <div class="td-post-date">Jan 22, 2019</div>
                            </div>

                        </div>
                        <div class="row editor-pics mb-3">
                            <div class="col-3 item-pic">
                                <img src="{{asset('/')}}assets/images/m3.jpg" class="img-fluid" alt="">

                            </div>
                            <div class="col-9 item-details">
                                <a href="#">
                                    <h5 class="inner">More Than 120 ER Visits Linked To Synthetic WordPress In
                                        NYC...</h5>
                                </a>
                                <div class="td-post-date">Jan 22, 2019</div>
                            </div>

                        </div>

                    </div>

                    <div class="sub-one-left col-lg-4 col-md-6 mt-lg-0 mt-md-5">
                        <h6>Information</h6>
                        <div class="columns-2 d-flex">
                            <ul class="footer-sub-gd mr-5">
                                <li><a href="#">Celebrities</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="lifestyle.html">Lifestyle</a></li>
                                <li><a href="#">Blog Page</a></li>
                            </ul>
                            <ul class="footer-sub-gd">
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Signup</a></li>
                                <li><a href="#">Author</a></li>
                                <li><a href="#">Comments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="below-section">
            <div class="container">
                <div class="copyright-footer text-center">

                    <p>© 2020 Webzine. All rights reserved.| Design by
                        <a href="http://w3layouts.com/" target="_blank">W3layouts</a>
                    </p>
                </div>
            </div>
            <!-- move top -->
            <button onclick="topFunction()" id="movetop" title="Go to top">
                <span class="fa fa-arrow-up" aria-hidden="true"></span>
            </button>
            <script>
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function() {
                    scrollFunction()
                };

                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("movetop").style.display = "block";
                    } else {
                        document.getElementById("movetop").style.display = "none";
                    }
                }

                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
            </script>
            <!-- /move top -->
        </div>
        <!-- copyright -->



    </footer>
    <!--//footer-66 -->
</body>

</html>