<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from craftohtml.themezaa.com/demo-accounting by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2024 10:41:29 GMT -->

<head>
    <title>Crafto - The Multipurpose HTML5 Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description"
        content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 48+ ready demos.">

    <link rel="shortcut icon" href="public/images/favicon.png">
    <link rel="apple-touch-icon" href="public/images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="public/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="public/images/apple-touch-icon-114x114.png">

    <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link rel="stylesheet" href="public/css/vendors.min.css" />
    <link rel="stylesheet" href="public/css/icon.min.css" />
    <link rel="stylesheet" href="public/css/style.min.css" />
    <link rel="stylesheet" href="public/css/responsive.min.css" />
    <link rel="stylesheet" href="public/demos/accounting/accounting.css" />
</head>

<body data-mobile-nav-style="classic" class="custom-cursor">

    <div class="cursor-page-inner">
        <div class="circle-cursor circle-cursor-inner"></div>
        <div class="circle-cursor circle-cursor-outer"></div>
    </div>


    <header class="header-with-topbar">

        <div class="header-top-bar top-bar-dark bg-very-light-gray">
            <div class="container-fluid">
                <div class="row h-45px xs-h-auto align-items-center m-0 xs-pt-5px xs-pb-5px">
                    <div class="col-lg-6 col-md-7 text-center text-md-start xs-px-0">
                        <div class="fs-15 text-dark-gray fw-500">Our accounting experts waiting for you! <a
                                href="{{ url('contact') }}"
                                class="text-dark-gray text-decoration-line-bottom fw-600">Contact now</a></div>
                    </div>
                    <div class="col-lg-6 col-md-5 text-end d-none d-md-flex">
                        <div class="widget fs-15 fw-500 me-35px lg-me-25px md-me-0 text-dark-gray"><a class= "mx-1"
                                href="tel:+91 92 7262 7262"><i class="feather icon-feather-phone-call"></i>92 7262
                                7262</a>
{{--                             <a class= "mx-1" href="tel:+91 90 2800 0085"><i
                                    class="feather icon-feather-phone-call"></i>90 2800
                                0085</a>
                            <a class= "mx-1" href="tel:+91 92 7271 7271"><i
                                    class="feather icon-feather-phone-call"></i>92 7271
                                7271</a> --}}
                        </div>
                        <div class="widget fs-15 fw-500 text-dark-gray d-none d-lg-inline-block"><i
                                class="feather icon-feather-map-pin"></i>Basement Supreme Commerce Classes, Khokadpura,
                            Near Paithan Gate, Aurangabad(MS)</div>
                    </div>
                </div>
            </div>
        </div>


        <nav class="navbar navbar-expand-lg header-light bg-white responsive-sticky">
            <div class="container-fluid">
                <div class="col-auto col-lg-2 me-lg-0 me-auto">
                    <div class="default-logo" style="padding:10% 0; width: 100%">
                        <a href=""> <img src="public/images/logo.png " style="width: 100%" /></a>
                    </div>
                </div>
                <div class="col-auto menu-order position-static">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav fw-600">
                            <li class="nav-item"><a href="{{ url() }}" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item dropdown dropdown-with-icon-style02">
                                <a href="{{ url('/products') }}" class="nav-link"> Products</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>

                            </li>
                            <li class="nav-item"><a href="{{ url('/clients') }}" class="nav-link">Clients</a>
                            </li>
                            <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link"> Contact
                                    Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto col-lg-2 text-end d-none d-sm-flex">
                    <div class="header-icon">   
                        <div class="header-button">
                            <a href="{{ url('/contact') }}"
                                class="btn btn-small btn-rounded btn-base-color btn-box-shadow">Get a Qoute</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>

    @yield('content')



    <footer class="footer-dark bg-dark-gray pt-0 pb-2 lg-pb-35px">
        <div
            class="footer-top pt-50px pb-50px sm-pt-35px sm-pb-35px border-bottom border-1 border-color-transparent-white-light">
            <div class="container">
                <div class="row align-items-center justify-content-center">

                    <div class="col-xl-6 text-center text-xl-start lg-mb-30px sm-mb-20px">
                        <h3 class="text-white mb-5px fw-500 ls-minus-1px">Get in Touch.</h3>
                        <span class="fs-20 widget-text fw-300">We will take care of your business accounting
                            services.</span>
                    </div>


                    <div class="col-xl-6 text-center text-xl-end">
                        <a href="{{ url('contact') }}"
                            style="background-color:#0090d2; color:white;"  class="btn btn-extra-large left-icon btn-box-shadow btn-rounded text-transform-none d-inline-block align-middle me-15px xs-m-10px"><i
                                >Contact Us</a>
                        <a href="tel:12345678910"
                            class="btn btn-extra-large btn-base-color left-icon btn-box-shadow btn-rounded d-inline-block align-middle xs-m-10px"><i
                                class="feather icon-feather-phone-call"></i>+91 92 7262
                                7262    </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center fs-17 fw-300 mt-5 mb-4 md-mt-45px md-mb-45px xs-mt-35px xs-mb-35px">

                <div class="col-6 col-lg-3 order-sm-1 md-mb-40px xs-mb-30px last-paragraph-no-margin">
                    <div class="default-logo" style="padding:10% 0">
                        <a href=""> <img src="public/images/logo.png " style="width: 71%" /></a>
                    </div>
                    <p class="w-85 xl-w-95 sm-w-100">Lorem ipsum amet adipiscing elit to eiusmod ad tempor.</p>
                    <div class="elements-social social-icon-style-02 mt-20px lg-mt-20px">
                        <ul class="small-icon light">
                            <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a class="dribbble" href="http://www.dribbble.com/" target="_blank"><i
                                        class="fa-brands fa-dribbble"></i></a></li>
                            <li><a class="twitter" href="https://www.twitter.com/" target="_blank"><i
                                        class="fa-brands fa-twitter"></i></a></li>
                            <li><a class="instagram" href="https://www.instagram.com/" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-3 order-lg-2">
                    
                    <ul>
                        <li><a href=" {{ url('/about') }}">About</a></li>
                        <li><a href="{{ url('/products') }}">Products</a></li>
                        <li><a href="{{ url('/clients') }}">Clients</a></li>
                        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                    </ul>
                </div>


                {{-- <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-4 order-lg-3">
                    <span class="fs-18 fw-400 d-block text-white mb-5px">Services</span>
                    <ul>
                        <li><a href="demo-accounting-services">Financial</a></li>
                        <li><a href="demo-accounting-services">Investment</a></li>
                        <li><a href="demo-accounting-services">Banking</a></li>
                        <li><a href="demo-accounting-services">Consulting</a></li>
                    </ul>
                </div> --}}


                <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-5 order-lg-4">                    
                    <p class="mb-5px">Need support?</p>
                    <a href="cdn-cgi/l/email-protection#096160496d6664686067276a6664"
                        class="text-white lh-16 d-block mb-15px"><span class="__cf_email__"
                            data-cfemail="4e26270e2a21232f2720602d2123">[email&#160;protected]</span></a>
                    <p class="mb-5px">Customer care?</p>
                    <a href="tel:12345678910" class="text-white lh-16 d-block">+91 92 7262
                        7262</a>
                </div>


                <div class="col-lg-3 col-sm-6 md-mb-40px xs-mb-0 order-sm-2 order-lg-5">
                    <span class="fs-18 fw-400 d-block text-white mb-5px">Subscribe to newsletter</span>
                    <p class="mb-20px">Enter your email and we contact you!</p>
                    <div class="d-inline-block w-100 newsletter-style-02 position-relative">
                        <form action="https://craftohtml.themezaa.com/email-templates/subscribe-newsletter.php"
                            method="post" class="position-relative">
                            <input
                                class="border-color-transparent-white-light bg-transparent border-radius-4px w-100 form-control lg-ps-15px required fs-16"
                                type="email" name="email" placeholder="Enter your email" />
                            <input type="hidden" name="redirect" value>
                            <button class="btn pe-20px submit" aria-label="submit"><i
                                    class="bi bi-envelope icon-small text-white"></i></button>
                            <div
                                class="form-results border-radius-4px pt-5px pb-5px ps-15px pe-15px fs-14 lh-22 mt-10px w-100 text-center position-absolute d-none">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="row align-items-center fs-16 fw-300">

                <div class="col-md-4 last-paragraph-no-margin order-2 order-md-1 text-center text-md-start">
                    <p>&COPY; Copyright 2024 <a href="index" target="_blank"
                            class="text-decoration-line-bottom text-white">Crafto</a></p>
                </div>


                <div class="col-md-8 text-md-end order-1 order-md-2 text-center text-md-end sm-mb-10px">
                    <ul class="footer-navbar sm-lh-normal">
                        <li><a href="#" class="nav-link">Privacy policy</a></li>
                        <li><a href="#" class="nav-link">Terms and conditions</a></li>
                        <li><a href="#" class="nav-link">Copyright</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>

    {{--
    <div class="sticky-wrap d-none d-lg-inline-block" data-animation-delay="100" data-shadow-animation="true">
        <span class="fs-16"><i class="bi bi-envelope icon-small me-10px"></i>Get our service — <a
                href="cdn-cgi/l/email-protection#5d34333b321d3932303c3433733e3230"
                class="text-decoration-line-bottom fw-500">Send a message</a></span>
    </div> --}}


    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span
                    class="scroll-point"></span></span>
        </a>
    </div>


    <script data-cfasync="false" src="public/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript" src="public/js/jquery.js"></script>
    <script type="text/javascript" src="public/js/vendors.min.js"></script>
    <script type="text/javascript" src="public/js/main.js"></script>
</body>

<!-- Mirrored from craftohtml.themezaa.com/demo-accounting by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2024 10:41:43 GMT -->

</html>
