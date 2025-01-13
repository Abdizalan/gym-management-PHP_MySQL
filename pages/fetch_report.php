<?php
include "../php/Codes.php";

// Turn on error reporting for debugging (remove in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';

    if (!empty($name)) {
        $co = new Codes();
        $result = $co->getReportByName($name);

        if ($result) {
            // Generate HTML for the report
            echo "
                <strong>Name:</strong> {$result['name']}<br>
                <strong>Tell:</strong> {$result['tell']}<br>
                <strong>Institution:</strong> {$result['instition']}<br>
                <strong>Account Name:</strong> {$result['acc_name']}<br>
                <strong>Amount:</strong> {$result['amount']}<br>
                <strong>Received Date:</strong> {$result['rec_date']}<br>
            ";
        } else {
            echo "<strong>Error:</strong> No data found for the given name.";
        }
    } else {
        echo "<strong>Error:</strong> Name parameter is missing or empty.";
    }
} else {
    echo "<strong>Error:</strong> Invalid request method.";
}
?>


