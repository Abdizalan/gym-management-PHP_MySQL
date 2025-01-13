<?php
    include "Codes.php";
    $co=new Codes();
    $sql="select *from ".$_REQUEST['table'];
    $peop="SELECT p.id, name, tell, instition, acc_name, amount, rec_date from people p join receipts r on r.p_no=p.id join accounts a on r.acc_no=a.id where p.id=2;";
    $co->setView($sql);
?>