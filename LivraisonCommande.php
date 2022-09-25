<?php 
include("Connection.php");

$NumTable = $_GET['numtable'];

$sql = "update tablee set commande = 'Livré' where numTable = '$NumTable'";

if (Mysqli_Query($conn, $sql)) {
	header("location: ServeurIntfTables.php");
}

?>