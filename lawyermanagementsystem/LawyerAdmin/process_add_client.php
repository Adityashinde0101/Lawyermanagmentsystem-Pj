<?php
session_start();
// Assuming this PHP code is part of your larger PHP file or is included.

// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lawyermanagement"; // Change this to the correct database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $f_name = $_POST['f_name'];
    $m_name = $_POST['m_name'];
    $l_name = $_POST['l_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $alternate_no = $_POST['alternate_no'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city_id = $_POST['city_id'];
    $reference_name = $_POST['reference_name'];
    $reference_mobile = $_POST['reference_mobile'];

    $lawyer_id=$_SESSION['lawyer_id'];
    // SQL query to insert data into the database
    $sql = "INSERT INTO lclient (f_name, m_name, l_name, gender, email, mobile, alternate_no, address, country, state, city_id, reference_name, reference_mobile,lawyer_id)
            VALUES ('$f_name', '$m_name', '$l_name', '$gender', '$email', '$mobile', '$alternate_no', '$address', '$country', '$state', '$city_id', '$reference_name', '$reference_mobile', '$lawyer_id')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Record inserted successfully');
            window.location.href = 'client.php';
          </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
