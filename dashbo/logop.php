<?php 
session_start();
	include "../php/Codes.php";
	$co=new Codes();
	$username = trim($_REQUEST['username']); // Remove any extra spaces
	$password = trim($_REQUEST['password']);
	$sql="select * from users where username='$username 'and pasword=sha1('$password')";
	$co->search($sql);
    if($r=$co->result->fetch_array(MYSQLI_ASSOC)){
		$_SESSION['secure']=$r['id'];
		$_SESSION['username']=$r['username'];
        $_SESSION['userType'] = $r['userType'];
			echo "yes";
	}else{
		echo "wrong password";
	}
 ?>