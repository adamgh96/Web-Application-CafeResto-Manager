<?php 

include("Connection.php");

$All = $_GET['all'];
$Id = strrchr($All, ",");

$Fonc0 =  strstr($All,$Id,true);

echo $All;
echo "****";
echo $Fonc0;
echo "****";

$Id1 = substr($Id,1);

$sql = "delete from $Fonc0 where id = '$Id1' ";

if (Mysqli_Query($conn, $sql)) {
	header('location: GerantIntf.php');
}
else {
	echo "suppresion failed";

}
