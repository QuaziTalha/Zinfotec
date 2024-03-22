@extends('layout')
@section('content')
<section class="top-space-margin page-title-big-typography cover-background magic-cursor round-cursor"
        style="background-image: url(public/images/demo-accounting-company-title-bg.jpg)">
        <div class="container">
            <div class="row extra-very-small-screen align-items-center">
                <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateX&quot;: [-30, 0], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h1 class="mb-20px text-white text-shadow-medium"><span
                            class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span></h1>
                    <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0">{ Our Product's }
                        </h2>
                </div>
            </div>
        </div>
    </section>

   {{--  <section class="bg-very-light-gray overflow-hidden">
        <div class="container">
            <div class="row align-items-center justify-content-center mb-6 text-center text-lg-start">
                <div class="col-xl-5 col-lg-5 md-mb-20px"
                    data-anime="{ &quot;translateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h4 class="text-dark-gray fw-700 mb-0 ls-minus-1px">
                        </h4>
                </div>
                
                <div class="col-xl-2 col-lg-2 d-flex justify-content-center justify-content-lg-end"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">


                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 position-relative">
                    <div class="outside-box-right-40 xs-outside-box-right-0"
                        data-anime="{ &quot;translateX&quot;: [100, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <div class="swiper magic-cursor"
                            data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 28, &quot;loop&quot;: true, &quot;autoplay&quot;: { &quot;delay&quot;: 2000, &quot;disableOnInteraction&quot;: false }, &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-four-slide-pagination-1&quot;, &quot;clickable&quot;: true }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-one-slide-next-1&quot;, &quot;prevEl&quot;: &quot;.slider-one-slide-prev-1&quot; }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;1200&quot;: { &quot;slidesPerView&quot;: 5 }, &quot;992&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;576&quot;: { &quot;slidesPerView&quot;: 2 } }, &quot;effect&quot;: &quot;slide&quot; }">
                            <div class="swiper-wrapper">

                                <<div class="swiper-slide">
                                    <div class="interactive-banner-style-08">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <div class="dropdown position-static">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <img src="public/images/demo-accounting-img-01.jpg" alt />
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <li>
                                                        <a class="dropdown-item" href="demo-accounting-services.html">
                                                            <i class="line-icon-Medal-2 text-white icon-extra-large"></i>
                                                        </a>
                                                    </li>
                                                    <!-- Add more dropdown items as needed -->
                                                </ul>
                                            </div>
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
    </section> --}}
    <div class="row align-items-center">
        <div class="col-lg-7 ps-50px lg-ps-15px">
                        <div class="row row-cols-1 row-cols-sm-2 justify-content-center">
                            <div class="col xs-mb-30px"
                                data-anime="{ &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                                <div class="bg-very-light-gray h-100 fs-17 lh-30 p-35px lg-p-25px border-radius-5px">
                                    <img src="public/images/demo-accounting-contact-office.jpg" alt
                                        class="border-radius-4px mb-30px lg-mb-20px">
                                    <span class="alt-font text-dark-gray fs-19 fw-600 d-inline-block">Product 1</span>
                                    
                                </div>
                            </div>
                            <div class="col"
                                data-anime="{ &quot;translateY&quot;: [-50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                                <div class="bg-very-light-gray h-100 fs-17 lh-30 p-35px lg-p-25px border-radius-5px">
                                    <img src="public/images/demo-accounting-contact-office-img2.jpg" alt
                                        class="border-radius-4px mb-30px lg-mb-20px">
                                    <span class="alt-font text-dark-gray fs-19 fw-600 d-inline-block">Product 2</span>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
     </div>
@endsection
