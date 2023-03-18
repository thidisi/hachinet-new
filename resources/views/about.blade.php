@extends('layouts.app')
@section('title', 'Hachinet | About')
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
                                <h2>Hachinet Groups</h2>
                                <ul>
                                    <li><a href="/">home <i class="flaticon-right"></i> </a></li>
                                    <li>about</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Banner Section -->

    <!-- Start About Section -->
    <section class="about-section-four ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="experience-video">
                        <img src="assets/img/about/hachinet-about-1.png" alt="">
                        <div class="play-video-icon">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=zjZ0STPeYQM">
                                <i class="flaticon-play-button"></i>
                                <div class="sonar-wrapper">
                                    <div class="sonar-emitter">
                                        <div class="sonar-wave"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="experience-year">
                            <span>5</span>
                            <h2>countries</h2>
                            <p>experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text-wrapper">
                        <div class="section-title-left home-page-four-section-title">
                            <h4>about us</h4>
                            <h2><span>Trusted</span> By <span>Global Leaders</span></h2>
                            <p>We are trusted by global leaders for our commitment, quality processes, engineering
                                competencies and willingness to learn fast.</p>
                            <p>Management Methodology, Organizational Practices & Tools and Continuous Improvement
                                activities, standardized throughout Hachinet Software, are essential factors to ensure good
                                quality products are consistently delivered in a timely manner.</p>
                        </div>
                        <div class="about-list-wrapper">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="about-lists">
                                        <h4><i class="flaticon-check-mark"></i> Trusted By Global Leaders</h4>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="about-lists">
                                        <h4><i class="flaticon-check-mark"></i> Scalable Resource Pool</h4>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="about-lists">
                                        <h4><i class="flaticon-check-mark"></i> Best-in-class Process</h4>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="about-lists">
                                        <h4><i class="flaticon-check-mark"></i> Competitive Cost</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>People are prized assets in a knowledge industry such as ours. To ensure a highly motivated team,
                            peak performance and to develop world-class leaders, Hachinet Groups invests heavily in its
                            people at all levels.</p>
                        <a class="default-btn" href="">
                            Learn More
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Start Counter Section -->
    <div class="counter-section about-page-counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-counter mb-30">
                        <span class="counter">6</span>
                        <sup>+</sup>
                        <p>Years of Experience</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-counter  mb-30">
                        <span class="counter">68</span>
                        <sup>+</sup>
                        <p>Done total project</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-counter">
                        <span class="counter">153</span>
                        <sup>+</sup>
                        <p>Qualified Workers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Counter Section -->

    <!-- Start Skill Section -->
    <section class="skill-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title-left home-page-four-section-title">
                        <h4>What We do</h4>
                        <h2><span>Know More</span>About Us What We Are <span>Doing for you</span></h2>
                        <p>Business Processes that can be Improved Right Away</p>
                        <a href="#about" class="default-btn contact">
                            learn more
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="skill-bar-wrapper skill-bar-wrapper-two">
                        <div class="skill-bar" data-percentage="65%">
                            <h4 class="progress-title-holder">
                                <span class="progress-title">Front-end Programer</span>
                                <span class="progress-number-wrapper">
                                    <span class="progress-number-mark" style="left: 65%;">
                                        <span class="percent">65%</span>
                                        <span class="down-arrow"></span>
                                    </span>
                                </span>
                            </h4>
                            <div class="progress-content-outter">
                                <div class="progress-content" style="width: 65%;"></div>
                            </div>
                        </div>
                        <div class="skill-bar" data-percentage="86%">
                            <h4 class="progress-title-holder clearfix">
                                <span class="progress-title">Back-end Programer</span>
                                <span class="progress-number-wrapper">
                                    <span class="progress-number-mark" style="left: 86%;">
                                        <span class="percent">86%</span>
                                        <span class="down-arrow"></span>
                                    </span>
                                </span>
                            </h4>
                            <div class="progress-content-outter">
                                <div class="progress-content" style="width: 86%;"></div>
                            </div>
                        </div>
                        <div class="skill-bar" data-percentage="25%">
                            <h4 class="progress-title-holder clearfix">
                                <span class="progress-title">Mobile Programer</span>
                                <span class="progress-number-wrapper">
                                    <span class="progress-number-mark" style="left: 25%;">
                                        <span class="percent">25%</span>
                                        <span class="down-arrow"></span>
                                    </span>
                                </span>
                            </h4>
                            <div class="progress-content-outter">
                                <div class="progress-content" style="width: 25%;"></div>
                            </div>
                        </div>
                        <div class="skill-bar" data-percentage="25%">
                            <h4 class="progress-title-holder clearfix">
                                <span class="progress-title">Software Designer Engineer</span>
                                <span class="progress-number-wrapper">
                                    <span class="progress-number-mark" style="left: 25%;">
                                        <span class="percent">25%</span>
                                        <span class="down-arrow"></span>
                                    </span>
                                </span>
                            </h4>
                            <div class="progress-content-outter">
                                <div class="progress-content" style="width: 25%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Skill Section -->

    <!-- Start Our Company Section -->
    <section class="our-company-section service-section-four service-section-four-two ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-left home-page-four-section-title">
                        <h4>Our Company</h4>
                        <h2>We are <span>technology innovators</span> and <span>technology lovers</span>, bringing
                            technology<span> to life</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 pr-0 single-sevice-1">
                    <div class="single-service mb-30">
                        <i class="flaticon-vision"></i>
                        <h4>Our Hachinet Vision</h4>
                        <p>With the goal of becoming an innovative and creative company, we work with our customers to
                            create more digital transformation solutions that drive social progress.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 single-sevice-2">
                    <div class="single-service mb-30">
                        <i class="flaticon-mission-accomplished"></i>
                        <h4>Our Hachinet Mission</h4>
                        <p>We exist to bring the best solutions to world’s leading organizations through committed people &
                            teams delivering inspiration, innovation & impact.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-sm-3 offset-lg-0 pl-0 single-sevice-3">
                    <div class="single-service mb-30">
                        <i class="flaticon-goal"></i>
                        <h4>Our Hachinet Goal</h4>
                        <p>We aim to globalize our company, which includes diversity in skin color and ethnicity, and
                            respect for all religions, working together under the Hachinet flag.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Company Section -->
    {{-- start languages --}}
    <section class="skill-section pt-4 pb-70">
        <div class="container">
            <div class="section-heading text-center pb-5">
                <h2 class=" bl-text limited text-uppercase">Development tools</h2>
                <span class="line" style="display: block; width: 300px; margin: 0 auto; border-bottom: 4px solid #ffb701;"></span>
            </div>
        </div>
        <div class="row pt-1 pb-1 text-center">
            <div class="col-md-2 col-sm-4 col-6">
                <img width="100px" src="{{ asset('assets/img/dev-tools/java.png')}}" alt="Java">
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <img width="100px" src="{{ asset('assets/img/dev-tools/c_sharp.png') }}" alt="C#">
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <img width="100px" src="{{ asset('assets/img/dev-tools/dotnet.png')}}" alt=".NET">
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <img width="100px" src="{{ asset('assets/img/dev-tools/python.png')}}" alt="Python ">
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <img width="100px" src="{{ asset('assets/img/dev-tools/php.png')}}" alt="PHP ">
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <img width="100px" src="{{ asset('assets/img/dev-tools/angular.png') }}" alt="Angular ">
            </div>
        </div>
        <div class="d-md-block"></div>
        <div class="row pt-1 pb-1 text-center">
            <div class="col-md-2 col-sm-4 col-6">
                <img width="100px" src="{{ asset('assets/img/dev-tools/react.png')}}" alt="React ">
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <img width="100px" src="{{ asset('assets/img/dev-tools/redux.png')}}" alt="Redux ">
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <img width="100px" src="{{ asset('assets/img/dev-tools/fabric.png')}}" alt="Fabricjs ">
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <img width="100px" src="{{ asset('assets/img/dev-tools/spring.png')}}" alt="ソフトウェアのメンテナンス">
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <img width="100px" src="{{ asset('assets/img/dev-tools/Swagger.png')}}" alt="Swagger ">
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <img width="100px" src="{{ asset('assets/img/dev-tools/mysql.png')}}" alt="Mysql ">
            </div>
        </div>
        <div class="d-md-block"></div>
        <div class="row pt-1 pb-1 text-center">
            <div class="col-md-2 col-sm-4 col-6">
                <img width="100px" src="{{ asset('assets/img/dev-tools/oracle.jpg')}}" alt="Oracle ">
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <img width="100px" src="{{ asset('assets/img/dev-tools/sql_server.png')}}"
                    alt="SQL Server ">
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <img width="100px" src="{{ asset('assets/img/dev-tools/rabbit.png')}}" alt="Rabbit ">
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <img width="100px" src="{{ asset('assets/img/dev-tools/mongodb.png')}}" alt="MongoDb ">
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <img width="100px" src="{{ asset('assets/img/dev-tools/docker.png')}}" alt="Docker ">
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <img width="100px" src="{{ asset('assets/img/dev-tools/aws.png')}}"
                    alt="Amazon Web Service ">
            </div>
        </div>
        <div class="d-md-block"></div>
        <div class="row pt-1 pb-1 col-md-offset-4 col-sm-offset-0 text-center d-flex justify-content-center">
            <div class="col-md-2 col-sm-4 col-6">
                <img width="100px" src="{{ asset('assets/img/dev-tools/nodejs.png')}}" alt="Nodejs ">
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <img width="100px" src="{{ asset('assets/img/dev-tools/firebase.png')}}" alt="Firebase ">
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <img width="100px" src="{{ asset('assets/img/dev-tools/consul.png')}}" alt="Consul ">
            </div>
        </div>
        </div>
    </section>
    {{-- end languages --}}
    <!-- Start Providing Section -->
    {{-- <section class="providing-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="providing-title">
                        <h2>Providing digital transformation solutions</h2>
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
                                Construction
                            </a>
                        </li>
                        <li>
                            <a href="#tuna-2">
                                <i class="flaticon-factory"></i>
                                Industrial
                            </a>
                        </li>
                        <li>
                            <a href="#tuna-3">
                                <i class="flaticon-worker"></i>
                                Engineering
                            </a>
                        </li>
                        <li>
                            <a href="#tuna-4">
                                <i class="flaticon-repairman"></i>
                                Maintenance
                            </a>
                        </li>
                        <li>
                            <a href="#tuna-5">
                                <i class="flaticon-ship"></i>
                                Distribution
                            </a>
                        </li>
                        <li>
                            <a href="#tuna-6">
                                <i class="flaticon-oil-pump"></i>
                                Petroleum
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
                                <h3>Construction Management</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="company-text">
                                <h3>Construction Management</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                            <div class="company-text">
                                <h3>Construction Management</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tuna-2" class="animated content-wrapper">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="company-text">
                                <h3>Construction Management</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="company-text">
                                <h3>Construction Management</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                            <div class="company-text">
                                <h3>Construction Management</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tuna-3" class="animated content-wrapper">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="company-text">
                                <h3>Construction Management</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="company-text">
                                <h3>Construction Management</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                            <div class="company-text">
                                <h3>Construction Management</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tuna-4" class="animated content-wrapper">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="company-text">
                                <h3>Construction Management</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="company-text">
                                <h3>Construction Management</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                            <div class="company-text">
                                <h3>Construction Management</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tuna-5" class="animated content-wrapper">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="company-text">
                                <h3>Construction Management</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="company-text">
                                <h3>Construction Management</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                            <div class="company-text">
                                <h3>Construction Management</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tuna-6" class="animated content-wrapper">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="company-text">
                                <h3>Construction Management</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="company-text">
                                <h3>Construction Management</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                            <div class="company-text">
                                <h3>Construction Management</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="providing-section providing-section-two ptb-100">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="providing-title">
                        <h2>Staffing Services Process At Hachinet Software</h2>
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
                    <form class="newsletter-form" data-toggle="validator" novalidate="true">
                        <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL"
                            required="" autocomplete="off">

                            <button class="default-btn disabled" type="button" id="submitEmail" data-route="{{ route('contact.submitEmail') }}" style="pointer-events: all; cursor: pointer;">
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
