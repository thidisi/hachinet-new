@extends('layouts.app')
@push('css')
    <style>
        .img-service {
            width: 200px;
            display: block;
            margin: 0 auto;
            /* max-height: 100%; */
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/slide.css?v=3') }}">
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
                                <h2><span>Software </span>Outsourcing</h2>
                                <ul>
                                    <li><a href="services">Services<i class="flaticon-right"></i> </a></li>
                                    <li>Software Outsourcing</li>
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
                            <p class="service-paragraph">Hachinet Software is a leading software development company that
                                offers a range of services to meet your business needs. We specialize in Agile software
                                development, a process that emphasizes collaboration, flexibility, and rapid delivery. Our
                                team of talented engineers comes from top universities in Vietnam, ensuring that we provide
                                high-quality services to our clients.
                            </p>
                            <img src="{{ asset('assets/img/1.png') }}" alt="">
                            <p class="service-paragraph" style="margin-top: 20px"> At Hachinet Software, we guarantee the
                                quality of our services,
                                and we prioritize timely
                                delivery. We understand the importance of meeting deadlines, and we work closely with our
                                clients to ensure that we deliver the product on time.
                            </p>
                            <img src="{{ asset('assets/img/2.png') }}" alt="">
                        </div>
                        <div class="service-content-2">
                            <p class="service-paragraph">
                                Our team is proficient in a wide range of programming languages, including Java, .NET,
                                NodeJS, and more. We also have expertise in front- end development, including Angular and
                                ReactJS. We work closely with our clients to identify their specific needs and develop a
                                customized solution that meets their unique requirements.
                                <br>
                            </p>
                            <img src="{{ asset('assets/img/3.png') }}" alt="">
                        </div>

                        <div class="service-content-2">

                            <p class="service-paragraph">
                                One of the advantages of working with Hachinet Software is our affordable pricing. Our team
                                is based in Vietnam, where labor costs are lower than in the USA, Canada, and Australia.
                                This means that we can offer high-quality services at a competitive price.

                            </p>
                            <img src="{{ asset('assets/img/4.png') }}" alt="">
                        </div>
                        <div class="service-content-2">
                            <p class="service-paragraph">
                                In summary, Hachinet Software is the ideal partner for your software development needs. We
                                use Agile development methods to deliver high- quality software solutions on time. Our
                                talented engineers are proficient in a range of programming languages, and our pricing is
                                competitive. Contact us today to learn more about our software development services and how
                                we can help your business succeed.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-sidebar-section">
                        <h3 class="service-heading">Outsourcing Experience</h3>
                        <p class="d-flex justify-content-between"><span>DX Health Care:</span> 6</p>
                        <p class="d-flex justify-content-between"><span>Transport and Logistics:</span> 10</p>
                        <p class="d-flex justify-content-between"><span>Mobile Applications:</span> 20</p>
                        <p class="d-flex justify-content-between"><span>Ecommerce:</span> 15</p>
                        <p class="d-flex justify-content-between"><span>EMBEDDED PRODUCT:</span> 8</p>
                    </div>
                    <div class="service-download mb-30">
                        <a href="{{ asset('assets/profile/Hachinet_Software_Outsource_Profile.pdf') }}" download><i
                                class="flaticon-download"></i> Download Profile</a>
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
