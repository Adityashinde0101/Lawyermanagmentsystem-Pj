<?php
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Lawyer Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- font CSS -->
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!-- js-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<!--webfonts-->
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic'
		rel='stylesheet' type='text/css'>
	<!--//webfonts-->
	<!--animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!--//end-animate-->
	<!-- chart -->
	<script src="js/Chart.js"></script>
	<!-- //chart -->
	<!--Calender-->
	<link rel="stylesheet" href="css/clndr.css" type="text/css" />
	d
	<script src="js/underscore-min.js" type="text/javascript"></script>
	<script src="js/moment-2.2.1.js" type="text/javascript"></script>
	<script src="js/clndr.js" type="text/javascript"></script>
	<script src="js/site.js" type="text/javascript"></script>
	<!--End Calender-->
	<!-- Metis Menu -->
	<script src="js/metisMenu.min.js"></script>
	<script src="js/custom.js"></script>
	<link href="css/custom.css" rel="stylesheet">
	<!--//Metis Menu -->
</head>

<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
			<div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="index.php" class="active"><i class="fa fa-home nav_icon"></i>Dashboard</a>
						</li>

						<li>
							<a href="client.php"><i class="fa fa-user nav_icon"></i>Client </a>
						</li>
						<li>
							<a href="case.php"><i class="fa fa-gavel nav_icon"></i>Case </a>
						</li>
						<li>
							<a href="task.php"><i class="fa fa-book nav_icon"></i>Task </a>
						</li>
						<li>
							<a href="lawyer_booking.php"><i class="fa fa-calendar nav_icon"></i>Appointment </a>
						</li>
						<li>
							<a href="invoice.php"><i class="fa fa-file nav_icon"></i>Invoice </a>
						</li>
						<!-- <li>
							<a href="expence.php"><i class="fa fa-money nav_icon"></i>Expence<span
									class="nav-badge-btm">02</span><span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="cash.php">Cash</a>
								</li>
								<li>
									<a href="online.php">Online</a>
								</li>
							</ul>
							
						</li> -->
						<li>
							<a href="#"><i class="fa fa-cog nav_icon"></i>Setting<span
									class="nav-badge-btm">02</span><span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="lawyer_edit_profile.php">Edit Profile</a>
								</li>
								<li>
									<a href="update_password.php">Update Password</a>
								</li>
							</ul>
							<!-- //nav-second-level -->
						</li>

				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="index.html">
						<h1>LAW OFFICE</h1>
						<span>LawyerPanel</span>
					</a>
				</div>
				<!--//logo-->
				<!--search-box-->
				<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search"
							id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77"
								preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z" />
							</svg>
						</label>
					</form>
				</div><!--//end-search-box-->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<!--notifications of menu start -->
			<!-- <div class="profile_details_left">
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
									class="fa fa-envelope"></i><span class="badge">3</span></a>
							<ul class="dropdown-menu">
								 <li>
									<div class="notification_header">
										<h3>You have 3 new messages</h3>
									</div>
								</li> 
								<li><a href="#">
										<div class="user_img"><img src="images/1.png" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet</p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li class="odd"><a href="#">
										<div class="user_img"><img src="images/2.png" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet </p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li><a href="#">
										<div class="user_img"><img src="images/3.png" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet </p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all messages</a>
									</div>
								</li>
							</ul>
						</li>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
									class="fa fa-bell"></i><span class="badge blue">3</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new notification</h3>
									</div>
								</li>
								<li><a href="#">
										<div class="user_img"><img src="images/2.png" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet</p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li class="odd"><a href="#">
										<div class="user_img"><img src="images/1.png" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet </p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li><a href="#">
										<div class="user_img"><img src="images/3.png" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet </p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all notifications</a>
									</div>
								</li>
							</ul>
						</li>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
									class="fa fa-tasks"></i><span class="badge blue1">15</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 8 pending task</h3>
									</div>
								</li>
								<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Database update</span><span
												class="percentage">40%</span>
											<div class="clearfix"></div>
										</div>
										<div class="progress progress-striped active">
											<div class="bar yellow" style="width:40%;"></div>
										</div>
									</a></li>
								<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Dashboard done</span><span
												class="percentage">85%</span>
											<div class="clearfix"></div>
										</div>


								<li>
									<div class="notification_bottom">
										<a href="#">See all pending tasks</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
					<div class="clearfix"> </div>
				</div>  -->
				<!--notification menu end -->
				<div class="profile_details">
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
									<span class="prfil-img"><img src="...." alt=""> </span>
									<div class="user-name">
										<p>
											<?php echo $_SESSION['first_Name']; ?>
											<?php echo $_SESSION['last_Name']; ?>
										</p>

										<span>Lawyer</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>
								</div>
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="lawyer_edit_profile.php"><i class="fa fa-cog"></i> Settings</a> </li>
								<li> <a href="profile.php"><i class="fa fa-user"></i> Profile</a> </li>
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="row">
					<div class="col-md-4">
						<div class="widget">
							<div class="stats-left">
								<h5>Clients</h5>
								<h4>......</h4>
							</div>
							<div class="stats-right">
								<label> .....</label>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="widget states-mdl">
							<div class="stats-left">
								<h5>Cases</h5>
								<h4>.......</h4>
							</div>
							<div class="stats-right">
								<label> .......</label>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="widget states-last">
							<div class="stats-left">
								<h5>Important Cases</h5>
								<h4>....</h4>
							</div>
							<div class="stats-right">
								<label>....</label>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>



					<div class="clearfix"> </div>
					<script>
						var barChartData = {
							labels: ["Jan", "Feb", "March", "April", "May", "June", "July"],
							datasets: [
								{
									fillColor: "rgba(233, 78, 2, 0.9)",
									strokeColor: "rgba(233, 78, 2, 0.9)",
									highlightFill: "#e94e02",
									highlightStroke: "#e94e02",
									data: [65, 59, 85, 81, 56, 55, 40]
								},
								{
									fillColor: "rgba(79, 82, 186, 0.9)",
									strokeColor: "rgba(79, 82, 186, 0.9)",
									highlightFill: "#4F52BA",
									highlightStroke: "#4F52BA",
									data: [40, 70, 55, 20, 45, 70, 60]
								}
							]

						};
					</script>

				</div>

				<div class="row calender widget-shadow">
					<h4 class="title">Calender</h4>
					<div class="cal1">

					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
			<p>&copy; All rights reserved. 2024</p>
		</div>
		<!--//footer-->
	</div>
	<!-- Classie -->
	<script src="js/classie.js"></script>
	<script>
		var menuLeft = document.getElementById('cbp-spmenu-s1'),
			showLeftPush = document.getElementById('showLeftPush'),
			body = document.body;

		showLeftPush.onclick = function () {
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
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
</body>

</html>