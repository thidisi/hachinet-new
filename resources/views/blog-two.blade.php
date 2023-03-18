@extends('layouts.app')
@section('title', 'Hachinet | Blogs')
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
                                <h2>about our <span>company blog</span></h2>
                                <ul>
                                    <li><a href="/">home <i class="flaticon-right"></i> </a></li>
                                    <li>blog two</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Banner Section -->

    <!-- Start Blogs Section -->
    <div class="blogs-section blogs-section-two pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-blogs mb-30">
                        <div class="blog-img">
                            <a href="blog-details"><img src="assets/img/blog/blog-1.jpg" alt="blog"></a>
                            <div class="post-date">
                                <span class="date">25</span>
                                <p>February</p>
                            </div>
                        </div>
                        <div class="blogs-content">
                            <ul>
                                <li><i class="flaticon-man-user"></i> <a href="#">Admin</a></li>
                                <li><i class="flaticon-calendar"></i>June 10, 2019</li>
                                <li><i class="flaticon-comment-black-oval-bubble-shape"></i>comment</li>
                            </ul>
                            <h2><a href="blog-details">Industrial Project Solutions</a></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis laboriosam veritatis distinctio blanditiis fugiat ratione dolores, rerum natus nemo, vitae obcaecati at earum repellendus voluptatum odit perspiciatis accusantium. Sapiente, unde?</p>
                            <div class="learn-share">
                                <a class="learn" href="#">learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-blogs mb-30">
                        <div class="blog-img">
                            <a href="blog-details"><img src="assets/img/blog/blog-2.jpg" alt="blog"></a>
                            <div class="post-date">
                                <span class="date">26</span>
                                <p>February</p>
                            </div>
                        </div>
                        <div class="blogs-content">
                            <ul>
                                <li><i class="flaticon-man-user"></i> <a href="#">Admin</a></li>
                                <li><i class="flaticon-calendar"></i>June 10, 2019</li>
                                <li><i class="flaticon-comment-black-oval-bubble-shape"></i>comment</li>
                            </ul>
                            <h2><a href="blog-details">Crane Building Services &amp; Utilities</a></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis laboriosam veritatis distinctio blanditiis fugiat ratione dolores, rerum natus nemo, vitae obcaecati at earum repellendus voluptatum odit perspiciatis accusantium. Sapiente, unde?</p>
                            <div class="learn-share">
                                <a class="learn" href="#">learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-blogs mb-30">
                        <div class="blog-img">
                            <a href="blog-details"><img src="assets/img/blog/blog-3.jpg" alt="blog"></a>
                            <div class="post-date">
                                <span class="date">27</span>
                                <p>February</p>
                            </div>
                        </div>
                        <div class="blogs-content">
                            <ul>
                                <li><i class="flaticon-man-user"></i> <a href="#">Admin</a></li>
                                <li><i class="flaticon-calendar"></i>June 10, 2019</li>
                                <li><i class="flaticon-comment-black-oval-bubble-shape"></i>comment</li>
                            </ul>
                            <h2><a href="blog-details">Quality Equipment Solutions</a></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis laboriosam veritatis distinctio blanditiis fugiat ratione dolores, rerum natus nemo, vitae obcaecati at earum repellendus voluptatum odit perspiciatis accusantium. Sapiente, unde?</p>
                            <div class="learn-share">
                                <a class="learn" href="#">learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-blogs mb-30">
                        <div class="blog-img">
                            <a href="blog-details"><img src="assets/img/blog/blog-4.jpg" alt="blog"></a>
                            <div class="post-date">
                                <span class="date">28</span>
                                <p>February</p>
                            </div>
                        </div>
                        <div class="blogs-content">
                            <ul>
                                <li><i class="flaticon-man-user"></i> <a href="#">Admin</a></li>
                                <li><i class="flaticon-calendar"></i>June 10, 2019</li>
                                <li><i class="flaticon-comment-black-oval-bubble-shape"></i>comment</li>
                            </ul>
                            <h2><a href="blog-details">Industrial Perfect Planning</a></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis laboriosam veritatis distinctio blanditiis fugiat ratione dolores, rerum natus nemo, vitae obcaecati at earum repellendus voluptatum odit perspiciatis accusantium. Sapiente, unde?</p>
                            <div class="learn-share">
                                <a class="learn" href="#">learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="pagenavigation-section">
                    <nav aria-label="Page navigation example text-center">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link page-links" href="#">
                                    <i class="flaticon-left"></i>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="flaticon-right-1"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blogs Section -->

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
                        <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required="" autocomplete="off">

                        <button class="default-btn disabled" type="submit" style="pointer-events: all; cursor: pointer;">
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
