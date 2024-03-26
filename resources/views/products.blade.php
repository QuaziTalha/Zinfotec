@extends('layout')
@section('content')

<style>
   
    .gallery {
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
    .btn{
        border-radius: 25px;
    }
</style>

<section class="top-space-margin page-title-big-typography cover-background magic-cursor round-cursor"
        style="background-image: url({{ url('public/images/demo-accounting-bg.jpg') }})">
    <div class="container" >
        <div class="row extra-very-small-screen align-items-center">
            <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateX&quot;: [-30, 0], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <h1 class="mb-20px text-white text-shadow-medium"><span
                            class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span></h1>
                <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0">Our Product's
                </h2>
            </div>
        </div>
    </div>
</section>


<section class="pt-0 ps-6 pe-6 lg-ps-2 lg-pe-2 sm-ps-0 sm-pe-0 padding-xl">
    <div class="container-fluid ">
    <div class="row flex-row-reverse">
    <div class="col-xxl-12 col-lg-9 ps-5 md-ps-15px md-mb-60px ">
    <ul class="shop-modern shop-wrapper grid grid-4col xl-grid-3col sm-grid-2col xs-grid-1col gutter-extra-large text-center appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [-15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 300, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }" style="position: relative; height: 1800.05px;">
    <li class="grid-sizer"></li>
    
    <li class="grid-item" style="position: absolute; left: 0%; top: 0px; transition: none 0s ease 0s;">
    <div class="shop-box mb-10px">
    <div class="shop-image mb-20px">
    <a href="#">
    <img src="{{ url('public/images/demo-accounting-img-01.jpg') }}" alt="" data-no-retina="">
    <span class="lable new">New</span>
    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
    </a>
    <div class="shop-buttons-wrap">
    <a href="#" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
    <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
    </a>
    </div>
    <div class="shop-hover d-flex justify-content-center">
    <ul>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
    </li>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Quick shop" data-bs-original-title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
    </li>
    </ul>
    </div>
    </div>
    <div class="shop-footer text-center">
    <a href="#" class="alt-font text-dark-gray fs-19 fw-500">Textured sweater</a>
    <div class="price lh-22 fs-16"><del>$200.00</del>$189.00</div>
    </div>
    </div>
    </li>
    
    
    <li class="grid-item" style="position: absolute; left: 24.9997%; top: 0px; transition: none 0s ease 0s; transform: translate3d(0px, 0px, 0px);">
    <div class="shop-box mb-10px">
    <div class="shop-image mb-20px">
    <a href="#">
    <img src="{{ url('public/images/demo-accounting-img-01.jpg') }}" alt="" data-no-retina="">
    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
    </a>
    <div class="shop-buttons-wrap">
    <a href="#" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
    <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
    </a>
    </div>
    <div class="shop-hover d-flex justify-content-center">
    <ul>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
    </li>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Quick shop" data-bs-original-title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
    </li>
    </ul>
    </div>
    </div>
    <div class="shop-footer text-center">
    <a href="#" class="alt-font text-dark-gray fs-19 fw-500">Traveller shirt</a>
    <div class="price lh-22 fs-16"><del>$350.00</del>$289.00</div>
    </div>
    </div>
    </li>
    
    
    <li class="grid-item" style="position: absolute; left: 49.9993%; top: 0px; transition: none 0s ease 0s; transform: translate3d(0px, 0px, 0px);">
    <div class="shop-box mb-10px">
    <div class="shop-image mb-20px">
    <a href="#">
    <img src="{{ url('public/images/demo-accounting-img-01.jpg') }}" alt="" data-no-retina="">
    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
    </a>
    <div class="shop-buttons-wrap">
    <a href="#" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
    <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
    </a>
    </div>
    <div class="shop-hover d-flex justify-content-center">
    <ul>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
    </li>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Quick shop" data-bs-original-title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
    </li>
    </ul>
    </div>
    </div>
    <div class="shop-footer text-center">
    <a href="#" class="alt-font text-dark-gray fs-19 fw-500">Crewneck sweatshirt</a>
    <div class="price lh-22 fs-16"><del>$220.00</del>$199.00</div>
    </div>
    </div>
    </li>
    
    
    <li class="grid-item" style="position: absolute; left: 74.999%; top: 0px; transition: none 0s ease 0s; transform: translate3d(-0.0019999px, 0px, 0px);">
    <div class="shop-box mb-10px">
    <div class="shop-image mb-20px">
    <a href="#">
    <img src="{{ url('public/images/demo-accounting-img-01.jpg') }}" alt="" data-no-retina="">
    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
    </a>
    <div class="shop-buttons-wrap">
    <a href="#" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
    <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
    </a>
    </div>
    <div class="shop-hover d-flex justify-content-center">
    <ul>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
    </li>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Quick shop" data-bs-original-title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
    </li>
    </ul>
    </div>
    </div>
    <div class="shop-footer text-center">
    <a href="#" class="alt-font text-dark-gray fs-19 fw-500">Skinny trousers</a>
    <div class="price lh-22 fs-16"><del>$300.00</del>$259.00</div>
    </div>
    </div>
    </li>
    
    
    <li class="grid-item" style="position: absolute; left: 0%; top: 600.016px; transition-behavior: normal; transition-timing-function: ease;">
    <div class="shop-box mb-10px">
    <div class="shop-image mb-20px">
    <a href="#">
    <img src="{{ url('public/images/demo-accounting-img-01.jpg') }}" alt="" data-no-retina="">
    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
    </a>
    <div class="shop-buttons-wrap">
    <a href="#" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
    <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
    </a>
    </div>
    <div class="shop-hover d-flex justify-content-center">
    <ul>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
    </li>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Quick shop" data-bs-original-title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
    </li>
    </ul>
    </div>
    </div>
    <div class="shop-footer text-center">
    <a href="#" class="alt-font text-dark-gray fs-19 fw-500">Sleeve sweater</a>
    <div class="price lh-22 fs-16"><del>$250.00</del>$239.00</div>
    </div>
    </div>
    </li>
    
    
    <li class="grid-item" style="position: absolute; left: 24.9997%; top: 499.656px; transition: none 0s ease 0s; transform: translate3d(0px, 100.36px, 0px);">
    <div class="shop-box mb-10px">
    <div class="shop-image mb-20px">
    <a href="#">
    <img src="{{ url('public/images/demo-accounting-img-01.jpg') }}" alt="" data-no-retina="">
    <span class="lable hot">Hot</span>
    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
    </a>
    <div class="shop-buttons-wrap">
    <a href="#" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
    <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
    </a>
    </div>
    <div class="shop-hover d-flex justify-content-center">
    <ul>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
    </li>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Quick shop" data-bs-original-title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
    </li>
    </ul>
    </div>
    </div>
    <div class="shop-footer text-center">
    <a href="#" class="alt-font text-dark-gray fs-19 fw-500">Pocket sweatshirt</a>
    <div class="price lh-22 fs-16"><del>$200.00</del>$189.00</div>
    </div>
    </div>
    </li>
    
    
    <li class="grid-item" style="position: absolute; left: 49.9993%; top: 499.656px; transition: none 0s ease 0s; transform: translate3d(0px, 100.36px, 0px);">
    <div class="shop-box mb-10px">
    <div class="shop-image mb-20px">
    <a href="#">
    <img src="{{ url('public/images/demo-accounting-img-01.jpg') }}" alt="" data-no-retina="">
    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
    </a>
    <div class="shop-buttons-wrap">
    <a href="#" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
    <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
    </a>
    </div>
    <div class="shop-hover d-flex justify-content-center">
    <ul>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
    </li>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Quick shop" data-bs-original-title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
    </li>
    </ul>
    </div>
    </div>
    <div class="shop-footer text-center">
    <a href="#" class="alt-font text-dark-gray fs-19 fw-500">Cotton sweater</a>
    <div class="price lh-22 fs-16"><del>$150.00</del>$129.00</div>
    </div>
    </div>
    </li>
    
    
    <li class="grid-item" style="position: absolute; left: 74.999%; top: 499.656px; transition: none 0s ease 0s; transform: translate3d(-0.0019999px, 100.36px, 0px);">
    <div class="shop-box mb-10px">
    <div class="shop-image mb-20px">
    <a href="#">
    <img src="{{ url('public/images/demo-accounting-img-01.jpg') }}" alt="" data-no-retina="">
    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
    </a>
    <div class="shop-buttons-wrap">
    <a href="#" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
    <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
    </a>
    </div>
    <div class="shop-hover d-flex justify-content-center">
    <ul>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
    </li>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Quick shop" data-bs-original-title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
    </li>
    </ul>
    </div>
    </div>
    <div class="shop-footer text-center">
    <a href="#" class="alt-font text-dark-gray fs-19 fw-500">Texture regular</a>
    <div class="price lh-22 fs-16"><del>$170.00</del>$120.00</div>
    </div>
    </div>
    </li>
    
    
    <li class="grid-item" style="position: absolute; left: 0%; top: 1200.03px; transition-behavior: normal; transition-timing-function: ease;">
    <div class="shop-box mb-10px">
    <div class="shop-image mb-20px">
    <a href="#">
    <img src="{{ url('public/images/demo-accounting-img-01.jpg') }}" alt="" data-no-retina="">
    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
    </a>
    <div class="shop-buttons-wrap">
    <a href="#" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
    <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
    </a>
    </div>
    <div class="shop-hover d-flex justify-content-center">
    <ul>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
    </li>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Quick shop" data-bs-original-title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
    </li>
    </ul>
    </div>
    </div>
    <div class="shop-footer text-center">
    <a href="#" class="alt-font text-dark-gray fs-19 fw-500">Sequined dress</a>
    <div class="price lh-22 fs-16"><del>$190.00</del>$150.00</div>
    </div>
    </div>
    </li>
    
    
    <li class="grid-item" style="position: absolute; left: 24.9997%; top: 999.312px; transition: none 0s ease 0s; transform: translate3d(0px, 200.72px, 0px);">
    <div class="shop-box mb-10px">
    <div class="shop-image mb-20px">
    <a href="#">
    <img src="{{ url('public/images/demo-accounting-img-01.jpg') }}" alt="" data-no-retina="">
    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
    </a>
    <div class="shop-buttons-wrap">
    <a href="#" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
    <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
    </a>
    </div>
    <div class="shop-hover d-flex justify-content-center">
    <ul>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
    </li>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Quick shop" data-bs-original-title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
    </li>
    </ul>
    </div>
    </div>
    <div class="shop-footer text-center">
    <a href="#" class="alt-font text-dark-gray fs-19 fw-500">Bermuda shorts</a>
    <div class="price lh-22 fs-16"><del>$120.00</del>$100.00</div>
    </div>
    </div>
    </li>
    
    
    <li class="grid-item" style="position: absolute; left: 49.9993%; top: 999.312px; transition: none 0s ease 0s; transform: translate3d(0px, 200.72px, 0px);">
    <div class="shop-box mb-10px">
    <div class="shop-image mb-20px">
    <a href="#">
    <img src="{{ url('public/images/demo-accounting-img-01.jpg') }}" alt="" data-no-retina="">
    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
    </a>
    <div class="shop-buttons-wrap">
    <a href="#" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
    <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
    </a>
    </div>
    <div class="shop-hover d-flex justify-content-center">
    <ul>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
    </li>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Quick shop" data-bs-original-title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
    </li>
    </ul>
    </div>
    </div>
    <div class="shop-footer text-center">
    <a href="#" class="alt-font text-dark-gray fs-19 fw-500">Traveller shirt</a>
    <div class="price lh-22 fs-16"><del>$300.00</del>$259.00</div>
    </div>
    </div>
    </li>
    
    
    <li class="grid-item" style="position: absolute; left: 74.999%; top: 999.312px; transition: none 0s ease 0s; transform: translate3d(-0.0019999px, 200.72px, 0px);">
    <div class="shop-box mb-10px">
    <div class="shop-image mb-20px">
    <a href="#">
    <img src="{{ url('public/images/demo-accounting-img-01.jpg') }}" alt="" data-no-retina="">
    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
    </a>
    <div class="shop-buttons-wrap">
    <a href="#" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
    <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
    </a>
    </div>
    <div class="shop-hover d-flex justify-content-center">
    <ul>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
    </li>
    <li>
    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Quick shop" data-bs-original-title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
    </li>
    </ul>
    </div>
    </div>
    <div class="shop-footer text-center">
    <a href="#" class="alt-font text-dark-gray fs-19 fw-500">Textured sweater</a>
    <div class="price lh-22 fs-16"><del>$300.00</del>$259.00</div>
    </div>
    </div>
    </li>
    
    </ul>
    <div class="w-100 d-flex mt-4 justify-content-center md-mt-30px">
    <ul class="pagination pagination-style-01 fs-13 fw-500 mb-0">
    <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-left fs-18 d-xs-none"></i></a></li>
    <li class="page-item"><a class="page-link" href="#">01</a></li>
    <li class="page-item active"><a class="page-link" href="#">02</a></li>
    <li class="page-item"><a class="page-link" href="#">03</a></li>
    <li class="page-item"><a class="page-link" href="#">04</a></li>
    <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-right fs-18 d-xs-none"></i></a></li>
    </ul>
    </div>
    </div>
    <div class="col-xxl-2 col-lg-3 shop-sidebar appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [-15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 300, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }" style="
        display: none;
    ">
    <div class="mb-30px" style="">
    <span class="alt-font fw-500 fs-19 text-dark-gray d-block mb-10px">Filter by categories</span>
    <ul class="shop-filter category-filter fs-16">
    <li><a href="#"><span class="product-cb product-category-cb"></span>Jeans</a><span class="item-qty">22</span></li>
    <li><a href="#"><span class="product-cb product-category-cb"></span>Trousers</a><span class="item-qty">28</span></li>
    <li><a href="#"><span class="product-cb product-category-cb"></span>Swimwear</a><span class="item-qty">36</span></li>
    <li><a href="#"><span class="product-cb product-category-cb"></span>Casual shirts</a><span class="item-qty">24</span></li>
    <li><a href="#"><span class="product-cb product-category-cb"></span>Winter jackets</a><span class="item-qty">26</span></li>
    <li><a href="#"><span class="product-cb product-category-cb"></span>Leggings</a><span class="item-qty">33</span></li>
    <li><a href="#"><span class="product-cb product-category-cb"></span>Dupattas</a><span class="item-qty">22</span></li>
    </ul>
    </div>
    <div class="mb-30px" style="">
    <span class="alt-font fw-500 fs-19 text-dark-gray d-block mb-10px">Filter by color</span>
    <ul class="shop-filter color-filter fs-16">
    <li><a href="#"><span class="product-cb product-color-cb" style="background-color:#232323"></span>Black</a><span class="item-qty">05</span></li>
    <li><a href="#"><span class="product-cb product-color-cb" style="background-color:#5881bf"></span>Blue</a><span class="item-qty">24</span></li>
    <li><a href="#"><span class="product-cb product-color-cb" style="background-color:#9f684f"></span>Brown</a><span class="item-qty">32</span></li>
    <li><a href="#"><span class="product-cb product-color-cb" style="background-color:#87a968"></span>Green</a><span class="item-qty">22</span></li>
    <li><a href="#"><span class="product-cb product-color-cb" style="background-color:#b14141"></span>Maroon</a><span class="item-qty">09</span></li>
    <li><a href="#"><span class="product-cb product-color-cb" style="background-color:#d9653e"></span>Orange</a><span class="item-qty">06</span></li>
    </ul>
    </div>
    <div class="mb-30px" style="">
    <span class="alt-font fw-500 fs-19 text-dark-gray d-block mb-10px">Filter by size</span>
    <ul class="shop-filter price-filter fs-16">
    <li><a href="#"><span class="product-cb product-category-cb"></span>S</a><span class="item-qty">08</span></li>
    <li><a href="#"><span class="product-cb product-category-cb"></span>M</a><span class="item-qty">05</span></li>
    <li><a href="#"><span class="product-cb product-category-cb"></span>L</a><span class="item-qty">25</span></li>
    <li><a href="#"><span class="product-cb product-category-cb"></span>XL</a><span class="item-qty">18</span></li>
    <li><a href="#"><span class="product-cb product-category-cb"></span>XXL</a><span class="item-qty">36</span></li>
    </ul>
    </div>
    <div class="mb-30px" style="">
    <div class="d-flex align-items-center mb-20px">
    <span class="alt-font fw-500 fs-19 text-dark-gray">New arrivals</span>
    <div class="d-flex ms-auto">
    
    <div class="slider-one-slide-prev-1 icon-very-small swiper-button-prev slider-navigation-style-08 me-5px" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-95d1dd5a47ff96c6"><i class="fa-solid fa-arrow-left text-dark-gray"></i></div>
    <div class="slider-one-slide-next-1 icon-very-small swiper-button-next slider-navigation-style-08 ms-5px" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-95d1dd5a47ff96c6"><i class="fa-solid fa-arrow-right text-dark-gray"></i></div>
    
    </div>
    </div>
    <div class="swiper slider-one-slide swiper-initialized swiper-horizontal swiper-backface-hidden" data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;loop&quot;: true, &quot;autoplay&quot;: { &quot;delay&quot;: 5000, &quot;disableOnInteraction&quot;: false }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-one-slide-next-1&quot;, &quot;prevEl&quot;: &quot;.slider-one-slide-prev-1&quot; }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;effect&quot;: &quot;slide&quot; }">
    <div class="swiper-wrapper" id="swiper-wrapper-95d1dd5a47ff96c6" aria-live="off" style="transition-duration: 300ms; transform: translate3d(-249px, 0px, 0px);">
    
    
    
    
    
    
    <div class="swiper-slide swiper-slide-next swiper-slide-prev" role="group" aria-label="2 / 2" style="width: 249px;" data-swiper-slide-index="1">
    <div class="shop-filter new-arribals">
    <div class="d-flex align-items-center mb-20px">
    <figure class="mb-0">
    <a href="#">
    <img class="border-radius-4px w-80px" src="{{ url('public/images/demo-accounting-img-01.jpg') }}" alt="" data-no-retina="">
    </a>
    </figure>
    <div class="col ps-25px">
    <a href="#" class="text-dark-gray alt-font fw-500 d-inline-block lh-normal">Skinny trousers</a>
    <div class="fs-15 lh-normal"><del class="me-5px">$15.00</del>$10.00</div>
    </div>
    </div>
    <div class="d-flex align-items-center mb-20px">
    <figure class="mb-0">
    <a href="#">
    <img class="border-radius-4px w-80px" src="{{ url('public/images/demo-accounting-img-01.jpg') }}" alt="" data-no-retina="">
    </a>
    </figure>
    <div class="col ps-25px">
    <a href="#" class="text-dark-gray alt-font fw-500 d-inline-block lh-normal">Sleeve sweater</a>
    <div class="fs-15 lh-normal"><del class="me-5px">$35.00</del>$30.00</div>
    </div>
    </div>
    <div class="d-flex align-items-center">
    <figure class="mb-0">
    <a href="#">
    <img class="border-radius-4px w-80px" src="{{ url('public/images/demo-accounting-img-01.jpg') }}" alt="" data-no-retina="">
    </a>
    </figure>
    <div class="col ps-25px">
    <a href="#" class="text-dark-gray alt-font fw-500 d-inline-block lh-normal">Pocket white</a>
    <div class="fs-15 lh-normal"><del class="me-5px">$20.00</del>$15.00</div>
    </div>
    </div>
    </div>
    </div><div class="swiper-slide swiper-slide-active" style="width: 249px;" role="group" aria-label="1 / 2" data-swiper-slide-index="0">
    <div class="shop-filter new-arribals">
    <div class="d-flex align-items-center mb-20px">
    <figure class="mb-0">
    <a href="#">
    <img class="border-radius-4px w-80px" src="{{ url('public/images/demo-accounting-img-01.jpg') }}" alt="" data-no-retina="">
    </a>
    </figure>
    <div class="col ps-25px">
    <a href="#" class="text-dark-gray alt-font fw-500 d-inline-block lh-normal">Textured sweater</a>
    <div class="fs-15 lh-normal"><del class="me-5px">$30.00</del>$23.00</div>
    </div>
    </div>
    <div class="d-flex align-items-center mb-20px">
    <figure class="mb-0">
    <a href="#">
    <img class="border-radius-4px w-80px" src="{{ url('public/images/demo-accounting-img-01.jpg') }}" alt="" data-no-retina="">
    </a>
    </figure>
    <div class="col ps-25px">
    <a href="#" class="text-dark-gray alt-font fw-500 d-inline-block lh-normal">Traveller shirt</a>
    <div class="fs-15 lh-normal"><del class="me-5px">$50.00</del>$43.00</div>
    </div>
    </div>
    <div class="d-flex align-items-center">
    <figure class="mb-0">
    <a href="#">
    <img class="border-radius-4px w-80px" src="{{ url('public/images/demo-accounting-img-01.jpg') }}" alt="" data-no-retina="">
    </a>
    </figure>
    <div class="col ps-25px">
    <a href="#" class="text-dark-gray alt-font fw-500 d-inline-block lh-normal">Crewneck tshirt</a>
    <div class="fs-15 lh-normal"><del class="me-5px">$20.00</del>$15.00</div>
    </div>
    </div>
    </div>
    </div></div>
    
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </div>
    <div style="">
    <span class="alt-font fw-500 fs-19 text-dark-gray d-block mb-10px">Filter by tags</span>
    <div class="shop-filter tag-cloud fs-16">
    <a href="#">Coats</a>
    <a href="#">Cotton</a>
    <a href="#">Dresses</a>
    <a href="#">Jackets</a>
    <a href="#">Polyester</a>
    <a href="#">Printed</a>
    <a href="#">Shirts</a>
    <a href="#">Shorts</a>
    <a href="#">Tops</a>
    </div>
    </div>
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
