@extends('layout')
@section('content')
    <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5"
        style="background-image: url({{ url('public/images/demo-accounting-bg.jpg') }}); background-position: 50% 0px; margin-top: inherit;">
        <div class="opacity-extra-medium bg-dark-slate-blue"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center extra-small-screen">
                <div class="col-12 position-relative text-center page-title-extra-large">
                    <h1 class="m-auto text-white text-shadow-double-large fw-500 ls-minus-3px xs-ls-minus-2px appear anime-complete"
                        data-anime="{ &quot;translateY&quot;: [15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }"
                        >Clients - Zinfotec</h1>
                </div>
                <div class="down-section text-center appear anime-complete"
                data-anime='{ "translateY": [-15, 0], "opacity": [0, 1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'
               >
                    <a href="#down-section" aria-label="scroll down" class="section-link">
                        <div
                            class="d-flex justify-content-center align-items-center mx-auto rounded-circle fs-30 text-white">
                            <i class="feather icon-feather-chevron-down"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="ps-12 pe-12 xl-ps-10 xl-pe-10 lg-ps-3 lg-pe-3 half-section" id="down-section">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 clients-style-06 appear anime-child anime-complete"
            data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;scale&quot;: [0,1], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 300, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">



                @php
                    $imageNames = ['01.jpg', '02.jpg', '03.jpg', 'swiss-paradise.png'   ];
                @endphp

                @foreach ($imageNames as $imageName)
                    <div class="col client-box text-center pt-6 pb-6 sm-pt-8 sm-pb-8" >
                        <a href="#"><img src="public/images/Clients/{{ $imageName }}"
                                class="h-100px md-h-30px sm-h-40px" alt="" data-no-retina=""></a>
                    </div>
                @endforeach



            </div>
        </div>
    </section>
    <section class="bg-solitude-blue overflow-hidden xs-pb-20px">
        <div class="container-fluid">
        <div class="row justify-content-center mb-2">
        <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 text-center appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
        <span class="bg-white box-shadow-quadruple-large text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px" >Customer speaks</span>
        <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px mb-0" >What our valuable customer are saying?</h3>
        </div>
        </div>
        <div class="row align-items-center">
        <div class="col-12 position-relative appear anime-complete" data-anime="{ &quot;translateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }" >
        <div class="swiper slider-three-slide swiper-initialized swiper-horizontal magic-cursor swiper-backface-hidden" data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 30, &quot;loopedSlides&quot;: true, &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-four-slide-pagination-2&quot;, &quot;clickable&quot;: true, &quot;dynamicBullets&quot;: false }, &quot;autoplay&quot;: { &quot;delay&quot;: 3000, &quot;disableOnInteraction&quot;: false }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;1200&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;992&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 2 } }, &quot;effect&quot;: &quot;slide&quot; }">
        <div class="swiper-wrapper pt-30px pb-30px" id="swiper-wrapper-394256fdf26a8dc2" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-1427.25px, 0px, 0px); transition-delay: 0ms;">
        <div class="swiper-slide review-style-04 d-none d-lg-block h-auto" style="width: 445.75px; margin-right: 30px;" role="group" aria-label="1 / 8"></div>
        
        <div class="swiper-slide review-style-04" style="width: 445.75px; margin-right: 30px;" role="group" aria-label="2 / 8">
        <div class="d-flex justify-content-center h-100 flex-column bg-white border-radius-6px p-15 xl-p-12 box-shadow-extra-large">
        <div class="review-star-icon fs-18 lh-30">
        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
        </div>
        <span class="alt-font fw-500 fs-19 text-dark-gray mb-10px">Amazing product</span>
        <p class="mb-20px">A friend referred your company to me as one that would combine and value into an affordable.</p>
        <div class="mt-5px d-flex align-items-center">
        <img class="rounded-circle w-90px h-90px me-20px" src="images/avtar-02.jpg" alt="" data-no-retina="">
        <div class="d-inline-block align-middle">
        <div class="text-dark-gray fw-500 alt-font">Herman Miller</div>
        <div class="lh-20 fs-16">LinkSture Tech</div>
        </div>
        </div>
        </div>
        </div>
        
        
        <div class="swiper-slide review-style-04 swiper-slide-prev" style="width: 445.75px; margin-right: 30px;" role="group" aria-label="3 / 8">
        <div class="d-flex justify-content-center h-100 flex-column bg-white border-radius-6px p-15 xl-p-12 box-shadow-extra-large">
        <div class="review-star-icon fs-18 lh-30">
        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
        </div>
        <span class="alt-font fw-500 fs-19 text-dark-gray mb-10px">Customizability</span>
        <p class="mb-20px">Your company has provided consistent, high quality, accounting support during the business growth.</p>
        <div class="mt-5px d-flex align-items-center">
        <img class="rounded-circle w-90px h-90px me-20px" src="images/avtar-03.jpg" alt="" data-no-retina="">
        <div class="d-inline-block align-middle">
        <div class="text-dark-gray fw-500 alt-font">Rosald smith</div>
        <div class="lh-20 fs-16">Aamazon Tech</div>
        </div>
        </div>
        </div>
        </div>
        
        
        <div class="swiper-slide review-style-04 swiper-slide-active" style="width: 445.75px; margin-right: 30px;" role="group" aria-label="4 / 8">
        <div class="d-flex justify-content-center h-100 flex-column bg-white border-radius-6px p-15 xl-p-12 box-shadow-extra-large">
        <div class="review-star-icon fs-18 lh-30">
        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
        </div>
        <span class="alt-font fw-500 fs-19 text-dark-gray mb-10px">Premium quality</span>
        <p class="mb-20px">Thank you for providing professional and value-added service that has exceeded our expectations.</p>
        <div class="mt-5px d-flex align-items-center">
        <img class="rounded-circle w-90px h-90px me-20px" src="images/avtar-04.jpg" alt="" data-no-retina="">
        <div class="d-inline-block align-middle">
        <div class="text-dark-gray fw-500 alt-font">Den viliamson</div>
        <div class="lh-20 fs-16">Apple London</div>
        </div>
        </div>
        </div>
        </div>
        
        
        <div class="swiper-slide review-style-04 swiper-slide-next" style="width: 445.75px; margin-right: 30px;" role="group" aria-label="5 / 8">
        <div class="d-flex justify-content-center h-100 flex-column bg-white border-radius-6px p-15 xl-p-12 box-shadow-extra-large">
        <div class="review-star-icon fs-18 lh-30">
        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
        </div>
        <span class="alt-font fw-500 fs-19 text-dark-gray mb-10px">Code quality</span>
        <p class="mb-20px">A friend referred your company to me as one that would experience and value into an affordable.</p>
        <div class="mt-5px d-flex align-items-center">
        <img class="rounded-circle w-90px h-90px me-20px" src="images/avtar-05.jpg" alt="" data-no-retina="">
        <div class="d-inline-block align-middle">
        <div class="text-dark-gray fw-500 alt-font">Andy glamere</div>
        <div class="lh-20 fs-16">Microsoft Corpo</div>
        </div>
        </div>
        </div>
        </div>
        
        
        <div class="swiper-slide review-style-04" style="width: 445.75px; margin-right: 30px;" role="group" aria-label="6 / 8">
        <div class="d-flex justify-content-center h-100 flex-column bg-white border-radius-6px p-15 xl-p-12 box-shadow-extra-large">
        <div class="review-star-icon fs-18 lh-30">
        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
        </div>
        <span class="alt-font fw-500 fs-19 text-dark-gray mb-10px">Creative evolution</span>
        <p class="mb-20px">Thank you for providing professional and value-added service that has exceeded our expectations.</p>
        <div class="mt-5px d-flex align-items-center">
        <img class="rounded-circle w-90px h-90px me-20px" src="images/avtar-06.jpg" alt="" data-no-retina="">
        <div class="d-inline-block align-middle">
        <div class="text-dark-gray fw-500 alt-font">Jacob Kalling</div>
        <div class="lh-20 fs-16">Google Lens</div>
        </div>
        </div>
        </div>
        </div>
        
        
        <div class="swiper-slide review-style-04" style="width: 445.75px; margin-right: 30px;" role="group" aria-label="7 / 8">
        <div class="d-flex justify-content-center h-100 flex-column bg-white border-radius-6px p-15 xl-p-12 box-shadow-extra-large">
        <div class="review-star-icon fs-18 lh-30">
        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
        </div>
        <span class="alt-font fw-500 fs-19 text-dark-gray mb-10px">Amazing product</span>
        <p class="mb-20px">A friend referred your company to me as one that would combine and value into an affordable.</p>
        <div class="mt-5px d-flex align-items-center">
        <img class="rounded-circle w-90px h-90px me-20px" src="images/avtar-07.jpg" alt="" data-no-retina="">
        <div class="d-inline-block align-middle">
        <div class="text-dark-gray fw-500 alt-font">Alexa Harad</div>
        <div class="lh-20 fs-16">Abobe Design</div>
        </div>
        </div>
        </div>
        </div>
        
        <div class="swiper-slide review-style-04 d-none d-lg-block h-auto" role="group" aria-label="8 / 8" style="width: 445.75px; margin-right: 30px;"></div>
        </div>
        
        
        
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
        </div>
        </div>
        </section>
@endsection
