<?php
include "Codes.php";

$search = $_REQUEST['search'] ?? ''; // Get search query
$table = $_REQUEST['table'] ?? '';   // Get table name
$column = $_REQUEST['column'] ?? ''; // Get column name

$co = new Codes();

if (empty($table) || empty($column)) {
    echo "<p>Error: Table and column must be specified.</p>";
    exit;
}


$Tables = ['accounts', 'courses', 'charges', 'people','receipts','schedules','users'];
$Columns = ['acc_name', 'cor_name', 'id', 'name','id','id','username'];

if (!in_array($table, $Tables) || !in_array($column, $Columns)) {
    echo "<p>Error: Invalid table or column.</p>";
    exit;
}

// Build the dynamic SQL query
if (!empty($search)) {
    // Prepare the query dynamically
    $sql = "SELECT * FROM $table WHERE $column LIKE '%$search%'";
} else {
    // If no search term, fetch all records
    $sql = "SELECT * FROM $table";
}
// Call the `setView` method from the `Codes` class to execute the query and return results
$co->setView($sql);
?>

