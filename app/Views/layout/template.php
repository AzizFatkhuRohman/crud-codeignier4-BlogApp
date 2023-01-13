<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="<?= base_url();?>/images/favicon.png" type="">

    <title>AFR</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>/css/bootstrap.css" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url();?>/https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet"
        href="<?= base_url();?>/https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
        crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="<?= base_url();?>/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?= base_url();?>/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="<?= base_url();?>/css/responsive.css" rel="stylesheet" />

</head>

<body>


    <!-- header section strats -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">

                <a class="navbar-brand" href="/">
                    <span>
                        HackNet
                    </span>
                </a>



                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pengaduan">Pengaduan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/galeri">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tentang">Tentang</a>
                        </li>

                    </ul>
                    <div class="user_option">
                        <a href="/dashboard" class="order_online">
                            Log In
                        </a>
                    </div>
                </div>

            </nav>
        </div>
    </header>
    <!-- end header section -->
    <?=$this->renderSection('content')?>
    <!-- Footer -->
    <footer class="footer_section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Contact Us
                        </h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Location
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call +01 1234567890
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    demo@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="footer_detail">
                        <a href="" class="footer-logo">
                            Feane
                        </a>
                        <p>
                            Necessary, making this the first true generator on the Internet. It uses a dictionary of
                            over 200 Latin words, combined with
                        </p>
                        <div class="footer_social">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <h4>
                        Opening Hours
                    </h4>
                    <p>
                        Everyday
                    </p>
                    <p>
                        10.00 Am -10.00 Pm
                    </p>
                </div>
            </div>
            <div class="footer-info">
                <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By
                    <a href="https://html.design/">Free Html Templates</a><br><br>
                    &copy; <span id="displayYear"></span> Distributed By
                    <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="<?= base_url();?>/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="<?= base_url();?>/https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="<?= base_url();?>/js/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="<?= base_url();?>/https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- isotope js -->
    <script src="<?= base_url();?>/https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <!-- nice select -->
    <script
        src="<?= base_url();?>/https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js">
    </script>
    <!-- custom js -->
    <script src="<?= base_url();?>/js/custom.js"></script>
    <!-- Google Map -->
    <script
        src="<?= base_url();?>/https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

</body>

</html>