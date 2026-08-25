<?php
// Include your database connection code
session_start();

$mysqli = new mysqli(getenv("DB_HOST") ?: "localhost", getenv("DB_USER") ?: "root", getenv("DB_PASS") ?: "", getenv("DB_NAME") ?: "lawyermanagement", (int)(getenv("DB_PORT") ?: 3306));

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} /*else {
    echo "Connected successfully"; // Add this line for debugging
}*/

// Function to fetch invoice details based on invoice number
function getInvoiceDetails($invoiceNo)
{
    global $mysqli;
    $invoiceDetails = array();

    // Perform SQL query to fetch invoice details
    $query = "SELECT invoices.*, user.first_name 
              FROM invoices 
              INNER JOIN user ON invoices.lawyer_id = user.u_id 
              WHERE invoiceno = '$invoiceNo'";
    $result = $mysqli->query($query);

    if ($result) {
        if ($result->num_rows > 0) {
            // Fetch associative array
            $invoiceDetails = $result->fetch_assoc();
        } else {
            echo "No records found"; // Add this line for debugging
        }
    } else {
        echo "Error: " . $mysqli->error; // Add this line for debugging
    }

    return $invoiceDetails;
}

// Check if invoice number is provided via POST
if (isset($_POST['invoiceno'])) {
    // Get the invoice number passed via POST
    $invoiceno = $_POST['invoiceno'];

    // Fetch invoice details based on invoice number
    $invoiceDetails = getInvoiceDetails($invoiceno);

    if (!empty($invoiceDetails)) {
        // Format the invoice details into HTML for printing
        $html = '<div style="display: flex; justify-content: center;">';
        $html .= '<div style="flex-grow: 2; text-align: center;">';
        $html .= '<h2>Invoice</h2>';
		$html .= '<hr>';
		$html .= '<div style="position: absolute; right: 10px; text-align: right;">';
        $html .= '<p><strong>Invoice Number:</strong> ' . $invoiceDetails['invoiceno'] . '</p>';
        $html .= '<p><strong>Date:</strong> ' . $invoiceDetails['invoicedate'] . '</p>';
        $html .= '</div>';
		$html .= '<div style="margin-top: 20px; text-align:left;"><strong>Lawyer:</strong> ' . $invoiceDetails['first_name'] . '</div>';
		$html .= '<br>';
		$html .= '<br>';
		$html .= '<hr>';
		$html .= '<div style="margin-top: 20px; text-align:left;"><strong>Bill To:</strong> ' . $invoiceDetails['cname'] . '</div>';
		$html .= '<br>';
		$html .= '<br>';
		$html .= '<table border="1" style="width: 100%; border-collapse: collapse;">';
		$html .= '<tr><th>Description</th><th>Amount</th></tr>';
		$html .= '<tr><td style="text-align: center;">' . $invoiceDetails['s1name'] . '</td><td style="text-align: center;">' . $invoiceDetails['s1price'] . '</td></tr>';
		$html .= '<tr><td style="text-align: center;">' . $invoiceDetails['s2name'] . '</td><td style="text-align: center;">' . $invoiceDetails['s2price'] . '</td></tr>';
		$html .= '<tr><td style="text-align: center;">' . $invoiceDetails['shipdescription'] . '</td><td style="text-align: center;">' . $invoiceDetails['shipamount'] . '</td></tr>';
		$html .= '<tr><td style="text-align: center;">' . $invoiceDetails['tdescription'] . '</td><td style="text-align: center;">' . $invoiceDetails['tamount'] . '</td></tr>';
		$html .= '<tr><td style="text-align: center;"><strong>Total</strong></td><td style="text-align: center;">' . $invoiceDetails['total'] . '</td></tr>';
		$html .= '</table>';
        $html .= '</div>';
        $html .= '</div>';
		$html .= '<br>';
		$html .= '<br>';
		$html .= '<br>';
		$html .= '<br>';
		$html .= '<br>';
		$html .= '<br>';
		$html .= '<br>';
		$html .= '<br>';
		$html .= '<br>';
		$html .= '<div style="margin-top: 20px; position:bottom; text-align:right;"><strong>Authorized by:</strong><br> ' . $invoiceDetails['first_name'] . '</div>';
        echo $html;
    } else {
        echo "Invoice not found or invalid invoice number.";
    }
} else {
    echo "Invoice number not provided.";
}
?>
