<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Billing System Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <style>
        .content-wrapper {
            background: #f2edf3;
            padding: 0.75rem 1.25rem;
            width: 100%;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            }
        .page-header {
            margin: 0 0 0 0;
        }
        .card .card-body {
            padding: 1rem 1rem;
        }
    </style>
     <!-- Datatables styles -->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/DataTables/css/custom-pagination.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/DataTables/css_old/responsive.bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/DataTables/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/DataTables/css/fixedHeader.bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/DataTables/css/responsive.bootstrap.min.css') }}">
    <!-- End Datatables styles -->

    @yield('add_after_css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div> -->
      <!-- partial:partials/_navbar.html -->
            @include('partial.headernavigation')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
            @include('partial.sidebar')
             <!-- partial -->
            <div class="main-panel">
                @yield('content')

                @include('partial.footer')
             </div>
            <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <form action="{{ route('logout') }}" method="POST" id="logout-form">
        @csrf
    </form>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- <script src="{{ asset('admin_assets/plugins/jquery/dist/jquery.min.js') }}"></script>
     <script src="{{ asset('admin_assets/plugins/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/app-style-switcher.js') }}"></script> -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <!-- End custom js for this page -->
    <!--Datatables -->

    <!--Custom  Datatables -->
    <script type="text/javascript" language="javascript" src="{{ asset('assets/DataTables/js/jquery-3.5.1.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('assets/DataTables/js/jquery.dataTables.min.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('assets/DataTables/js/dataTables.bootstrap.min.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('assets/DataTables/js/dataTables.fixedHeader.min.js') }}"></script>

	<script type="text/javascript" language="javascript" src="{{ asset('assets/DataTables/js/dataTables.responsive.min.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('assets/DataTables/js/responsive.bootstrap.min.js') }}"></script>

    @yield('add_after_js')
  </body>
</html>
