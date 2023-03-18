<!-- Start Preloader Section -->
<div class="preloader" style="display: none;">
    <div class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>
</div>
<!-- End Preloader Section -->
<!-- Start Header Section -->
<header class="header header-style-one">
    <div class="header-wrapper-one header-wrapper-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <ul class="contact-info">
                        <li>
                            <i class="flaticon-clock-of-circular-shape-outline"></i>
                            Mon to Fri 9:00am to 6:00pm
                        </li>
                        <li>
                            <i class="flaticon-telephone-handle-silhouette"></i>
                            <a href="tel:+8424-6290-0388">(+84) 24-6290-0388</a>
                        </li>
                        <li>
                            <i class="flaticon-mail-black-envelope-symbol"></i>
                            <a href="mailto:hello@hachinet.com">hello@hachinet.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="help-and-social-wrapper">
                        <ul class="help-desk">
                            <li>
                                <a href="https://tuyendung.hachinet.com">careers</a>
                            </li>
                            <li>
                                <a href="#">help desk</a>
                            </li>
                        </ul>
                        <ul class="social-links">
                            <li>
                                <a href="https://twitter.com/HachinetJ"><i class="flaticon-twitter-black-shape"></i></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/@hachinetsoftware1620"><i
                                        class="flaticon-youtube"></i></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/hachinet.jsc"><i
                                        class="flaticon-facebook-logo"></i></a>
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
    </div>
    <!-- End header-wrapper-one -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="/" class="logo">
                <img src="{{ asset('assets/img/logo-hachinet.png') }}" alt="">
            </a>
        </div>
        <!-- Menu For Desktop Device -->
        <div class="construction-nav-one construction-nav-two">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand logo-hachinet" href="/">
                        <img src="{{ asset('assets/img/logo-hachinet.png') }}" alt="">
                    </a>

                    <div class="collapse navbar-collapse mean-menu justify-content-end" id="navbarSupportedContent"
                        style="display: block;">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{ route('home') }}"
                                    class="nav-link {{ Request::path() == '/' ? 'active' : '' }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('services') }}"
                                    class="nav-link {{ Request::path() == 'services' ? 'active' : '' }}">services</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"
                                    class="nav-link dropdown-toggle  {{ Request::path() == 'about' ? 'active' : '' }}">About
                                    Us</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{ route('about') }}">Hachinet Groups</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="https://hachinet.jp">Hachinet Japan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="https://takumi.hachinet.com">Hachinet Takumi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="https://hachinet.edu.vn">Hachinet Educations</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="products">Products Solutions</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('blog') }}"
                                    class="nav-link {{ Request::path() == 'blog' ? 'active' : '' }}">blog</a>
                            </li>
                            {{-- <li class="nav-item">
                            <a href="{{ route('team') }}" class="nav-link {{ Request::path() == 'team' ? 'active' : '' }}">team</a>
                        </li> --}}
                            <li class="nav-item">
                                <a href="{{ route('case-study') }}"
                                    class="nav-link {{ Request::path() == 'case-study' ? 'active' : '' }}">Case
                                    study</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contact') }}"
                                    class="nav-link {{ Request::path() == 'contact' ? 'active' : '' }}">contact</a>
                            </li>
                        </ul>

                        <div class="other-option">
                            <a class="default-btn free-quote">Request MTG Now</a>
                        </div>

                        <!-- Calendly inline widget begin -->
                        <div class="calendy-modal shadow"
                            style="display: none; position: fixed; top: 136px; right 15%; background: white; width: 60%; padding: 8px; border-radius: 8px;">
                            <div class="d-flex py-3 justify-content-evenly modal-calendar">
                                <img src="{{ asset('assets/img/dialog.png') }}" width="40%" alt=""
                                    srcset="">
                                <div mbsc-page class="demo-date-time-picker">
                                    <div style="height:100%;">
                                        <div id="demo"></div>
                                        <div id="demo-timegrid"></div>
                                    </div>
                                </div>
                                <form method="post" style="display: none;" class="calendar-form col-md-4">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Your name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Your email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="text" name="phone" class="form-control"
                                            placeholder="Your phone" required>
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <button class="default-btn m-auto d-block" id="confirm-calendar">Confirm</button>
                                </div>
                            </div>
                        </div>
                        <!-- Calendly inline widget end -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>
