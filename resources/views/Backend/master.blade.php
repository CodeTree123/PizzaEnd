<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Dashboard -Pizza End</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!-- Bootstrap Core CSS -->
	<link href="{{asset('backend/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->

	<!-- Custom CSS -->
	<link href="{{asset('backend/css/style.css')}}" rel='stylesheet' type='text/css' />

	<!-- font-awesome icons CSS -->
	<link href="{{asset('backend/css/font-awesome.css')}}" rel="stylesheet">
	<!-- //font-awesome icons CSS-->

	<!-- side nav css file -->
	<link href="{{asset('backend/css/SidebarNav.min.css')}}" media='all' rel='stylesheet' type='text/css' />
	<!-- //side nav css file -->

	<!-- js-->
	<script src="{{asset('backend/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('backend/js/modernizr.custom.js')}}"></script>

	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<!--//webfonts-->

	<!-- chart -->
	<script src="{{asset('backend/js/Chart.js')}}"></script>
	<!-- //chart -->

	<!-- Metis Menu -->
	<script src="{{asset('backend/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('backend/js/custom.js')}}"></script>
	<link href="{{asset('backend/css/custom.css')}}" rel="stylesheet">
	<!--//Metis Menu -->
	<style>
		#chartdiv {
			width: 100%;
			height: 295px;
		}
	</style>
	<!--pie-chart -->
	<!-- index page sales reviews visitors pie chart -->
	<script src="{{asset('backend/js/pie-chart.js')}}" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#demo-pie-1').pieChart({
				barColor: '#2dde98',
				trackColor: '#eee',
				lineCap: 'round',
				lineWidth: 8,
				onStep: function(from, to, percent) {
					$(this.element).find('.pie-value').text(Math.round(percent) + '%');
				}
			});

			$('#demo-pie-2').pieChart({
				barColor: '#8e43e7',
				trackColor: '#eee',
				lineCap: 'butt',
				lineWidth: 8,
				onStep: function(from, to, percent) {
					$(this.element).find('.pie-value').text(Math.round(percent) + '%');
				}
			});

			$('#demo-pie-3').pieChart({
				barColor: '#ffc168',
				trackColor: '#eee',
				lineCap: 'square',
				lineWidth: 8,
				onStep: function(from, to, percent) {
					$(this.element).find('.pie-value').text(Math.round(percent) + '%');
				}
			});


		});
	</script>
	<!-- //pie-chart -->
	<!-- index page sales reviews visitors pie chart -->

	<!-- requried-jsfiles-for owl -->
	<link href="{{asset('backend/css/owl.carousel.css')}}" rel="stylesheet">
	<script src="{{asset('backend/js/owl.carousel.js')}}"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel({
				items: 3,
				lazyLoad: true,
				autoPlay: true,
				pagination: true,
				nav: true,
			});
		});
	</script>
	<!-- //requried-jsfiles-for owl -->
</head>

<body class="cbp-spmenu-push">
	<div class="main-content">
		<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<!--left-fixed -navigation-->
			@include('Backend.include.sidebar')
			<!--left-fixed -navigation-->
		</div>

			<!-- header-starts -->
			@include('Backend.include.header')
			<!-- //header-ends -->

			<!-- main content start-->
			<div id="page-wrapper">
				<div class="main-page">
					@yield('content')

				</div>
			</div>
			<!--footer-->
			<!-- <div class="footer">
	   <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved.</p>
	</div> -->
			<!--//footer-->
		</div>
		<!-- new added graphs chart js-->

		<script src="{{asset('backend/js/Chart.bundle.js')}}"></script>
		<script src="{{asset('backend/js/utils.js')}}"></script>

		<!-- new added graphs chart js-->

		<!-- Classie -->
		<!-- for toggle left push menu script -->
		<script src="{{asset('backend/js/classie.js')}}"></script>
		<script>
			var menuLeft = document.getElementById('cbp-spmenu-s1'),
				showLeftPush = document.getElementById('showLeftPush'),
				body = document.body;

			showLeftPush.onclick = function() {
				classie.toggle(this, 'active');
				classie.toggle(body, 'cbp-spmenu-push-toright');
				classie.toggle(menuLeft, 'cbp-spmenu-open');
				disableOther('showLeftPush');
			};


			function disableOther(button) {
				if (button !== 'showLeftPush') {
					classie.toggle(showLeftPush, 'disabled');
				}
			}
		</script>
		<!-- //Classie -->
		<!-- //for toggle left push menu script -->
		<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
		<!--scrolling js-->
		<script src="{{asset('backend/js/jquery.nicescroll.js')}}"></script>
		<script src="{{asset('backend/js/metisMenu.min.js')}}"></script>
		<script src="{{asset('backend/js/scripts.js')}}"></script>
		<!--//scrolling js-->

		<!-- side nav js -->
		<script src="{{asset('backend/js/SidebarNav.min.js')}}" type='text/javascript'></script>
		<script>
			$('.sidebar-menu').SidebarNav()
		</script>
		<!-- //side nav js -->

		<!-- for index page weekly sales java script -->
		<script src="{{asset('backend/js/SimpleChart.js')}}"></script>

		<!-- //for index page weekly sales java script -->



		<!-- Bootstrap Core JavaScript -->
		<script src="{{asset('backend/js/bootstrap.js')}}"> </script>
		<!-- //Bootstrap Core JavaScript -->


</body>

</html>
