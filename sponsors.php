<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'header.php';?>
<?php include 'error.php';?>
<?php include 'success.php';?>
</head>

<body>
    <!--==========================
  Header
  ============================-->
    <header id="header">

        <div class="container">

            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an image logo -->
                <h1 class="text-light"><img src="img/logo.png" alt="Logo" style="height: 10%; width: 6%;"
                        class="img-fluid"><a href="index.html" class="scrollto"><span>Melbourne Polytechnic
                            Markets</span></a></h1>
            </div>

            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="home.html">Home</a></li>
                    <li><a href="sponsors.html">Sponsors</a></li>
                    <li><a href="index.html">Register</a></li>
                </ul>
            </nav><!-- .main-nav -->

        </div>
    </header><!-- #header -->
    <main id="main">
        <!--==========================
    Portfolio Section
  ============================-->
        <section id="portfolio" class="clearfix">
            <div class="container">
                <br>
                <br>
                <header class="section-header">
                    <h3 class="section-title">Our Portfolio</h3>
                </header>

                <div class="row portfolio-container">

                    <div class="col-lg-6 col-md-6 portfolio-item">
                        <a href="https://support.apple.com/kb/SP776?viewlocale=en_US&locale=en_LK">
                            <p>MacBook Pro (15-inch, 2018)</p>
                        </a>
                        <div class="portfolio-wrap">
                            <img src="img/portfolio/web1.jpg" style="height: 34.5vh;" class="img-fluid"
                                alt="MacBook Pro">
                            <div class="portfolio-info">
                                <h4><a href="https://support.apple.com/kb/SP776?viewlocale=en_US&locale=en_LK">MacBook
                                        Pro 2018</a></h4>
                                <p>MacBook Pro (15-inch, 2018)
                                    <br>
                                    Processor : 2.2 GHz Intel Core i7
                                    <br>
                                    Memory : 16 GB 2400 MHz DDR4
                                    <br>
                                    Graphics : Intel UHD Graphics 630 1536 MB
                                </p>
                                <div>
                                    <a href="img/portfolio/web1.jpg" data-lightbox="portfolio"
                                        data-title="MacBook Pro (15-inch, 2018)" class="link-preview" title="Preview"><em
                                            class="ion ion-eye"></em></a>
                                    <a href="https://support.apple.com/kb/SP776?viewlocale=en_US&locale=en_LK"
                                        class="link-details" title="More Details"><em
                                            class="ion ion-android-open"></em></a>
                                </div>
                            </div>
                        </div>
                        <p class="p-section-bg">MacBook Pro (15-inch, 2018)
                            <br>
                            Processor : 2.2 GHz Intel Core i7
                            <br>
                            Memory : 16 GB 2400 MHz DDR4
                            <br>
                            Graphics : Intel UHD Graphics 630 1536 MB
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 portfolio-item">
                        <a href="https://www.youtube.com/user/Apple">
                            <p>Apple MacBook Pro Channel</p>
                        </a>
                        <video class='portfolio-video' autoplay controls loop muted>
                            <source src="file:///Users/kaushirajapakshe/Downloads/Rapid/video/MackbookReview.mp4"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <p class="p-section-bg">
                            Today, Apple leads the world in innovation
                            <br>
                            Apple’s four software platforms — iOS, macOS, watchOS and tvOS
                            <br>
                            Apple provide seamless experiences across all Apple devices
                            <br>
                            Breakthrough services are App Store, Apple Music, Apple Pay and iCloud
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- #portfolio -->
    </main>

    <div><?php include 'footer.php';?></div>

    <a href="#" class="back-to-top"><em class="fa fa-chevron-up"></em></a>
    <!-- Uncomment below i you want to use a preloader -->

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/mobile-nav/mobile-nav.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/udithJavaScript.js"></script>

</body>

</html>