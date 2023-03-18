@extends('layouts.app')

@section('content')
    <!-- Start Sidebar Modal -->
    <div class="sidebar-modal">  
        <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="flaticon-close-cross"></i></span></button>

                        <h2 class="modal-title" id="myModalLabel2"><a href="/"><img src="assets/img/logo.png" alt="logo"></a></h2>
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
                                <h2>about our <span>expert team</span></h2>
                                <ul>
                                    <li><a href="/">home <i class="flaticon-right"></i> </a></li>
                                    <li>team</li>
                                </ul>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    <!-- End Page Banner Section -->

    <!-- Start Team Man Section -->
    <section class="team-man-section team-one-section team-one-section-two ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-left home-page-four-section-title text-center">
                        <h4>Who We are</h4>
                        <h2><span>They’re</span> Head Of Team</h2>
                        <p>With a view to enabling customers to optimize their business process at reasonable price, our leaders have the ingredients of passion, experience and dedication to realize it, making Hachinet Software a well-chosen partner in their implementing and applying digital solutions.</p> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team-wrapper mb-30">
                        <div class="single-team">
                            <img src="assets/img/team-1.jpg" alt="">
                            <ul class="social-links">
                                <li>
                                    <a href="#"><i class="flaticon-twitter-black-shape"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-linkedin-logo"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-instagram-logo"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-team-title">
                            <h4>paul carter</h4>
                            <p>founder</p>
                            <div class="team-icon">
                                <a href="#">
                                    <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team-wrapper mb-30">
                        <div class="single-team">
                            <img src="assets/img/team-2.jpg" alt="">
                            <ul class="social-links">
                                <li>
                                    <a href="#"><i class="flaticon-twitter-black-shape"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-linkedin-logo"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-instagram-logo"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-team-title">
                            <h4>john smith</h4>
                            <p>marketing</p>
                            <div class="team-icon">
                                <a href="#">
                                    <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-sm-3 offset-lg-0">
                    <div class="single-team-wrapper mb-30">
                        <div class="single-team">
                            <img src="assets/img/team-3.jpg" alt="">
                            <ul class="social-links">
                                <li>
                                    <a href="#"><i class="flaticon-twitter-black-shape"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-linkedin-logo"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-instagram-logo"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-team-title">
                            <h4>emma doe</h4>
                            <p>manager</p>
                            <div class="team-icon">
                                <a href="#">
                                    <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Man Section -->

    <!-- Start Team Man Section -->
    <section class="team-man-section team-man-section-two ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-left home-page-four-section-title text-center">
                        <h4>Who We are</h4>
                        <h2><span>Our Best</span> Experts</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team-wrapper mb-30">
                        <div class="single-team">
                            <img src="assets/img/team-1.jpg" alt="">
                            <ul class="social-links">
                                <li>
                                    <a href="#"><i class="flaticon-twitter-black-shape"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-linkedin-logo"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-instagram-logo"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-team-title">
                            <h4>paul carter</h4>
                            <p>founder</p>
                            <div class="team-icon">
                                <a href="#">
                                    <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team-wrapper mb-30">
                        <div class="single-team">
                            <img src="assets/img/team-2.jpg" alt="">
                            <ul class="social-links">
                                <li>
                                    <a href="#"><i class="flaticon-twitter-black-shape"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-linkedin-logo"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-instagram-logo"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-team-title">
                            <h4>john smith</h4>
                            <p>marketing</p>
                            <div class="team-icon">
                                <a href="#">
                                    <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team-wrapper mb-30">
                        <div class="single-team">
                            <img src="assets/img/team-3.jpg" alt="">
                            <ul class="social-links">
                                <li>
                                    <a href="#"><i class="flaticon-twitter-black-shape"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-linkedin-logo"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-instagram-logo"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-team-title">
                            <h4>emma doe</h4>
                            <p>manager</p>
                            <div class="team-icon">
                                <a href="#">
                                    <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team-wrapper mb-30">
                        <div class="single-team">
                            <img src="assets/img/team-4.jpg" alt="">
                            <ul class="social-links">
                                <li>
                                    <a href="#"><i class="flaticon-twitter-black-shape"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-linkedin-logo"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-instagram-logo"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-team-title">
                            <h4>jony eyre</h4>
                            <p>consultant</p>
                            <div class="team-icon">
                                <a href="#">
                                    <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team-wrapper mb-30">
                        <div class="single-team">
                            <img src="assets/img/team-5.jpg" alt="">
                            <ul class="social-links">
                                <li>
                                    <a href="#"><i class="flaticon-twitter-black-shape"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-linkedin-logo"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-instagram-logo"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-team-title">
                            <h4>clark ken</h4>
                            <p>consultant</p>
                            <div class="team-icon">
                                <a href="#">
                                    <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team-wrapper mb-30">
                        <div class="single-team">
                            <img src="assets/img/team-1.jpg" alt="">
                            <ul class="social-links">
                                <li>
                                    <a href="#"><i class="flaticon-twitter-black-shape"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-linkedin-logo"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-instagram-logo"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-team-title">
                            <h4>jony eyre</h4>
                            <p>consultant</p>
                            <div class="team-icon">
                                <a href="#">
                                    <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-join">
                    <a href="#about" class="default-btn">
                        join us
                        <i class="flaticon-right-arrow"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Man Section -->

    <!-- Start Submit Section -->
    <div class="submit-section">
        <form id="contactForm" novalidate="true">
            <div class="container">
                <div class="row"> 
                    <div class="col-lg-3 col-md-6"> 
                        <div class="form-group">
                            <label>first name</label>
                            <input type="text" class="form-control" required="" data-error="Please enter your name here" placeholder="Enter Your Frist Name">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6"> 
                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" class="form-control" required="" data-error="Please enter your name here" placeholder="Enter Your Last Name">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6"> 
                        <div class="form-group">
                            <label>Enter Address</label>
                            <input type="email" class="form-control" required="" data-error="Please enter your email" placeholder="Enter Your Email Address">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="text-center">
                            <button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;">
                                send us now 
                                <i class="flaticon-right-arrow"></i>
                            </button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- End Submit Section -->
@endsection