<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Let IT Grow</title>
	<meta name="description" content="Let IT Grow">
	<meta name="author">

    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
<!-- Definity CSS -->
<!-- Theme style -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="{{asset('css/zerogrid.css')}}" rel="stylesheet" media="all" type="text/css">
	<link href="{{asset('css/style.css')}}" rel="stylesheet" media="all" type="text/css">
	<link href="{{asset('css/menu.css')}}" rel="stylesheet" media="all" type="text/css">
	<!-- Lightbox -->
	<link href="{{asset('css/lightbox.css')}}" rel="stylesheet" media="all" type="text/css">
	<!-- Video Background -->
	<link href="{{asset('css/jquery.mb.ytplayer.min.css')}}" rel="stylesheet" media="all" type="text/css">
	<!-- Animate.css -->
	<link href="{{asset('css/animate.css')}}" rel="stylesheet" media="all" type="text/css">
	<link href="{{asset('css/networkAnimate.css')}}" rel="stylesheet" media="all" type="text/css">

  
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  

	<!-- Custom Fonts -->
	<link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Owl Carousel Assets -->
    <link href="{{asset('owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('owl-carousel/owl.theme.css')}}" rel="stylesheet"> -->


    <link href="{{asset('css/quoteCarousel.css')}}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>

	<!-- JS -->
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->

</head>
<body id="page-top" class="sub-page">
<div class="wrap-body">
    @yield('content')
<!--////////////////////////////////////Footer-->
	@include('partials.footer')
	<div id="page-top"><a href="#page-top" class="button button-toTop f-right"><i class="fa fa-angle-double-up"></i></a></div>

	<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/menu.js')}}"></script>
    <script src="{{asset('js/jquery.localScroll.min.js')}}"></script>
    <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('js/SmoothScroll.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>

    <!-- Owl Carousel JS -->
    <script src="{{asset('owl-carousel/owl.carousel.js')}}"></script>

    <!-- Google Map -->
    <script src="{{asset('js/google-map.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async defer></script>


   <!-- Definity JS -->
   <script src="{{asset('js/main.js')}}"></script>
   <!-- jQuery -->
     <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
     <!-- jQuery UI 1.11.4 -->
     <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
     <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
     <script>
       $.widget.bridge('uibutton', $.ui.button)
     </script>
     <!-- Bootstrap 4 -->
     <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
     <!-- ChartJS -->
     <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
     <!-- Sparkline -->
     <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
     <!-- JQVMap -->
     <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
     <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
     <!-- jQuery Knob Chart -->
     <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
     <!-- daterangepicker -->
     <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
     <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
     <!-- Tempusdominus Bootstrap 4 -->
     <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
     <!-- Summernote -->
     <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
     <!-- overlayScrollbars -->
     <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
     <!-- AdminLTE App -->
     <script src="{{asset('dist/js/adminlte.js')}}"></script>
     <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
     <script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
     <!-- AdminLTE for demo purposes -->
     <script src="{{asset('dist/js/demo.js')}}"></script>
   <!-- jQuery -->
  <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- DataTables -->
  <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true,
          "autoWidth": false,
        });
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>
</div>
</body>
</html>
