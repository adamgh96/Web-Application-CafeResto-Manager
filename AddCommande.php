<?php 
include("Connection.php");

$Qty = $_POST['qty'];
$Id = $_POST['idp'];
$i =0; 

$NumTable = $_POST['numtable'];






		

foreach ($Qty as $key => $value) {
	
	if ($value != 0) {

		$sql1 = "insert into commande (idplat, numTable, qty) values ('$Id[$i]', '$NumTable', '$value') ";
		$sql3 = "insert into commandecuisinier (idplat, numTable, qty) values ('$Id[$i]', '$NumTable', '$value') ";
		

		
		if ((Mysqli_Query($conn, $sql1))&&(Mysqli_Query($conn,$sql3))) {
			$sql2 = "update tablee set etat = 'reservé', commande= 'a été transferée au cuisinier' where numTable = '$NumTable' ";
			$res2 = Mysqli_Query($conn, $sql2);
			header("location: ServeurIntfTables.php");
		}

		
		

	}

	$i=$i+1;
	
}
		










?>