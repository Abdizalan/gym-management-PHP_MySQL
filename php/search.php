<?php 
	include "Codes.php";
	$co=new Codes();
	$co->search($_REQUEST['qry']);
	if($row=$co->result->fetch_array(MYSQLI_ASSOC)){
		foreach ($row as $key => $value) {
			echo $value.",";		}
	}

 ?>