<?php
include("Connection.php");

$NumTable = $_GET['numtable'];
$Time = date("h:i:sa");
$sql = "update tablee set commande = 'Livré Et Facturé' where numTable = '$NumTable'";

$sql6 = "insert into facture (numTable, time) values ('$NumTable', '$Time')";
$res6 = Mysqli_Query($conn, $sql6);

$sql7 = "select * from facture where numTable = '$NumTable'";
$res7 = Mysqli_Query($conn, $sql7);
$row7 = mysqli_fetch_assoc($res7);

$NumFacture = $row7['numFacture'];

$sql9 = "insert into facturecaissier(numFacture, numTable, time) values ('$NumFacture ', '$NumTable', '$Time')";
$res9 = Mysqli_Query($conn, $sql9);



$sql3 ="select * from commande where numTable = '$NumTable'";
$res3 = Mysqli_Query($conn, $sql3);
$Total = 0;

while($row3 = mysqli_fetch_assoc($res3)){
	
	$IdPlat = $row3['idplat'];
	echo $IdPlat;
	$Qty = $row3['qty'];
	echo $Qty;
	$sql4 = "select * from plat where idplat = '$IdPlat'";
	$res4 = Mysqli_Query($conn, $sql4);
	$row4 = mysqli_fetch_assoc($res4);
	$NomPlat = $row4['nomplat'];
	echo $NomPlat;
	$Prix = $row4['prix'];
	echo $NomPlat;
	$PrixTotal = $Prix*$Qty;
	
	$sql5 = "insert into factureprodut(numFacture, nomplat, qty, prix, prixtotal) values ('$NumFacture', '$NomPlat', '$Qty', '$Prix', '$PrixTotal')";
	$res5 = Mysqli_Query($conn, $sql5);

	$sql10 = "insert into factureproduitcaissier(numFacture, nomplat, qty, prix, prixtotal) values ('$NumFacture', '$NomPlat', '$Qty', '$Prix', '$PrixTotal')";
	$res10 = Mysqli_Query($conn, $sql10);

	$Total = $Total + $PrixTotal;
}

$sql8 = "update factureprodut set total = '$Total'";
$res8 = Mysqli_Query($conn, $sql8);

$sql11 = "update factureproduitcaissier set total = '$Total'";
$res11 = Mysqli_Query($conn, $sql11);



if (Mysqli_Query($conn, $sql)) {
		header("location:ServeurIntfTables.php");
}



?>