<?php 
include("Connection.php");

$Id = $_POST['id'];
$PlatName = $_POST['platname'];
$Categorie = $_POST['categorie'];
$Prix = $_POST['prix'];



$Image = $_FILES['image']['name'];


if ($Image=="") {
	$sql1 = "select * from plat where idplat = '$Id'";
	$res1 = Mysqli_Query($conn, $sql1);
	$row1 = mysqli_fetch_assoc($res1);
	echo $row1['image'];
	$Image = $row1['image'];
}



$sql = "update plat set nomplat = '$PlatName', prix = '$Prix', catg = '$Categorie', image = '$Image' where idplat = '$Id' ";

if (Mysqli_Query($conn, $sql)) {
	header("location: ProductIntf.php");
}
else {
	echo "failed modification";
	include("ModifierProduct.php");
}


?>