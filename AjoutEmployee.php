<?php 
include("Connection.php");

$Nom = $_POST['nom'];
$Prenom = $_POST['prenom'];
$Login = $_POST['login'];
$Password = $_POST['password'];
$TEL = $_POST['tel'];
$Adresse = $_POST['adresse'];
$Fonction = $_POST['fonction'];
$var =0;

$sql = "insert into $Fonction (nom, prenom, login, password, tel, adresse) values ('$Nom', '$Prenom', '$Login', '$Password', '$TEL', '$Adresse')";



$sql1 = "select login from $Fonction";
$res1 = Mysqli_Query($conn, $sql1);

while ($row = Mysqli_fetch_Assoc($res1)) {
	if ($Login == $row['login']) {
		echo '<script>alert("User Already Exist!!");
        window.location = "FormulaireEmployee.php";
		</script>';

		$var = 1;
	}

}

if ($var ==0) {
	
	if (Mysqli_Query($conn, $sql)) {
		header("location: GerantIntf.php");
		
	}
	else {
	
	echo '<script>alert("Ajout Failed!!");
        window.location = "FormulaireEmployee.php";
		</script>';
	
	}
}



?>

