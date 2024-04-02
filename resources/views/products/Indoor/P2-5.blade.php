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
        .big-img  {
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
        .border_set{
            border: 5px solid #02283a;
            align-content: center;
            text-align: center;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }
    </style>

    <section class="container sproduct my-5 pt-5">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <img class="img-fluid w-100 pd-10" id="MainImg" src="public/images/Products/Indoor_P2.5.png" alt=""
                     data-main-image>

                <div class="small-img-group pt-1">

                    <div class="small-img-col">
                        <img src="public/images/Products/Indoor_P2.5-[3].png" width="100%" class="small-img"
                             alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="public/images/Products/Indoor_P2.5[4].png" width="100%" class="small-img"
                             alt="">
                    </div>
                    <div class="small-img-col">
                        <img class="small-img" width="100%" src="public/images/Products/Indoor_P2.5.png"
                             alt="">
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 border_set">
                <h3 class="py-4 text-black">Indoor P2.5</h3>
                <h2 class="">$200</h2>
                <h4 class="my-5 text-black">Key Features</h4>
                <ul class=" list-style mb-0">
                    <li>
                        <i class="flaticon-checkbox"></i>
                        <b>Superior Picture Quality:</b><br/>
                         Our Indoor LED Video Walls are designed to showcase vibrant and sharp visuals, providing an impressive display that captivates viewers. Enjoy stunning image clarity and color reproduction with our advanced LED technology.
                      </li>
                      <li>
                        <i class="flaticon-checkbox"></i>
                        <b>Lightweight and Easy to Install:</b><br/>
                         Our Indoor LED Video Walls are lightweight and feature a user-friendly design, making them easy to install and dismantle. This convenience sets them apart from other display screens available in the market.
                      </li>
                      <li>
                        <i class="flaticon-checkbox"></i>
                        <b>Durable and Reliable:</b><br/>
                        Manufactured using high-grade materials, our LED Video Walls are built to last. They are appreciated by clients nationwide for their reliability and durability.
                        Cost-Effective: We offer our Indoor LED Video Walls at highly competitive rates without compromising on performance or service life. Experience exceptional value for your investment.
                      </li>
                      <li>
                        <i class="flaticon-checkbox"></i>
                        <b>Customizable Options:</b><br/>
                         Choose from our range of indoor LED display screens, indoor fixed LED displays, and indoor LED video walls to find the perfect solution for your specific needs. We offer a wide range of options, including P-2, P-2.5, P-3, P-4, P-5, and P-6 models.
                      </li>
                      <li>
                        <i class="flaticon-checkbox"></i>
                        <b>Rental LED Displays:</b><br/>
                         If you require indoor rental LED displays for temporary installations, we have you covered. Our rental solutions are flexible and can be tailored to your event requirements.
                         Experience the difference that our indoor LED video walls can make in enhancing your visual presentations. Contact us today to explore the possibilities and discuss your specific requirements. Our team is ready to assist you in selecting the ideal indoor LED video wall solution for your needs.
                      </li>
                </ul>
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
