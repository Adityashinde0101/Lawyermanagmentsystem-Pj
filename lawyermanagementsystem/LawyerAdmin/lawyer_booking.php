<?php
session_start();
function connect(){
    $servername = getenv("DB_HOST") ?: "localhost";
    $username   = getenv("DB_USER") ?: "root";
    $password   = getenv("DB_PASS") ?: "";
    $dbname     = getenv("DB_NAME") ?: "lawyermanagement";
    $port       = (int)(getenv("DB_PORT") ?: 3306);

    $conn = new mysqli($servername, $username, $password, $dbname, $port);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
if (isset($_SESSION['login']) && $_SESSION['login'] == TRUE && isset($_SESSION['status']) && $_SESSION['status'] == 'Active') {
	$conn = connect();
	if (isset($_GET['unblock_id'])) {
		$id = $_GET['unblock_id'];
		$sql = "UPDATE `booking` SET `status`='Accepted' WHERE booking_id='$id'";
		$conn->query($sql);
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Bookings</title>
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
		<!-- Metis Menu -->
		<script src="js/metisMenu.min.js"></script>
		<script src="js/custom.js"></script>
		<link href="css/custom.css" rel="stylesheet">
		<!--//Metis Menu -->
		<!-- css for table -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Styles -->
    <style>
    /* Style for the table header */
    .widget-header {
        padding: 15px;
    }
    .widget-header h3 {
        margin-top: 0;
    }
    /* Style for the table content */
    .widget-content table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .widget-content table th,
    .widget-content table td {
        padding: 30px; /* Adjusted padding for bigger size */
        border: 1px solid #ddd;
        text-align: left;
        font-size: 16px; /* Increased font size for better readability */
    }
    .widget-content table th {
        background-color: #f5f5f5;
        font-weight: bold;
    }
    .widget-content table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    .widget-content table tbody tr:hover {
        background-color: #f0f0f0;
    }
    .widget-content table tbody tr td:last-child {
        text-align: center;
    }
    .widget-content table tbody tr td:last-child a {
        display: block;
        text-decoration: none;
        padding: 8px 12px; /* Adjusted padding for action buttons */
        border-radius: 5px;
        background-color: #f0ad4e;
        color: #fff;
        transition: background-color 0.3s ease;
    }
	.widget {
		width: 85%;
    border: 1px solid #F5F1F1;
    padding: 0px;
    box-shadow: 0 -1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);
	}
    .widget-content table tbody tr td:last-child a:hover {
        background-color: #eea236;
    }
    /* Adjust column widths */
    .widget-content table th:nth-child(1),
    .widget-content table td:nth-child(1) {
        width: 5%; /* Adjust as needed */
    }
    .widget-content table th:nth-child(2),
    .widget-content table td:nth-child(2) {
        width: 30%; /* Adjust as needed */
    }
    .widget-content table th:nth-child(3),
    .widget-content table td:nth-child(3) {
        width: 15%; /* Adjust as needed */
    }
    .widget-content table th:nth-child(4),
    .widget-content table td:nth-child(4) {
        width: 120%; /* Adjust as needed */
    }
    .widget-content table th:nth-child(5),
    .widget-content table td:nth-child(5) {
        width: 70%; /* Adjust as needed */
    }
	.center-table {
            margin: 0 auto; /* Center align the table */
            width: 85%; /* Set the table width */
            text-align: center; /* Align table content to center */
        }
    .center-table th,
    .center-table td {
            text-align: center; /* Align table headings to center */
        }
		<style>

.booking-section {
        background-color: #3498db; /* Blue color */
    }
</style>
	</style>
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
								<a href="expence.php"><i class="fa fa-money nav_icon"></i>Expence<span class="nav-badge-btm">02</span><span class="fa arrow"></span></a>
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
						<a href="index.php">
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
					<!-- notification -->
					<!-- <div class="profile_details_left"><
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
					</div> -->
					<!--notification menu end -->
					<div class="profile_details">
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">
										<span class="prfil-img"><img src="...." alt=""> </span>
										<div class="user-name">
										<p><?php echo $_SESSION['first_Name']; ?>
										<?php echo $_SESSION['last_Name']; ?></p>
										
											<span>Lawyer</span>
										</div>
										<i class="fa fa-angle-down lnr"></i>
										<i class="fa fa-angle-up lnr"></i>
										<div class="clearfix"></div>
									</div>
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="lawyer_edit_profile.php"><i class="fa fa-cog"></i> Settings</a> </li>
									<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
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
        	<div class="row-one">
            <!-- booking -->
            	<section class="bookingrqst booking-section text-center">
                	<div class="container">
                    	<div class="span7">
                        	<div class="widget stacked widget-table action-table">
                            	<div class="widget-header bg-primary">
                                	<i class="icon-th-list"></i>
                                <h3 class="text-white">Booking Request</h3>
                            	</div>
                            <div class="widget-content">
                                <table class="table table-striped table-bordered table-success table-responsive center-table">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No.</th>
                                            <th style="text-align: center;">Client Name</th>
                                            <th style="text-align: center;">Date</th>
                                            <th style="text-align: center;">Description</th>
                                            <th style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $a = $_SESSION['lawyer_id'];
                                        $conn = connect();
                                        $result = mysqli_query($conn, "SELECT booking_id,first_Name,last_Name,date,description,booking.status as 'statuss' FROM booking,client,user WHERE booking.client_id=client.client_id AND client.client_id=user.u_id and booking.lawyer_id='$a'");
                                        $counter = 0;
                                        while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                            <tr>
                                                <td><?php echo ++$counter; ?></td>
                                                <td><?php echo $row["first_Name"] . " " . $row["last_Name"]; ?></td>
                                                <td><?php echo $row["date"]; ?></td>
                                                <td><?php echo $row["description"]; ?></td>
                                                <td>
                                                    <?php if ($row['statuss'] == 'Pending') { ?>
                                                        <a class="btn btn-sm btn-warning"
                                                            href="lawyer_booking.php?unblock_id=<?= $row['booking_id'] ?>"><i
                                                                class="fas fa-hourglass"></i>&nbsp; Pending</a>
                                                    <?php } else { ?>
                                                        Active
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div> <!-- /widget-content -->
                        </div> <!-- /widget -->
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

			<!--footer-->
			<div class="footer">
				<p>&copy; All rights reserved. 2026</p>
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
	<?php
} else
	header("Location: lawyer_booking.php");
?>
</html>