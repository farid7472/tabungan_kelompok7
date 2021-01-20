<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/upvex/layouts/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 07:35:57 GMT -->
@include ('layouts.head')
<body>

<!-- Begin page -->
<div id="wrapper">

@include('layouts.header')

@include('layouts.sidebar-staff')

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
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Upvex</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                    <li class="breadcrumb-item active">@yield('judul')</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Dashboard</h4>
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

<!-- Right Sidebar -->
<div class="right-bar">
    <div class="rightbar-title">
        <a href="javascript:void(0);" class="right-bar-toggle float-right">
            <i class="mdi mdi-close"></i>
        </a>
        <h5 class="m-0 text-white">Settings</h5>
    </div>
    <div class="slimscroll-menu">
        <!-- User box -->
        <div class="user-box">
            <div class="user-img">
                <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
            </div>

            <h5><a href="javascript: void(0);">Marcia J. Melia</a> </h5>
            <p class="text-muted mb-0"><small>Product Owner</small></p>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <div class="row">
            <div class="col-6 text-center">
                <h4 class="mb-1 mt-0">8,504</h4>
                <p class="m-0">Balance</p>
            </div>
            <div class="col-6 text-center">
                <h4 class="mb-1 mt-0">8,504</h4>
                <p class="m-0">Balance</p>
            </div>
        </div>
        <hr class="mb-0" />

        <div class="p-3">
            <div class="custom-control custom-switch mb-2">
                <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                <label class="custom-control-label" for="customSwitch1">Notifications</label>
            </div>
            <div class="custom-control custom-switch mb-2">
                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                <label class="custom-control-label" for="customSwitch2">API Access</label>
            </div>
            <div class="custom-control custom-switch mb-2">
                <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                <label class="custom-control-label" for="customSwitch3">Auto Updates</label>
            </div>
            <div class="custom-control custom-switch mb-2">
                <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                <label class="custom-control-label" for="customSwitch4">Online Status</label>
            </div>
        </div>

        <!-- Timeline -->
        <hr class="mt-0" />
        <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
        <hr class="mb-0" />
        <div class="p-3">
            <div class="inbox-widget">
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg" class="rounded-circle" alt=""></div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                    <p class="inbox-item-text">I've finished it! See you so...</p>
                </div>
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg" class="rounded-circle" alt=""></div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                    <p class="inbox-item-text">This theme is awesome!</p>
                </div>
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg" class="rounded-circle" alt=""></div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                    <p class="inbox-item-text">Nice to meet you</p>
                </div>

                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg" class="rounded-circle" alt=""></div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                    <p class="inbox-item-text">Hey! there I'm available...</p>
                </div>
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="assets/images/users/user-6.jpg" class="rounded-circle" alt=""></div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                    <p class="inbox-item-text">This theme is awesome!</p>
                </div>
            </div> <!-- end inbox-widget -->
        </div> <!-- end .p-3-->

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="{{URL::to('assets/js/vendor.min.js')}}"></script>'

<!-- Third Party js-->
<script src="{{URL::to('assets/libs/peity/jquery.peity.min.js')}}"></script>'
<script src="{{URL::to('assets/libs/apexcharts/apexcharts.min.js')}}"></script>'
<script src="{{URL::to('assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>'
<script src="{{URL::to('assets/libs/jquery-vectormap/jquery-jvectormap-us-merc-en.js')}}"></script>'

<!-- Dashboard init -->
<script src="{{URL::to('assets/js/pages/dashboard-1.init.js')}}"></script>'

<!-- App js -->
<script src="{{URL::to('assets/js/app.min.js')}}"></script>'

</body>

<!-- Mirrored from coderthemes.com/upvex/layouts/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 07:36:30 GMT -->
</html>
