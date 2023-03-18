@extends('layouts.app')
@section('title', 'Hachinet | Contact')
@push('css')
    <style>
        .swal-footer {
            text-align: center !important;
        }

        .btn-success {
            padding: 8px 24px !important;
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
                                <h2>HACHINET <span>CONTACT</span></h2>
                                <ul>
                                    <li><a href="/">home <i class="flaticon-right"></i> </a></li>
                                    <li>contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Banner Section -->
    <!-- Start Contact Section -->
    <section class="contact-section pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="Form-contact">
                        <div class="section-title-left">
                            <h4>Message us</h4>
                            <h2><span>Drop us</span> message for any query</h2>
                        </div>

                        <form action="{{ route('contacts.store') }}" method="POST"> {{-- {{ route('contact.store') }} --}}
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" required class="form-control"
                                            data-error="Please enter your name" placeholder="Your Name"
                                            value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <div class="text-danger mt-1">{{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" required class="form-control"
                                            data-error="Please enter your email" placeholder="Your Email"
                                            value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <div class="text-danger mt-1">{{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone_number"
                                            data-error="Please enter your number" required class="form-control"
                                            placeholder="Your Phone" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                            <div class="text-danger mt-1">{{ $errors->first('phone') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" id="msg_subject" required class="form-control"
                                            data-error="Please enter your subject" placeholder="Your Subject"
                                            value="{{ old('subject') }}">
                                        @if ($errors->has('subject'))
                                            <div class="text-danger mt-1">{{ $errors->first('subject') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control textarea-hight" required id="message" cols="30" rows="5"
                                            data-error="Write your message" placeholder="Your Message" value="">{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
                                            <div class="text-danger mt-1">{{ $errors->first('message') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex flex-column align-items-center">
                                    <div class="g-recaptcha" id="feedback-recaptcha"
                                        data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                                    @if ($errors->has('g-recaptcha-response'))
                                        <div class="text-danger mt-1">{{ $errors->first('g-recaptcha-response') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="default-btn btn-two disabled"
                                        style="pointer-events: all; cursor: pointer;">
                                        Send Message
                                    </button>
                                    {{-- @if (Session::has('success'))
                                        <div class="text-success mt-1">{{ Session::get('success') }}
                                        </div>
                                    @endif --}}
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
    <!-- Start Get in Touch Section -->
    <div class="get-in-touch-section pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="get-in-touch-wrapper">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="get-in">
                                    <h3>Get in Touch</h3>
                                    <p>
                                        If you are searching for an offshore software development partner to reduce risk and
                                        cost, please contact us. Our team includes engineers who work in the US and Vietnam.
                                    </p>
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
                            <div class="col-lg-6 col-md-6">
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
                </div>
            </div>
        </div>
    </div>
    <!-- End Get in Touch Section -->
    <!-- End Map Section -->
    <div class="maps-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7237.206025803019!2d91.8466795768929!3d24.91151946675536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e0!4m0!4m0!5e0!3m2!1sen!2sbd!4v1566903287557!5m2!1sen!2sbd"></iframe> -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3170.6702422826675!2d-121.81856958490059!3d37.373978842890324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fcd7c77ee8b79%3A0x3ab08ca87c3e50a8!2s218%20Fleming%20Ave%2C%20San%20Jose%2C%20CA%2095127%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1672426323024!5m2!1svi!2s"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End Map Section -->

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="{{ asset('admin_asset/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    <script>
        var notify = '{!! Session::get('success') !!}';

        if (notify != null && notify != '') {
            swal({
                title: 'Notify!',
                text: notify,
                type: 'success',
                buttons: {
                    confirm: {
                        className: 'btn btn-success'
                    }
                }
            });
        }
    </script>
@endsection
