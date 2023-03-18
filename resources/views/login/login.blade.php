<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <title>Admin</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha512-tDXPcamuZsWWd6OsKFyH6nAqh/MjZ/5Yk88T5o+aMfygqNFPan1pLyPFAndRzmOWHKT+jSDzWpJv8krj6x1LMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <style>
        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 0.25rem;
        }
        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem;
        }
        .login-sidebar {
            padding: 10% 0;
        }
        .login-sidebar .login-box {
            position: relative;
        }
        #loginform {
            min-width: 360px;
        }
        .login-sidebar {
            padding: 0px;
            margin-top: 0px;
        }

        .login-sidebar .login-box {
            right: 0px;
            position: absolute;
            height: 100%;
        }

        .login-register {
            position: relative;
            overflow: hidden;
        }

        .login-register {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            height: 100%;
            width: 100%;
            padding: 0;
            position: fixed;
        }
    </style>

</head>

<body>
    <section id="wrapper" class="login-register login-sidebar"
        style="background-image:url({{ asset('assets/img/bg-login.jpg') }});">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material" id="loginform" action="{{ route('postLogin') }}"
                    method="POST">
                    @csrf
                    <a href="javascript:void(0)" class="text-center db">
                        <img src="{{ asset('assets/img/logo-hachinet-alt.png') }}" alt="Home" />
                    </a>
                    <div class="form-group mt-5">
                        <div class="col-xs-12">
                            <input class="form-control px-2" type="text" name="txtEmail" required
                                placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control px-2" type="password" name="txtPassword" required
                                placeholder="Password">
                        </div>
                    </div>
                    @if (session()->has('status'))
                    <div class="form-group">
                        <div class="col-xs-12">
                            <p class="text-danger text-center"> {{ session()->get('status') }}</p>
                        </div>
                    </div>
                    @endif
                    <div class="form-group text-center mt-3">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light"
                                type="submit">Log In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
