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
                                <h2>about our <span>project details</span></h2>
                                <ul>
                                    <li><a href="/">home <i class="flaticon-right"></i> </a></li>
                                    <li>project details two</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Banner Section -->

    <!-- Start Project info Section -->
    <div class="project-info-section project-info-section-two pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-slider-wrapper-two owl-carousel owl-theme owl-loaded owl-drag">



                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-3918px, 0px, 0px); transition: all 1.5s ease 0s; width: 9142px;"><div class="owl-item cloned" style="width: 1296px; margin-right: 10px;"><div class="single-related-project">
                            <img src="assets/img/project-details/project-2.jpg" alt="">
                        </div></div><div class="owl-item cloned" style="width: 1296px; margin-right: 10px;"><div class="single-related-project">
                            <img src="assets/img/project-details/project-3.jpg" alt="">
                        </div></div><div class="owl-item" style="width: 1296px; margin-right: 10px;"><div class="single-related-project">
                            <img src="assets/img/project-details/project-1.jpg" alt="">
                        </div></div><div class="owl-item active" style="width: 1296px; margin-right: 10px;"><div class="single-related-project">
                            <img src="assets/img/project-details/project-2.jpg" alt="">
                        </div></div><div class="owl-item" style="width: 1296px; margin-right: 10px;"><div class="single-related-project">
                            <img src="assets/img/project-details/project-3.jpg" alt="">
                        </div></div><div class="owl-item cloned" style="width: 1296px; margin-right: 10px;"><div class="single-related-project">
                            <img src="assets/img/project-details/project-1.jpg" alt="">
                        </div></div><div class="owl-item cloned" style="width: 1296px; margin-right: 10px;"><div class="single-related-project">
                            <img src="assets/img/project-details/project-2.jpg" alt="">
                        </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Project info Section -->

    <!-- Start Project info Section -->
    <section class="project-info-section project-info-section-two pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="project-info-wrapper">
                        <h3>Project Info</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="project-info-list">
                                    <h4>Category</h4>
                                    <p>Building</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="project-info-list">
                                    <h4>Location</h4>
                                    <p>New York, USA</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="project-info-list">
                                    <h4>Completed</h4>
                                    <p>25 Aug, 2018</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="project-info-list">
                                    <h4>Budgets</h4>
                                    <p>$250.000</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="project-info-list">
                                    <h4>Clients</h4>
                                    <p>Logistic Company</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="project-info-list">
                                    <h4>Project url</h4>
                                    <p><a href="#">www.example.com</a></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="project-info-list">
                                    <h4>Clients</h4>
                                    <p>Logistic Company</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="project-info-list">
                                    <h4>Project url</h4>
                                    <p><a href="#">www.example.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <ul class="social-links">
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
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-related-project">
                                <img src="assets/img/project-details/1.jpg" alt="">
                                <img src="assets/img/project-details/3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-related-project">
                                <img src="assets/img/project-details/4.jpg" alt="">
                                <img src="assets/img/project-details/2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Project info Section -->

    <!-- Start Project Description -->
    <section class="project-description project-description-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="project-description-wrapper">
                        <h3>project description</h3>
                        <p class="project-content-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo tenetur quaerat laborum corporis voluptatum dolor quae ipsam aspernatur, unde, consequatur quibusdam! Assumenda aut hic dolor soluta illum nisi dolorum quis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo tenetur quaerat laborum corporis voluptatum dolor quae ipsam aspernatur, unde, consequatur quibusdam! Assumenda aut hic dolor soluta illum nisi dolorum quis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo tenetur quaerat laborum corporis</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt et, distinctio officia laboriosam neque voluptate reiciendis nulla. Et, eum, veniam quo iusto modi velit minus dicta dignissimos quas dolores Illo tenetur quaerat laborum corporis nemo.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="project-details-wrapper">
                        <h3>project details</h3>
                        <ul>
                            <li>
                                <i class="flaticon-check-mark"></i>
                                Objectively innovate empowered
                            </li>
                            <li>
                                <i class="flaticon-check-mark"></i>
                                Holisticly predominate extensible
                            </li>
                            <li>
                                <i class="flaticon-check-mark"></i>
                                Procedures for reliable supply chains
                            </li>
                            <li>
                                <i class="flaticon-check-mark"></i>
                                Dramatically engage top-line services
                            </li>
                        </ul>
                        <a class="default-btn" href="#">live preview</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Project Description -->

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
