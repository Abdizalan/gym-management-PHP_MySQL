<?php
include "Codes.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
    $name = $_POST['name'];
    $co = new Codes();

    // Use the setView method to display the table for the selected person
    $sql = "SELECT p.id, name, tell, instition, acc_name, amount, rec_date
            FROM people p
            JOIN receipts r ON r.p_no = p.id
            JOIN accounts a ON r.acc_no = a.id
            WHERE p.name = '$name'";

    // The setView method directly generates the table output

    $co->setReport($sql);
} else {
    echo "Invalid request or missing data.";
}
?>
