<?php 
include("Connection.php");
$Id = $_GET['id'];

$sql = "delete from plat where idplat = '$Id'";


if (Mysqli_Query($conn, $sql)) {
	header('location: ProductIntf.php');
}
else {
	echo "suppresion failed";

}

?>