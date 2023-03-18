@extends('layouts.app')
@section('title', $blog->title)
@section('meta_title', $blog->title)
@section('meta_image', asset('storage/' . $blog->thumbnail))
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/slide.css?v=1') }}">
    <style>
        .get-in-touch-section::before {
            content: "";
            display: block;
            height: 1px;
            background: #eee;
            width: calc(100% - 30px);
            margin: 10px auto 15px;
        }

        .error {
            color: red;
        }

        .form-control.error {
            color: inherit !important;
            border: 1px solid red !important;
        }
    </style>
@endpush
@section('content')
    <!-- Start Page Banner Section -->
    <section class="banner-section project-one-banner">
        <div class="d-table">
            <div class="d-tablecell">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title">
                                <h2>{{ $blog->title }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Banner Section -->

    <!-- Start Blogs Section -->
    <div class="blogs-section blog-details-section  pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="single-blogs">
                        <div class="blog-img" style="height: 400px;">
                            <img src="{{ asset($blog->thumbnail) }}" alt="blog" style="height: inherit;">
                            <div class="post-date">
                                <span class="date">{{ $blog->created_at->format('d') }}</span>
                                <p>{{ $blog->created_at->format('M') }}</p>
                            </div>
                        </div>
                        <div style="font-style: italic;
                        padding: 30px 0;">
                            <p>{!! $blog->description !!}</p>
                        </div>
                        <div class="blogs-content blogs-contents mt-0">
                            <ul>
                                <li><i class="flaticon-man-user"></i> <a href="#">{{ $blog->users->name }}</a></li>
                                <li><i class="flaticon-calendar"></i>{{ $blog->created_at->format('M d, Y') }}</li>
                                <li><i class="flaticon-comment-black-oval-bubble-shape"></i>comment</li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog-details-text">
                        <p>{!! $blog->content !!}</p>
                    </div>
                    <div class="get-in-touch-section">
                        <div class="get-in-touch-wrapper" style="padding: 30px!important;">
                            <div class="row">
                                <div class="contact-wrapper">
                                    <h3>Contact Us</h3>
                                    <ul class="contact-info">
                                        <li>
                                            <i class="flaticon-telephone-handle-silhouette"></i>
                                            <a href="tel:+16502898192">Call us (+84) 24-6290-0388</a>
                                        </li>
                                        <li>
                                            <i class="flaticon-mail-black-envelope-symbol"></i>
                                            <a href="mailto:hello@hachinet.com">hello@hachinet.com</a>
                                        </li>
                                        <li>
                                            <i class="flaticon-clock-of-circular-shape-outline"></i>
                                            Open Hours 09:00 am - 06:00 pm
                                        </li>
                                        <li>
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                            218 Fleming Ave, San Jose, CA 95127, sUSA
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="leave-a-reply">
                        <p>If you have questions or cooperate with Hachinet. <br />Please leave your information here, we
                            will get back to you.</p>
                        @if (!empty(session('success')))
                            <p class="text-success mt-0">
                                {{ session('success') }}
                            </p>
                        @endif
                        @if (!empty(session('error')))
                            <p class="text-danger mt-0">
                                {{ session('error') }}
                            </p>
                        @endif
                        <form id="form-feedback-mail" action="{{ route('contact.feedbackEmail') }}" method="Post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Type Your Comment Here"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="submit-btn">Submit <i
                                            class="flaticon-right-arrow"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="sidebar-area">
                        <div class="widget widget-search">
                            <form>
                                <input type="text" class="form-control" placeholder="Search Blog Here">
                                <button type="submit"><i class="flaticon-search"></i></button>
                            </form>
                        </div>

                        <div class="widget widget_post_categories">
                            <h3 class="widget-title widget-titles">Categories</h3>
                            <ul>
                                @foreach ($categories as $el)
                                    <li><a
                                            href="{{ route('blog', [
                                                'category' => $el->slug,
                                            ]) }}"><i
                                                class="flaticon-right"></i>
                                            {{ $el->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="widget widget_tag_cloud">
                            <h3 class="widget-title">Blog Tags</h3>
                            <div class="tagcloud">
                                @foreach ($blog->tag as $el)
                                    <a href="#">{{ $el }}</a>
                                @endforeach
                            </div>
                        </div>

                        <div class="widget widget_recent_posts">
                            <h3 class="widget-title">Popular post </h3>
                            <ul>
                                @foreach ($blogRelated as $it)
                                    <li class="p-0 mb-3">
                                        {{-- <div class="recent-post-thumb">
                                            <a href="#">
                                                <img src="{{ asset('storage/' . $it->thumbnail) }}" alt="blog-image">
                                            </a>
                                        </div> --}}

                                        <div class="recent-post-content">
                                            <h3><a href="{{ route('blog-detail', $it->slug) }}">{{ $it->title }}</a>
                                            </h3>
                                            <span class="date mt-0">{{ $it->created_at->format('d M Y') }}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        {{-- <div class="widget widget_call">
                            <i class="flaticon-telephone-handle-silhouette"></i>
                            <p>Got any Questions? </p>
                            <p>Call us Today!</p>

                            <a href="tel:+8424-6290-0388">(+84) 24-6290-0388</a>
                            <br />
                            <a href="mailto:hello@hachinet.com">hello@hachinet.com</a>
                        </div> --}}
                        <div id="pSlider">
                            <ol id="slider-container" dir="ltr">
                                <li id="slide_1" class="li_slide">
                                    <a class="slide-snapper" href="{{ route('salesforce-development-outsource') }}"></a>
                                    <a class="prev_slide" href="#slide_5"></a> <a class="next_slide" href="#slide_2"></a>
                                </li>
                                <li id="slide_2" class="li_slide">
                                    <a class="slide-snapper"
                                        href="{{ route('smartphone-application-development') }}"></a>
                                    <a class="prev_slide" href="#slide_1"></a> <a class="next_slide"
                                        href="#slide_3"></a>
                                </li>
                                <li id="slide_3" class="li_slide">
                                    <a class="slide-snapper" href="{{ route('java-systems-development') }}"></a>
                                    <a class="prev_slide" href="#slide_2"></a> <a class="next_slide"
                                        href="#slide_4"></a>
                                </li>
                                <li id="slide_4" class="li_slide">
                                    <a class="slide-snapper" href="{{ route('cobol-systems-development') }}"></a>
                                    <a class="prev_slide" href="#slide_3"></a> <a class="next_slide"
                                        href="#slide_5"></a>
                                </li>
                                <li id="slide_5" class="li_slide">
                                    <a class="slide-snapper" href="{{ route('net-systems-development') }}"></a>
                                    <a class="prev_slide" href="#slide_4"></a> <a class="next_slide"
                                        href="#slide_1"></a>
                                </li>
                            </ol>
                        </div>

                        {{-- end slide --}}
                        <div class="widget widget-search mt-3">
                            <h3 class="widget-title">NewsLetter</h3>
                            <form>
                                <input type="email" class="form-control" placeholder="Enter Your Email">
                                <button type="submit"><i class="flaticon-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
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
                    <form class="newsletter-form">
                        <input type="email" class="form-control" required placeholder="Enter Your Email"
                            name="email" id="email">

                        <button class="default-btn disabled" id="submitEmail"
                            data-route="{{ route('contact.submitEmail') }}" type="button"
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
@endsection
@push('js')
    <script src="{{ asset('admin_asset/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/submitEmail.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script>
        $('#form-feedback-mail').validate({
            rules: {
                "name": {
                    required: true,
                },
                "email": {
                    required: true,
                    email: true
                },
                "message": {
                    required: true,
                    minlength: 6
                },
            },
            submitHandler: function(form) {
                $('.submit-btn').prop("disabled", true);
                form.submit();
            }
        });
    </script>
@endpush
