<?php 
include("Connection.php");

$NumTable = $_POST['numtable'];
$Position = $_POST['position'];
$IdTable = $_POST['idtable'];

$sql = "update tablee set numTable = '$NumTable', position = '$Position' where numTable = '$IdTable'";

if (Mysqli_Query($conn, $sql)) {
	header("location:TableIntf.php");
}
else 
	echo "Failed update";



?>