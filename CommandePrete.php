<?php
include("Connection.php");

$NumTable = $_GET['numtable'];

$sql = "update tablee set commande = 'Commande prête' where numTable = '$NumTable'";


if (Mysqli_Query($conn, $sql)) {
	$sql2 = "delete from commandecuisinier where numTable = '$NumTable'";
	if (Mysqli_Query($conn, $sql2)) {
		header("location:CuisinierIntfTables.php");
	}
	
}



?>