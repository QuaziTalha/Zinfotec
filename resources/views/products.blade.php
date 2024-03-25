@extends('layout')
@section('content')

<style>
    /* Your external CSS styles go here */
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
        overflow: hidden; /* Hide overflow to prevent content from appearing initially */
        position: relative; /* Required for absolute positioning of additional content */
        width: 380px; /* Set width to match image width */
        height: 450px; /* Set height to match image height */
        margin: 25px; /* Adjust margin to create space around the content */
    }
    
    .content img {
        width: 100%; /* Set image width to fill the container */
        height: auto; /* Maintain aspect ratio */
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
        background: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        opacity: 0; /* Initially hidden */
        transition: opacity 0.4s;
    }
    
    .content:hover .additional-content {
        opacity: 1; /* Show on hover */
        
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
        background-color: #2183a2;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 18px;
    }
</style>

<section class="top-space-margin page-title-big-typography cover-background magic-cursor round-cursor"
        style="background-image: url(public/images/demo-accounting-company-title-bg.jpg)">
    <div class="container" >
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

<section style="margin:0%; font-family:sans-serif;background: #023047;">
    <div class="gallery" style="border:2px solid wheat">
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
</section>
@endsection
