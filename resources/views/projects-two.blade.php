@extends('layouts.app')
@section('title', 'Hachinet | Project')
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
                                    <span>+123 456 7890</span>
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
                                <h2>about our <span>company projects</span></h2>
                                <ul>
                                    <li><a href="/">home <i class="flaticon-right"></i> </a></li>
                                    <li>projects two</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Banner Section -->

    <!-- Start Project Section -->
    <section class="project-section project-section-four project-section-two">
        <div class="container-fluid">
            <div class="project-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-left home-page-four-section-title">
                            <h4>Our Project Here</h4>
                            <h2>Let’s see Our <span>latest  Project</span></h2>
                        </div>
                    </div><!-- /.col-12 end  -->
                </div>
                <div class="sorting-menu">
                    <ul>
                        <li class="filter active" data-filter="all">all</li>
                        <li class="filter" data-filter=".health">health</li>
                        <li class="filter" data-filter=".house">house</li>
                        <li class="filter" data-filter=".interior-design">interior-design</li>
                        <li class="filter" data-filter=".office">office</li>
                        <li class="filter" data-filter=".architecture">architecture &amp; building</li>
                    </ul>
                </div>
            </div>
            <!-- /.sorting-menu -->
            <div id="Container" class="row">
                <div class="col-lg-6 col-md-12 p-0 mix health all" style="display: inline-block;" data-bound="">
                    <div class="single-project">
                        <img src="assets/img/portfolio-1.jpg" alt="">
                        <div class="project-text">
                            <a href="project-details-one">building</a>
                            <h3>Social Housing in Valleca</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 p-0 mix house architecture interior-design office all" style="display: inline-block;" data-bound="">
                    <div class="single-project">
                        <img src="assets/img/portfolio-2.jpg" alt="">
                        <div class="project-text">
                            <a href="project-details-one">building</a>
                            <h3>Social Housing in Valleca</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 p-0 mix house all" style="display: inline-block;" data-bound="">
                    <div class="single-project">
                        <img src="assets/img/portfolio-3.jpg" alt="">
                        <div class="project-text">
                            <a href="project-details-one">building</a>
                            <h3>Social Housing in Valleca</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 p-0 mix office all" style="display: inline-block;" data-bound="">
                    <div class="single-project">
                        <img src="assets/img/portfolio-4.jpg" alt="">
                        <div class="project-text">
                            <a href="project-details-one">building</a>
                            <h3>Social Housing in Valleca</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 p-0 mix architecture office interior-design all" style="display: inline-block;" data-bound="">
                    <div class="single-project">
                        <img src="assets/img/portfolio-5.jpg" alt="">
                        <div class="project-text">
                            <a href="project-details-one">building</a>
                            <h3>Social Housing in Valleca</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 p-0 mix health all" style="display: inline-block;" data-bound="">
                    <div class="single-project">
                        <img src="assets/img/portfolio-1.jpg" alt="">
                        <div class="project-text">
                            <a href="project-details-one">building</a>
                            <h3>Social Housing in Valleca</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Project Section -->

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
