@extends('layout')
@section('content')
    <style>
        .small-img-group {
            display: flex;
            justify-content: space-between;
        }

        .small-img-col {
            flex: 20%;
            margin-right: 5px;
            cursor: pointer;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }

        .big-img {
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }

        .sproduct input {
            width: 70px;
            height: 40px;
            font-size: 20px;
            margin-right: 10px;
            padding-left: 10px;
            padding-right: 10px;
        }

        .buy-btn {
            background: #0090d2;
            color: white;
            padding: 5px 15px;
            border: none;
            border-radius: 10%;
        }

        .border_set {
            border: 5px solid #02283a;
            align-content: center;
            text-align: center;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }

        .list-style {
            list-style: none;
            padding: 0;
        }

        .list-style li {
            display: inline-block;
            /* Display items side by side */
        }

        .horizontal-line-container {
            position: relative;
        }

        .horizontal-line {
            border: 0;
            border-top: 5px solid #0498ee;
            /* Adjust color, thickness, etc. as needed */
            margin: 0;
        }

        .title {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: inline-block;
            background-color: #fff;
            /* Adjust background color as needed */
            padding: 0 10px;
            /* Adjust padding as needed */
            font-size: 18px;
            /* Adjust font size as needed */
            color: #000;
            /* Adjust color as needed */
        }
    </style>

    <section class="container sproduct mt-5 pt-5">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <img class="img-fluid w-100 pd-10" id="MainImg" src="public/images/Products/Indoor_P2.5[1].png" alt=""
                    data-main-image>

                <div class="small-img-group pt-1">


                    <div class="small-img-col">
                        <img src="public/images/Products/Indoor_P2.5[4].png" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="public/images/Products/Indoor_P2.5-[3].png" width="100%" class="small-img"
                            alt="">
                    </div>
                    <div class="small-img-col">
                        <img class="small-img" width="100%" src="public/images/Products/Indoo_P2.5[2].png" alt="">
                    </div>


                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="single-product-details ">
                    <div class="single-product-title">
                        <h2 class="text-black" style="margin: 30px 0;">Indoor P2.5</h2>

                        <div class="ratings">
                            <ul class="list-style">
                                <li><img src="public/images/navicon/star.png" style="width:25px;"></li>
                                <li><img src="public/images/navicon/star.png" style="width:25px;"></li>
                                <li><img src="public/images/navicon/star.png" style="width:25px;"></li>
                                <li><img src="public/images/navicon/star.png" style="width:25px;"></li>
                                <li><img src="public/images/navicon/star.png" style="width:25px;"></li>
                            </ul>
                            <span class="star">(12 rating)</span>
                        </div>

                    </div>
                    <p class="single-product-desc text-black" style="text-align: justify;margin: 30px 0;">
                        <b style="margin-bottom: 10px ;">Indoor LED Video Walls:</b><br>
                        Create stunning visual experiences in weddings, meeting rooms, events, airports, schools, colleges,
                        and various indoor live events with our cutting-edge Indoor LED Video Walls. We offer advanced
                        technology-based displays that deliver exceptional picture quality, ensuring an immersive viewing
                        experience for your audience. Our Indoor LED Display Screens are meticulously crafted to excel in
                        terms of ergonomics, performance, picture quality, and pricing.
                    </p>
                    <div class="product-more-option">

                        <div>
                            <div class="flex-container" style="padding-top: 50px;">
                                <h5 class="text-black" style="display: inline-block;float: left;">Share On :</h5>
                                <ul class="social-profile style1 list-style social"
                                    style="display: inline-block;float: right;">
                                    <li>
                                        <a target="_blank" href="https://www.facebook.com">
                                            <img src="{{ url('public/images/navicon/facebook.png') }}" alt="Facebook"
                                                style="width: 20px;">
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://twitter.com">
                                            <img src="{{ url('public/images/navicon/twitter.png') }}" alt="Twitter"
                                                style="width: 20px;">
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.linkedin.com">
                                            <img src="{{ url('public/images/navicon/linkedin.png') }}" alt="LinkedIn"
                                                style="width: 20px;">
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.instagram.com">
                                            <img src="{{ url('public/images/navicon/instagram.png') }}" alt="Instagram"
                                                style="width: 20px;">
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0 ps-6 pe-6 lg-ps-2 lg-pe-2 sm-ps-0 sm-pe-0 padding-xl" style="padding-top: 50px;">
        <div class="container-fluid ">
            <div class="row flex-row-reverse">
                <div class="col-xxl-12 pt-50px col-lg-9 ps-5 md-ps-15px md-mb-60px ">
                    <ul class="shop-modern shop-wrapper grid grid-4col xl-grid-3col sm-grid-2col xs-grid-1col gutter-extra-large text-center appear anime-child anime-complete"
                        data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [-15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 300, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }"
                        style="position: relative; height: 1800.05px;">
                        <li class="grid-sizer"></li>

                        <div class="horizontal-line-container">
                            <hr class="horizontal-line">
                            <span class="title">Explore</span>
                        </div>

                        <li class="grid-item"
                            style="position: absolute; left: 24.9997%; top: 0px; transition: none 0s ease 0s; transform: translate3d(0px, 0px, 0px);">
                            <div class="shop-box mb-10px">
                                <div class="shop-image mb-20px">
                                    <a>
                                        <img src="{{ url('public/images/Products/P6.png') }}" alt=""
                                            data-no-retina="">
                                        <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                    </a>
                                    <div class="shop-buttons-wrap">
                                        <a href="{{ url('indoor_P6') }}"
                                            class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                            <span class="quick-view-text button-text">View More</span>
                                        </a>
                                    </div>
                                    <div class="shop-hover d-flex justify-content-center">
                                        <ul>
                                            <li>
                                                <a href="#"
                                                    class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px"
                                                    data-bs-toggle="tooltip" data-bs-placement="left"
                                                    aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><i
                                                        class="feather icon-feather-heart fs-16"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px"
                                                    data-bs-toggle="tooltip" data-bs-placement="left"
                                                    aria-label="Quick shop" data-bs-original-title="Quick shop"><i
                                                        class="feather icon-feather-eye fs-16"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="shop-footer text-center">
                                    <a href="#" class="alt-font text-dark-gray fs-19 fw-500">Indoor P6</a>

                                </div>
                            </div>
                        </li>






                    </ul>


                </div>
            </div>
        </div>
    </section>

    <script>
        var MainImg = document.querySelector('[data-main-image]');
        var SmallImg = document.querySelectorAll('.small-img');
        var previousSmallImg = null;

        SmallImg.forEach(function(smallImg) {
            smallImg.onclick = function() {
                MainImg.src = smallImg.src;
            };
        });
    </script>


    {{-- <section class="container" style="margin-top: 170px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 pe-50px md-pe-15px md-mb-40px">
                    <div class="row overflow-hidden position-relative">
                        <div class="col-12 col-lg-10 position-relative order-lg-2 product-image ps-30px md-ps-15px">
                            <div class="swiper product-image-slider swiper-initialized swiper-horizontal swiper-backface-hidden"
                                data-slider-options="{ &quot;spaceBetween&quot;: 10, &quot;loop&quot;: true, &quot;autoplay&quot;: { &quot;delay&quot;: 2000, &quot;disableOnInteraction&quot;: false }, &quot;watchOverflow&quot;: true, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-product-next&quot;, &quot;prevEl&quot;: &quot;.slider-product-prev&quot; }, &quot;thumbs&quot;: { &quot;swiper&quot;: { &quot;el&quot;: &quot;.product-image-thumb&quot;, &quot;slidesPerView&quot;: &quot;auto&quot;, &quot;spaceBetween&quot;: 15, &quot;direction&quot;: &quot;vertical&quot;, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.swiper-thumb-next&quot;, &quot;prevEl&quot;: &quot;.swiper-thumb-prev&quot; } } } }"
                                data-thumb-slider-md-direction="horizontal">
                                <div class="swiper-wrapper" id="swiper-wrapper-47655147a10ee28d4" aria-live="off"
                                    style="transition-duration: 0ms; transform: translate3d(-2645px, 0px, 0px); transition-delay: 0ms;">
                                    <div class="swiper-slide gallery-box swiper-slide-next"
                                        style="width: 519px; margin-right: 10px;" role="group" aria-label="5 / 6"
                                        data-swiper-slide-index="4">
                                        <a href="public\images\Products\Indoor_P2.5[1].png"
                                            data-group="lightbox-gallery" title="Relaxed corduroy shirt"
                                            previewlistener="true">
                                            <img class="w-100" src="public\images\Products\Indoor_P2.5[1].png"
                                                alt="" data-no-retina="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide gallery-box" role="group" aria-label="6 / 6"
                                        style="width: 519px; margin-right: 10px;" data-swiper-slide-index="5">
                                        <a href="public\images\Products\Indoor_P2.5[2].png"
                                            data-group="lightbox-gallery" title="Relaxed corduroy shirt"
                                            previewlistener="true">
                                            <img class="w-100" src="public\images\Products\Indoor_P2.5[2].png"
                                                alt="" data-no-retina="">
                                        </a>
                                    </div>
                                    
                                   
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2 order-lg-1 position-relative single-product-thumb">
                            <div
                                class="swiper-container product-image-thumb slider-vertical swiper-initialized swiper-vertical swiper-watch-progress swiper-backface-hidden swiper-thumbs">
                                <div class="swiper-wrapper" id="swiper-wrapper-d0f4b39f1ae3cd73" aria-live="polite"
                                    style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms; transition-delay: 0ms;">
                                    <div class="swiper-slide swiper-slide-visible swiper-slide-fully-visible swiper-slide-active"
                                        role="group" aria-label="1 / 6" style="margin-bottom: 15px;"><img
                                            class="w-100" src="public\images\Products\Indoor_P2.5[1].png"
                                            alt="" data-no-retina=""></div>
                                    <div class="swiper-slide swiper-slide-visible swiper-slide-fully-visible swiper-slide-next"
                                        role="group" aria-label="2 / 6" style="margin-bottom: 15px;"><img
                                            class="w-100" src="public\images\Products\Indoor_P2.5[2].png"
                                            alt="" data-no-retina=""></div>
                         
                                    <div class="swiper-slide swiper-slide-visible" role="group" aria-label="5 / 6"
                                        style="margin-bottom: 15px;"><img class="w-100"
                                            src="public\images\Products\Indoor_P2.5[1].png" alt=""
                                            data-no-retina=""></div>
                                    <div class="swiper-slide" role="group" aria-label="6 / 6"
                                        style="margin-bottom: 15px;"><img class="w-100"
                                            src="public\images\Products\Indoor_P2.5[2].png" alt=""
                                            data-no-retina=""></div>
                                
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-lg-5 product-info">
                    <span class="fw-500 text-dark-gray d-block">Indoors LED</span>
                    <h4 class="alt-font text-dark-gray fw-500 mb-5px">Indoors P 2.5</h4>
                    <div class="d-block d-sm-flex align-items-center mb-15px">
                        <div class="me-10px xs-me-0">
                            <a href="#tab" class="section-link ls-minus-1px icon-small">
                                <i class="bi bi-star-fill text-golden-yellow"></i>
                                <i class="bi bi-star-fill text-golden-yellow"></i>
                                <i class="bi bi-star-fill text-golden-yellow"></i>
                                <i class="bi bi-star-fill text-golden-yellow"></i>
                                <i class="bi bi-star-fill text-golden-yellow"></i>
                            </a>
                        </div>
                        <a href="#tab" class="me-25px text-dark-gray fw-500 section-link xs-me-0">165 Reviews</a>
                        
                    </div>
               
                    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry lorem ipsum standard.</p>
                   
                  
                
                
                    
                    <div>
                        <div class="w-100 d-block"><span class="text-dark-gray alt-font fw-500">Category:</span> <a
                                href="#">Fashion,</a> <a href="#">Woman</a></div>
                        <div><span class="text-dark-gray alt-font fw-500">Tags: </span><a href="#">Shirts,</a> <a
                                href="#">Cotton,</a> <a href="#">Printed</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
