@extends('layouts.app')
@push('css')
    <style>

        .error-section {
            overflow: hidden;
        }

        .error-content {
            margin-top: 200px;
            margin-bottom: 100px;
        }

        .content-error {
            position: relative;
            margin-top: -46px;
            font-family: 'Poppins', sans-serif;
            text-align: center;
        }
        .content-error h2 {
            font-weight: 500;
        }
        .content-error a {
            color: #ffb701;
        }
        .content-error a:hover {
            color: #353535;
        }
    </style>
@endpush
@section('content')
    <!-- error-section -->
    <div class="error-section centred">
        <div class="auto-container">
            <div class="row clearfix d-flex justify-content-center">
                <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-1 content-column">
                    <div class="error-content">
                        <figure class="image-box d-flex justify-content-center mb-0"><img
                                src="{{ asset('assets/img/error_404.png') }}" alt="icons" style="width: 60%;"></figure>
                        <div class="content-error">
                            <h2>Sorry, this page is not available</h2>
                            <p>We couldn't find the page you're looking for</p>
                            <a href="/" class="theme-btn-two">Back to main page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- error-section end -->
@endsection
