@extends('layouts.app')
@section('title', 'Hachinet | Blogs')
@push('css')
    <style>

        .single-blogs {
            box-shadow: 0 3px 6px rgb(0 0 0 / 24%) !important;
        }
        .card-hover:hover,
        .single-blogs:hover {
            cursor: pointer;
            box-shadow: 0 3px 6px rgb(0 0 0 / 26%),0 3px 6px rgb(0 0 0 / 26%) !important;
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
                                <h2>Hachinet<span> Blog</span></h2>
                                <ul>
                                    <li><a href="/">home <i class="flaticon-right"></i> </a></li>
                                    <li>Blog</li>
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
    <div class="blogs-section ptb-100">
        <div class="container">
            <div class="row">
                @if ($checkCategory == null)
                    @foreach ($blogs as $it)
                        <div class="mb-4 d-flex justify-content-between">
                            <span class="title-blog">{{ $it['0']->categories->name }}</span>
                            <a href="{{ route('blog', [
                                'category' => $it[0]->categories->slug,
                            ]) }}"
                                class="a-unstyled">Read more <i class="flaticon-right-arrow"></i></a>
                        </div>
                        @foreach ($it as $k => $el)
                            <div class="col-md-4 col-lg-4">
                                <div class="single-blogs mb-30">
                                    <div class="blog-img">
                                        <a href="{{ route('blog-detail', $el->slug) }}" class="d-flex align-items-center"
                                            style="max-height: 200px; overflow: hidden;"><img
                                                src="{{ asset($el->thumbnail) }}" alt="blog"></a>
                                    </div>
                                    <div class="blogs-content">
                                        <ul>
                                            <li><i class="flaticon-man-user"></i> <a
                                                    href="#">{{ $el->users->name }}</a>
                                            </li>
                                            <li><i class="flaticon-calendar"></i>{{ $el->created_at->format('M d, Y') }}
                                            </li>
                                            <li><i class="flaticon-comment-black-oval-bubble-shape"></i>Comment</li>
                                        </ul>
                                        <h2><a href="{{ route('blog-detail', $el->slug) }}"
                                                class="text-title">{{ $el->title }}</a></h2>
                                        <p class="text-title">{{ $el->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                @else
                    <div class="mb-5">
                        <span
                            class="title-blog">{{ isset($blogs[0]->categories) ? $blogs[0]->categories->name : '' }}</span>
                    </div>
                    @foreach ($blogs as $k => $el)
                        <div class="col-md-4 col-lg-4">
                            <div class="single-blogs shadow-sm mb-30">
                                <div class="blog-img">
                                    <a href="{{ route('blog-detail', $el->slug) }}" class="d-flex align-items-center"
                                        style="max-height: 200px; overflow: hidden;"><img
                                            src="{{ asset($el->thumbnail) }}" alt="blog"></a>
                                </div>
                                <div class="blogs-content">
                                    <ul>
                                        <li><i class="flaticon-man-user"></i> <a href="#">{{ $el->users->name }}</a>
                                        </li>
                                        <li><i class="flaticon-calendar"></i>{{ $el->created_at->format('M d, Y') }}
                                        </li>
                                        <li><i class="flaticon-comment-black-oval-bubble-shape"></i>Comment</li>
                                    </ul>
                                    <h2><a href="{{ route('blog-detail', $el->slug) }}"
                                            class="text-title">{{ $el->title }}</a></h2>
                                    <p class="text-title">{{ $el->description }}</p>
                                    {{-- <div class="learn-share">
                                        <a class="learn" href="#">learn more</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex justify-content-center">{{ $blogs->links() }}</div>
                @endif
            </div>
        </div>
    </div>
    <!-- End Blogs Section -->

    <!-- Start Subscribe Section -->
    {{-- <section class="subscribe-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="updates">
                        <h2>Sign Up to get Latest Updates</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="newsletter-form" data-toggle="validator" novalidate="true">
                        <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL"
                            required="" autocomplete="off">

                        <button class="default-btn disabled" type="submit"
                            style="pointer-events: all; cursor: pointer;">
                            Subscribe
                        </button>

                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Subscribe Section -->
@endsection
