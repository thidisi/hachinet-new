@extends('layouts.app')
@push('css')
    <style>
        .img-service {
            width: 200px;
            display: block;
            margin: 0 auto;
            /* max-height: 100%; */
        }

        .titlea {
            /* font-size: 20px; */
            color: #414141;
            text-transform: capitalize;
            font-weight: 500;
            /* margin-bottom: 10px; */
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/slide.css?v=6') }}">
@endpush
@section('content')
    <!-- Start Page Banner Section -->
    <section class="banner-section service-one1">
        <div class="d-table">
            <div class="d-tablecell">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title">
                                <h2><span>Software </span>Testing</h2>
                                <ul>
                                    <li><a href="services">Services<i class="flaticon-right"></i> </a></li>
                                    <li>Software Testing</li>
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
                            <h3 class="service-heading">Hachinet Software - Your Trusted Partner in Software Testing
                                Services</h3>
                            <p class="service-paragraph">In today's digital age, software is an essential component of
                                almost every aspect of our daily lives. From managing our finances to staying connected with
                                friends and family, software plays a critical role in our daily routines. With such
                                importance placed on software, it is crucial to ensure that it is working effectively and
                                efficiently, which is where software testing comes in. At Hachinet Software, we offer a
                                comprehensive range of software testing services to help our clients ensure that their
                                software is functioning at its optimal level.</p>
                            <img src="{{ asset('assets/img/2.png') }}" alt="">
                        </div>
                        <div class="service-content-1">
                            <h3 class="service-heading">What is Software Testing?</h3>
                            <p class="service-paragraph">Software testing is a process of evaluating software to identify
                                any errors, bugs, or defects that may impact its performance, functionality, or user
                                experience. By conducting software testing, developers can ensure that their software meets
                                the quality standards and performs as expected. Software testing can be categorized into
                                three main types: manual testing, automated testing, and security testing.</p>
                            <img src="{{ asset('assets/img/software_testing4.png') }}"
                                style="height: 400px; margin-left:214px" alt="">

                        </div>
                        <div class="service-content-2">
                            <h3 class="service-heading">Types of Software Testing</h3>
                            <p class="service-paragraph">
                                <a class="titlea"> Manual Testing:</a> Manual testing is a type of software testing that is
                                conducted by human
                                testers manually. It involves executing test cases and checking the software's functionality
                                and user interface. Manual testing is essential to ensure that the software meets the user's
                                expectations. <br>

                                <a class="titlea">Automated Testing:</a> Automated testing is a process of testing software
                                using automated tools
                                and scripts. It helps to identify defects and errors quickly and efficiently. Automated
                                testing is ideal for large-scale projects and can save time and effort. <br>

                                <a class="titlea">Security Testing:</a> Security testing is a process of testing software to
                                identify
                                vulnerabilities and security risks. It involves testing the software's ability to prevent
                                unauthorized access, protect data, and maintain confidentiality. <br>
                            </p>
                            <img src="{{ asset('assets/img/software_testing5.png') }}"
                                style="height: 400px; margin-left: 140px" alt="">
                        </div>
                        <div class="service-content-2">
                            <h3 class="service-heading">Techniques Used in Software Testing
                            </h3>
                            <p class="service-paragraph">There are several techniques used in software testing to ensure
                                that the software meets quality standards. These techniques include:<br>

                                <a class="titlea"> Black-Box Testing:</a> Black-box testing is a type of software testing
                                that tests the software's
                                functionality without considering its internal structure. It helps to ensure that the
                                software performs as expected from the user's perspective. <br>

                                <a class="titlea">White-Box Testing:</a> White-box testing is a type of software testing
                                that tests the software's
                                internal structure. It helps to identify any defects or errors in the code. <br>

                                <a class="titlea">Grey-Box Testing:</a> Grey-box testing is a combination of black-box and
                                white-box testing. It
                                involves testing the software's functionality and its internal structure.
                                <br>

                                <a class="titlea">Unit Testing:</a> Unit testing is a type of testing that tests individual
                                components or modules
                                of the software. It helps to ensure that each component of the software is working
                                correctly.
                                <br>

                                <a class="titlea">Integration Testing:</a> Integration testing is a type of testing that
                                tests how different
                                components of the software work together. It helps to ensure that the software is working as
                                a whole.
                                <br>

                                <a class="titlea"> System Testing:</a> System testing is a type of testing that tests the
                                entire software system.
                                It helps to ensure that the software is functioning correctly.
                                <br>

                                <a class="titlea"> Acceptance Testing:</a> Acceptance testing is a type of testing that
                                tests the software's
                                functionality to ensure that it meets the user's requirements and expectations.
                                <br>

                                <a class="titlea">Alpha Testing:</a> Alpha testing is a type of testing that is conducted by
                                the software
                                development team. It helps to identify any defects or errors before releasing the software
                                to the public.
                                <br>

                                <a class="titlea"> Beta Testing:</a> Beta testing is a type of testing that is conducted by
                                end-users. It helps to
                                identify any defects or errors that were not identified during alpha testing.
                                <br>

                                <a class="titlea">Release Testing:</a> Release testing is a type of testing that is
                                conducted before the software
                                is released to the public. It helps to ensure that the software is working correctly and
                                meets the quality standards.
                                <br>
                            </p>
                            <img src="{{ asset('assets/img/software_testing6.png') }}" style="margin-left: 122px;"
                                alt="">
                            <p class="service-paragraph"> Software testing is a critical component of the software
                                development process, and Hachinet Software's software testing services can help ensure that
                                your software is of the highest quality. With our extensive experience, advanced tools and
                                techniques, and comprehensive testing process, we can help you ensure that your software
                                meets your requirements and is ready for release.</p>
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
                                <a class="slide-snapper" href="https://hachinet.jp/smartphone-application-development"></a>
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
