@extends('layouts.app')
@section('title', 'Java System Development')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/java.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/service.css') }}">
@endpush
@section('content')
    <section class="banner-url">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-h1-java">JAVA SYSTEM<br>DEVELOPMENT</h1>
                    <p class="text-span-java">Java of Hachinet is the end-to-end software
                        development services (from consultancy to support)</p>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    </section>
    <section>
        <h2 class="text-h2">PROVIDING JAVA DEVELOPMENT SERVICES</h2>
        <br>
        <div class="container">
            <div class="col-12 row">
                <div class="col-md-4">
                    <div class="mg-20-jv">
                        <span class="span-java">Application Development</span>
                        <hr class="java-line-1">
                        <hr class="java-line-2">
                    </div>
                    <div class="mg-20-jv">
                        <span class="span-java-1">Custom JAVA Development</span>
                        <hr class="java-line-3">
                        <hr class="java-line-4">
                    </div>
                    <div class="mg-20-jv">
                        <span class="span-java-2">Java Consultancy</span>
                        <hr class="java-line-5">
                        <hr class="java-line-6">
                    </div>
                    <div class="mg-20-jv">
                        <span class="span-java-3">Mobile Services</span>
                        <hr class="java-line-7">
                        <hr class="java-line-8">
                    </div>
                </div>
                <div class="col-md-4">
                    <img class="img-java-diagram" src="{{ asset('assets/img/service/rectangle24-java.png') }}"
                        width="100%">
                </div>
                <div class="col-md-4">
                    <div class="mg-20-jv">
                        <span class="span-java-4">Java Web Development</span>
                        <hr class="java-line-9">
                        <hr class="java-line-10">
                    </div>
                    <div class="mg-20-jv">
                        <span class="span-java-5">Desktop Application</span>
                        <hr class="java-line-11">
                        <hr class="java-line-12">
                    </div>
                    <div class="mg-20-jv">
                        <span class="span-java-6">Social Security Project</span>
                        <hr class="java-line-13">
                        <hr class="java-line-14">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="framework-url">
        <h2 class="text-h2" style="padding-top: 20px;">JAVA FRAMEWORK</h2>
        <br><br>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <img class="" src="{{ asset('assets/img/service/rectangle34-java.png') }}" width="100%">
            </div>
        </div>
        <br><br>
    </section>
    <section>
        <h2 class="text-h2" style="padding-top: 20px;">PRODUCTS &amp; SOLUTIONS</h2>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="padding: 0px;">
                    <div>
                        <img class="" src="{{ asset('assets/img/service/rectangle36-java.png') }}" width="100%">
                    </div>
                </div>
                <div class="col-md-3" style="padding: 0px;">
                    <div>
                        <img class="" src="{{ asset('assets/img/service/rectangle37-java.png') }}" width="100%">
                    </div>
                </div>
                <div class="col-md-3" style="padding: 0px;">
                    <div>
                        <img class="" src="{{ asset('assets/img/service/rectangle38-java.png') }}" width="100%">
                    </div>
                </div>
                <div class="col-md-3" style="padding: 0px;">
                    <div>
                        <img class="" src="{{ asset('assets/img/service/rectangle39-java.png') }}" width="100%">
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </section>

    <div class="section pt-0">
        <div class="container">
            <div class="text-center">
                <h2 class=" bl-text limited">Frequently Asked Questions</h2>
            </div>
            <div class="clearfix"></div>
            <div class="row pt-4">
                <div class="col-md-6">
                    <h4 class="mb-3">How long does the warranty last?</h4>
                    <p class="light-font mb-5">Hachinet Mobile Application development services are backed by a lifetime
                        warranty. If any errors arise after it has been marketed, we will fix the errors for free at any
                        time.</p>
                    <h4 class="mb-3">How is the delayed development process dealt with?</h4>
                    <p class="light-font mb-5">According to the contract, if the development process is delayed due to
                        Hachinet&#039;s delay, we will carry out compensation for customers 8 JPY / minute.</p>

                </div>
                <div class="col-md-6">
                    <h4 class="mb-3">How secure is the product request? </h4>
                    <p class="light-font mb-5">We sign a commitment of confidentiality to our customers at the beginning of
                        the project and commit to not publicizing the product information</p>
                    <h4 class="mb-3">How is the payment procedure?</h4>
                    <p class="light-font mb-5">We will send the invoice to the customer for monthly payment.</p>

                </div>
            </div>
        </div>

    </div>
@endsection
