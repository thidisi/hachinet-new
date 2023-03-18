@extends('layouts.app')
@section('title', 'Salesforce Outsourcing')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/slide.css?v=1') }}">
    <style>
        .service-info .project-management>i {
            width: 180px;
            height: 180px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
        }

        .service-info .project-management>i::before {
            font-size: 100px;
        }
    </style>
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
                                <h2><span>Salesforce®</span>Outsourcing</h2>
                                <ul>
                                    <li><a href="services">Services<i class="flaticon-right"></i> </a></li>
                                    <li>Salesforce outsourcing</li>
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
    <section class="service-info ptb-100" style="padding-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-content-wrapper">
                        <div class="service-content-1">
                            <img src="{{ asset('assets/img/service/salesforce-development-outsource.png') }}" width="100%"
                                alt="">
                        </div>
                        <div class="service-content-1">
                            <h3 class="service-heading">What is Salesforce Outsourcing?</h3>
                            <p class="service-paragraph">If you need instant access to additional Salesforce resources
                                and don’t want the time, hassle or long-term commitment of hiring in-house, outsourcing
                                is perfect for you.</p>
                            <p class="service-paragraph">You can access our team of Salesforce experts with over 750+
                                certifications, split between 16 regional offices in 12 countries and with over 23
                                years’ experience in delivering results.</p>
                        </div>
                        <div class="service-content-2">
                            <h3 class="service-heading">Who needs Salesforce Outsourcing?</h3>
                            <p class="service-paragraph">Salesforce Customers who need to increase the capacity of
                                their in-house team on an ad-hoc basis.</p>
                            <p class="service-paragraph">Systems Integrators (SIs) who need to meet the resourcing,
                                project delivery, and support demands of their end customers.</p>
                            <p class="service-paragraph">ISVs looking to accelerate their product through development
                                and implementation experts and/or scale support.</p>
                        </div>
                        <h3 class="service-heading">Types of experts we can provide</h3>
                        <br />
                        <div class="row service-content-3">
                            <div class="col-lg-6 col-md-6 mb-3">
                                <div class="project-management">
                                    {{-- <img src="{{ asset('assets/img/service-details/salesforce-developer-training.png') }}"
                                        class="img-service" alt=""> --}}
                                    <i class="fa-brands fa-salesforce"></i>
                                    <h3 class="service-heading mt-2"></i> Salesforce Developers
                                    </h3>
                                    <p class="service-paragraph">Certified Salesforce Developers provide additional
                                        expert resources when you need to do a bit more than just a flow.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-3">
                                <div class="project-management">
                                    {{-- <img src="{{ asset('assets/img/service-details/salesforce-administrator-sfa.jpg') }}"
                                        class="img-service" alt=""> --}}
                                    <i class="fa-solid fa-user-gear"></i>
                                    <h3 class="service-heading mt-2"></i> Salesforce Administrator
                                    </h3>
                                    <p class="service-paragraph">Experienced Salesforce Administrators are readily
                                        available to help you manage and deliver end-user service.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-3">
                                <div class="project-management">
                                    {{-- <img src="{{ asset('assets/img/service-details/Solution-Architects-Business-Objectives.jpg') }}"
                                        class="img-service" alt=""> --}}
                                    <i class="fa-solid fa-sitemap"></i>
                                    <h3 class="service-heading mt-2"></i> Consultant/Solution
                                        Architects</h3>
                                    <p class="service-paragraph">Certified Salesforce Solution Architects provide
                                        advice and generate a robust system design.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-3">
                                <div class="project-management">
                                    {{-- <img src="{{ asset('assets/img/service-details/techarch.jpg') }}" class="img-service"
                                        alt=""> --}}
                                    <i class="fa-sharp fa-solid fa-gears"></i>
                                    <h3 class="service-heading mt-2"></i> Technical Architects
                                    </h3>
                                    <p class="service-paragraph">Our team of Technical Architects has a wealth of
                                        experience in designing and delivering solutions to solve the most complex
                                        challenges using best practices.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-3">
                                <div class="project-management">
                                    {{-- <img src="{{ asset('assets/img/service-details/Enzu-Icon_Buttons_Cloud_Expertise-icon.png') }}"
                                        class="img-service" alt=""> --}}
                                    <i class="fa-solid fa-cloud"></i>
                                    <h3 class="service-heading mt-2"></i> Cloud Experts</h3>
                                    <p class="service-paragraph">Our team of specialists with 750+ expert
                                        certifications are at your fingertips. We are a full-service Salesforce
                                        Consultancy working across all cloud platforms.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-3">
                                <div class="project-management">
                                    {{-- <img src="{{ asset('assets/img/service-details/industry.jpg') }}" class="img-service"
                                        alt=""> --}}
                                    <i class="fa-solid fa-industry"></i>
                                    <h3 class="service-heading mt-2"></i> Industry Experts</h3>
                                    <p class="service-paragraph">Take advantage by implementing one of our previously
                                        delivered, industry-specific solutions, or relying on our expertise to deliver
                                        something new in your vertical.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row service-content-4">
                            <div class="col-12">
                                <div class="important-title">
                                    <h3 class="service-heading">Benefits of outsourcing Salesforce administration or
                                        development?</h3>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="important-facts">
                                    <p class="service-paragraph">
                                        <img src="{{ asset('assets/img/service-details/sale1.jpg') }}" class="img-service"
                                            alt="">
                                        <span class="d-block" style="min-height: 140px;"><i class="flaticon-check-mark"></i>
                                            Instead of assembling a giant in-house team to cover every aspect of
                                            Salesforce
                                            and third-party solutions, you can access our pool with broad and deep
                                            expertise
                                            across the entire platform as and when you need.</span>
                                    </p>
                                    <p class="service-paragraph">
                                        <img src="{{ asset('assets/img/service-details/a3.png') }}" class="img-service"
                                            alt="">
                                        <span class="d-block" style="min-height: 140px;"><i class="flaticon-check-mark"></i>
                                            When you need to react fast to market disruptions, every bit of help
                                            matters.
                                            Using our admins and developers means you can react faster to any
                                            need.</span>
                                    </p>
                                    <p class="service-paragraph">
                                        <img src="{{ asset('assets/img/service-details/a5.jpg') }}" class="img-service"
                                            alt="">
                                        <span class="d-block" style="min-height: 140px;"><i class="flaticon-check-mark"></i>
                                            Free your company to focus on what you do best while we handle your
                                            Salesforce
                                            administration and/or development needs.</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="important-facts">
                                    <p class="service-paragraph">
                                        <img src="{{ asset('assets/img/service-details/a2.png') }}" class="img-service"
                                            alt="">
                                        <span class="d-block" style="min-height: 140px;"><i
                                                class="flaticon-check-mark"></i>
                                            Hiring takes time and can be a risky venture. When you outsource your
                                            Salesforce
                                            administration or development, you can scale up or down as you need without
                                            the
                                            long-term commitments.s</span>
                                    </p>
                                    <p class="service-paragraph">
                                        <img src="{{ asset('assets/img/service-details/a4.jpg') }}" class="img-service"
                                            alt="">
                                        <span class="d-block" style="min-height: 140px;"><i
                                                class="flaticon-check-mark"></i>
                                            You can have follow-the-sun support from our combination of teams across
                                            Europe
                                            and Asia. Whenever you are working, we are too.</span>
                                    </p>
                                    <p class="service-paragraph">
                                        <img src="{{ asset('assets/img/service-details/a6.png') }}" class="img-service"
                                            alt="">
                                        <span class="d-block" style="min-height: 140px;"><i
                                                class="flaticon-check-mark"></i>
                                            Outsourcing increases the Return on investment from your Salesforce platform
                                            by
                                            lowering the cost of development and admin and increasing the pooled
                                            expertise.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div id="pSlider">
                        <ol id="slider-container" dir="ltr">
                            <li id="slide_1" class="li_slide">
                                <a class="slide-snapper" href="{{ route('salesforce-development-outsource') }}"></a>
                                <a class="prev_slide" href="#slide_5"></a> <a class="next_slide" href="#slide_2"></a>
                            </li>
                            <li id="slide_2" class="li_slide">
                                <a class="slide-snapper" href="{{ route('smartphone-application-development') }}"></a>
                                <a class="prev_slide" href="#slide_1"></a> <a class="next_slide" href="#slide_3"></a>
                            </li>
                            <li id="slide_3" class="li_slide">
                                <a class="slide-snapper" href="{{ route('java-systems-development') }}"></a>
                                <a class="prev_slide" href="#slide_2"></a> <a class="next_slide" href="#slide_4"></a>
                            </li>
                            <li id="slide_4" class="li_slide">
                                <a class="slide-snapper" href="{{ route('cobol-systems-development') }}"></a>
                                <a class="prev_slide" href="#slide_3"></a> <a class="next_slide" href="#slide_5"></a>
                            </li>
                            <li id="slide_5" class="li_slide">
                                <a class="slide-snapper" href="{{ route('net-systems-development') }}"></a>
                                <a class="prev_slide" href="#slide_4"></a> <a class="next_slide" href="#slide_1"></a>
                            </li>
                        </ol>
                    </div>
                    <div class="service-download mb-30" style="margin-top: 30px;">
                        <a href="#"><i class="flaticon-download"></i> Download Pdf File</a>
                    </div>
                    <div class="service-download mb-30">
                        <a href="#"><i class="flaticon-download"></i> Download Txt File</a>
                    </div>
                    <div class="service-sidebar-section" style="background: #ffb701;">
                        <h3 class="service-heading">Contact</h3>
                        <ul class="contact-info">
                            <li>
                                <i class="flaticon-telephone-handle-silhouette"></i>
                                <a href="tel:1-800-555-1234">Call us (+84) 24-6290-0388</a>
                            </li>
                            <li>
                                <i class="flaticon-mail-black-envelope-symbol"></i>
                                <a href="mailto:info@emarat.com">info@emarat.com</a>
                            </li>
                            <li>
                                <i class="flaticon-clock-of-circular-shape-outline"></i>
                                Open Hours 09:00 am - 06:00 pm
                            </li>
                            <li>
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                185, Pickton Near Street, Los Angeles, USA
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Details Section -->
    <!-- Start Providing Section -->
    <section class="providing-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="providing-title">
                        <h2>How we engage</h2>
                        <p>You will get your own VRP Delivery Manager who works alongside you to understand your project
                            needs, ways of working, client expectations and project deliverables to identify and support
                            resource on-boarding.</p>
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
                        <div class="col-lg-4 col-md-6">
                            <div class="company-text">
                                <p>Tell us what you need and when you need it. This can be either an individual resource
                                    or a dedicated team meeting your full project requirements.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tuna-2" class="animated content-wrapper">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="company-text">
                                <p>You get a selection of CVs profiles to consider for a selection of resources we
                                    gather, matching your requirements and based on availability.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tuna-3" class="animated content-wrapper">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
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
                        <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
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
                    <form class="newsletter-form" data-toggle="validator" novalidate="true">
                        <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL"
                            required="" autocomplete="off">
                        <button class="default-btn disabled" type="submit"
                            style="pointer-events: all; cursor: pointer;">
                            Subscribe
                        </button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Bottom Footer Section -->

    <style type="text/css">
        .typewrite>.wrap {
            border-right: 0.08em solid #fff
        }
    </style>
@endsection
