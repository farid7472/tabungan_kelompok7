<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/upvex/layouts/light/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 07:37:55 GMT -->
<head>
        <meta charset="utf-8" />
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="{{URL::to('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <a href="index.html">
                                        <span><img src="assets/images/logo-dark.png" alt="" height="26"></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Silahkan Login Terlebih Dahulu</p>
                                </div>

                                <h5 class="auth-title">Sign In</h5>

                                <form action="{{ route('login') }}" id="submitForm" method="post">
                                	@csrf
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Email address</label>
                                        <input type="text" class="form-control  @error('usr_email') is-invalid @enderror" name="usr_email" value="{{ old('usr_email') }}" autocomplete="off" autofocus>

                                    @error('usr_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox checkbox-info">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-danger btn-block"  type="submit"> Log In </button>
                                    </div>

                                </form>

                                

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="pages-recoverpw.html" class="text-muted ml-1">Forgot your password?</a></p>
                                <p class="text-muted">Don't have an account? <a href="{{URL::to('/register-student')}}" class="text-muted ml-1"><b class="font-weight-semibold">Register</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <!-- Vendor js -->
        <script src="{{URL::to('assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{URL::to('assets/js/app.min.js')}}"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/upvex/layouts/light/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 07:37:56 GMT -->
</html>





