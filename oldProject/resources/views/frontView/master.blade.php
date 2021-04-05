<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('frontEnd')}}/img/favicon.png" type="image/png">
    <title>Pentax Photography</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/responsive.css">
</head>
<body>

    <!--================Header Menu Area =================-->
 <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="{{asset('frontEnd')}}/img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li> 
                            <li class="nav-item"><a class="nav-link" href="service.html">services</a></li> 
                            <li class="nav-item"><a class="nav-link" href="project.html">project</a></li>    
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Galary</a>
                               
                            </li> 
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Login</a></li>
                            
                        </ul>
                        <div class="right-button">
                        <ul>
                            <li><a id="search" href="javascript:void(0)"><i class="fas fa-search"></i></a></li>
                        </ul>
                    </div> 
                    </div>
                    
                </div>
            </nav>

        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>


    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content">
                    <h1>i am <br>
                        <span class="basecolor">Professional</span> <br> 
                    Photographer</h1>
                    <p>It seasons. Bearing in one years forth saying</p>

                    <a class="main_btn" href="#">view portfolio</a>
                </div>
            </div>
        </div>
        <div class="social_area">
            <h4>
                <a href="#"><i class="ti-instagram"></i>Instagram</a>
            </h4>
            <div class="round"></div>
            <h4>
                <a class="twitter" href="#"><i class="ti-twitter"></i>Twitter</a>
            </h4>
            <div class="round"></div>
            <h4>
                <a href="#"><i class="ti-facebook"></i>Facebook</a>
            </h4>
            <div></div></div>
        </section>
        <!--================End Home Banner Area =================-->




        <!--================ Start Portfolio Area =================-->
        <section class="portfolio_area area-padding" id="portfolio">
            <div class="container">
              
               

                <div class="filters-content">
                    <div class="row portfolio-grid">
                        <div class="grid-sizer col-md-3 col-lg-4"></div>
                        <div class="col-lg-4 col-md-6 all fashion motion">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{asset('frontEnd')}}/img/project/1.jpg" alt="">
                                <div class="short_info">
                                    <p>Fashion</p>
                                    <h4><a href="portfolio-details.html">Fahion photography</a></h4>                            
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-6 all weeding motion portrait">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{asset('frontEnd')}}/img/project/2.jpg" alt="">
                                <div class="short_info">
                                    <p>construction</p>
                                    <h4><a href="portfolio-details.html">Desert Work, Dubai</a></h4>                            
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 all weeding motion fashion">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{asset('frontEnd')}}/img/project/4.jpg" alt="">
                                <div class="short_info">
                                    <p>construction</p>
                                    <h4><a href="portfolio-details.html">Desert Work, Dubai</a></h4>                            
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 all motion portrait fashion">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{asset('frontEnd')}}/img/project/5.jpg" alt="">
                                <div class="short_info">
                                    <p>construction</p>
                                    <h4><a href="portfolio-details.html">Desert Work, Dubai</a></h4>                            
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-6 all weeding  fashion">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{asset('frontEnd')}}/img/project/6.jpg" alt="">
                                <div class="short_info">
                                    <p>construction</p>
                                    <h4><a href="portfolio-details.html">Desert Work, Dubai</a></h4>                            
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--================ End Portfolio Area =================-->


        <!--================Service  Area =================-->
        
        <!--================Service Area end =================-->


        <!--================ PriceTable section Start =================-->
     
        <!--================About Area End =================-->


       
        <!--================Testimonial section End =================-->


    
        
        

        <!--================ start footer Area  =================-->
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>About Us</h6>
                            <p>
                                Voting is a method for a group, such as a meeting or an electorate, in order to make a collective decision or express an opinion usually following discussions, debates or election campaigns. Democracies elect holders of high office by voting.
                            </p>
                         
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-5   col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Newsletter</h6>
                            <p>Stay updated with our latest trends</p>
                            <div class="" id="mc_embed_signup">

                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">

                                <div class="d-flex flex-row">

                                    <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                                    required="" type="email">


                                    <button class="click-btn btn btn-default"><i class="ti-arrow-right"></i></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                    </div>

                                        </div>
                                        <div class="info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h6>Follow Us</h6>
                                <p>Let us be social</p>
                                <div class="footer-social d-flex align-items-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                   </div>
               </footer>
                <!--================ End footer Area  =================-->





               <!-- Optional JavaScript -->
               <!-- jQuery first, then Popper.js, then Bootstrap JS -->
               <script src="{{asset('frontEnd')}}/js/jquery-3.3.1.min.js"></script>
               <script src="{{asset('frontEnd')}}/js/popper.js"></script>
               <script src="{{asset('frontEnd')}}/js/bootstrap.min.js"></script>
               <script src="{{asset('frontEnd')}}/js/stellar.js"></script>
               <script src="{{asset('frontEnd')}}/vendors/isotope/imagesloaded.pkgd.min.js"></script>
               <script src="{{asset('frontEnd')}}/vendors/isotope/isotope.pkgd.min.js"></script>
               <script src="{{asset('frontEnd')}}/vendors/owl-carousel/owl.carousel.min.js"></script>
               <script src="{{asset('frontEnd')}}/js/jquery.ajaxchimp.min.js"></script>
               <script src="{{asset('frontEnd')}}/js/jquery.counterup.min.js"></script>
               <script src="{{asset('frontEnd')}}/js/jquery.waypoints.min.js"></script>
               <script src="{{asset('frontEnd')}}/js/mail-script.js"></script>
               <script src="{{asset('frontEnd')}}/js/contact.js"></script>
               <script src="{{asset('frontEnd')}}/js/jquery.form.js"></script>
               <script src="{{asset('frontEnd')}}/js/jquery.validate.min.js"></script>
               <script src="{{asset('frontEnd')}}/js/mail-script.js"></script>
               <script src="{{asset('frontEnd')}}/js/theme.js"></script>
           </body>
           </html>