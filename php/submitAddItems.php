<?php

require 'config.php';

$Name1 = $_POST["Fname"];
$Name2 = $_POST["Lname"];
$Email = $_POST["Email"];
$Mobile = $_POST["Mobile"];
$Msg = $_POST["Message"];

$sql = "INSERT INTO information(First_Name,Last_Name,Email,Mobile,Messages) VALUES('$Name1','$Name2','$Email','$Mobile','$Msg')";
if($conn->query($sql)){
	echo "<script>alert('Records added successfully!!!')</script>";
}
else{
	echo "<script>alert('ERROR:Could not able to execute the query. ')</script>";
	echo $sql;
}

?>
