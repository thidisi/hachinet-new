@extends('layouts.app')
@section('title', 'Hachinet | Case study')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .single-blogs {
            box-shadow: 0 3px 6px rgb(0 0 0 / 24%) !important;
        }

        .card-hover:hover,
        .single-blogs:hover {
            cursor: pointer;
            box-shadow: 0 3px 6px rgb(0 0 0 / 26%), 0 3px 6px rgb(0 0 0 / 26%) !important;
        }

        span.skill-bar {
            background: #ffffff;
            padding: 0px 8px;
            border: 1px solid #ffb701;
            color: black;
            font-size: 12px;
            border-radius: 4px;
            margin-top: 6px;
            display: inline-block;
            cursor: default;
        }
    </style>
@endpush
@section('content')
    <section class="banner-section mb-0">
        <div class="d-table">
            <div class="d-tablecell">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title page-title-two">
                                <h2>Hachinet Groups</h2>
                                <ul>
                                    <li><a href="/">home <i class="flaticon-right"></i> </a></li>
                                    <li>Case study</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid blogs-section pt-5">
        <div class="container">
            <div class="row justify-content-between mb-3">
                <div class="col-lg-2 text-center"></div>
                <div class="col-lg-8 text-center">
                    <div class="section-title-left">
                        <p>Digital transformation is an obstacle-ridden marathon. At Hachinet Software, we can smoothen such
                            race with new technologies, comprehensive DX roadmaps and well-researched methodology. </p>
                    </div>
                </div>
                <div class="col-lg-2 text-center"></div>
                @if (!empty($cate))
                    <div class="col-12">
                        <a href="{{ route('case-study', ['show' => 'all']) }}" class="d-block float-end a-unstyled">See all
                            <i class="flaticon-right-arrow"></i></a>
                    </div>
                @endif
            </div>
            <div class="row pb-3">
                @if (isset($cate))
                    @foreach ($cate as $e)
                        <div class="col-lg-4 mb-4">
                            <div class="card border-0 shadow-sm mb-2 article card-hover">
                                <div class="thumbnail-img-wrap">
                                    <a class="a-unstyled" href="{{ route('case-study', ['slug' => $e->slug]) }}">
                                        <img class="card-img-top mb-2" style="width:auto;"
                                            src="{{ asset('storage/' . $e->image) }}" alt="">
                                    </a>
                                </div>
                                <div class="card-body bg-light text-left p-4">
                                    <h5 class="d-flex justify-content-between">
                                        <a class="a-unstyled" href="{{ route('case-study', ['slug' => $e->slug]) }}">
                                            {{ $e->name }}
                                        </a>
                                        <p style="color: #ffb701;">{{ $e->count }}</p>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                @if (isset($case))
                    @foreach ($case as $el)
                        <div class="col-md-4 col-lg-4">
                            <div class="single-blogs mb-30 shadow-sm">
                                <div class="blog-img">
                                    <a href="{{ route('case-study.show', $el->slug) }}" class="d-flex align-items-center"
                                        style="max-height: 200px; overflow: hidden;"><img
                                            src="{{ asset('storage/' . $el->image) }}" alt="blog"></a>
                                </div>
                                <div class="blogs-content">
                                    <ul>
                                        {{-- <li><i class="flaticon-man-user"></i> <a href="#">{{ $el->users->name }}</a> --}}
                                        </li>
                                        <li><i class="flaticon-calendar"></i>{{ $el->created_at->format('M d, Y') }}
                                        </li>
                                        <li><i class="fas fa-map-marker-alt"></i>{{ $el->location }}</li>
                                    </ul>
                                    <h2><a href="{{ route('case-study.show', $el->slug) }}"
                                            class="text-title">{{ $el->name }}</a></h2>
                                    <p class="text-title mb-1">{{ $el->description }}</p>
                                    <div class="text-title" style="-webkit-line-clamp: 1;">
                                        @foreach ($el->skill as $skill)
                                            <span class="skill-bar">{{ $skill }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