<!-- End Header Section -->
{{-- <link rel="stylesheet" href="{{ asset('assets/css/mobiscroll.jquery.min.css') }}"> --}}
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
{{-- <script src="{{ asset('assets/js/mobiscroll.jquery.min.js') }}"></script>   --}}
<script src="{{ asset('admin_asset/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
<script>
    //show/hide modal calendar
    $(document).on('click', ".free-quote", function() {
        $(".calendy-modal").toggle()
    })
    // confirm calendar
    $(document).on('click', '#confirm-calendar', function() {
        $(".demo-date-time-picker").hide()
        $(".calendar-form").show()
        $("#confirm-calendar").attr('id', 'submit-calendar')
        $(document).on('click', '#submit-calendar', function() {
            $('.calendar-form').find($('input[name=name]')).removeClass('text-error')
            $('.calendar-form').find($('input[name=email]')).removeClass('text-error')
            $('.calendar-form').find($('input[name=phone]')).removeClass('text-error')
            $('.preloader').show();
            if ($('.mbsc-calendar-cell.mbsc-selected')[0].lastChild.childNodes[0]
                .ariaLabel == null) {
                var d = new Date();
            } else {
                var d = new Date($('.mbsc-calendar-cell.mbsc-selected')[0].lastChild.childNodes[0]
                    .ariaLabel);
            }

            function formatDate(date) {
                var day = date.getDate();
                if (day < 10) {
                    day = "0" + day;
                }
                var month = date.getMonth() + 1;
                if (month < 10) {
                    month = "0" + month;
                }
                var year = date.getFullYear();
                var hour = $('.mbsc-scroller-wheel-wrapper-0').find('.mbsc-selected').text().replace(
                    'TRIAL', '')
                var minute = $('.mbsc-scroller-wheel-wrapper-1').find('.mbsc-selected').text().replace(
                    'TRIAL', '')
                if ($('.mbsc-scroller-wheel-wrapper-2').find('.mbsc-selected').text().replace('TRIAL',
                        '') == 'PM') {
                    hour = Number(hour) + 12
                }
                return year + "-" + month + "-" + day + " " + hour + ":" + minute + ":00";
            }
            $.ajax({
                type: "POST",
                url: "{!! route('api.confirm_calendar') !!}",
                data: {
                    name: $('input[name=name]').val(),
                    email: $('input[name=email]').val(),
                    phone: $('input[name=phone]').val(),
                    datetime: formatDate(d)
                },
                dataType: "Json",
                success: function(response) {
                    $('.preloader').hide();
                    swal({
                        title: 'Notify!',
                        text: response.success,
                        type: 'success',
                        buttons: {
                            confirm: {
                                className: 'btn btn-success d-block m-auto'
                            }
                        }
                    });
                },
                error: function(response) {
                    $('.preloader').hide();
                    if (response.responseJSON.errors.name) {
                        $('.calendar-form').find($('input[name=name]')).attr('placeholder',
                            response.responseJSON.errors.name[0])
                        $('.calendar-form').find($('input[name=name]')).addClass(
                            'text-error')
                    }
                    if (response.responseJSON.errors.email) {
                        $('.calendar-form').find($('input[name=email]')).attr('placeholder',
                            response.responseJSON.errors.email[0])
                        $('.calendar-form').find($('input[name=email]')).addClass(
                            'text-error')
                    }
                    if (response.responseJSON.errors.phone) {
                        $('.calendar-form').find($('input[name=phone]')).attr('placeholder',
                            response.responseJSON.errors.phone[0])
                        $('.calendar-form').find($('input[name=phone]')).addClass(
                            'text-error')
                    }
                }
            });
        })
    })

    // Ignore this in your implementation
    window.isMbscDemo = true;

    mobiscroll.setOptions({
        locale: mobiscroll
            .localeEn, // Specify language like: locale: mobiscroll.localePl or omit setting to use default
        theme: 'ios', // Specify theme like: theme: 'ios' or omit setting to use default
        themeVariant: 'light' // More info about themeVariant: https://docs.mobiscroll.com/5-22-1/calendar#opt-themeVariant
    });

    // Mobiscroll Calendar initialization
    $('#demo').mobiscroll().datepicker({
        controls: ['calendar',
            'time'
        ], // More info about controls: https://docs.mobiscroll.com/5-22-1/calendar#opt-controls
        display: 'inline' // Specify display mode like: display: 'bottom' or omit setting to use default
    });
</script>
