
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">


  <title> Beranda Pengguna </title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />


  <!-- PLUGINS CSS STYLE -->
  <link href="{{ ('/admin/dist/assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />

  <!-- No Extra plugin used -->
  
  <link href="{{ ('/admin/dist/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
  
  <link href="{{ ('/admin/dist/assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />
  
  <link href="{{ ('/admin/dist/assets/plugins/toastr/toastr.min.css') }}" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link href="{{ ('/admin/dist/assets/css/sleek.css') }}"  rel="stylesheet" />

  <!-- FAVICON -->
  <link href="{{ ('/admin/dist/assets/img/favicon.png') }}" rel="shortcut icon" />

  

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{ ('/admin/assets/plugins/nprogress/nprogress.js') }}"></script>
</head>


<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
  
  <script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
  </script>

  
  <div id="toaster"></div>
  

  <div class="wrapper">
    <!-- Github Link -->
    {{-- <a href="https://github.com/tafcoder/sleek-dashboard"  target="_blank" class="github-link">
      <svg width="70" height="70" viewBox="0 0 250 250" aria-hidden="true">
        <defs>
          <linearGradient id="grad1" x1="0%" y1="75%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:#896def;stop-opacity:1" />
            <stop offset="100%" style="stop-color:#482271;stop-opacity:1" />
          </linearGradient>
        </defs>
        <path d="M 0,0 L115,115 L115,115 L142,142 L250,250 L250,0 Z" fill="url(#grad1)"></path>
      </svg>
      <i class="mdi mdi-github-circle"></i>
    </a> --}}

            <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
            <div class="sidebar">
                @include('layouts.admin.sidebaruser')
            </div>


    <div class="page-wrapper">
                <!-- Header -->
                @include('layouts.admin.header')


      <div class="content-wrapper">
          @yield('dashboard')

        <div class="right-sidebar-2">
            @include('layouts.admin.layoutsetting')
        </div>

        </div>

      </div>

        @include('layouts.admin.footer')

    </div>
  </div>

  <script src="{{ ('/admin/dist/assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ ('/admin/dist/assets/plugins/slimscrollbar/jquery.slimscroll.min.js') }}"></script>
<script src="{{ ('/admin/dist/assets/plugins/jekyll-search.min.js') }}"></script>



<script src="{{ ('/admin/dist/assets/plugins/charts/Chart.min.js') }}"></script>
  


<script src="{{ ('/admin/dist/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="{{ ('/admin/dist/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
  


<script src="{{ ('/admin/dist/assets/plugins/daterangepicker/moment.min.js') }}"></script>
<script src="{{ ('/admin/dist/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script>
  jQuery(document).ready(function() {
    jQuery('input[name="dateRange"]').daterangepicker({
    autoUpdateInput: false,
    singleDatePicker: true,
    locale: {
      cancelLabel: 'Clear'
    }
  });
    jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
      jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
    });
    jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
      jQuery(this).val('');
    });
  });
</script>
  


<script src="{{ ('/admin/dist/assets/plugins/toastr/toastr.min.js') }}"></script>



<script src="{{ ('/admin/dist/assets/js/sleek.bundle.js') }}"></script>
<script src="{{ ('/assets/sweetalert/sweetalert.all.js') }}"></script>
@yield('hapus')
</body>

</html>

































  