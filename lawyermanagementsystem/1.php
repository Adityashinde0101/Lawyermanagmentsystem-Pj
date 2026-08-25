<?php
    session_start();
    if ($_SESSION['login'] == TRUE AND $_SESSION['status'] == 'Active') {
        // Include necessary PHP files and perform any other required actions
        include("db_con/dbCon.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Lawyer Management System</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/all.css">
<link rel="stylesheet" href="css/simple-sidebar.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/media.css">
<title></title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">My Profile</div>
            <div class="list-group list-group-flush">
                <a href="user_dashboard.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                <a href="user_profile.php" class="list-group-item list-group-item-action bg-light">Edit Profile</a>
                <a href="user_booking.php" class="list-group-item list-group-item-action bg-light">My booking requests</a>
                <a href="update_password.php" class="list-group-item list-group-item-action bg-light">Update Password</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <?php if(isset($_GET['done'])) {
                echo "<div class='alert alert-danger alert-dismissible fade show'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                        <strong>Welcome!</strong> You are login as a normal user.
                    </div>";
            } ?>
            <div class="container-fluid">
                <!-- Header -->
                <header class="sticky-header header-section">
                    <!-- Your existing navbar code goes here -->
                    <!-- Navbar code starts -->
                    <!-- ... -->
                    <!-- Navbar code ends -->
                </header>
                
                <!-- Main content section -->
                <div class="main-content">
                    <!-- Your existing content goes here -->
                    <!-- ... -->
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Footer -->
    <footer class="bg-info">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h5>All rights reserved 2026</h5>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <!-- Your custom scripts go here -->
</body>

</html>
<?php
    } else {
        header('location:login.php?deactivate');
    }
?>
