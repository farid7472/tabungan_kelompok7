
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/upvex/layouts/light/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 07:37:56 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Upvex - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

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
                                    <p class="text-muted mb-4 mt-3">Apakah Kamu Belum Mempunyai Akun? <br> Buat akun terlebih dahulu</p>
                                </div>

                                <h5 class="auth-title">Create Account</h5>

                                <form  method="POST" action="{{ route('register') }}" id="submitForm">
                        		@csrf

                                    <div class="form-group">
                                        <label for="fullname">Full Name</label>
                                        <input id="usr_name" type="text" class="form-control @error('usr_name') is-invalid @enderror" name="usr_name" value="{{ old('usr_name') }}" autocomplete="usr_name" autofocus>

		                                @error('usr_name')
		                                <span class="invalid-feedback" role="alert">
		                                    <strong>{{ $message }}</strong>
		                                </span>
		                                @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="emailaddress">Email address</label>
                                         <input id="usr_email" type="email" class="form-control @error('usr_email') is-invalid @enderror" name="usr_email" value="{{ old('usr_email') }}" autocomplete="usr_email">

		                                @error('usr_email')
		                                <span class="invalid-feedback" role="alert">
		                                    <strong>{{ $message }}</strong>
		                                </span>
		                                @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="emailaddress">Phone Number</label>
                                          <input id="usr_phone" value="{{ old('usr_phone') }}" type="text" class="form-control @error('usr_phone') is-invalid @enderror" name="usr_phone" autocomplete="off">

		                                @error('usr_phone')
		                                <span class="invalid-feedback" role="alert">
		                                    <strong>{{ $message }}</strong>
		                                </span>
		                                @enderror
                                    </div>

                                    
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

		                                @error('usr_password')
		                                <span class="invalid-feedback" role="alert">
		                                    <strong>{{ $message }}</strong>
		                                </span>
		                                @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Confrim Password</label>
                                         <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                    </div>

                                    <div class="form-group row">
			                            <div class="col-md-6">
			                                <input type="hidden" name="role" value="1">
			                            </div>
			                        </div>

                                    
                                    
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-danger btn-block" type="submit"> Sign Up </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Already have account?  <a href="pages-login.html" class="text-muted ml-1"><b class="font-weight-semibold">Sign In</b></a></p>
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
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/upvex/layouts/light/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 07:37:56 GMT -->
</html>

