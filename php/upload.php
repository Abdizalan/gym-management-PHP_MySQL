<?php
// include "Codes.php";
// $co=new Codes();
// $img="images/".basename($_FILES['txtfile']['name']);
// if($_FILES['txtfile']['type']=="image/jpeg" || $_FILES['txtfile']['type']=="image/jpg" || $_FILES['txtfile']['type']=="image/png"){
// 	if(move_uploaded_file($_FILES['txtfile']['tmp_name'], $img)){
// 		$username=$_REQUEST['txt2'];
//         $password=$_REQUEST['txt3'];
//         $usertype=$_REQUEST['txt5'];
// 		$sql="insert into users values(null,'$username','$password','$img','$usertype')";
// 		echo $sql;
// 		$co->setConn();
// 		$i=$co->db->query($sql);
// 		echo $i==1?"success":"failed";
// 	}
// 	else
// 	echo "not uploaded";

// }
// else
// 	echo"fadlan sawir kaliya la\' ogal yahay";
// // $co->db->close();

include "Codes.php";
$co = new Codes();

if (isset($_FILES['txtfile'])) {
    $img = "images/" . basename($_FILES['txtfile']['name']);

    if (
        $_FILES['txtfile']['type'] == "image/jpeg" ||
        $_FILES['txtfile']['type'] == "image/jpg" ||
        $_FILES['txtfile']['type'] == "image/png"
    ) {
        if (move_uploaded_file($_FILES['txtfile']['tmp_name'], $img)) {
            $username = $_REQUEST['txt2'];
            $password = $_REQUEST['txt3'];
            $usertype = $_REQUEST['txt5'];
            $sql = "INSERT INTO users VALUES (NULL, '$username', '$password', '$img', '$usertype')";
            
            $co->setConn();
            $i = $co->db->query($sql);
            echo $i == 1 ? "Success: User added." : "Failed: Could not add user.";
			
        } else {
            echo "Error: File not uploaded.";
        }
    } else {
        echo "Error: Only image files (JPEG, JPG, PNG) are allowed.";
    }
} else {
    echo "Error: No file uploaded.";
}
echo ($sql);
?>