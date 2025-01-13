<?php
include "Codes.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
    $name = $_POST['name'];
    $co = new Codes();

    // Use the setView method to display the table for the selected person

    $person="SELECT p.id, name, tell, cor_name, time_ , time_in, att_date FROM people p join schedules s on s.p_no=s.id join attendance a on a.sch_no=s.id join courses c on s.cor_no=c.id where name='$name'";

    // The setView method directly generates the table output
    $co->setReport($person);
} else {
    echo "Invalid request or missing data.";
}
?>
