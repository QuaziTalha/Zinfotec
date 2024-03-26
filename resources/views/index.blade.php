@extends('layout')
@section('content')
    <section class="top-space-margin p-0 full-screen md-h-600px sm-h-500px section-dark" data-parallax-background-ratio="0.8"
        style="background-image: url('public/images/demo-accounting-bg.jpg'); background-repeat: no-repeat; background-size: unset!important;">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-xl-7 col-md-9 col-sm-9 position-relative text-white"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateY&quot;: [30, 0], &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeInOutSine&quot; }">
                    <div class="fs-80 lh-75 sm-fs-65 fw-600 mb-20px text-shadow-large ls-minus-2px">Unleash the Power of LED
                        Screens</div>
                    <div>
                        <span class=" fs-20 w-70 md-w-85 mb-25px fw-300 d-inline-block text-light">
                            Attention-grabbing advertising that commands attention and leaves a lasting impression.
                            Illuminate your brand's message with vibrant colors, seamless animations, and high-definition
                            clarity</span>
                    </div>
                    <div class="icon-with-text-style-08">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div
                                class="feature-box-icon feature-box-icon-rounded w-65px h-65px rounded-circle bg-main2 me-15px rounded-box">
                                <i class="feather icon-feather-arrow-right text-dark-gray icon-extra-medium text-light"></i>
                            </div>
                            <div class="feature-box-content">
                                <a href="#services"
                                    class="d-inline-block fs-19 text-white text-shadow-double-large ">Explore
                                    Products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-11 md-mb-60px sm-mb-40px">
                    <div class="row mt-10 align-items-center">
                        <div class="col-xl-5 col-lg-6 col-sm-5 xs-mb-25px text-center">
                            <div class="position-relative">
                                <span class="w-200px h-200px bg-main2 rounded-circle d-inline-block"
                                    data-anime="{ &quot;opacity&quot;: [0, 1], &quot;staggervalue&quot;: 0, &quot;easing&quot;: &quot;easeOutQuad&quot; }"></span>
                                <span
                                    class="fs-160 lg-fs-150 text-dark-gray fw-700 position-absolute left-0px w-100 top-50 ls-minus-5px md-top-40px"
                                    data-anime="{ &quot;opacity&quot;: [0, 1], &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">40</span>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-sm-7 ps-45px lg-ps-15px last-paragraph-no-margin text-center text-sm-start"
                            data-anime="{  &quot;opacity&quot;: [0,1], &quot;delay&quot;: 100, &quot;staggervalue&quot;: 250, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                            <h5 class="fw-600 text-dark-gray ls-minus-1px mb-15px">Years working experience.</h5>
                            <p>We put a strong focus on the needs of business to figure out solutions that best fits your
                                demand.</p>
                            <a href="demo-accounting-process.html"
                                class="btn btn-link btn-hover-animation-switch btn-extra-large text-base-color text-transform-none fw-600 mt-15px">
                                <span>
                                    <span class="btn-text">Discover now</span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-11 contact-form-style-01 position-relative">
                    <div class="position-absolute left-minus-25px md-left-minus-5px xs-left-0 top-100px md-top-0px">
                        <img src="public/images/demo-accounting-home-left-img.jpg" class="w-40px" alt>
                    </div>
                    <div class="ps-14 pe-14 pt-12 pb-12 lg-p-12 bg-white box-shadow-quadruple-large border-radius-6px">
                        <h6 class="d-inline-block fw-600 text-dark-gray ls-minus-1px mb-35px sm-mb-25px"
                            data-anime="{ &quot;translateY&quot;: [15, 0], &quot;translateX&quot;: [-15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                            Get a Quote ?</h6>

                        <form action="https://craftohtml.themezaa.com/email-templates/contact-form.php" method="post"
                            data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [15, 0], &quot;translateX&quot;: [-15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                            <div class="position-relative form-group mb-15px">
                                <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
                                <input type="text" name="name" class="form-control required"
                                    placeholder="Your name*" />
                            </div>
                            <div class="position-relative form-group mb-15px">
                                <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                <input type="email" name="email" class="form-control required"
                                    placeholder="Your email address*" />
                            </div>
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>
                                <input type="tel" name="phone" class="form-control" placeholder="Your phone" />
                            </div>
                            <div class="position-relative terms-condition-box text-start d-inline-block">
                                <label>
                                    <input type="checkbox" name="terms_condition" id="terms_condition" value="1"
                                        class="terms-condition check-box align-middle required">
                                    <span class="box fs-16">I agree to the terms of service.</span>
                                </label>
                            </div>
                            <div class="position-relative mt-20px">
                                <button class="btn btn-large btn-round-edge btn-base-color btn-box-shadow submit w-100"
                                    type="submit">Get free quote</button>
                                <div class="form-results mt-20px text-center lh-24 d-none"></div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class=" overflow-hidden" style="background-color: #023047 ;">
        <div class="container">
            <div class="row align-items-center justify-content-center mb-6 text-center text-lg-start">
                <div class="col-xl-5 col-lg-5 md-mb-20px"
                    data-anime="{ &quot;translateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h4 class=" fw-700 mb-0 ls-minus-1px" style="color: #0090d2">What we do:</h4>
                </div>
                
               
            </div>
            <div class="row align-items-center">
                <div class="col-12 position-relative">
                    <div class="outside-box-right-40 xs-outside-box-right-0"
                        data-anime="{ &quot;translateX&quot;: [100, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <div class="swiper magic-cursor"
                            data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 28, &quot;loop&quot;: true, &quot;autoplay&quot;: { &quot;delay&quot;: 2000, &quot;disableOnInteraction&quot;: false }, &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-four-slide-pagination-1&quot;, &quot;clickable&quot;: true }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-one-slide-next-1&quot;, &quot;prevEl&quot;: &quot;.slider-one-slide-prev-1&quot; }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;1200&quot;: { &quot;slidesPerView&quot;: 5 }, &quot;992&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;576&quot;: { &quot;slidesPerView&quot;: 2 } }, &quot;effect&quot;: &quot;slide&quot; }">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="interactive-banner-style-08">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="demo-accounting-services.html">
                                                <img src="public/images/demo-accounting-img-01.jpg" alt />
                                            </a>
                                            <figcaption
                                                class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-14 lg-p-12">
                                                <a href="demo-accounting-services.html">
                                                    <i class="line-icon-Medal-2 text-white icon-extra-large"></i>
                                                </a>
                                                <div class="mt-auto d-flex w-100 align-items-center">
                                                    <div class="col last-paragraph-no-margin">
                                                        <a href="demo-accounting-services.html"
                                                            class="text-white fs-24 lh-28 w-65 xl-w-75 d-block">Targeted
                                                            growth</a>
                                                    </div>
                                                    <a href="demo-accounting-services.html"
                                                        class="circle-box bg-yellow w-50px h-50px rounded-circle ms-auto position-relative rounded-box">
                                                        <i
                                                            class="bi bi-arrow-right-short absolute-middle-center icon-very-medium lh-0px text-dark-gray"></i>
                                                    </a>
                                                </div>
                                                <div
                                                    class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9">
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>


                                <div class="swiper-slide">
                                    <div class="interactive-banner-style-08">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="demo-accounting-services.html">
                                                <img src="public/images/demo-accounting-img-02.jpg" alt />
                                            </a>
                                            <figcaption
                                                class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-14 lg-p-10">
                                                <a href="demo-accounting-services.html">
                                                    <i class="line-icon-Financial text-white icon-extra-large"></i>
                                                </a>
                                                <div class="mt-auto d-flex w-100 align-items-center">
                                                    <div class="col last-paragraph-no-margin">
                                                        <a href="demo-accounting-services.html"
                                                            class="text-white fs-24 lh-28 w-65 xl-w-75 d-block">Conversion
                                                            strategy</a>
                                                    </div>
                                                    <a href="demo-accounting-services.html"
                                                        class="circle-box bg-yellow w-50px h-50px rounded-circle ms-auto position-relative rounded-box">
                                                        <i
                                                            class="bi bi-arrow-right-short absolute-middle-center icon-very-medium lh-0px text-dark-gray"></i>
                                                    </a>
                                                </div>
                                                <div
                                                    class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9">
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>


                                <div class="swiper-slide">
                                    <div class="interactive-banner-style-08">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="demo-accounting-services.html">
                                                <img src="public/images/demo-accounting-img-03.jpg" alt />
                                            </a>
                                            <figcaption
                                                class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-14 lg-p-10">
                                                <a href="demo-accounting-services.html">
                                                    <i class="line-icon-Archery-2 text-white icon-extra-large"></i>
                                                </a>
                                                <div class="mt-auto d-flex w-100 align-items-center">
                                                    <div class="col last-paragraph-no-margin">
                                                        <a href="demo-accounting-services.html"
                                                            class="text-white fs-24 lh-28 w-65 xl-w-75 d-block">Competitor
                                                            research</a>
                                                    </div>
                                                    <a href="demo-accounting-services.html"
                                                        class="circle-box bg-yellow w-50px h-50px rounded-circle ms-auto position-relative rounded-box">
                                                        <i
                                                            class="bi bi-arrow-right-short absolute-middle-center icon-very-medium lh-0px text-dark-gray"></i>
                                                    </a>
                                                </div>
                                                <div
                                                    class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9">
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>


                                <div class="swiper-slide">
                                    <div class="interactive-banner-style-08">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="demo-accounting-services.html">
                                                <img src="public/images/demo-accounting-img-04.jpg" alt />
                                            </a>
                                            <figcaption
                                                class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-14 lg-p-10">
                                                <a href="demo-accounting-services.html">
                                                    <i class="line-icon-Money-Bag text-white icon-extra-large"></i>
                                                </a>
                                                <div class="mt-auto d-flex w-100 align-items-center">
                                                    <div class="col last-paragraph-no-margin">
                                                        <a href="demo-accounting-services.html"
                                                            class="text-white fs-24 lh-28 w-65 xl-w-75 d-block">Marketing
                                                            strategy</a>
                                                    </div>
                                                    <a href="demo-accounting-services.html"
                                                        class="circle-box bg-yellow w-50px h-50px rounded-circle ms-auto position-relative rounded-box">
                                                        <i
                                                            class="bi bi-arrow-right-short absolute-middle-center icon-very-medium lh-0px text-dark-gray"></i>
                                                    </a>
                                                </div>
                                                <div
                                                    class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9">
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>


                                <div class="swiper-slide">
                                    <div class="interactive-banner-style-08">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="demo-accounting-services.html">
                                                <img src="public/images/demo-accounting-img-02.jpg" alt />
                                            </a>
                                            <figcaption
                                                class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-14 lg-p-10">
                                                <a href="demo-accounting-services.html">
                                                    <i class="line-icon-Financial text-white icon-extra-large"></i>
                                                </a>
                                                <div class="mt-auto d-flex w-100 align-items-center">
                                                    <div class="col last-paragraph-no-margin">
                                                        <a href="demo-accounting-services.html"
                                                            class="text-white fs-24 lh-28 w-65 xl-w-75 d-block">Conversion
                                                            strategy</a>
                                                    </div>
                                                    <a href="demo-accounting-services.html"
                                                        class="circle-box bg-yellow w-50px h-50px rounded-circle ms-auto position-relative rounded-box">
                                                        <i
                                                            class="bi bi-arrow-right-short absolute-middle-center icon-very-medium lh-0px text-dark-gray"></i>
                                                    </a>
                                                </div>
                                                <div
                                                    class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9">
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>


                                <div class="swiper-slide">
                                    <div class="interactive-banner-style-08">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="demo-accounting-services.html">
                                                <img src="public/images/demo-accounting-img-01.jpg" alt />
                                            </a>
                                            <figcaption
                                                class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-14 lg-p-12">
                                                <a href="demo-accounting-services.html">
                                                    <i class="line-icon-Medal-2 text-white icon-extra-large"></i>
                                                </a>
                                                <div class="mt-auto d-flex w-100 align-items-center">
                                                    <div class="col last-paragraph-no-margin">
                                                        <a href="demo-accounting-services.html"
                                                            class="text-white fs-24 lh-28 w-65 xl-w-75 d-block">Targeted
                                                            growth</a>
                                                    </div>
                                                    <a href="demo-accounting-services.html"
                                                        class="circle-box bg-yellow w-50px h-50px rounded-circle ms-auto position-relative rounded-box">
                                                        <i
                                                            class="bi bi-arrow-right-short absolute-middle-center icon-very-medium lh-0px text-dark-gray"></i>
                                                    </a>
                                                </div>
                                                <div
                                                    class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9">
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>


                                <div class="swiper-slide">
                                    <div class="interactive-banner-style-08">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="demo-accounting-services.html">
                                                <img src="public/images/demo-accounting-img-02.jpg" alt />
                                            </a>
                                            <figcaption
                                                class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-14 lg-p-10">
                                                <a href="demo-accounting-services.html">
                                                    <i class="line-icon-Financial text-white icon-extra-large"></i>
                                                </a>
                                                <div class="mt-auto d-flex w-100 align-items-center">
                                                    <div class="col last-paragraph-no-margin">
                                                        <a href="demo-accounting-services.html"
                                                            class="text-white fs-24 lh-28 w-65 xl-w-75 d-block">Conversion
                                                            strategy</a>
                                                    </div>
                                                    <a href="demo-accounting-services.html"
                                                        class="circle-box bg-yellow w-50px h-50px rounded-circle ms-auto position-relative rounded-box">
                                                        <i
                                                            class="bi bi-arrow-right-short absolute-middle-center icon-very-medium lh-0px text-dark-gray"></i>
                                                    </a>
                                                </div>
                                                <div
                                                    class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9">
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>


                                <div class="swiper-slide">
                                    <div class="interactive-banner-style-08">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="demo-accounting-services.html">
                                                <img src="public/images/demo-accounting-img-03.jpg" alt />
                                            </a>
                                            <figcaption
                                                class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-14 lg-p-10">
                                                <a href="demo-accounting-services.html">
                                                    <i class="line-icon-Archery-2 text-white icon-extra-large"></i>
                                                </a>
                                                <div class="mt-auto d-flex w-100 align-items-center">
                                                    <div class="col last-paragraph-no-margin">
                                                        <a href="demo-accounting-services.html"
                                                            class="text-white fs-24 lh-28 w-65 xl-w-75 d-block">Competitor
                                                            research</a>
                                                    </div>
                                                    <a href="demo-accounting-services.html"
                                                        class="circle-box bg-yellow w-50px h-50px rounded-circle ms-auto position-relative rounded-box">
                                                        <i
                                                            class="bi bi-arrow-right-short absolute-middle-center icon-very-medium lh-0px text-dark-gray"></i>
                                                    </a>
                                                </div>
                                                <div
                                                    class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9">
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>


                                <div class="swiper-slide">
                                    <div class="interactive-banner-style-08">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="demo-accounting-services.html">
                                                <img src="public/images/demo-accounting-img-04.jpg" alt />
                                            </a>
                                            <figcaption
                                                class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-14 lg-p-10">
                                                <a href="demo-accounting-services.html">
                                                    <i class="line-icon-Money-Bag text-white icon-extra-large"></i>
                                                </a>
                                                <div class="mt-auto d-flex w-100 align-items-center">
                                                    <div class="col last-paragraph-no-margin">
                                                        <a href="demo-accounting-services.html"
                                                            class="text-white fs-24 lh-28 w-65 xl-w-75 d-block">Marketing
                                                            strategy</a>
                                                    </div>
                                                    <a href="demo-accounting-services.html"
                                                        class="circle-box bg-yellow w-50px h-50px rounded-circle ms-auto position-relative rounded-box">
                                                        <i
                                                            class="bi bi-arrow-right-short absolute-middle-center icon-very-medium lh-0px text-dark-gray"></i>
                                                    </a>
                                                </div>
                                                <div
                                                    class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9">
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>


                                <div class="swiper-slide">
                                    <div class="interactive-banner-style-08">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="demo-accounting-services.html">
                                                <img src="public/images/demo-accounting-img-02.jpg" alt />
                                            </a>
                                            <figcaption
                                                class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-14 lg-p-10">
                                                <a href="demo-accounting-services.html">
                                                    <i class="line-icon-Financial text-white icon-extra-large"></i>
                                                </a>
                                                <div class="mt-auto d-flex w-100 align-items-center">
                                                    <div class="col last-paragraph-no-margin">
                                                        <a href="demo-accounting-services.html"
                                                            class="text-white fs-24 lh-28 w-65 xl-w-75 d-block">Conversion
                                                            strategy</a>
                                                    </div>
                                                    <a href="demo-accounting-services.html"
                                                        class="circle-box bg-yellow w-50px h-50px rounded-circle ms-auto position-relative rounded-box">
                                                        <i
                                                            class="bi bi-arrow-right-short absolute-middle-center icon-very-medium lh-0px text-dark-gray"></i>
                                                    </a>
                                                </div>
                                                <div
                                                    class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9">
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>


    <section class="p-0 bg-base-color">
        <div class="container">
            <div class="row align-items-center justify-content-center g-0">
                <div class="col-auto d-flex align-items-center"
                    data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <img src="public/images/demo-accounting-img-05.jpg" alt />
                    <div class="fs-19 lh-28 last-paragraph-no-margin text-white pt-15px pb-15px">
                        <p>Save your precious time and effort spent for finding a solution. <a
                                href="demo-accounting-contact.html"
                                class="text-decoration-line-bottom fw-500 text-white">Contact us now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row justify-content-center mb-6">
                <div class="col-xl-6 col-md-8 col-sm-10 text-center"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h4 class="mb-0 text-dark-gray fw-700 ls-minus-1px w-85 xl-w-100 mx-auto">Trusted by the world's
                        fastest growing companies</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 justify-content-center mb-7 sm-mb-45px"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;rotateX&quot;:[30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <div class="col sm-mb-30px">
                    <div
                        class="bg-white h-100 border border-color-extra-medium-gray border-radius-6px text-center box-shadow-quadruple-large">
                        <div class="pt-10 pb-10">
                            <img src="public/images/tanishq.png" alt />
                        </div>
                        {{-- <div class="border-top border-1 border-color-extra-medium-gray p-15px last-paragraph-no-margin">
                            <p>Project management - <span class="fw-600 text-dark-gray ls-minus-05px">275% Growth</span>
                            </p>
                        </div> --}}
                    </div>
                </div>
                <div class="col sm-mb-30px">
                    <div
                        class="bg-white h-100 border border-color-extra-medium-gray border-radius-6px text-center box-shadow-quadruple-large">
                        <div class="pt-10 pb-10">
                            <img src="public/images/swiss-paradise.png"      alt />
                        </div>
                       
                    </div>
                </div>
                <div class="col">
                    <div
                        class="bg-white h-100 border border-color-extra-medium-gray border-radius-6px text-center box-shadow-quadruple-large">
                        <div class="pt-10 pb-10">
                            <img src="public/images/LMS.png"alt />
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row position-relative clients-style-08 mb-6 sm-mb-40px"
                data-anime="{ &quot;translateX&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
               
                <div class="col swiper text-center feather-shadow"
                    data-slider-options="{ &quot;slidesPerView&quot;: 2, &quot;spaceBetween&quot;:0, &quot;speed&quot;: 6000, &quot;loop&quot;: true, &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-four-slide-pagination-2&quot;, &quot;clickable&quot;: false }, &quot;allowTouchMove&quot;: false, &quot;autoplay&quot;: { &quot;delay&quot;:0, &quot;disableOnInteraction&quot;: false }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-four-slide-next-2&quot;, &quot;prevEl&quot;: &quot;.slider-four-slide-prev-2&quot; }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;1200&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;992&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 3 } }, &quot;effect&quot;: &quot;slide&quot; }">
                    
                  
                    <div class="swiper-wrapper marquee-slide">
                        <script>
                            var images = [
                                {src: "tanishq-dark.png", link: ""},
                                {src: "raymond.png", link: ""},
                                {src: "hollwood.png", link: ""},
                                {src: "caratlane_dark.png", link: ""},  
                                {src: "red-chif.png", link: ""},
                                {src: "LMS2.png", link: ""},
                                {src: "TimesAvenue.png", link: ""},
                                {src: "swiss-dark.png", link: ""},
                                {src: "smart-black.png", link: ""},
                                {src: "faluda.png", link: ""},
                                {src: "Smita.png", link: ""},
                                {src: "NAWAB_Tailors.png", link: ""},
                                {src: "GetWelcancer-clinic.png", link: ""},
                                {src: "Kumam-1.png", link: ""},
                                {src: "kumar-nx-1.png", link: ""},
                                {src: "sajan-sajani.png", link: ""},
                                {src: "saffron.png", link: ""},
                                {src: "Quadri-mental-hospital1.png", link: ""},
                                {src: "maham-collection.png", link: ""},
                                {src: "q-mall.png", link: ""},
                                {src: "humsafar-travels.jpg.png", link: ""},
                                {src: "Varroc-Logo.png", link: ""},
                                {src: "ENDURANCE.png", link: ""},
                                {src: "sanjeev.png", link: ""},
                                {src: "marelli.png", link: ""},
                                {src: "corning.jpg.png", link: ""},
                                {src: "aurangabad-electrical.png", link: ""},
                                {src: "Bajaj_Electricals.jpg.png", link: ""},
                                {src: "bagla.png", link: ""},
                                {src: "Alicon.jpg.png", link: ""},
                                {src: "Glenmark_Pharmaceuticals.png", link: ""},
                                {src: "flash-electronics.png", link: ""},
                                {src: "bkt-growig-together.png", link: ""},
                                {src: "Pitti.jpg.png", link: ""},
                                {src: "elllora.png", link: ""}              
                            ];
                    
                            for (var i = 0; i < images.length; i++) {
                                document.write('<div class="swiper-slide"><a href="' + images[i].link + '"><img src="public/images/Clients/' + images[i].src + '" class="h-40px xs-h-30px" alt /></a></div>');
                            }
                        </script>
                    </div>
                    
                    
                </div>
            </div>
           {{--  <div class="row justify-content-center align-items-center"
                data-anime="{ &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <div class="col-12 text-center">
                    <div
                        class="d-inline-block align-middle bg-yellow fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px lh-30 sm-m-5px">
                        Trust</div>
                    <div class="d-inline-block align-middle text-dark-gray fs-19 fw-600 ls-minus-05px">Join the <span
                            class="text-decoration-line-bottom text-dark-gray">10000+ companies</span> trusting crafto
                        accounting.</div>
                </div>
            </div> --}}
        </div>
    </section>


    <section class=" pb-0" style="background-color: #023047 ;"   id="services">
        <div class="container">
            <div class="row mb-8 sm-mb-10">
                <div class="col-12 tab-style-08">
                    <div class="tab-content">

                        <div class="tab-pane fade in active show" id="tab_eight1">
                            <div class="row align-items-center justify-content-center g-lg-0">
                                <div class="col-md-6 sm-mb-30px position-relative overflow-hidden"
                                    data-anime="{ &quot;effect&quot;: &quot;slide&quot;, &quot;color&quot;: &quot;#005153&quot;, &quot;direction&quot;:&quot;lr&quot;, &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;delay&quot;:50}">
                                    <img src="public/images/demo-accounting-img-06.jpg" alt
                                        class="w-100 border-radius-6px">
                                    <div class="bg-very-light-gray w-250px position-absolute pt-20px pb-20px ps-25px pe-25px border-radius-4px bottom-30px left-35px box-shadow-large d-flex align-items-center"
                                        data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 800, &quot;staggervalue&quot;: 500, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                                        <h2 class="vertical-counter d-inline-flex text-dark-gray fw-700 ls-minus-2px md-ls-minus-1px mb-0 text-nowrap border-end border-1 border-color-transparent-dark-very-light pe-20px me-20px"
                                            data-to="85"></h2>
                                        <span class="text-dark-gray ls-minus-05px d-inline-block lh-22">Project
                                            completed</span>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-5 offset-lg-1 col-md-6 text-center text-md-start"
                                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                                    <div class="mb-20px">
                                        <div
                                            class="separator-line-1px w-50px  d-inline-block align-middle me-10px opacity-2">
                                        </div>
                                        <span
                                            class="d-inline-block text-warning align-middle fw-500 fs-20 ls-minus-05px">Product Specification</span>
                                    </div>
                                    
                                            <div class="column">
                                            <div class="row" >We combine deep financial expertise with exclusive tools to help the maximize
                                                value.</div>
                                                <hr>
                                            <div class="row">Financial services are the economic services provided by the finance
                                                industry.</div>
                                                <hr>
                                            <div class="row">An activity or set of activities that can accomplish a specific
                                                    organizational goal.    </div>
                                                <hr>
                                            <div class="row">We combine deep financial expertise with exclusive tools to help the maximize
                                                        value.</div>
                                                       
                                            
                                </div>

                                     <br>   
                                    <a href="demo-accounting-services.html"
                                        class="btn btn-large btn-rounded with-rounded btn-white btn-box-shadow fw-600">Learn
                                        more<span class="bg-base-color text-white"><i
                                                class="bi bi-arrow-right-short icon-extra-medium"></i></span></a>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade in" id="tab_eight2">
                            <div class="row align-items-center justify-content-center g-lg-0">
                                <div class="col-md-6 sm-mb-30px position-relative overflow-hidden">
                                    <img src="public/images/demo-accounting-img-07.jpg" alt
                                        class="w-100 border-radius-4px">
                                    <div
                                        class="bg-very-light-gray w-250px position-absolute pt-20px pb-20px ps-25px pe-25px border-radius-4px bottom-30px left-35px box-shadow-large d-flex align-items-center">
                                        <h2 class="vertical-counter d-inline-flex text-dark-gray fw-700 ls-minus-2px md-ls-minus-1px mb-0 text-nowrap border-end border-1 border-color-transparent-dark-very-light pe-20px me-20px"
                                            data-to="80"></h2>
                                        <span class="text-dark-gray ls-minus-05px d-inline-block lh-22">Project
                                            completed</span>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-5 offset-lg-1 col-md-6 text-center text-md-start">
                                    <div class="mb-20px">
                                        <div
                                            class="separator-line-1px w-50px bg-base-color d-inline-block align-middle me-10px opacity-2">
                                        </div>
                                        <span
                                            class="d-inline-block text-dark-gray align-middle fw-500 fs-20 ls-minus-05px">Audit
                                            assurance</span>
                                    </div>
                                    <h4 class="fw-700 text-dark-gray ls-minus-1px md-mb-20px">An excellent audit service
                                        for company.</h4>
                                    <p class="mb-35px md-mb-25px">We provide simplified accounting solutions and
                                        qualitative business process services to the customers which helps streamline your
                                        business and give your company a competitive. </p>
                                    <a href="demo-accounting-services.html"
                                        class="btn btn-large btn-rounded with-rounded btn-white btn-box-shadow fw-600">Learn
                                        more<span class="bg-base-color text-white"><i
                                                class="bi bi-arrow-right-short icon-extra-medium"></i></span></a>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade in" id="tab_eight3">
                            <div class="row align-items-center justify-content-center g-lg-0">
                                <div class="col-md-6 sm-mb-30px position-relative overflow-hidden">
                                    <img src="public/images/demo-accounting-img-08.jpg" alt
                                        class="w-100 border-radius-4px">
                                    <div
                                        class="bg-very-light-gray w-250px position-absolute pt-20px pb-20px ps-25px pe-25px border-radius-4px bottom-30px left-35px box-shadow-large d-flex align-items-center">
                                        <h2 class="vertical-counter d-inline-flex text-dark-gray fw-700 ls-minus-2px md-ls-minus-1px mb-0 text-nowrap border-end border-1 border-color-transparent-dark-very-light pe-20px me-20px"
                                            data-to="85"></h2>
                                        <span class="text-dark-gray ls-minus-05px d-inline-block lh-22">Project
                                            completed</span>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-5 offset-lg-1 col-md-6 text-center text-md-start">
                                    <div class="mb-20px">
                                        <div
                                            class="separator-line-1px w-50px bg-base-color d-inline-block align-middle me-10px opacity-2">
                                        </div>
                                        <span
                                            class="d-inline-block text-dark-gray align-middle fw-500 fs-20 ls-minus-05px">Financial
                                            projections</span>
                                    </div>
                                    <h4 class="fw-700 text-dark-gray ls-minus-1px md-mb-20px">We are leader in tax advisor
                                        and financial.</h4>
                                    <p class="mb-35px md-mb-25px">We provide simplified accounting solutions and
                                        qualitative business process services to the customers which helps streamline your
                                        business and give your company a competitive. </p>
                                    <a href="demo-accounting-services.html"
                                        class="btn btn-large btn-rounded with-rounded btn-white btn-box-shadow fw-600">Learn
                                        more<span class="bg-base-color text-white"><i
                                                class="bi bi-arrow-right-short icon-extra-medium"></i></span></a>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade in" id="tab_eight4">
                            <div class="row align-items-center justify-content-center g-lg-0">
                                <div class="col-md-6 sm-mb-30px position-relative overflow-hidden">
                                    <img src="public/images/demo-accounting-img-09.jpg" alt
                                        class="w-100 border-radius-4px">
                                    <div
                                        class="bg-very-light-gray w-250px position-absolute pt-20px pb-20px ps-25px pe-25px border-radius-4px bottom-30px left-35px box-shadow-large d-flex align-items-center">
                                        <h2 class="vertical-counter d-inline-flex text-dark-gray fw-700 ls-minus-2px md-ls-minus-1px mb-0 text-nowrap border-end border-1 border-color-transparent-dark-very-light pe-20px me-20px"
                                            data-to="80"></h2>
                                        <span class="text-dark-gray ls-minus-05px d-inline-block lh-22">Project
                                            completed</span>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-5 offset-lg-1 col-md-6 text-center text-md-start">
                                    <div class="mb-20px">
                                        <div
                                            class="separator-line-1px w-50px bg-base-color d-inline-block align-middle me-10px opacity-2">
                                        </div>
                                        <span
                                            class="d-inline-block text-dark-gray align-middle fw-500 fs-20 ls-minus-05px">Business
                                            planning</span>
                                    </div>
                                    <h4 class="fw-700 text-dark-gray ls-minus-1px md-mb-20px">We creating specific business
                                        strategies.</h4>
                                    <p class="mb-35px md-mb-25px">We provide simplified accounting solutions and
                                        qualitative business process services to the customers which helps streamline your
                                        business and give your company a competitive. </p>
                                    <a href="demo-accounting-services.html"
                                        class="btn btn-large btn-rounded with-rounded btn-white btn-box-shadow fw-600">Learn
                                        more<span class="bg-base-color text-white"><i
                                                class="bi bi-arrow-right-short icon-extra-medium"></i></span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="tab-style-08 border-bottom border-color-extra-medium-gray bg-white box-shadow-quadruple-large">
           
        </div>
    </section>


   


    <section class="pt-0">
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-xxl-5 col-lg-7 col-md-8 text-center"
                    data-anime="{ &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <span>HOT COLLECTION</span>
                    <h4 class="text-dark-gray fw-700 ls-minus-1px">Browse Our Top Products</h4>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-12">
                    <ul class="blog-classic blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large"
                        data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <li class="grid-sizer"></li>

                        <li class="grid-item">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                    <a href="demo-accounting-blog-single-creative.html"><img
                                            src="public/images/P-6 Outdoor.jpg" alt /></a>
                                </div>
                                <div class="card-body px-0 pt-30px pb-30px xs-pb-15px last-paragraph-no-margin">
                                    <a href="demo-accounting-blog-single-creative.html"
                                        class="card-title mb-5px fw-600 text-dark-gray d-block">Outdoor Fixed LED Video Wall Solutions</a>
                                    
                                </div>
                            </div>
                        </li>


                        <li class="grid-item">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                    <a href="demo-accounting-blog-single-creative.html"><img
                                            src="public/images/P-8 Indoor.jpg" alt /></a>
                                </div>
                                <div class="card-body px-0 pt-30px pb-30px xs-pb-15px last-paragraph-no-margin">
                                    <a href="demo-accounting-blog-single-creative.html"
                                        class="card-title mb-5px fw-600 text-dark-gray d-block">Indoor LED Video Walls</a>
                                    
                                </div>
                            </div>
                        </li>


                        <li class="grid-item">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                    <a href="demo-accounting-blog-single-creative.html"><img
                                            src="public/images/LED Van.png" alt /></a>
                                </div>
                                <div class="card-body px-0 pt-30px pb-30px xs-pb-15px last-paragraph-no-margin">
                                    <a href="demo-accounting-blog-single-creative.html"
                                        class="card-title mb-5px fw-600 text-dark-gray d-block">LED Mobile Van Display</a>
                                    
                                </div>
                            </div>
                        </li>


                        <li class="grid-item">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                    <a href="demo-accounting-blog-single-creative.html"><img
                                            src="public/images/Single Color.png" alt /></a>
                                </div>
                                <div class="card-body px-0 pt-30px pb-30px xs-pb-15px last-paragraph-no-margin">
                                    <a href="demo-accounting-blog-single-creative.html"
                                        class="card-title mb-5px fw-600 text-dark-gray d-block">Customized Single Color LED Boards</a>
                                    
                                </div>
                            </div>
                        </li>
                        
                        <li class="grid-item">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                    <a href="demo-accounting-blog-single-creative.html"><img
                                            src="public/images/PVC_Panel.png" alt /></a>
                                </div>
                                <div class="card-body px-0 pt-30px pb-30px xs-pb-15px last-paragraph-no-margin">
                                    <a href="demo-accounting-blog-single-creative.html"
                                        class="card-title mb-5px fw-600 text-dark-gray d-block">PVC Panels & Decorative Walls</a>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                    <a href="demo-accounting-blog-single-creative.html"><img
                                            src="public/images/Glow Sign.png" alt /></a>
                                </div>
                                <div class="card-body px-0 pt-30px pb-30px xs-pb-15px last-paragraph-no-margin">
                                    <a href="demo-accounting-blog-single-creative.html"
                                        class="card-title mb-5px fw-600 text-dark-gray d-block">LED Glow Letter Cut Sign Board</a>
                                    
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>

    
@endsection
