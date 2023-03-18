@extends('layouts.app')
@section('title', 'Testing Center of Excellence Outsourcing')
@push('css')
    <style>
        .img-service {
            width: 200px;
            display: block;
            margin: 0 auto;
            /* max-height: 100%; */
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/slide.css?v=1') }}">
@endpush
@section('content')
    <!-- Start Page Banner Section -->
    <section class="banner-section service-one">
        <div class="d-table">
            <div class="d-tablecell">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title">
                                <h2><span>Testing Center of Excellence </span>Outsourcing</h2>
                                <ul>
                                    <li><a href="services">Services<i class="flaticon-right"></i> </a></li>
                                    <li>Testing Center of Excellence</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Banner Section -->

    <!-- Start Service Details Section -->
    <section class="service-info ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-content-wrapper">
                        <div class="service-content-1">
                            <h3 class="service-heading">The Test Center of Excellence model (TCoE)</h3>
                            <p class="service-paragraph">Hachinet Software reduces and mitigates the quality’s risks,
                                ensuring the best quality of software products. We provide service models: The Test Center
                                of Excellence model (TCoE) of Managed Testing Services.</p>
                        </div>
                        <div class="service-content-2">
                            <h3 class="service-heading">Testing Center of Excellence: The Power of Centralization</h3>
                            <p class="service-paragraph">
                                Are you tired of spending hours testing your software products? Hachinet Software provides
                                outsourced testing services to ensure the quality of your products. <br>

                                We specialize in software testing, one of the most important aspects of software
                                development. Our testing process ensures that your software operates flawlessly and meets
                                all necessary requirements. We use the latest tools and technologies to perform different
                                types of testing, including functional, performance, and security testing. <br>

                                Compatibility testing is another area where we excel. We test your software on multiple
                                devices, operating systems, and platforms to ensure that it works smoothly across all of
                                them. Our compatibility testing service is designed to provide a comprehensive and reliable
                                testing experience, helping you release your software product with confidence. <br>
                            </p>
                        </div>
                        <h3 class="service-heading">How can we optimize your test effort?</h3>
                        <br />
                        <div class="row service-content-3">
                            <div class="col-lg-6 col-md-6 mb-3">
                                <div class="project-management">
                                    <img src="{{ asset('assets/img/icon/1.png') }}" class="img-service" alt="">
                                    <h3 class="service-heading mt-2"><i class="flaticon-tick"></i> SOFTWARE TESTING</h3>
                                    <p class="service-paragraph">The vital testing to ensure your system works as expected,
                                        including integration and regression tests.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-3">
                                <div class="project-management">
                                    <img src="{{ asset('assets/img/icon/2.png') }}" class="img-service" alt="">
                                    <h3 class="service-heading mt-2"><i class="flaticon-tick"></i> COMPATIBILITY TESTING
                                    </h3>
                                    <p class="service-paragraph">Essential part of legacy system migration to ensure it
                                        works well on the new platforms.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-3">
                                <div class="project-management">
                                    <img src="{{ asset('assets/img/icon/3.png') }}" class="img-service" alt="">
                                    <h3 class="service-heading mt-2"><i class="flaticon-tick"></i> EMBEDDED PRODUCT TESTING
                                    </h3>
                                    <p class="service-paragraph">Provide end-to-end testing services for embedded hardware
                                        and software.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-3">
                                <div class="project-management">
                                    <img src="{{ asset('assets/img/icon/4.png') }}" class="img-service" alt="">
                                    <h3 class="service-heading mt-2"><i class="flaticon-tick"></i> CLOUD TESTING</h3>
                                    <p class="service-paragraph">Ensure applications, environments and infrastructure
                                        conform to the expectations of cloud computing business model.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-3">
                                <div class="project-management">
                                    <img src="{{ asset('assets/img/icon/5.png') }}" class="img-service" alt="">
                                    <h3 class="service-heading mt-2"><i class="flaticon-tick"></i> INTER-OPERABILITY (IOP)
                                        TESTING</h3>
                                    <p class="service-paragraph">IoP Lab focuses on assisting customers in ensuring devices’
                                        inter-Operability by providing all the common components/devices/environment
                                        needed..</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-3">
                                <div class="project-management">
                                    <img src="{{ asset('assets/img/icon/6.png') }}" class="img-service" alt="">
                                    <h3 class="service-heading mt-2"><i class="flaticon-tick"></i> MOBILE TESTING</h3>
                                    <p class="service-paragraph">Ensure mobile applications & mobile devices work as
                                        expected.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row service-content-4">
                            <div class="col-12">
                                <div class="important-title">
                                    <h3 class="service-heading">Leverage your product quality with our testing services</h3>
                                </div>
                            </div>
                            <div class="important-facts">
                                <p class="service-paragraph">
                                    <i class="flaticon-check-mark"></i>
                                    If you have embedded products, we can test them. Our team of experts can test embedded
                                    systems, firmware software, and hardware components to ensure they function as expected.
                                    We can also help you identify any design flaws or coding errors that may impact the
                                    performance of your embedded product.
                                </p>
                                <p class="service-paragraph">
                                    <i class="flaticon-check-mark"></i>
                                    Finally, our cloud testing service can help you test your software products in a cloud
                                    environment. We have experience working with various cloud service providers, including
                                    Amazon Web Services (AWS), Microsoft Azure, and Google Cloud Platform. We can help you
                                    identify any issues that may arise from cloud deployment and ensure your software
                                    product
                                    operates seamlessly.
                                </p>
                                <p class="service-paragraph">
                                    <i class="flaticon-check-mark"></i>
                                    At Hachinet Software, we provide cost-effective outsourced testing services to save you
                                    time
                                    and resources. Our team is dedicated to ensuring the quality of your software products
                                    and
                                    providing a reliable testing experience. With our expertise and resources, you can rest
                                    assured that your products will meet the highest standards of quality.
                                </p>

                                <p class="service-paragraph">
                                    <i class="flaticon-check-mark"></i>
                                    Don't waste any more time testing your software products. Contact Hachinet Software
                                    today to
                                    learn more about our outsourced testing services and how we can help you ensure the
                                    quality
                                    of your products.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-sidebar-section">
                        <h3 class="service-heading">Testing Experience</h3>
                        <p class="d-flex justify-content-between"><span>DX Health Care:</span> 6</p>
                        <p class="d-flex justify-content-between"><span>Transport and Logistics:</span> 10</p>
                        <p class="d-flex justify-content-between"><span>Mobile Applications:</span> 20</p>
                        <p class="d-flex justify-content-between"><span>Ecommerce Testing:</span> 15</p>
                        <p class="d-flex justify-content-between"><span>EMBEDDED PRODUCT Testing:</span> 8</p>
                        <p class="d-flex justify-content-between"><span>Software Testing:</span> 33</p>
                        <p class="d-flex justify-content-between"><span>Migrate Testing:</span> 36</p>
                    </div>
                    <div class="service-download mb-30">
                        <a href="#"><i class="flaticon-download"></i> Download Profile</a>
                    </div>
                    <div class="sidebar-area mb-5">
                        <div class="widget widget_call">
                            <i class="flaticon-telephone-handle-silhouette"></i>
                            <p>Got any Questions? </p>
                            <p>Call us Today!</p>

                            <a href="tel:+8424-6290-0388">(+84) 24-6290-0388</a>
                            <br />
                            <a href="mailto:hello@hachinet.com">hello@hachinet.com</a>
                        </div>
                    </div>
                    <div id="pSlider">
                        <ol id="slider-container" dir="ltr">
                            <li id="slide_1" class="li_slide">
                                <a class="slide-snapper" href="https://hachinet.jp/contact"></a>
                                <a class="prev_slide" href="#slide_5"></a> <a class="next_slide" href="#slide_2"></a>
                            </li>
                            <li id="slide_2" class="li_slide">
                                <a class="slide-snapper"
                                    href="https://hachinet.jp/smartphone-application-development"></a>
                                <a class="prev_slide" href="#slide_1"></a> <a class="next_slide" href="#slide_3"></a>
                            </li>
                            <li id="slide_3" class="li_slide">
                                <a class="slide-snapper" href="https://hachinet.jp/java-systems-development"></a>
                                <a class="prev_slide" href="#slide_2"></a> <a class="next_slide" href="#slide_4"></a>
                            </li>
                            <li id="slide_4" class="li_slide">
                                <a class="slide-snapper" href="https://hachinet.jp/cobol-systems-development"></a>
                                <a class="prev_slide" href="#slide_3"></a> <a class="next_slide" href="#slide_5"></a>
                            </li>
                            <li id="slide_5" class="li_slide">
                                <a class="slide-snapper" href="https://hachinet.jp/net-systems-development"></a>
                                <a class="prev_slide" href="#slide_4"></a> <a class="next_slide" href="#slide_1"></a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Details Section -->

    <!-- Start Providing Section -->
    <section class="providing-section providing-section-two ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="providing-title">
                        <h2>Staffing Services Process at Hachinet Software</h2>
                        <p>Digital transformation is an obstacle-ridden marathon. At Hachinet Software, we can smoothen such
                            race with new technologies, comprehensive DX roadmaps and well-researched methodology.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-delay=".3s">
                    <ul id="tabs">
                        <li class="current">
                            <a href="#tuna-1">
                                <i class="flaticon-helmet"></i>
                                1. Resource request
                            </a>
                        </li>
                        <li>
                            <a href="#tuna-2">
                                <i class="flaticon-factory"></i>
                                2. Resource profile
                            </a>
                        </li>
                        <li>
                            <a href="#tuna-3">
                                <i class="flaticon-worker"></i>
                                3. Resource interview
                            </a>
                        </li>
                        <li>
                            <a href="#tuna-4">
                                <i class="flaticon-repairman"></i>
                                4. Delivery
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="content">
                <div id="tuna-1" class="current content-wrapper animated">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="company-text">
                                <p>Tell us what you need and when you need it. This can be either an individual resource
                                    or a dedicated team meeting your full project requirements.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tuna-2" class="animated content-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="company-text">
                                <p>You get a selection of CVs profiles to consider for a selection of resources we
                                    gather, matching your requirements and based on availability.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tuna-3" class="animated content-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="company-text">
                                <p>You get to speak to the candidates and make sure they match up to your requirements
                                    and ways of working. If you’re not completely satisfied, we’ll recommend an
                                    alternative.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="tuna-4" class="animated content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 offset-md-3 offset-lg-0">
                            <div class="company-text">
                                <p>When you’re ready, you can kick off the project with our delivery manager on hand to
                                    support project governance and capacity planning with your team.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Company Section -->


    <!-- Start Subscribe Section -->
    <section class="subscribe-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="updates">
                        <h2>Sign Up to get Latest Updates</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="newsletter-form">
                        <input type="email" class="form-control" placeholder="Enter Your Email" name="email"
                            required="">

                        <button class="default-btn disabled" style="pointer-events: all; cursor: pointer;">
                            Subscribe
                        </button>

                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Subscribe Section -->
@endsection
