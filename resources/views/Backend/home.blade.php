
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Login- Pizza End</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="backend/css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="backend/css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS-->
<link href="backend/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons CSS-->

 <!-- side nav css file -->
 <link href='backend/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->

 <!-- js-->
<script src="backend/js/jquery-1.11.1.min.js"></script>
<script src="backend/js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->

<!-- Metis Menu -->
<script src="backend/js/metisMenu.min.js"></script>
<script src="backend/js/custom.js"></script>
<link href="backend/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head>
<body class="cbp-spmenu-push">
<div class="main-content">


		<!-- main content start-->
		<div id="page-wrapper" style="margin:0px;">


          @if(session()->has('massage'))
        <div class="alert alert-success">
          {{session()->get('massage')}}
        </div>
          @endif
          @if ($errors->any())
          @foreach ($errors->all() as $error)
          <div class="alert alert-danger">{{$error}}</div>
          @endforeach
          @endif
			<div class="main-page login-page ">
				<h2 class="title1">Login</h2>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="{{route(('admin.login'))}}" method="post">
							@csrf
							<input type="email" class="user" name="email" placeholder="Enter Your Email" required="">
							<input type="password" name="password" class="lock" placeholder="Password" required="">

							<button type="submit">Sign in</button>

						</form>
					</div>
				</div>
			</div>
		</div>

	</div>





	<!--scrolling js-->
	<script src="backend/js/jquery.nicescroll.js"></script>
	<script src="backend/js/scripts.js"></script>
	<!--//scrolling js-->

	<!-- Bootstrap Core JavaScript -->
   <script src="backend/js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->

</body>
</html>
