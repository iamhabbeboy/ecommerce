<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fab Admin - Dashboard</title>

	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="/assets/vendor_components/bootstrap/dist/css/bootstrap.css">

	<!-- Data Table-->
	<link rel="stylesheet" type="text/css" href="/assets/vendor_components/datatable/datatables.min.css"/>

	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="/dashboard/css/bootstrap-extend.css">

	<!-- theme style -->
	<link rel="stylesheet" href="/dashboard/css/master_style.css">

	<!-- Fab Admin skins -->
	<link rel="stylesheet" href="/dashboard/css/skins/_all-skins.css">

	<!-- Morris charts -->
	<link rel="stylesheet" href="/assets/vendor_components/morris.js/morris.css">


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


  </head>

<body class="hold-transition skin-blue-light sidebar-mini">
	@yield('content-body')


	<!-- jQuery 3 -->
	<script src="/assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

	<!-- jQuery UI 1.11.4 -->
	{{-- <script src="/assets/vendor_components/jquery-ui/jquery-ui.js"></script> --}}

	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  // $.widget.bridge('uibutton', $.ui.button);
	</script>

	<!-- popper -->
	<script src="/assets/vendor_components/popper/dist/popper.min.js"></script>

	<!-- Bootstrap 4.0-->
	<script src="/assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>

	<!-- Slimscroll -->
	{{-- <script src="/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script> --}}

	<!-- FastClick -->
	{{-- <script src="/assets/vendor_components/fastclick/lib/fastclick.js"></script> --}}

	<!-- Morris.js charts -->
	{{-- <script src="/assets/vendor_components/raphael/raphael.min.js"></script> --}}
	{{-- <script src="/assets/vendor_components/morris.js/morris.min.js"></script> --}}

	<!-- echarts -->
	{{-- <script src="/assets/vendor_components/echarts/dist/echarts-en.min.js"></script> --}}
	{{-- <script src="/assets/vendor_components/echarts/echarts-liquidfill.min.js"></script> --}}

	<!-- This is data table -->
    {{-- <script src="/assets/vendor_components/datatable/datatables.min.js"></script> --}}

    {{-- <script src="/assets/vendor_components/popper/dist/popper.min.js"></script> --}}


	<!-- Sparkline -->
	{{-- <script src="/assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.js"></script> --}}


	<!-- SlimScroll -->
	{{-- <script src="/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script> --}}

	<!-- Fab Admin App -->
	{{-- <script src="/dashboard/js/template.js"></script> --}}

	<!-- Fab Admin dashboard demo (This is only for demo purposes) -->
	{{-- <script src="/dashboard/js/pages/dashboard.js"></script> --}}

	<!-- Fab Admin for demo purposes -->
	{{-- <script src="/dashboard/js/demo.js"></script> --}}
	{{-- <script src="/js/jquery.form.min.js"></script> --}}
	<script src="/js/main-signature.js"></script>
	<script>

	</script>
</body>
</html>
</body>
</html>