@extends('layouts.app')
@section('title', 'Hachinet | Products')
@section('meta_title', 'Case Study Hachinet Software - ' . $case->name)
@section('meta_image', asset('storage/' . $img[0]->thumb))
@section('meta_description', $case->shortdesc)
@section('meta')
    <meta name="keyword" content="{{ $case->tag }}" />
    <meta name="keywords" content="{{ $case->tag }}" />
@endsection
@push('css')
    <style>
        span.skill-bar {
            background: #ffb701;
            padding: 4px 8px;
            color: white;
            border-radius: 4px;
            margin-top: 6px;
            display: inline-block;
        }

        .project-details-wrapper {
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0px 0px 6px 2px #99999973;
        }

        .project-info-list>* {
            color: black !important;
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
                                <h2><span>{{ $case->name }}</span></h2>
                                <ul>
                                    <li><a href="/">home <i class="flaticon-right"></i></a></li>
                                    <li>Case-study<i class="flaticon-right"></i></li>
                                    <li>{{ $category->name }}<i class="flaticon-right"></i></li>
                                    <li>{{ $case->name }}</li>
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
    <section class="project-info-section pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="project-info-wrapper">
                        <h3 class="text-dark">Project Info</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="project-info-list">
                                    <h4>Category</h4>
                                    <p class="text-capitalize">{{ $category->name }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="project-info-list">
                                    <h4>Location</h4>
                                    <p class="text-capitalize">{{ $case->location }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="project-info-list">
                                    <h4>Completed</h4>
                                    <p>{{ $case->completed->format('d M, Y') }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="project-info-list">
                                    <h4>Contract type</h4>
                                    <p class="text-capitalize">{{ $case->contract_type }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="project-info-list">
                                    <h4>Team size</h4>
                                    <p class="text-capitalize">{{ $case->team_size }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="project-info-list">
                                    <h4>Project Size</h4>
                                    <p class="text-capitalize">{{ $case->size }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="project-info-list">
                                    <h4>Clients</h4>
                                    <p class="text-capitalize">{{ $case->client }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="project-info-list">
                                    <h4>Project url</h4>
                                    <p><a target="_blank" class="text-title" style="-webkit-line-clamp: 1 !important;"
                                            href="{{ $case->url }}">{{ $case->url }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="project-slider-wrapper owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-2268px, 0px, 0px); transition: all 1.5s ease 0s; width: 5292px;">
                                @foreach ($img as $el)
                                    <div class="owl-item" style="width: 746px; margin-right: 10px; background-color: black">
                                        <div class="project-single-slider">
                                            <img style="height: 459.48px; object-fit: cover; width: auto;" class="m-auto"
                                                src="{{ asset('storage/' . $el->thumb) }}" alt="">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- <div class="owl-nav disabled">
                            <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                            <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                        </div> --}}
                        {{-- <div class="owl-dots">
                            @foreach ($img as $el)
                                <button role="button" class="owl-dot"><span></span></button>
                                <button role="button" class="owl-dot active"><span></span></button>
                                <button role="button" class="owl-dot"><span></span></button>
                            @endforeach
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Project info Section -->

    <!-- Start Project Description -->
    <section class="project-description">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="project-description-wrapper">
                        <h3>PROJECT NAME:{{ $case->name }}</h3>
                    </div>
                    <div class="project-description-wrapper">
                        <p class="project-content-1">{!! nl2br(e($case->shortdesc)) !!}</p>
                    </div>
                    <div class="project-description-wrapper">
                        <h6 class="text-uppercase">Description</h6>
                        <p class="project-content-1">{!! nl2br(e($case->description)) !!}</p>
                    </div>
                    <div class="project-description-wrapper">
                        <h6 class="text-uppercase">Feature</h6>
                        <p class="project-content-1">{!! nl2br(e($case->feature)) !!}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="project-details-wrapper">
                        <h3 class="mb-2">Technical Skill</h3>
                        <div>
                            {{-- <li style="white-space: pre-line;"> --}}
                            @foreach ($case->skill as $e)
                                <a href="{{ route('case-study', ['skill' => $e]) }}">
                                    <span class="skill-bar">{{ $e }}</span>
                                </a>
                            @endforeach
                            {{-- </li> --}}
                        </div>
                        <h3 class="mt-4 mb-2">Responsibilities</h3>
                        <div>
                            @foreach ($case->responsibilities as $e)
                                <span class="skill-bar">{{ $e }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3 d-flex justify-content-center">
                    <a class="default-btn m-auto" target="_blank" href="{{ $case->url }}"
                        @if ($case->url == null) hidden @endif>live preview</a>
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
                            <input type="text" class="form-control" required=""
                                data-error="Please enter your name here" placeholder="Enter Your Frist Name">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" class="form-control" required=""
                                data-error="Please enter your name here" placeholder="Enter Your Last Name">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <label>Enter Address</label>
                            <input type="email" class="form-control" required=""
                                data-error="Please enter your email" placeholder="Enter Your Email Address">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="text-center">
                            <button type="submit" class="default-btn disabled"
                                style="pointer-events: all; cursor: pointer;">
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
