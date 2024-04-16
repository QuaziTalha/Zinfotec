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
        .list-style {
            list-style: none;
            padding: 0;
        }

        .list-style li {
            display: inline-block;
            /* Display items side by side */
        }
        .social li{
            padding: 0 10px;
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

    <section class="container sproduct my-5 pt-5">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <img class="img-fluid w-100 pd-10" id="MainImg" src="public/images/Products/meiyad.png" alt=""
                     data-main-image>

                <div class="small-img-group pt-1">

                    <div class="small-img-col">
                        <img src="public/images/Products/meiyad-[3].png" width="100%" class="small-img"
                             alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="public/images/Products/meiyad.png" width="100%" class="small-img"
                             alt="">
                    </div>
                    <div class="small-img-col">
                        <img class="small-img" width="100%" src="public/images/Products/meiyad-[2].png"
                             alt="">
                    </div>

                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="single-product-details ">
                    <div class="single-product-title">
                        <h2 class="text-black" style="margin: 30px 0;">Outdoor Meiyad</h2>

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
                        <b style="margin-bottom: 10px ;">Outdoor Fixed LED Video Wall Solutions:</b><br>
                        Enhance your advertising impact and reach a large audience with our outdoor fixed LED video walls. These high-quality LED screens are designed for permanent outdoor installations, making them perfect for mounting on walls, unipoles, pillars, or building facades. With their vibrant visuals, they offer an innovative and effective way to promote your products or broadcast important news.</p>
                    <div class="product-more-option">

                        <div>
                            <div class="flex-container" style="padding-top: 50px;">
                                <h5 class="text-black" style="display: inline-block;float: left;">Share On :</h5>
                                <ul class="social-profile style1 list-style social" style="display: inline-block;float: right;">
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

    <section class="pt-0 ps-6 pe-6 lg-ps-2 lg-pe-2 sm-ps-0 sm-pe-0 padding-xl">
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
                                        <img src="{{ url('public/images/Products/Outdoor_HRL-P5.png') }}" alt=""
                                            data-no-retina="">
                                        <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                    </a>
                                    <div class="shop-buttons-wrap">
                                        <a  href="{{ url('outdoor_P5') }}"
                                            class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                            <span
                                                class="quick-view-text button-text">View More</span>
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
                                    <a href="#" class="alt-font text-dark-gray fs-19 fw-500">HRL P5</a>
                                    
                                </div>
                            </div>
                        </li>


                       
                        
                     
                        <li class="grid-item"
                            style="position: absolute; left: 24.9997%; top: 0px; transition: none 0s ease 0s; transform: translate3d(0px, 0px, 0px);">
                            <div class="shop-box mb-10px">
                                <div class="shop-image mb-20px">
                                    <a >
                                        <img src="{{ url('public/images/Products/Outdoor_LLRP10.png') }}" alt=""
                                            data-no-retina="">
                                        <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                    </a>
                                        <div class="shop-buttons-wrap">
                                            <a href="{{ url('outdoor_LLRP10') }}"
                                                class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                                <span
                                                    class="quick-view-text button-text">View More</span>
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
                                    <a href="#" class="alt-font text-dark-gray fs-19 fw-500">LLR P10</a>
                                    
                                </div>
                            </div>
                        </li>

                        <li class="grid-item"
                            style="position: absolute; left: 24.9997%; top: 0px; transition: none 0s ease 0s; transform: translate3d(0px, 0px, 0px);">
                            <div class="shop-box mb-10px">
                                <div class="shop-image mb-20px">
                                    <a>
                                        <img src="{{ url('public/images/Products/Outdoor_R101R[1].png') }}" alt=""
                                            data-no-retina="">
                                        <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                    </a>
                                    <div class="shop-buttons-wrap">
                                        <a  href="{{ url('outdoor_R1011R') }}"
                                            class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                            <span
                                                class="quick-view-text button-text">View More</span>
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
                                    <a href="#" class="alt-font text-dark-gray fs-19 fw-500">R101R</a>
                                    
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

@endsection
