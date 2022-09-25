<?php 
include("Connection.php");

$Id = $_POST['id'];
$Nom = $_POST['nom'];
$Prenom = $_POST['prenom'];
$Login = $_POST['login'];
$Password = $_POST['password'];
$TEL = $_POST['tel'];
$Adresse = $_POST['adresse'];
$Fonction = $_POST['fonction'];

$FF = $_POST['fonc0'];
echo $FF;
 if ($FF != $Fonction) {
 	$sql0 = "delete from $FF where id = '$Id' ";
	$sql1 = "insert into $Fonction (nom, prenom, login, password, tel, adresse) values ('$Nom', '$Prenom', '$Login', '$Password', '$TEL', '$Adresse')";

	
	echo $Id;
	if (Mysqli_Query($conn, $sql0)) {
		Mysqli_Query($conn, $sql1);
		header("location: GerantIntf.php");
	}
	else {
		echo '<script>alert("Failed Modification!!");
        window.location = "ModifierEmployee.php";
		</script>';
	}


 }
 else {


$sql = "update $Fonction set login = '$Login', nom = '$Nom', prenom = '$Prenom', adresse = '$Adresse', password = '$Password', tel = '$TEL' where id = '$Id' ";
echo $Id;
if (Mysqli_Query($conn, $sql)) {
	header("location: GerantIntf.php");
}
else {
	echo '<script>alert("Failed Modification!!");
        window.location = "ModifierEmployee.php";
		</script>';
}

}
?>