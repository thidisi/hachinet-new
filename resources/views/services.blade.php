@extends('layouts.app')
@section('title', 'Hachinet | Services')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .language-title h4::before {
            left: 320px !important;
            bottom: 5px !important;
        }

        .bg-blue {
            background-color: #f2f7fc;
            width: 100%;
            height: 100%;
            position: relative;
            text-align: center;
            z-index: 1;
        }

        .button-contact {
            padding: 24px;
            max-width: 800px;
            border-radius: 48px;
            outline: none;
            border: none;
            color: white;
            font-weight: bold;
            font-size: 20px;
            text-transform: capitalize;
            background-color: #ffb701;
            margin-top: 16px;
        }

        .box-span {
            background-color: white;
            color: #ffb701;
            padding: 0px 8px;
            border-radius: 4px;
            margin-right: 4px;
        }

        span.box-span-in {
            color: white;
            background-color: #ffb701;
            padding: 0px 8px;
            border-radius: 4px;
            margin-right: 4px;
            font-size: 12px;
            margin-left: 4px;
        }

        .table tr td,
        .table tr th {
            padding: 1rem 1rem !important;
        }

        @media(max-width:768px) {
            .table tr th h4 {
                font-size: 18px !important;
            }

            .table tr th {
                padding: 1rem 1rem !important;
            }
        }

        @media(max-width: 520px) {
            .ptb-100 {
                padding: 30px 0;
            }

            .px-5 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important;
            }

            .table tr th {
                padding: 0.5rem 0.5rem !important;
            }

            .table tr th h4 {
                min-height: 30px;
            }

            .table tr td h6 {
                font-size: 14px !important;
            }

            .table tr td {
                font-size: 14px !important;
                font-weight: 500;
                padding: 0.75rem 0.75rem !important;
            }

            .button-contact {
                padding: 12px 16px;
                font-size: 16px;
            }

            .providing-title h5 {
                font-size: 16px;
            }

            .providing-checkout {
                font-size: 16px;
            }

            .contact,.contact-phone,.contact-time,.contact-form,.contact-description {
                font-size: 16px;
                margin-left: 2px;
            }

            .updates h2 {
                font-size: 16px !important;
                margin-bottom: 12px !important;
            }
        }
    </style>
