@extends('layouts.app')
@section('title', 'Hachinet | Project')
@section('content')
    <!-- Start Page Banner Section -->
    <section class="banner-section project-one-banner">
        <div class="d-table">
            <div class="d-tablecell">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title">
                                <h2>our company <span>projects</span></h2>
                                <ul>
                                    <li><a href="/">home <i class="flaticon-right"></i></a></li>
                                    <li>projects one</li>
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
    <section class="project-section project-one">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-left">
                        <h3>Our Project Here</h3>
                        <h2><span>Here’s Our</span> Latest Projects</h2>
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
            <!-- /.sorting-menu -->
            <div id="Container" class="row">
                <div class="col-lg-4 col-md-6 mix health all" style="display: inline-block;" data-bound="">
                    <div class="single-projects">
                        <img src="assets/img/projet/project-1.jpg" alt="">
                        <div class="project-text">
                            <h3>Triangles Concrete House On lake</h3>
                            <a href="project-details-one">see project <i class="flaticon-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 mix house architecture interior-design office all" style="display: inline-block;" data-bound="">
                    <div class="single-projects">
                        <img src="assets/img/projet/project-2.jpg" alt="">
                        <div class="project-text">
                            <h3>Triangles Concrete House On lake</h3>
                            <a href="project-details-one">see project <i class="flaticon-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mix house all" style="display: inline-block;" data-bound="">
                    <div class="single-projects">
                        <img src="assets/img/projet/project-3.jpg" alt="">
                        <div class="project-text">
                            <h3>Triangles Concrete House On lake</h3>
                            <a href="project-details-one">see project <i class="flaticon-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mix office all" style="display: inline-block;" data-bound="">
                    <div class="single-projects">
                        <img src="assets/img/projet/project-4.jpg" alt="">
                        <div class="project-text">
                            <h3>Triangles Concrete House On lake</h3>
                            <a href="project-details-one">see project <i class="flaticon-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mix architecture office interior-design all" style="display: inline-block;" data-bound="">
                    <div class="single-projects">
                        <img src="assets/img/projet/project-5.jpg" alt="">
                        <div class="project-text">
                            <h3>Triangles Concrete House On lake</h3>
                            <a href="project-details-one">see project <i class="flaticon-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 mix health all" style="display: inline-block;" data-bound="">
                    <div class="single-projects">
                        <img src="assets/img/projet/project-6.jpg" alt="">
                        <div class="project-text">
                            <h3>Triangles Concrete House On lake</h3>
                            <a href="project-details-one">see project <i class="flaticon-right"></i></a>
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
