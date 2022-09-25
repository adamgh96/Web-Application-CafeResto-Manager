<?php 
include("Connection.php");

$IdTable = $_GET['idTable'];

$sql = "delete from tablee where numTable = $IdTable";

if (Mysqli_Query($conn, $sql))
	header("location: TableIntf.php");
else
	echo "Failed Delete";


?>