@endpush
@section('content')
    <!-- Start Sidebar Modal -->
    <div class="sidebar-modal">
        <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"><i class="flaticon-close-cross"></i></span></button>

                        <h2 class="modal-title" id="myModalLabel2"><a href="/"><img src="assets/img/logo.png"
                                    alt="logo"></a></h2>
                    </div>

                    <div class="modal-body">
                        <div class="sidebar-modal-widget">
                            <h3 class="title">Additional Links</h3>

                            <ul>
                                <li><a href="#">join</a></li>
                                <li><a href="#">Register</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </div>

                        <div class="sidebar-modal-widget">
                            <h3 class="title">Contact Info</h3>

                            <ul class="contact-info">
                                <li>
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                    Address
                                    <span>1660 Travis Street Miramar, FL 33025, California</span>
                                </li>
                                <li>
                                    <i class="flaticon-close-envelope"></i>
                                    Email
                                    <span>construction@gmail.com</span>
                                </li>
                                <li>
                                    <i class="flaticon-telephone-handle-silhouette"></i>
                                    Phone
                                    <span>(+84) 24-6290-0388</span>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar-modal-widget">
                            <h3 class="title">Connect With Us</h3>

                            <ul class="social-list">
                                <li>
                                    <a href="#"><i class="flaticon-twitter-black-shape"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-facebook-logo"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-linkedin-logo"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-instagram-logo"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- modal-content -->
            </div><!-- modal-dialog -->
        </div><!-- modal -->
    </div>
    <!-- End Sidebar Modal -->

    <!-- Start Page Banner Section -->
    <section class="banner-section">
        <div class="d-table">
            <div class="d-tablecell">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title page-title-two">
                                <h2>about our <span>Hachinet</span> Services</h2>
                                <ul>
                                    <li><a href="/">home <i class="flaticon-right"></i> </a></li>
                                    <li>services</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Banner Section -->

    <!-- Start Service Section -->
    <section class="service-section service-section-four service-section-two pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title-left home-page-four-section-title">
                        <h4>service we offer</h4>
                        <h2><span>We provide quality personnel</span> at affordable prices from talented engineers in
                            Vietnam.</h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-title-left">
                        <p>Learn about our operation method services to see how we can help you design, deploy and implement
                            solutions faster with low-risk.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-service mb-30">
                        {{-- <i class="flaticon-consultant-services"></i> --}}
                        <i class="fas fa-solid fa-code"></i>
                        <h4>Software Outsourcing</h4>
                        <p>A set of computer science activities dedicated to the process of designing, developing, deploying
                            and supporting software according to customer's requirements.</p>
                        <a href="{{ route('software-development') }}">Read more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service mb-30">
                        {{-- <i class="flaticon-house"></i> --}}
                        <i class="fas fa-light fa-laptop-code"></i>
                        <h4>Software Integration</h4>
                        <p>Securely manage and optimize resources to help enterprises plan, analyze and provide solutions
                            against financial risks with high performance and good strategic decisions.</p>
                        {{-- <a href="service-details">Read more</a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service mb-30">
                        {{-- <i class="flaticon-university"></i> --}}
                        <i class="fas fa-light fa-screwdriver-wrench"></i>
                        <h4>Software Maintenance</h4>
                        <p>Fixes undetected errors during the development phase or in the process of using software and
                            improve usability features and operating safety of the software</p>
                        {{-- <a href="service-details">Read more</a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service mb-30">
                        {{-- <i class="flaticon-drawer"></i> --}}
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <h4>Software Testing</h4>
                        <p>Test a program or application to detect bugs in the software, validate and verify software
                            programs, applications or products to make sure they meet the right client's requirements.</p>
                        <a href="{{ route('service-testing-outsource') }}">Read more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service mb-30">
                        {{-- <i class="flaticon-consultant-services"></i> --}}
                        <i class="fas fa-solid fa-globe"></i>
                        <h4>Digital Transformation</h4>
                        <p>The process of using digital technologies to create new or modify existing business processes,
                            culture and customer experiences to meet changing business and market requirements.</p>
                        {{-- <a href="service-details">Read more</a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service mb-30">
                        {{-- <i class="flaticon-stationery"></i> --}}
                        <i class="fas fa-duotone fa-user"></i>
                        <h4>Engineer Staffing </h4>
                        <p>We provide engineers to support business analysis, deployment, and system development sitting at
                            the office
                            customer rooms in the US, Canada, Asia ... to make it easier to connect with the development
                            team
                            in Viet Nam.</p>
                        <a href="{{ asset('service-of-human-resources') }}">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Service Section -->

    <!-- Start Page Banner Section -->
    <section class="banner-section"
        style="background-image: url({{ asset('assets/img/banner-services1.png') }}); margin-bottom: 48px; height: 300px;">
        <div class="d-table">
            <div class="d-tablecell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-left home-page-four-section-title language-title">
                                <h4 class="text-white">Supporting Programing Languages</h4>
                                <h2 class="d-inline-block"><span>We Are Providing </span>
                                    <h2 class="d-inline-block text-white" style="margin-left: 10px;">Quality Engineer To
                                        Clients</h2>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Banner Section -->
    <!-- End Service Section -->
    <section class="service-section service-section-four service-section-two pt-100">
        <div class="container">
            <div class="row justify-content-between mb-3">
                <div class="col-lg-2 text-center"></div>
                <div class="col-lg-8 text-center">
                    <div class="section-title-left">
                        <p>Learn about our operation method services to see how we can help you design, deploy and implement
                            solutions faster with low-risk.</p>
                    </div>
                </div>
                <div class="col-lg-2 text-center"></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-service mb-30">
                        {{-- <i class="flaticon-consultant-services"></i> --}}
                        <i class="fa-brands fa-java"></i>
                        <h4>Java Development</h4>
                        <p>Our highly skilled developers have experience all relevant Java platforms. These include the
                            various technologies such as containers (i.e. GlassFish, WebLogic), ORM Tools (i.e. Hibernate,
                            iBATIS), UI Frameworks (i.e. Primefaces, Richfaces), and Coding Frameworks (i.e. Tapestry,
                            Struts), to name a few.</p>
                        <a href="{{ route('java-systems-development') }}">Read more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service mb-30">
                        {{-- <i class="flaticon-house"></i> --}}
                        <i class="fa-brands fa-angular"></i>
                        <h4>Angular Development</h4>
                        <p>HACHINET provides Angular development and web design services focusing on resolving business
                            issues that impede the advancement of digital engagement and enhancing the usability of your
                            websites and web applications.</p>
                        <a href="{{ route('outsourcing-angular-development') }}">Read more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service mb-30">
                        {{-- <i class="flaticon-university"></i> --}}
                        <i class="fas fa-regular fa-network-wired"></i>
                        <h4>Cobol Development</h4>
                        <p>Get instant access to a large pool of high-quality COBOL developers from our large collection of
                            empaneled COBOL service providers. A handpicked team of COBOL programmers and business analysts
                            will deliver to you the highest quality output</p>
                        <a href="{{ route('cobol-systems-development') }}">Read more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service mb-30">
                        {{-- <i class="flaticon-drawer"></i> --}}
                        <i class="fa-brands fa-battle-net"></i>
                        <h4>.NET Development</h4>
                        <p>The .NET framework provides a consistent object-oriented environment for programming. Developers
                            rely on it to build applications that can run on different platforms simultaneously. You may
                            want to hire .NET development services if you want your application to run on mobile and desktop
                            in parallel, or any server platform, like iOS, Windows and Linux.</p>
                        <a href="{{ route('net-systems-development') }}">Read more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service mb-30">
                        <i class="fa-solid fa-mobile"></i>
                        <h4>Applications Development</h4>
                        <p>The process of using digital technologies to create new or modify existing business processes,
                            culture and customer experiences to meet changing business and market requirements.</p>
                        <a href="{{ route('smartphone-application-development') }}">Read more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service mb-30">
                        {{-- <i class="flaticon-stationery"></i> --}}
                        <i class="fa-brands fa-salesforce"></i>
                        <h4>Salesforce Development</h4>
                        <p>If you need instant access to additional Salesforce resources and don’t want the time, hassle or
                            long-term commitment of hiring in-house, outsourcing is perfect for you.</p>
                        <a href="{{ route('salesforce-development-outsource') }}">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Providing Section -->
    <section class="providing-section providing-section-two ptb-100" style="margin-bottom: 100px;">
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
    {{-- page --}}

    <section class="service-section service-section-four service-section-two pt-100">
        <div class="container">
            <div class="">
                <div class="">
                    <table border="1" class="table table-bordered border-warning">
                        <thead>
                            <tr>
                                <th class="w-50 text-center" style="color: white; background-color: #ffb701;">
                                    <h4>Project Base Contract</h4>
                                </th>
                                <th class="w-50 text-center" style="color: white; background-color: #ffb701;">
                                    <h4>Labo Contract</h4>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <h6>Responsibility</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="">-Defective product warranty</td>
                                <td class="">-Management attention</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <h6>Advantages for developers</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="">- Clear price, delivery date and
                                    output product <br>
                                    - Making exact plans easily <br>
                                    - No need to build a certain team <br></td>
                                <td class="">-Flexibly responding to changes in requirements. <br>
                                    -Building up well know-how,being
                                    able to keep experienced engineers.<br>
                                    -Clear expenditure-related aspects.</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <h6>Disadvantages for developers</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="">- Must make output product requirements clear <br>
                                    - Difficult to change demands while the developing process is going on. <br>
                                    - Higher cost due to risk estimation.</td>
                                <td class="">- Need to hand over certain parts of product periodically. <br>
                                    - Take time to build a team up. <br>
                                    - Misunderstand the content easily leads to low
                                    quality products.</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <h6>Suitable project</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="">- Projects which have small scale or short development time. <br>
                                    - Projects which have clear requirements
                                    and do not have any changes during development process</td>
                                <td class="">- Projects which usually changing product development parameters.
                                    <br>
                                    - Projects which developing new services or demo new applications.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    {{-- end pages --}}
    <section class="bg-blue providing-section-two ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="providing-title">
                        <h5 style="font-weight: lighter;">If you want to find a partner to supply information technology
                            personnel from Vietnam</h5>
                        <a href="{{ route('contact') }}">
                            <button class="button-contact mb-4 col-md-12">Leave contact information</button></a>
                    </div>
                    <h4 class="d-flex align-items-center justify-content-center providing-checkout"
                        style="font-weight: lighter;">For
                        ordering, please consult a dedicated
                        advisor <span class="box-span-in">completely free</span></h4>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="row my-3">
                                <div class="col-md-6">
                                    <a class="p-4 d-flex justify-content-between border rounded text-dark">
                                        <div>
                                            <img src="{{ asset('assets/img/service/phone.png') }}" width="80px"
                                                alt="" class="mr-1" srcset="">
                                        </div>
                                        <div class="m-auto">
                                            <h5 class="text-uppercase float-left contact">consult by phone</h5>
                                            <h5 class="my-1 contact-phone">(+84) 24-6290-0388</h5>
                                            <span class="contact-time">Reception hours: Weekdays 10:00 to 18:00</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="mailto:hello@hachinet.com"
                                        class="p-4 d-flex justify-content-between border rounded">
                                        <div>
                                            <img src="{{ asset('assets/img/service/email.png') }}" width="80px"
                                                alt="" class="mr-1" srcset="">
                                        </div>
                                        <div class="m-auto" style="color: #ffb701;">
                                            <h5 class="text-uppercase float-left contact-form">consult form</h5>
                                            <span class="mt-2 contact-description">We will contact you by the next business day.</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

                        <button class="default-btn disabled" type="button" id="submitEmail"
                            data-route="{{ route('contact.submitEmail') }}"
                            style="pointer-events: all; cursor: pointer;">
                            Subscribe
                        </button>

                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Subscribe Section -->
    <script src="{{ asset('admin_asset/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/submitEmail.js') }}"></script>
@endsection
