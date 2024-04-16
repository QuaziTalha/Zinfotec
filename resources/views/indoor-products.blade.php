@extends('layout')
@section('content')
    <style>
        /* .gallery {
            margin: 1%;

            font-family: sans-serif;
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            justify-content: center;
            align-items: center;
        }

        .content {
            box-sizing: border-box;
            float: left;
            text-align: center;
            border-radius: 20px;
            cursor: pointer;
            padding-top: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            transition: .4s;
            background: #f2f2f2;
            overflow: hidden;
            position: relative;
            width: 380px;
            height: 450px;
            margin: 25px;
        }

        .content img {
            width: 100%;
            height: auto;
            text-align: center;
            display: block;
        }

        .content:hover {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
            transform: translate(0px, -8px);
        }

        .additional-content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.4s;
        }

        .content:hover .additional-content {
            opacity: 1;

        }

        .additional-content h3,
        .additional-content p,
        .additional-content .buy,
        .additional-content .price {
            color: white;
            text-align: center;
            margin: 0;
        }

        .additional-content h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .additional-content p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .additional-content .price {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .additional-content .buy {
            background-color: #0090d2;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }

        .btn {
            border-radius: 25px;
        } */
        .product_container {
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }
    </style>

<section class="top-space-margin page-title-big-typography cover-background magic-cursor round-cursor"
style="background-image: url({{ url('public/images/background/sign.jpg') }})">>
<div class="container">
    <div class="row extra-very-small-screen align-items-center">
        <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small"
            data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateX&quot;: [-30, 0], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
            <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium"><span
                    class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>Explore
                </h1>
            <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0">Products</h2>
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


                        

                        <li class="grid-item"
                            style="position: absolute; left: 24.9997%; top: 0px; transition: none 0s ease 0s; transform: translate3d(0px, 0px, 0px);">
                            <div class="shop-box mb-10px">
                                <div class="shop-image mb-20px">
                                    <a >
                                        <img src="{{ url('public/images/Products/Indoor_P2.5[1].png') }}" alt=""
                                            data-no-retina="">
                                        <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                    </a>
                                    <div class="shop-buttons-wrap">
                                        <a href="{{ url('indoor_P2-5') }}"
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
                                    <a href="#" class="alt-font text-dark-gray fs-19 fw-500">Indoor P2.5</a>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="grid-item"
                            style="position: absolute; left: 24.9997%; top: 0px; transition: none 0s ease 0s; transform: translate3d(0px, 0px, 0px);">
                            <div class="shop-box mb-10px">
                                <div class="shop-image mb-20px">
                                    <a >
                                        <img src="{{ url('public/images/Products/P6.png') }}" alt=""
                                            data-no-retina="">
                                        <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                    </a>
                                    <div class="shop-buttons-wrap">
                                        <a href="{{ url('indoor_P6') }}"
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
                                    <a href="#" class="alt-font text-dark-gray fs-19 fw-500">Indoor P6</a>
                                    
                                </div>
                            </div>
                        </li>
                        
                     

                        
           

                    </ul>
                  

                </div>
            </div>
        </div>
    </section>










    {{-- 
<section style="margin:0%; font-family:sans-serif;background: rgba(255, 255, 255, 0.822);">
    <div class="gallery" style="border:2px solid  #023047;">
        <div class="content">
            <img src="public/images/demo-accounting-img-01.jpg"  alt="">
            <div class="additional-content">
                <h3>Headphones</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, pariatur voluptatum.</p>
                <p class="price">$100.00</p>
                <button class=" btn btn-info">Buy Now</button>
            </div>
        </div>
        <div class="content">
            <img src="public/images/demo-accounting-img-02.jpg"  alt="">
            <div class="additional-content">
                <h3>Headphones</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, pariatur voluptatum.</p>
                <p class="price">$100.00</p>
                <button class=" btn btn-info">Buy Now</button>
            </div>
        </div>
        <div class="content">
            <img src="public/images/demo-accounting-img-03.jpg"  alt="">
            <div class="additional-content">
                <h3>Headphones</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, pariatur voluptatum.</p>
                <p class="price">$100.00</p>
                <button class=" btn btn-info">Buy Now</button>
            </div>
        </div>
        <div class="content">
            <img src="public/images/demo-accounting-img-01.jpg"  alt="">
            <div class="additional-content">
                <h3>Headphones</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, pariatur voluptatum.</p>
                <p class="price">$100.00</p>
                <button class=" btn btn-info">Buy Now</button>
            </div>
        </div>
        <div class="content">
            <img src="public/images/demo-accounting-img-02.jpg"  alt="">
            <div class="additional-content">
                <h3>Headphones</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, pariatur voluptatum.</p>
                <p class="price">$100.00</p>
                <button class=" btn btn-info">Buy Now</button>
            </div>
        </div>
        <div class="content">
            <img src="public/images/demo-accounting-img-03.jpg"  alt="">
            <div class="additional-content">
                <h3>Headphones</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, pariatur voluptatum.</p>
                <p class="price">$100.00</p>
                <button class=" btn btn-info">Buy Now</button>
            </div>
        </div>
        
    </div>
</section> --}}
@endsection
