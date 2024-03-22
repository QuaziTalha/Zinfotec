@extends('layout')
@section('content')
    <section class="top-space-margin page-title-big-typography cover-background magic-cursor round-cursor"
        style="background-image: url(public/images/demo-accounting-company-title-bg.jpg)">
        <div class="container">
            <div class="row extra-very-small-screen align-items-center">
                <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateX&quot;: [-30, 0], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h1 class="mb-20px text-white text-shadow-medium"><span
                            class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>Our
                        company</h1>
                    <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0">About crafto accounto</h2>
                </div>
            </div>
        </div>
    </section>


{{--     <section>
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-7 col-md-8 col-sm-9 text-center"
                    data-anime="{ &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <span>SPECIFICATION</span>
                    <h3 class="text-dark-gray fw-700 ls-minus-2px">Product Specification</h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [-30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

                <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                    <div
                        class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                        <div class="feature-box-icon">
                            <a href="demo-accounting-services-details.html"><img
                                    src="public/images/wifi.png" class="h-95px" alt></a>
                        </div>
                        <div class="feature-box-content">
                                <a href="demo-accounting-services-details.html"
                                    class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Wireless</a>
                            <p class="mb-30px">Nisl suscipit adipiscing bibendum est tempus imperdiet nulla malesuada.</p>
                        </div>
                    </div>
                </div>


                <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                    <div
                        class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                        <div class="feature-box-icon">
                            <a href="demo-accounting-services-details.html"><img
                                    src="public/images/headphone.png" class="h-95px" alt></a>
                        </div>
                        <div class="feature-box-content">
                            <a href="demo-accounting-services-details.html"
                                class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Perfect Sound Quality</a>
                            <p class="mb-30px">We combine deep financial expertise with exclusive tools to help the maximize
                                value.</p>
                        </div>
                        <span
                            class="position-absolute box-shadow-large top-25px lg-top-15px right-25px lg-right-15px bg-white border-radius-18px text-dark-gray fs-11 fw-700 text-uppercase ps-15px pe-15px lh-26 ls-minus-05px">New</span>
                    </div>
                </div>


                <div class="col icon-with-text-style-07 transition-inner-all">
                    <div
                        class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                        <div class="feature-box-icon">
                            <a href="demo-accounting-services-details.html"><img
                                    src="public/images/mic.png" class="h-95px" alt></a>
                        </div>
                        <div class="feature-box-content">
                            <a href="demo-accounting-services-details.html"
                                class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Awsome Microphone</a>
                            <p class="mb-30px">Financial services are the economic services provided by the finance
                                industry.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [-30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

                <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                    <div
                        class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                        <div class="feature-box-icon">
                            <a href="demo-accounting-services-details.html"><img
                                    src="public/images/mute.png" class="h-95px" alt></a>
                        </div>
                        <div class="feature-box-content">
                            <a href="demo-accounting-services-details.html"
                                class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Noise Cancelling</a>
                            <p class="mb-30px">An activity or set of activities that can accomplish a specific
                                organizational goal.</p>
                        </div>
                    </div>
                </div>


                <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                    <div
                        class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                        <div class="feature-box-icon">
                            <a href="demo-accounting-services-details.html"><img
                                    src="public/images/control.png" class="h-95px" alt></a>
                        </div>
                        <div class="feature-box-content">
                            <a href="demo-accounting-services-details.html"
                                class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Bluetooth</a>
                            <p class="mb-30px">We combine deep financial expertise with exclusive tools to help the maximize
                                value.</p>
                        </div>
                        <span
                            class="position-absolute box-shadow-large top-25px lg-top-15px right-25px lg-right-15px bg-white border-radius-18px text-dark-gray fs-11 fw-700 text-uppercase ps-15px pe-15px lh-26 ls-minus-05px">New</span>
                    </div>
                </div>


                <div class="col icon-with-text-style-07 transition-inner-all">
                    <div
                        class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                        <div class="feature-box-icon">
                            <a href="demo-accounting-services-details.html"><img
                                    src="public/images/mic.png" class="h-95px" alt></a>
                        </div>
                        <div class="feature-box-content">
                            <a href="demo-accounting-services-details.html"
                                class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Easy To Control</a>
                            <p class="mb-30px">Financial services are the economic services provided by the finance
                                industry.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row"
                data-anime="{ &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <div class="col-12 text-center">
                    <div
                        class="d-inline-block align-middle bg-yellow fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px lh-30 sm-m-5px">
                        Trust</div>
                    <div class="d-inline-block align-middle text-dark-gray fs-19 fw-600 ls-minus-05px">Join the <span
                            class="text-decoration-line-bottom text-dark-gray">10000+ companies</span> trusting crafto
                        accounting.</div>
                </div>
            </div>
        </div>
    </section> --}}
    <section>
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-7 col-md-8 col-sm-9 text-center"
                    data-anime="{ &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <span>SPECIFICATION</span>
                    <h3 class="text-dark-gray fw-700 ls-minus-2px">Product Specification</h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [-30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

                <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                    <div
                        class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                        <div class="feature-box-icon">
                            <a href="demo-accounting-services-details.html"><img
                                src="public/images/Zinfotech.png"     class="h-95px" alt></a>
                        </div>
                        <div class="feature-box-content">
                                <a href="demo-accounting-services-details.html"
                                    class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Zinfotech</a>
                            <p class="mb-30px"> we're not just about providing LED display solutions; we're committed to illuminating your path to success. Here's why you should choose us:
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                    <div
                        class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                        <div class="feature-box-icon">
                            <a href="demo-accounting-services-details.html"><img
                                src="public/images/expertise.png"   class="h-95px" alt></a>
                        </div>
                        <div class="feature-box-content">
                            <a href="demo-accounting-services-details.html"
                                class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Expertise</a>
                            <p class="mb-30px"> With years of industry experience, we bring unparalleled expertise to every project, ensuring superior results.

                            </p>
                        </div>
                        </div>
                </div>


                <div class="col icon-with-text-style-07 transition-inner-all">
                    <div
                        class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                        <div class="feature-box-icon">
                            <a href="demo-accounting-services-details.html"><img
                                src="public/images/Innovation.png"class="h-95px" alt></a>
                        </div>
                        <div class="feature-box-content">
                            <a href="demo-accounting-services-details.html"
                                class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Innovation</a>
                            <p class="mb-30px">We stay ahead of the curve, constantly innovating to offer cutting-edge LED solutions that captivate audiences and drive impact.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [-30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

                <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                    <div
                        class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                        <div class="feature-box-icon">
                            <a href="demo-accounting-services-details.html"><img
                                src="public/images/Customization.png"  class="h-95px" alt></a>
                        </div>
                        <div class="feature-box-content">
                            <a href="demo-accounting-services-details.html"
                                class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Customization</a>
                            <p class="mb-30px">
                                 Your vision is our priority. We tailor our solutions to meet your unique needs, delivering bespoke displays that exceed expectations.
                                </p>
                        </div>
                    </div>
                </div>


                <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                    <div
                        class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                        <div class="feature-box-icon">
                            <a href="demo-accounting-services-details.html"><img
                                src="public/images/Quality.png"    class="h-95px" alt></a>
                        </div>
                        <div class="feature-box-content">
                            <a href="demo-accounting-services-details.html"
                                class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Quality:</a>
                            <p class="mb-30px"> From manufacturing to installation, we uphold the highest standards of quality, guaranteeing reliability and durability in every product.
                            </p>
                        </div>
                        </div>
                </div>


                <div class="col icon-with-text-style-07 transition-inner-all">
                    <div
                        class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                        <div class="feature-box-icon">
                            <a href="demo-accounting-services-details.html"><img
                                src="public/images/Customer Satisfaction.png" class="h-95px" alt></a>
                        </div>
                        <div class="feature-box-content">
                            <a href="demo-accounting-services-details.html"
                                class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Customer Satisfaction:</a>
                            <p class="mb-30px"> Your satisfaction is our ultimate goal. We go above and beyond to ensure a seamless experience, from initial consultation to post-installation support..</p>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>
    </section>


    <section class="pt-0 big-section">
        <div class="container">
            <div class="row align-items-center"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <div class="col-lg-6 position-relative md-mb-14 sm-mb-17 xs-mb-23">
                    <div class="w-70 md-w-75 xs-w-90" data-animation-delay="50" data-shadow-animation="true">
                        <img src="public/images/demo-accounting-company-01.jpg" alt class="border-radius-8px w-100">
                    </div>
                    <div class="w-55 overflow-hidden position-absolute right-15px xs-w-60 bottom-minus-20px"
                        data-shadow-animation="true" data-animation-delay="250"
                        data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                        <img src="public/images/demo-accounting-company-02.jpg" alt
                            class="border-radius-8px w-100 box-shadow-quadruple-large" />
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start">
                    <h3 class="fw-700 text-dark-gray ls-minus-1px">ZinfoTec Technologies PVT. LTD.</h3>
                    <p class="mb-40px xs-mb-30px w-90 lg-w-95 md-w-100">
                        Welcome to <b>ZinfoTec Technologies PVT. LTD.</b>., a leading professional LED display screen development and supply company. With years of experience in this field, we have established ourselves as a trusted name in Maharashtra since our inception in 2014. Our comprehensive infrastructure includes an assembling unit, workshop, dedicated marketing team, and a commitment to providing excellent after-sales support to our valued customers.
                    </p>
                    <div class="row align-items-center mb-30px xs-mb-25px justify-content-center justify-content-lg-start">

                        <div class="col-lg-5 col-md-4 col-sm-5 last-paragraph-no-margin counter-style-04 xs-mb-25px">
                            <h3 class="vertical-counter d-inline-flex fw-700 text-dark-gray mb-0 ls-minus-2px xl-ls-minus-1px"
                                data-text="+" data-to="280"><sup class="text-yellow top-0px me-5px"><i
                                        class="feather icon-feather-users icon-very-medium"></i></sup></h3>
                            <span class="fw-500 text-dark-gray mb-10px d-block ls-minus-05px">Accountant team</span>
                        </div>


                        <div class="col-lg-6 col-md-4 col-sm-5 last-paragraph-no-margin counter-style-04">
                            <h3 class="vertical-counter d-inline-flex fw-700 text-dark-gray mb-0 ls-minus-2px xl-ls-minus-1px"
                                data-text="+" data-to="465"><sup class="text-yellow top-0px me-5px"><i
                                        class="feather icon-feather-briefcase icon-very-medium"></i></sup></h3>
                            <span class="fw-500 text-dark-gray mb-10px d-block ls-minus-05px">Projects completed</span>
                        </div>

                    </div>
                    <a href="demo-accounting-services.html"
                        class="btn btn-large btn-rounded with-rounded btn-base-color btn-round-edge btn-box-shadow">Let's
                        discuss<span class="bg-orient-blue text-white"><i
                                class="feather icon-feather-arrow-right icon-small"></i></span></a>
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


    <section class="bg-very-light-gray overflow-hidden cover-background position-relative overlap-height"
        style="background-image: url(public/images/demo-accounting-company-04.jpg)">
        <div class="container overlap-gap-section">
            <div class="row align-items-center">
                <div class="col-lg-6 md-mb-50px"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h3 class="fw-700 text-dark-gray ls-minus-2px">Leading the Way in Cutting-Edge Solutions, Lighting Up Your Future.
                    </h3>
                    <p class="w-90 lg-w-100">ZinfoTec Technologies PVT. LTD. is a leading force in the LED display industry, specializing in cutting-edge solutions for outdoor and indoor advertising. Established in 2014, we pride ourselves on delivering vibrant, high-quality displays that captivate audiences. Committed to innovation and customer satisfaction, we offer customized LED solutions, ranging from fixed outdoor displays to mobile van advertising, enhancing the visual impact of brands and messages.
                    </p>                        <div class="accordion accordion-style-02 w-90 lg-w-100" id="accordion-style-02"
                        data-active-icon="fa-chevron-up" data-inactive-icon="fa-chevron-down">

                            <div class="accordion-item active-accordion">
                                <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01"
                                        aria-expanded="true" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray">
                                            <i class="fa-solid fa-chevron-down fs-15"></i><span
                                                class="fs-19 fw-600 ls-minus-05px">Our Vision</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-01" class="accordion-collapse collapse collapse"
                                    data-bs-parent="#accordion-style-02">
                                    <div
                                        class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                                        <p>
                                            At ZinfoTec Technologies, we aspire to lead the LED display industry by delivering customized solutions with the highest quality standards. Through innovation and staying ahead in technology, we aim to provide cutting-edge LED display products tailored to our customers' unique needs. Our commitment to excellence drives us to consistently deliver superior products and services, establishing trust and leadership in the industry.                                    </p>
                                    </div>
                                </div>
                            </div>


                        <div class="accordion-item">
                            <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02"
                                    aria-expanded="false" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-title mb-0 position-relative text-dark-gray">
                                        <i class="fa-solid fa-chevron-down fs-15"></i><span
                                            class="fs-19 fw-600 ls-minus-05px">Our Mission </span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-02-02" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-style-02">
                                <div
                                    class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                                    <p>

                                        At ZinfoTec Technologies, we're dedicated to delivering professional and cost-effective LED display solutions for advertising. Leveraging our expertise and collaborations with top media companies, we provide impactful displays that maximize media and commercial value. Our mission is to be the preferred partner for businesses seeking innovative advertising solutions that captivate audiences and drive success.
                                    </p>
                                </div>
                            </div>
                        </div>

{{-- 
                        <div class="accordion-item">
                            <div class="accordion-header border-bottom border-color-transparent">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-03"
                                    aria-expanded="false" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-title mb-0 position-relative text-dark-gray">
                                        <i class="fa-solid fa-chevron-down fs-15"></i><span
                                            class="fs-19 fw-600 ls-minus-05px">What do you do for corporate clients?</span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-02-03" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-style-02">
                                <div
                                    class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent">
                                    <p>The focus of the tax and legal department is on advisory services in the tax,
                                        company, civil and commercial law.</p>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6"
                    data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

                    <div class="outside-box-right-30 position-relative">
                        <img src="public/images/demo-accounting-company-03.png" alt />
                        <div class="bg-base-color video-icon-box video-icon-medium feature-box-icon-rounded position-absolute top-100px left-100px mt-10 ms-15 w-40px h-40px rounded-circle d-flex align-items-center justify-content-center"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true"
                            title="<span class=tooltip-title>Crafto - New York</span><p class=m-0>401 Broadway, 24th Floor, Orchard View,  New York</p>">
                            <span>
                                <span class="video-icon">
                                    <span
                                        class="bg-base-color w-100 h-100 border-radius-100 text-center d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-location-dot m-0 text-white icon-small"></i>
                                    </span>
                                    <span class="video-icon-sonar">
                                        <span class="video-icon-sonar-bfr bg-red"></span>
                                        <span class="video-icon-sonar-bfr bg-yellow"></span>
                                    </span>
                                </span>
                            </span>
                        </div>
                        <div class="bg-base-color video-icon-box video-icon-medium feature-box-icon-rounded position-absolute bottom-100px start-50 mb-10 ms-7 w-40px h-40px rounded-circle d-flex align-items-center justify-content-center"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true"
                            title="<span class=tooltip-title>Crafto - Canada</span><p class=m-0>2839 lalemant view road, Niagara falls, Canada</p>">
                            <span>
                                <span class="video-icon">
                                    <span
                                        class="w-100 h-100 bg-base-color border-radius-100 d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-location-dot m-0 text-white icon-small"></i>
                                    </span>
                                    <span class="video-icon-sonar">
                                        <span class="video-icon-sonar-bfr bg-red"></span>
                                        <span class="video-icon-sonar-bfr bg-yellow"></span>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


   


    <section class="py-0">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-6 col-md-7 col-sm-8 text-center"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <span>HOT COLLECTION</span>
                    <h3 class="fw-700 text-dark-gray ls-minus-2px">Browse Our Top Products</h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [-50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

                <div class="col text-center team-style-01 md-mb-30px">
                    <figure class="mb-0 hover-box box-hover position-relative">
                        <img src="" alt="Image" class="border-radius-6px" />
                        <figcaption class="w-100 p-30px lg-p-25px bg-white">
                            <div class="position-relative z-index-1 overflow-hidden lg-pb-5px">
                                <p class="fs-19 d-block fw-600 text-dark-gray lh-26 ls-minus-05px">Outdoor Fixed LED Video Wall Solutions</p>
                                
                                {{-- <div class="social-icon hover-text mt-20px lg-mt-10px social-icon-style-05">
                                    <a href="https://www.facebook.com/" target="_blank"
                                        class="fw-600 text-dark-gray">Fb.</a>
                                    <a href="https://www.instagram.com/" target="_blank"
                                        class="fw-600 text-dark-gray">In.</a>
                                    <a href="https://www.twitter.com/" target="_blank"
                                        class="fw-600 text-dark-gray">Tw.</a>
                                    <a href="https://dribbble.com/" target="_blank" class="fw-600 text-dark-gray">Dr.</a>
                                </div> --}}
                            </div>
                            <div class="box-overlay bg-white box-shadow-quadruple-large border-radius-6px"></div>
                        </figcaption>
                    </figure>
                </div>


                <div class="col text-center team-style-01 md-mb-30px">
                    <figure class="mb-0 hover-box box-hover position-relative">
                        <img src="" alt="Image" class="border-radius-6px" />
                        <figcaption class="w-100 p-30px lg-p-25px bg-white">
                            <div class="position-relative z-index-1 overflow-hidden lg-pb-5px">
                                <p class="fs-19 d-block fw-600 text-dark-gray lh-26 ls-minus-05px">Indoor LED Video Walls</p>
                                
                                
                            </div>
                            <div class="box-overlay bg-white box-shadow-quadruple-large border-radius-6px"></div>
                        </figcaption>
                    </figure>
                </div>


                <div class="col text-center team-style-01 xs-mb-30px">
                    <figure class="mb-0 hover-box box-hover position-relative">
                        <img src="" alt="Image" class="border-radius-6px" />
                        <figcaption class="w-100 p-30px lg-p-25px bg-white">
                            <div class="position-relative z-index-1 overflow-hidden lg-pb-5px">
                                <P class="fs-19 d-block fw-600 text-dark-gray lh-26 ls-minus-05px">LED Mobile Van Display</P>
                                
                            </div>
                            <div class="box-overlay bg-white box-shadow-quadruple-large border-radius-6px"></div>
                        </figcaption>
                    </figure>
                </div>


                <div class="col text-center team-style-01">
                    <figure class="mb-0 hover-box box-hover position-relative">
                        <img src="" alt="Image" class="border-radius-6px" />
                        <figcaption class="w-100 p-30px lg-p-25px bg-white">
                            <div class="position-relative z-index-1 overflow-hidden lg-pb-5px">
                                <P class="fs-19 d-block fw-600 text-dark-gray lh-26 ls-minus-05px">Customized Single Color LED Boards</P>
                                {{-- <p class="m-0">People officer</p>
                                <div class="social-icon hover-text mt-20px lg-mt-10px">
                                    <a href="https://www.facebook.com/" target="_blank"
                                        class="fw-600 text-dark-gray">Fb.</a>
                                    <a href="https://www.instagram.com/" target="_blank"
                                        class="fw-600 text-dark-gray">In.</a>
                                    <a href="https://www.twitter.com/" target="_blank"
                                        class="fw-600 text-dark-gray">Tw.</a>
                                    <a href="https://dribbble.com/" target="_blank" class="fw-600 text-dark-gray">Dr.</a>
                                </div> --}}
                            </div>
                            <div class="box-overlay bg-white box-shadow-quadruple-large border-radius-6px"></div>
                        </figcaption>
                    </figure>
                </div>


                <div class="col text-center team-style-01">
                    <figure class="mb-0 hover-box box-hover position-relative">
                        <img src="" alt="Image" class="border-radius-6px" />
                        <figcaption class="w-100 p-30px lg-p-25px bg-white">
                            <div class="position-relative z-index-1 overflow-hidden lg-pb-5px">
                                <P class="fs-19 d-block fw-600 text-dark-gray lh-26 ls-minus-05px">Customized Single Color LED Boards</P>
                                
                            </div>
                            <div class="box-overlay bg-white box-shadow-quadruple-large border-radius-6px"></div>
                        </figcaption>
                    </figure>
                </div>


                <div class="col text-center team-style-01">
                    <figure class="mb-0 hover-box box-hover position-relative">
                        <img src="" alt="Image" class="border-radius-6px" />
                        <figcaption class="w-100 p-30px lg-p-25px bg-white">
                            <div class="position-relative z-index-1 overflow-hidden lg-pb-5px">
                                <P class="fs-19 d-block fw-600 text-dark-gray lh-26 ls-minus-05px">PVC Panels & Decorative Walls</P>
                                
                            </div>
                            <div class="box-overlay bg-white box-shadow-quadruple-large border-radius-6px"></div>
                        </figcaption>
                    </figure>
                </div>

                <div class="col text-center team-style-01">
                    <figure class="mb-0 hover-box box-hover position-relative">
                        <img src="" alt="Image" class="border-radius-6px" />
                        <figcaption class="w-100 p-30px lg-p-25px bg-white">
                            <div class="position-relative z-index-1 overflow-hidden lg-pb-5px">
                                <P class="fs-19 d-block fw-600 text-dark-gray lh-26 ls-minus-05px">LED Glow Letter Cut Sign Board</P>
                                
                            </div>
                            <div class="box-overlay bg-white box-shadow-quadruple-large border-radius-6px"></div>
                        </figcaption>
                    </figure>
                </div>

            </div>
        </div>
    </section>


    <section class="half-section">
        <div class="container">
            <div class="row justify-content-center mb-30px"
                data-anime="{ &quot;translateX&quot;: [-50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <div class="col-lg-5 text-center mb-15px">
                    <span
                        class="text-dark-gray fw-600 fs-16 ls-minus-05px text-uppercase border-1 pb-5px border-bottom border-color-extra-medium-gray text-dark-gray">Join
                        the 10,000+ companies using crafto</span>
                </div>
            </div>
            <div class="row position-relative clients-style-08 mb-35px"
                data-anime="{&quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 50, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <div class="col swiper text-center feather-shadow"
                    data-slider-options="{ &quot;slidesPerView&quot;: 2, &quot;spaceBetween&quot;:0, &quot;speed&quot;: 6000, &quot;loop&quot;: true, &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-four-slide-pagination-2&quot;, &quot;clickable&quot;: false }, &quot;allowTouchMove&quot;: false, &quot;autoplay&quot;: { &quot;delay&quot;:0, &quot;disableOnInteraction&quot;: false }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-four-slide-next-2&quot;, &quot;prevEl&quot;: &quot;.slider-four-slide-prev-2&quot; }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;1200&quot;: { &quot;slidesPerView&quot;: 5 }, &quot;992&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 3 } }, &quot;effect&quot;: &quot;slide&quot; }">
                    <div class="swiper-wrapper marquee-slide">

                        <div class="swiper-slide">
                            <a href="#"><img src="public/images/tanishq-dark.png"
                                    class="h-40px xs-h-30px" alt /></a>
                        </div>


                        <div class="swiper-slide">
                            <a href="#"><img src="public/images/logo-invision-oxford-blue.svg"
                                    class="h-40px xs-h-30px" alt /></a>
                        </div>


                        <div class="swiper-slide">
                            <a href="https://www.caratlane.com/"><img src="public/images/caratlane_dark.png"
                                    class="h-40px xs-h-30px" alt /></a>
                        </div>


                        <div class="swiper-slide">
                            <a href="#">
                                <img src="public/images/LMS2.png" class="img-fluid h-80px xs-h-20px" alt />
                            </a>
                        </div>
                        


                        <div class="swiper-slide">
                            <a href="#"><img src="public/images/TimesAvenue.png"
                                    class="h-40px xs-h-30px" alt /></a>
                        </div>


                        <div class="swiper-slide">
                            <a href="#"><img src="public/images/swiss-dark.png"
                                    class="h-40px xs-h-30px" alt /></a>
                        </div>


                        <div class="swiper-slide">
                            <a href="#"><img src="public/images/smart-black.png"
                                    class="h-40px xs-h-30px" alt /></a>
                        </div>


                        <div class="swiper-slide">
                            <a href="#"><img src="public/images/faluda.png"
                                    class="h-40px xs-h-30px" alt /></a>
                        </div>


                        <div class="swiper-slide">
                            <a href="#"><img src="public/images/Smita.png"
                                    class="h-40px xs-h-30px" alt /></a>
                        </div>


                        <div class="swiper-slide">
                            <a href="#"><img src="public/images/NAWAB_Tailors.png"
                                    class="h-40px xs-h-30px" alt /></a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#"><img src="public/images/GetWelcancer-clinic.png"
                                    class="h-40px xs-h-30px" alt /></a>
                        </div>


                      

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
