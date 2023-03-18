<!-- Start Top Footer Section -->
<footer class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-widget mb-30 logo-hachinet-footer">
                    <h3>
                        <a class="find-location" href="https://goo.gl/maps/1dLhwYyB2efGYMTx7">Find Hachinet
                            location</a>
                    </h3>
                    <a href="#"><img src="{{ asset('assets/img/logo-hachinet-footer.webp') }}"
                            alt="hachinet-footer-logo"></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-widget mb-30">
                    <h3>contact</h3>
                    <ul>
                        <li>
                            <i class="flaticon-right"></i>
                            <span>Address:</span>
                            218 Fleming Ave,
                        </li>
                        <li>
                            <i class="flaticon-right"></i>
                            San Jose,CA 95127, USA
                        </li>
                        <li>
                            <i class="flaticon-right"></i>
                            <span>Website:</span>
                            <a href="https://hachinet.com">hachinet.com</a>
                        </li>
                        <li>
                            <i class="flaticon-right"></i>
                            <span>Email:</span>
                            <a href="mailto:hello@hachinet.com">hello@hachinet.com</a>
                        </li>
                        <li>
                            <i class="flaticon-right"></i>
                            <span>Phone:</span>
                            <a href="tel:+8424-6290-0388">(+84) 24-6290-0388</a>
                        </li>
                        <!-- <li>
                          <i class="flaticon-right"></i>
                          <span>Fax:</span>
                          <a href="#">+0 (21) 984 754</a>
                      </li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-widget mb-30">
                    <h3>services</h3>
                    <ul>
                        <li>
                            <i class="flaticon-right"></i>
                            <a href="/software-outsourcing">Software Outsourcing</a>
                        </li>
                        <li>
                            <i class="flaticon-right"></i>
                            <a href="#">Software Integration</a>
                        </li>
                        <li>
                            <i class="flaticon-right"></i>
                            <a href="#">Software Maintenance</a>
                        </li>
                        <li>
                            <i class="flaticon-right"></i>
                            <a href="#">Software Testing</a>
                        </li>
                        <li>
                            <i class="flaticon-right"></i>
                            <a href="#">Digital Transformation</a>
                        </li>
                        <li>
                            <i class="flaticon-right"></i>
                            <a href="https://hachinet.com/service-of-human-resources">Engineer Staffing</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-widget mb-30">
                    <h3>Case Study</h3>
                    @php
                        $cate = App\Models\Category::where('type', App\Models\Category::TYPE['INDUSTRIES'])->get();
                    @endphp
                    <ul>
                        @foreach ($cate as $e)
                            <li>
                                <i class="flaticon-right"></i>
                                <a
                                    href="{{ route('case-study', $e->slug) }}">{{ $e->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                    {{-- <ul>
                        <li>
                            <i class="flaticon-right"></i>
                            <a href="#">DX Health Care</a>
                        </li>
                        <li>
                            <i class="flaticon-right"></i>
                            <a href="#">DX Insurance</a>
                        </li>
                        <li>
                            <i class="flaticon-right"></i>
                            <a href="#">Transport and Logistics</a>
                        </li>
                        <li>
                            <i class="flaticon-right"></i>
                            <a href="#">Manufacturing</a>
                        </li>
                        <li>
                            <i class="flaticon-right"></i>
                            <a href="#">Automotive Technology</a>
                        </li>
                        <li>
                            <i class="flaticon-right"></i>
                            <a href="#">Ecommerce</a>
                        </li>
                    </ul> --}}
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6"></div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-widget mb-30">
                    <h3>Programing Languages</h3>
                    <ul>
                        <li>
                            <i class="flaticon-right"></i>
                            <a href="{{ route('java-systems-development') }}">Java Development</a>
                        </li>
                        <li>
                            <i class="flaticon-right"></i>
                            <a href="{{ route('outsourcing-angular-development') }}">Angular Development</a>
                        </li>
                        <li>
                            <i class="flaticon-right"></i>
                            <a href="{{ route('cobol-systems-development') }}">Cobol Development</a>
                        </li>
                        <li>
                            <i class="flaticon-right"></i>
                            <a href="{{ route('net-systems-development') }}">.NET Development</a>
                        </li>
                        <li>
                            <i class="flaticon-right"></i>
                            <a href="{{ route('smartphone-application-development') }}">Applications Development</a>
                        </li>
                        <li>
                            <i class="flaticon-right"></i>
                            <a href="{{ route('salesforce-development-outsource') }}">Salesforce Development</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-widget mb-30">
                    <h3>Products</h3>
                    <ul>
                        <li>
                            <i class="flaticon-right"></i>
                            <a href="https://hatonet.com/" target="_blank">Hatonet Platform</a>
                        </li>
                        <li>
                            <i class="flaticon-right"></i>
                            <a href="https://takumi.hachinet.com/" target="_blank">Hachinet Takumi</a>
                        </li>
                        <li>
                            <i class="flaticon-right"></i>
                            <a href="https://devworks.jp/" target="_blank">Devwork Japan</a>
                        </li>
                        <li>
                            <i class="flaticon-right"></i>
                            <a href="https://www.devwork.vn/" target="_blank">Engineer Recruitment</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Top Footer Section -->

<!-- Start Bottom Footer Section -->
<footer class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-widget">
                    <ul>
                        <li>
                            <a href="{{ route('terms-of-use') }}">Terms &amp; Conditions</a>
                        </li>
                        <li>
                            <a href="{{ route('privacy-statement') }}">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-widget">
                    <p>Copyright © 2018 by <a href="https://hachinet.com" target="_blank">Hachinet Software.</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-widgets">
                    <ul class="social-links">
                        <li>
                            <a href="https://twitter.com/HachinetJ"><i class="flaticon-twitter-black-shape"></i></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/@hachinetsoftware1620"><i class="flaticon-youtube"></i></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/hachinet.jsc"><i class="flaticon-facebook-logo"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/hachinet-software1"><i
                                    class="flaticon-linkedin-logo"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/hachinet.software/"><i
                                    class="flaticon-instagram-logo"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Bottom Footer Section -->
