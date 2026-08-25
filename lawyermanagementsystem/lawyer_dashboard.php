<?php
session_start();
if ($_SESSION['login'] == TRUE and $_SESSION['status'] == 'Active') {

	//session_start();
	include("db_con/dbCon.php");

	?>
	<!doctype html>
	<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
			integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="css/all.css">
		<link rel="stylesheet" href="css/simple-sidebar.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/media.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
			crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

		<style>
    .stats-box {
        background-color: #fff;
        border: 1px solid #ddd;
        padding: 20px;
        margin-bottom: 20px; /* Added margin-bottom to create space between boxes */
        text-align: center;
    }

    .stats-box h5 {
        color: #333;
    }

    .stats-box h4 {
        color: #e94e02; /* Change the color as needed */
        margin-top: 10px;
        margin-bottom: 0;
    }

    .stats-label {
        color: #777;
    }
</style>




		<title></title>
	</head>

	<body>
		<header class="customnav bg-info">
			<div>
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-lg ">
							<img src="photos\ashok.png" class="fixed-image" width="85" height="85">

							<div class="container">
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
									<ul class="navbar-nav ml-auto ">
										<li class="">
											<a class="nav-link cus-a" href="#">Full Name:
												<?php echo $_SESSION['first_Name']; ?>
												<?php echo $_SESSION['last_Name']; ?>
											</a>
										</li>
										<li class="">
											<a class="nav-link cus-a" href="logout.php">Log Out</a>
										</li>

									</ul>

								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>


		<div class="d-flex" id="wrapper">

			<!-- Sidebar -->
			<div class="bg-light border-right" id="sidebar-wrapper">
				<div class="list-group list-group-flush">
					<a href="lawyer_dashboard.php"
						class="list-group-item list-group-item-action bg-light">Dashboard</a><!--lawyer dashboard page-->
					<a href="lawyer_edit_profile.php" class="list-group-item list-group-item-action bg-light">Edit
						Profile</a><!--lawyer_edit_profile page-->
					<a href="lawyer_booking.php" class="list-group-item list-group-item-action bg-light">Booking
						requests</a><!--this page-->
					<a href="update_password_admin.php" class="list-group-item list-group-item-action bg-light">Update
						Password</a>
				</div>
			</div>

			<!-- here add page code-->

			<!-- ... Your existing HTML code ... -->
			<!-- ... Your existing HTML code ... -->
			<div>
				<div class="row-one">
					<div class="col-md-4 widget">
						<div class="stats-box">
							<h5>Clients</h5>
							<h4>...</h4>
							<label class="stats-label">Total Clients</label>
						</div>
					</div>
					<div class="col-md-4 widget states-mdl">
						<div class="stats-box">
							<h5>Cases</h5>
							<h4>...</h4>
							<label class="stats-label">Total Cases</label>
						</div>
					</div>
					<div class="col-md-4 widget states-last">
						<div class="stats-box">
							<h5>Important Cases</h5>
							<h4>...</h4>
							<label class="stats-label">Total Important Cases</label>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

			<!-- ... Your existing HTML code ... -->


			<!-- ... Your existing HTML code ... -->


			<!-- Page Content -->
			<div id="page-content-wrapper">
				<?php if (isset($_GET['done'])) {
					echo "<div class='alert alert-danger alert-dismissible fade show'>
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
							<strong>Welcome!</strong> You are login as Lawyer.
							</div>";
				} ?>

			</div>
			<!-- /#page-content-wrapper -->

		</div>

		<footer>
			<div class="container bg-info">
				<div class="row">
					<div class="col">
						<h5>All rights reserved 2026</h5>
					</div>
				</div>
			</div>
		</footer>
		<!-- Optional JavaScript -->
		<!-- jQuery -->

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
			crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
			integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
			crossorigin="anonymous"></script>
	</body>

	</html>
	<?php

} else
	header('location:login.php?deactivate');
?>