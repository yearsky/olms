<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E-Learning GIBS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon"> -->
    <link href="newfrontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://www.dafontfree.net/embed/Y2VudHVyeS1nb3RoaWMtcmVndWxhciZkYXRhLzQwL2MvMTAxOTUwL0dPVEhJQy5UVEY" rel="stylesheet" type="text/css" />

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url() . 'assets/newfrontend/assets/vendor/aos/aos.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/newfrontend/assets/vendor/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/newfrontend/assets/vendor/bootstrap-icons/bootstrap-icons.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/newfrontend/assets/vendor/boxicons/css/boxicons.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/newfrontend/assets/vendor/glightbox/css/glightbox.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/newfrontend/assets/vendor/swiper/swiper-bundle.min.css'; ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url() . 'assets/newfrontend/assets/css/index2Style.css'; ?>" rel="stylesheet">
    <!-- <link href="newfrontend/assets/css/style.css" rel="stylesheet"> -->

</head>

<body>

    <!-- ======Header======== -->


    <main id="main">
        <!-- content start -->
        <section>
            <div class="container-fluid p-0 home-content-login container-top-border">
                <!-- account block start -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 vertical-align d-none d-lg-block">
                            <img class="img-fluid" src="<?php echo base_url() . 'assets/newfrontend/assets/img/bg 2.png'; ?>" width="500px" height="500px">
                        </div>
                        <div class="col-xl-6 offset-xl-0 col-lg-6 offset-lg-0 col-md-8 offset-md-2">
                            <div class="rightRegisterForm-login">
                                <form id="loginForm" class="form-horizontal" method="POST" action="<?php echo site_url('login/validate_login/user'); ?>">
                                    <!-- {{ csrf_field() }} -->
                                    <div class="p-4">
                                        <div class="form-group-login">
                                            <img src="<?php echo base_url() . 'assets/newfrontend/assets/img/logo.png' ?>" alt="" class="img-fluid" style="display:block; margin:auto; "><br>
                                            <h4><b>Login</b></h4><br>
                                            <label>Email ID</label>
                                            <input name="email" type="text" class="form-control form-control-sm" placeholder="Email ID" value="">
                                            <!-- @if ($errors->has('email')) -->
                                            <!-- <label class="error" for="email">{{ $errors->first('email') }}</label> -->
                                            <!-- @endif -->

                                        </div>
                                        <div class="form-group-login">
                                            <label>Password</label>
                                            <input name="password" type="password" class="form-control form-control-sm" placeholder="Password" value="">
                                            <!-- @if ($errors->has('password')) -->
                                            <!-- <label class="error" for="password">{{ $errors->first('password') }}</label> -->
                                            <!-- @endif -->
                                        </div>
                                        <div class="form-group-login">
                                            <div class="row m-0">
                                                <div class="custom-control custom-checkbox col-6">
                                                    <input type="checkbox" class="custom-control-input" name="remember" id="remember">
                                                    <label class="custom-control-label" for="remember">Remember me</label>
                                                </div>
                                                <!-- <div class="col-6">
                              <a href="{{ route('password.request') }}" class="float-right forgot-text">Forgot password?</a>
                          </div> -->
                                            </div>
                                        </div>
                                        <div class="form-group-login">
                                            <button type="submit" class="btn btn-lg btn-block login-page-button"><b>Login</b></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- content end -->
    </main>

    <!-- ======= Footer ======= -->



</body>

</html>