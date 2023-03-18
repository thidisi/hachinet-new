@extends('layouts.app')
@section('title', 'Hachinet Application Development')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/service.css') }}">
@endpush
@section('content')
    <header class="bg-gradient text-center text-body pt-5" id="home">
        <div class="container pt-5">
            <h1 class="text-body mt-5">Mobile and Application development</h1>
            <p clTo understand your business, we provide a series of application development such as planning, proposal,
                design, development, operation, market application, maintenance, and management.ass="tagline"></p>
        </div>
        <div class="img-holder mt-3"><img src="{{ asset('assets/img/service/iphonex.png') }}" alt="phone"
                class="img-fluid"></div>
    </header>
    <div class="section light-bg" id="features">


        <div class="container">

            <div class="section-title-mb text-center mb-5">
                <small>Hachinet Application Development</small>
                <h3>Do you have such a problem?</h3>
            </div>


            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Simple</h4>
                                    <p class="card-text">I want to create a mobile application that works well and can
                                        respond flexibly to changes in specifications. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-settings gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Customize</h4>
                                    <p class="card-text">Want to reduce development costs and pursue development efficiency
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-lock gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Secure</h4>
                                    <p class="card-text">There is a shortage of excellent smartphone application development
                                        engineers in Japan. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
    <!-- // end .section -->
    <div class="section">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="box-icon"><span class="ti-mobile gradient-fill ti-3x"></span></div>
                    <h2>Strengths in smartphone application development</h2>
                    <p class="mb-4">Leveraging our years of experience from developing native apps for iOS and Android to
                        developing hybrid apps such as ReactNative, Ionic, Cordova, etc., we select the most suitable and
                        ideal means for customer needs, comfortable operation and high maintainability then we realize
                        business applications. So, we provide a series of application development such as planning,
                        proposal, design, development, operation, market application, maintenance, and management to
                        understand your business.</p>
                </div>
            </div>
            <div class="perspective-phone">
                <img src="{{ asset('assets/img/service/perspective.png') }}" alt="mobile application outsource"
                    class="img-fluid">
            </div>
        </div>

    </div>
    <!-- // end .section -->


    <div class="section light-bg">
        <div class="container">
            <div class="section-title-mb text-center mb-5">
                <small>Development record</small>
                <h3>For consulting or questioning regarding the service,</h3>
                <h3>Please contact us here.</h3>
            </div>

            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item">
                    <summary class="nav-link active communication">We have</summary>
                </li>
                <li class="nav-item">
                    <summary class="nav-link schedule">You will receive</summary>
                </li>
                <li class="nav-item">
                    <summary class="nav-link messages">Programming Languages</summary>
                </li>
                <li class="nav-item">
                    <summary class="nav-link livechat">Developed applications</summary>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="communication">
                    <div class="d-flex flex-column flex-lg-row">
                        <img src="{{ asset('assets/img/service/graphic.png') }}" alt="graphic"
                            class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <div>

                            <h2>We have</h2>
                            <ul>
                                <li>Mobile programming room with many talented programmers in mobile application
                                    development.</li>
                                <li>Consulting, developing and designing applications on demand</li>
                                <li>Developing mobile applications according to absolute security standards.</li>
                                <li>Building mobile applications that run on all platforms, android, ios.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="schedule">
                    <div class="d-flex flex-column flex-lg-row">
                        <div>
                            <h2>You will receive:</h2>
                            <ul>
                                <li>The product you expect</li>
                                <li>Developing your application following an international standard process from planning to
                                    programming and testing, as well as writing documentation.</li>
                                <li>Warranty & maintenance policy on request from customers.</li>
                                <li>Building a demo product for customers before starting to develop.</li>
                                <li>Supporting for deploying and posting to App Store, Google Play, etc.</li>
                            </ul>
                        </div>
                        <img src="{{ asset('assets/img/service/graphic.png') }}" alt="graphic"
                            class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    </div>
                </div>
                <div class="tab-pane fade" id="messages">
                    <div class="d-flex flex-column flex-lg-row">
                        <img src="{{ asset('assets/img/service/graphic.png') }}" alt="graphic"
                            class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <div>
                            <h2>Programming Languages</h2>
                            <ul>
                                <li>Android</li>
                                <li>IOS</li>
                                <li>Cross Platform: Xamarin, Titanium, Phonegap, Meteor.</li>
                                <li>Unity</li>
                                <li>Cocos2dx,…</li>
                                <li>Maps, GPS, sensor, socket,…</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="livechat">
                    <div class="d-flex flex-column flex-lg-row">
                        <div>
                            <h2>Developed Applications</h2>
                            <ul>
                                <li>Healthcare</li>
                                <li>Recruitment</li>
                                <li>Mobile game 2D , 3D</li>
                                <li>Internal application for business</li>
                                <li>Travel</li>
                            </ul>
                        </div>
                        <img src="{{ asset('assets/img/service/graphic.png') }}" alt="graphic"
                            class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // end .section -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/service/dualphone.png') }}" alt="dual phone" class="img-fluid">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <div class="box-icon"><span class="ti-rocket gradient-fill ti-3x"></span></div>
                        <h2>Develop your application now</h2>
                        <p class="mb-4">If you are looking for a long-term Application development partner, do not
                            hesitate to contact us</p>
                        <a href="#" class="btn btn-primary">Request a quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // end .section -->

    <div class="section light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-unstyled ui-steps">
                        <li class="media d-flex align-items-center">
                            <div class="circle-icon">1</div>
                            <div class="media-body" style="margin-left: 12px;">
                                <h5>Clarify the request</h5>
                                <p>First, submit the description of the application you want to make, we will send a quote
                                    back to your side.</p>
                            </div>
                        </li>
                        <li class="media d-flex align-items-center my-4">
                            <div class="circle-icon">2</div>
                            <div class="media-body" style="margin-left: 12px;">
                                <h5>Make an implementation plan</h5>
                                <p>After closing the contract with the customer, Hachinet will send an execution plan to
                                    best suit your expects.</p>
                            </div>
                        </li>
                        <li class="media d-flex align-items-center">
                            <div class="circle-icon">3</div>
                            <div class="media-body" style="margin-left: 12px;">
                                <h5>Implement</h5>
                                <p>With the complete process, we will develop your mobile application and hand it over on
                                    time.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/img/service/iphonex.png') }}" alt="iphone" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- // end .section -->
    <div class="section light-bg" id="gallery">
        <div class="container">
            <div class="section-title-mb mb-5 pb-0 text-center">
                <small>GALLERY</small>
                <h3>Product images</h3>
            </div>

            <div class="img-gallery owl-carousel owl-theme">
                <img src="{{ asset('assets/img/service/screen1.jpg') }}" alt="image">
                <img src="{{ asset('assets/img/service/screen2.jpg') }}" alt="image">
                <img src="{{ asset('assets/img/service/screen3.jpg') }}" alt="image">
                <img src="{{ asset('assets/img/service/screen1.jpg') }}" alt="image">
            </div>

        </div>

    </div>
    <div class="section pt-0">
        <div class="container">
            <div class="section-title-mb text-center mb-5">
                <small>FAQ</small>
                <h3>Frequently Asked Questions</h3>
            </div>

            <div class="row pt-4">
                <div class="col-md-6">
                    <h4 class="mb-3">How long does the warranty last?</h4>
                    <p class="light-font mb-5">Hachinet Mobile Application development services are backed by a lifetime
                        warranty. If any errors arise after it has been marketed, we will fix the errors for free at any
                        time. </p>
                    <h4 class="mb-3">How secure is the product request?</h4>
                    <p class="light-font mb-5">We sign a commitment of confidentiality to our customers at the beginning of
                        the project and commit to not publicizing the product information</p>

                </div>
                <div class="col-md-6">
                    <h4 class="mb-3">How is the delayed development process dealt with? </h4>
                    <p class="light-font mb-5">According to the contract, if the development process is delayed due to
                        Hachinet's delay, we will carry out compensation for customers 8 JPY / minute.</p>
                    <h4 class="mb-3">How is the payment procedure?</h4>
                    <p class="light-font mb-5">We will send the invoice to the customer for monthly payment. </p>

                </div>
            </div>
        </div>

    </div>

    <!--   Core JS Files   -->
    <script src="{{ asset('admin_asset/js/core/jquery.3.2.1.min.js') }}"></script>

    <script src="https://takumi.hachinet.com/servicecss/owl.carousel.min.js"></script>
    <script>
        $(document).on("click", ".communication", function() {
            $(".communication").addClass('active')
            $(".schedule").removeClass('active')
            $(".messages").removeClass('active')
            $(".livachat").removeClass('active')

            $("#communication").addClass('show active in')
            $("#schedule").removeClass('show active in')
            $("#messages").removeClass('show active in')
            $("#livechat").removeClass('show active in')
        })
        $(document).on("click", ".schedule", function() {
            $(".schedule").addClass('active')
            $(".livechat").removeClass('active')
            $(".messages").removeClass('active')
            $(".communication").removeClass('active')

            $("#schedule").addClass('show active in')
            $("#communication").removeClass('show active in')
            $("#messages").removeClass('show active in')
            $("#livechat").removeClass('show active in')
        })
        $(document).on("click", ".messages", function() {
            $(".messages").addClass('active')
            $(".schedule").removeClass('active')
            $(".livechat").removeClass('active')
            $(".communication").removeClass('active')

            $("#messages").addClass('show active in')
            $("#schedule").removeClass('show active in')
            $("#communication").removeClass('show active in')
            $("#livechat").removeClass('show active in')
        })
        $(document).on("click", ".livechat", function() {
            $(".livechat").addClass('active')
            $(".schedule").removeClass('active')
            $(".messages").removeClass('active')
            $(".communication").removeClass('active')

            $("#livechat").addClass('show active in')
            $("#schedule").removeClass('show active in')
            $("#messages").removeClass('show active in')
            $("#communication").removeClass('show active in')
        })

        // Owl Caroysel
        var $galleryDiv = $('.img-gallery');
        if ($galleryDiv.length && $.fn.owlCarousel) {
            $galleryDiv.owlCarousel({
                nav: false,
                center: true,
                loop: true,
                autoplay: true,
                dots: true,
                navText: ['<span class="ti-arrow-left"></span>', '<span class="ti-arrow-right"></span>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 3
                    }
                }
            });
        }
    </script>
@endsection
