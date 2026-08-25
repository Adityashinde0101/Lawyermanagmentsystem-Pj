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
    $task_subject = $_POST['task_subject'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $status1 = $_POST['status1'];
    $priority = $_POST['priority'];
    $related = $_POST['related'];
    $task_description = $_POST['task_description'];

    // Perform SQL query to insert data into the database
    $lawyer_id=$_SESSION['lawyer_id'];
    $query = "INSERT INTO task (task_subject,start_date, end_date, status1, priority, related, task_description, lawyer_id)
              VALUES ('$task_subject', '$start_date', '$end_date', '$status1', '$priority', '$related', '$task_description', '$lawyer_id')";

    if ($mysqli->query($query) === TRUE) {
        echo "<script>
        alert('Task added successfully');
        window.location.href = 'task.php';
      </script>";
    } else {
        echo "Error: " . $query . "<br>" . $mysqli->error;
    }
}

// Close the database connection
$mysqli->close();
?>
