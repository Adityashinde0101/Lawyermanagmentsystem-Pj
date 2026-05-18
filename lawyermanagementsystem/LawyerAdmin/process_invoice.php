<?php
// Define the function to fetch invoices from the database
function fetch_invoices_from_database() {
    // Replace this with your actual database connection code
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lawyermanagemnet"; // Replace with your actual database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to fetch invoices from the database
    $sql = "SELECT * FROM invoices"; // Replace 'your_invoice_table' with your actual table name

    // Execute the query
    $result = $conn->query($sql);

    // Check if there are any results
    if ($result->num_rows > 0) {
        // Initialize an array to store the fetched invoices
        $invoices = array();

        // Fetch each row from the result set
        while ($row = $result->fetch_assoc()) {
            // Add the fetched invoice to the invoices array
            $invoices[] = $row;
        }

        // Close the database connection
        $conn->close();

        // Return the fetched invoices array
        return $invoices;
    } else {
        // If no invoices are found, return an empty array
        $conn->close();
        return array();
    }
}

// Fetch invoices from the database
$invoices = fetch_invoices_from_database();
?>