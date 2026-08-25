<?php
session_start();
// Connect to your MySQL database
$servername = getenv("DB_HOST") ?: "localhost";
  $username   = getenv("DB_USER") ?: "root";
  $password   = getenv("DB_PASS") ?: "";
  $dbname     = getenv("DB_NAME") ?: "lawyermanagement";
  $port       = (int)(getenv("DB_PORT") ?: 3306);
  
  $conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract data from the form
    $caseName = $_POST["caseName"];
    $caseNumber = $_POST["caseNumber"];
    $alternateNumber = isset($_POST["alternateNumber"]) ? $_POST["alternateNumber"] : "";
    $caseType = $_POST["caseType"];
    $caseSubType = isset($_POST["caseSubType"]) ? $_POST["caseSubType"] : "";
    $caseNumberFilling = isset($_POST["caseNumberFilling"]) ? $_POST["caseNumberFilling"] : "";
    $description = isset($_POST["description"]) ? $_POST["description"] : "";
    $registrationNumber = isset($_POST["registrationNumber"]) ? $_POST["registrationNumber"] : "";
    $crnNumber = isset($_POST["crnNumber"]) ? $_POST["crnNumber"] : "";
    $fillingDate = isset($_POST["fillingDate"]) ? $_POST["fillingDate"] : "";
    $firstHearingDate = isset($_POST["firstHearingDate"]) ? $_POST["firstHearingDate"] : "";

    // Insert data into the 'cases' table
    $lawyer_id=$_SESSION['lawyer_id'];
    $sql = "INSERT INTO cases (case_name, case_number, alternate_number, case_type, case_subtype, case_number_filing, description, registration_number, crn_number, filling_date, first_hearing_date, lawyer_id) 
            VALUES ('$caseName', '$caseNumber', '$alternateNumber', '$caseType', '$caseSubType', '$caseNumberFilling', '$description', '$registrationNumber', '$crnNumber', '$fillingDate', '$firstHearingDate', '$lawyer_id')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Case inserted successfully');
            window.location.href = 'case.php';
          </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Handle file uploads (documents and images)
    // ...

}

$conn->close();
?>