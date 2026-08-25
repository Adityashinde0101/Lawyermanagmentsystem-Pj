<?php
session_start();
// Include your database connection code here or in a separate file
$servername = getenv("DB_HOST") ?: "localhost";
$username = getenv("DB_USER") ?: "root";
$password = getenv("DB_PASS") ?: "";
$dbname = getenv("DB_NAME") ?: "lawyermanagement";

$mysqli = new mysqli($servername, $username, $password, $dbname, (int)(getenv("DB_PORT") ?: 3306));

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    
    $invoicedate = $_POST['invoicedate'];
    $cname = $_POST['cname'];
    $caddress = $_POST['caddress'];
    $ccity = $_POST['ccity'];
    $s1name = $_POST['s1name'];
    $s1price = $_POST['s1price'];
    $s2name = $_POST['s2name'];
    $s2price = $_POST['s2price'];
    $shipdescription = $_POST['shipdescription'];
    $shipamount = $_POST['shipamount'];
    $tdescription = $_POST['tdescription'];
    $tamount = $_POST['tamount'];
    $total =$s1price + $s2price + $shipamount + $tamount;
    // Add more invoice attributes as needed

    // Perform SQL query to insert data into the database
    $lawyer_id=$_SESSION['lawyer_id'];
    $query = "INSERT INTO invoices (invoicedate, cname, caddress, ccity, s1name, s1price, s2name, s2price, shipdescription, shipamount, tdescription, tamount, total, lawyer_id)
              VALUES ('$invoicedate', '$cname', '$caddress', '$ccity', '$s1name', '$s1price', '$s2name', '$s2price', '$shipdescription', '$shipamount', '$tdescription', '$tamount', '$total', '$lawyer_id')";

    if ($mysqli->query($query) === TRUE) {
        echo "<script>
        alert('Invoice added successfully');
        window.location.href = 'invoice.php';
      </script>";
    } else {
        echo "Error: " . $query . "<br>" . $mysqli->error;
    }
}

// Close the database connection
$mysqli->close();
?>
