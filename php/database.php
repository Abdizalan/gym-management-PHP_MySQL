<?php
include "Codes.php";
$co = new Codes();
	$tiro=count($_REQUEST);
	$sql="call ";
	$i=1;
	foreach ($_REQUEST as $key => $value) {
		if($i==1)
			$sql.="$value (";
		else if($i==$tiro)
			$sql.="'$value')";
		else
			$sql.="'$value',";
		$i+=1;
	}
	 $co->setSql($sql);
	 // echo $sql;
	//echo print_r($_REQUEST);

 ?>