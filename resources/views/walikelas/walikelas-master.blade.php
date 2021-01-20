<!DOCTYPE html>
<html lang="en">
<head>
<!-- Mirrored from coderthemes.com/upvex/layouts/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 07:35:57 GMT -->

@include ('layouts.head')
</head>
<body>

<!-- Begin page -->
<div id="wrapper">

@include('layouts.header')

@include ('layouts.notification')


@include('layouts.sidebar-walikelas')

<!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">

                            </div>
                            <h4 class="page-title">@yield('judul')</h4>
                        </div>
                    </div>
                </div>

@yield('content')


            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->
@include('layouts.footer')
    <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

@include('layouts.js')
</body>

<!-- Mirrored from coderthemes.com/upvex/layouts/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 07:36:30 GMT -->
</html>
