<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title', 'Dashboard')</title>
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
	<body>
		
	  <div class="container-scroller">
	    @include('dashboard.layouts.header')
	    <div class="container-fluid page-body-wrapper">
	      <nav class="sidebar sidebar-offcanvas" id="sidebar">
	        @include('dashboard.layouts.navbar')
	      </nav>
	      <div class="main-panel">
	        <div class="content-wrapper">
	          @yield('content')
	        </div>
	        @include('dashboard.layouts.footer')
	      </div>
	    </div>
	  </div>

	  <script src="vendors/js/vendor.bundle.base.js"></script>
	  <script src="vendors/js/vendor.bundle.addons.js"></script>
	  <script src="js/off-canvas.js"></script>
	  <script src="js/misc.js"></script>
	  <script src="js/dashboard.js"></script>
	  @yield('js')
	</body>
</html>