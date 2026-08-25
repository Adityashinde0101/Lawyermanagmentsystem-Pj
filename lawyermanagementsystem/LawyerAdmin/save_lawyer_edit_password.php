<?php
// Function to establish a database connection
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

// Attempt to establish a database connection
$con = connect();

// Check if the form is submitted
if (isset($_POST['update'])) {
    session_start();

    // Get user email from session
    $email = $_SESSION['email'];

    // Get current password from form and escape it to prevent SQL injection
    $password = mysqli_real_escape_string($con, $_POST['current']);
//if else for check current password

    // Get new password from form
    $new_password = $_POST['new_password'];

    // Check if the length of the new password is at least 6 characters
    if (strlen($new_password) <= 5) {
        echo "<div class='alert alert-danger'>
                    Sorry, the new password should be a minimum of 6 characters.
                </div>";
    } else {
        // Query to check if the current password matches the one in the database
        $result = mysqli_query($con, "SELECT * FROM user WHERE email = '$email' AND password = '$password' AND role='Lawyer'");

        // Check if a row is returned, indicating that the current password matches
        if (mysqli_num_rows($result) > 0) {
            // Update the password in the database
            $query = "UPDATE user SET password='$new_password' WHERE email='$email'";
            if (mysqli_query($con, $query)) {
                echo "<div class='alert alert-success'>
                            <strong>Password Successfully Updated.</strong>
                        </div>";
                echo "<script>
                        alert('Password updated successfully');
                        window.location.href = 'update_password.php';
                    </script>";
            } else {
                echo "<div class='alert alert-danger'>
                            Error updating password: " . mysqli_error($con) . "
                        </div>";
            }
        } else {
            // Display error message if current password doesn't match
            echo "<div class='alert alert-danger'>
                        Sorry, the entered current password is incorrect. Please try again.
                    </div>";
        }
    }
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Update Profile</title>
</head>
<body>
    <!-- Your HTML form goes here -->
    <!-- Add JavaScript code for displaying alert message here -->
    <script>
        alert("Data updated successfully");
        window.location.href = "update_password.php?ok";
    </script>
</body>
</html>



