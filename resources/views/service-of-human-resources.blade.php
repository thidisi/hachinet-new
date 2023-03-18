@extends('layouts.app')
@section('title', 'Engineer dispatching service')
@push('css')
    <link rel="stylesheet" href="https://hachinet.jp/landing/haken/css/LineIcons.css">
    <style>
        .section-title::before {
            position: absolute;
            content: "";
            top: 10px;
            left: 0;
            width: 100%;
            height: 2px;
            background: transparent !important;
        }
    </style>
@endpush
@section('content')
    <header class="header-banner">
        <div id="home" class="header-hero bg_cover"
            style="background-image: url({{ asset('assets/img/service-details/banner.png') }})">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="header-content text-center">
                            <h3 class="header-title">Engineer dispatching service</h3>
                            <p class="text">This is a service that engineers with many years of experience will support
                                each stage of system development in the time required for customers.
                            </p>
                            <ul class="header-btn">
                                <li><a class="main-btn btn-hachinet" href="#">register</a></li>
                                <li><a class="main-btn btn-two video-popup"
                                        href="https://www.youtube.com/watch?v=jlywRNDwUyc">watch video
                                        <i class="lni-play"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-shape">
                <img src="{{ asset('assets/img/service-details/header-shape.svg') }}" alt="shape">
            </div>
        </div>
    </header>
    <section id="service" class="services-area">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-6 text-center">
                    <div class="section-title pb-10">
                        <h4 class="title">Benefit</h4>
                        <p class="text">Increasing competitiveness and optimizing resources is a common problem for many
                            companies.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class="lni-bolt"></i>
                                </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">flexible</h4>
                                    <p class="text">
                                        Flexibility in staffing strategies with high headcount fluctuations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class="lni-bar-chart"></i>
                                </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">concentration</h4>
                                    <p class="text">Effective solutions allow businesses to focus on their core business
                                        areas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class="lni-brush"></i>
                                </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">savings</h4>
                                    <p class="text">Cost savings for: source creation, hiring, payroll, payroll...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class="lni-bulb"></i>
                                </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">abundant resources</h4>
                                    <p class="text">Abundant labor supply capacity of outsourced labor supply services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-image d-lg-flex align-items-center">
            <div class="image">
                <img src="{{ asset('assets/img/service-details/services.png') }}" alt="Services">
            </div>
        </div>
    </section>


    <section id="pricing" class="pricing-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title text-center pb-10">
                        <h4 class="title">our price</h4>
                        <p class="text">contract category </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing mt-40">
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">3 months or less </h5>
                            <span class="price">1</span>
                            <p class="year">short term contract</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Visa fee: required </li>
                                <li><i class="lni-check-mark-circle"></i> Airplane ticket cost: required</li>
                                <li><i class="lni-check-mark-circle"></i> Transportation fee: Necessary</li>
                                <li><i class="lni-check-mark-circle"></i> Housing expenses: required</li>
                            </ul>
                        </div>
                        <div class="pricing-btn text-center">
                            <a class="main-btn" href="#">get started</a>
                        </div>
                        <div class="buttom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 350 112.35">
                                <defs>
                                    <style>
                                        .color-1 {
                                            fill: #2bdbdc;
                                            isolation: isolate;
                                        }

                                        .cls-1 {
                                            opacity: 0.1;
                                        }

                                        .cls-2 {
                                            opacity: 0.2;
                                        }

                                        .cls-3 {
                                            opacity: 0.4;
                                        }

                                        .cls-4 {
                                            opacity: 0.6;
                                        }
                                    </style>
                                </defs>
                                <title>bottom-part1</title>
                                <g id="bottom-part">
                                    <g id="Group_747" data-name="Group 747">
                                        <path id="Path_294" data-name="Path 294" class="cls-1 color-1"
                                            d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z"
                                            transform="translate(0 0)" />
                                        <path id="Path_297" data-name="Path 297" class="cls-2 color-1"
                                            d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z"
                                            transform="translate(0 0)" />
                                        <path id="Path_296" data-name="Path 296" class="cls-3 color-1"
                                            d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z"
                                            transform="translate(0 0)" />
                                        <path id="Path_295" data-name="Path 295" class="cls-4 color-1"
                                            d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z"
                                            transform="translate(0 0)" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing pro mt-40">
                        <div class="pricing-baloon">
                            <img src="{{ asset('assets/img/service-details/baloon.svg') }}" alt="baloon">
                        </div>
                        <div class="pricing-header">
                            <h5 class="sub-title">6 months or less</h5>
                            <span class="price">2</span>
                            <p class="year">Medium-term contract</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Visa fee: free</li>
                                <li><i class="lni-check-mark-circle"></i> Airplane ticket cost: free</li>
                                <li><i class="lni-check-mark-circle"></i> Transportation fee: Free</li>
                                <li><i class="lni-check-mark-circle"></i> Housing expenses: required</li>
                            </ul>
                        </div>
                        <div class="pricing-btn text-center">
                            <a class="main-btn" href="#">get started</a>
                        </div>
                        <div class="buttom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 350 112.35">
                                <defs>
                                    <style>
                                        .color-2 {
                                            fill: #ffb701;
                                            isolation: isolate;
                                        }

                                        .cls-1 {
                                            opacity: 0.1;
                                        }

                                        .cls-2 {
                                            opacity: 0.2;
                                        }

                                        .cls-3 {
                                            opacity: 0.4;
                                        }

                                        .cls-4 {
                                            opacity: 0.6;
                                        }
                                    </style>
                                </defs>
                                <title>bottom-part1</title>
                                <g id="bottom-part">
                                    <g id="Group_747" data-name="Group 747">
                                        <path id="Path_294" data-name="Path 294" class="cls-1 color-2"
                                            d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z"
                                            transform="translate(0 0)" />
                                        <path id="Path_297" data-name="Path 297" class="cls-2 color-2"
                                            d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z"
                                            transform="translate(0 0)" />
                                        <path id="Path_296" data-name="Path 296" class="cls-3 color-2"
                                            d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z"
                                            transform="translate(0 0)" />
                                        <path id="Path_295" data-name="Path 295" class="cls-4 color-2"
                                            d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z"
                                            transform="translate(0 0)" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing enterprise mt-40">
                        <div class="pricing-flower">
                            <img src="{{ asset('assets/img/service-details/flower.svg') }}" alt="flower">
                        </div>
                        <div class="pricing-header text-right">
                            <h5 class="sub-title">1 year or more</h5>
                            <span class="price">3</span>
                            <p class="year">long term contract</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Visa fee: free</li>
                                <li><i class="lni-check-mark-circle"></i> Airplane ticket cost: free</li>
                                <li><i class="lni-check-mark-circle"></i> Transportation fee: Free</li>
                                <li><i class="lni-check-mark-circle"></i> Housing fee: Free</li>
                            </ul>
                        </div>
                        <div class="pricing-btn text-center">
                            <a class="main-btn" href="#">get started</a>
                        </div>
                        <div class="buttom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 350 112.35">
                                <defs>
                                    <style>
                                        .color-3 {
                                            fill: #4da422;
                                            isolation: isolate;
                                        }

                                        .cls-1 {
                                            opacity: 0.1;
                                        }

                                        .cls-2 {
                                            opacity: 0.2;
                                        }

                                        .cls-3 {
                                            opacity: 0.4;
                                        }

                                        .cls-4 {
                                            opacity: 0.6;
                                        }
                                    </style>
                                </defs>
                                <title>bottom-part1</title>
                                <g id="bottom-part">
                                    <g id="Group_747" data-name="Group 747">
                                        <path id="Path_294" data-name="Path 294" class="cls-1 color-3"
                                            d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z"
                                            transform="translate(0 0)" />
                                        <path id="Path_297" data-name="Path 297" class="cls-2 color-3"
                                            d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z"
                                            transform="translate(0 0)" />
                                        <path id="Path_296" data-name="Path 296" class="cls-3 color-3"
                                            d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z"
                                            transform="translate(0 0)" />
                                        <path id="Path_295" data-name="Path 295" class="cls-4 color-3"
                                            d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z"
                                            transform="translate(0 0)" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="call-to-action" class="call-to-action">
        <div class="call-action-image">
            <img src="{{ asset('assets/img/service-details/call-to-action.png') }}" alt="call-to-action">
        </div>
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="call-action-content text-center">
                        <h2 class="call-title">Subscribe</h2>
                        <p class="text">If your business needs a personnel supply partner dispatched in your country, do
                            not hesitate to leave us an email.</p>
                        <div class="call-newsletter">
                            <i class="lni-envelope"></i>
                            <input type="text" placeholder="example@email.com">
                            <button type="submit">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title text-center pb-10">
                        <h4 class="title">Contact</h4>
                        <p class="text">Leave your contact, we will contact you</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <form id="contact-form" action="#" method="post" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="name" placeholder="name"
                                            data-error="Name is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="email" name="email" placeholder="email"
                                            data-error="Valid email is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="subject" placeholder="subject"
                                            data-error="Subject is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="phone" placeholder="phone"
                                            data-error="Phone is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <textarea placeholder="message" name="message" data-error="Please, leave us a message." required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form form-group text-center">
                                        <button type="submit" class="main-btn">sending</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <style>
        .footer-serv-holder ul li {
            float: left;
            width: 100%;
            padding: 0 0 15px 20px;
            position: relative;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/husman.css') }}">
@endsection
