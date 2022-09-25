<?php 
include("Connection.php");

$UserName = $_POST['username'];
$LastName = $_POST['lastname'];
$Email = $_POST['email'];
$Password = $_POST['password'];



$var = 0;

$sql = "insert into client (username, lastname, email, password) values ('$UserName', '$LastName', '$Email', '$Password')";

$sql1 = "select email from client";
$res1 = Mysqli_Query($conn, $sql1);



while ($row = Mysqli_fetch_Assoc($res1)) {
	if ($Email == $row['email']) {
		echo '<script>alert("Email alreaday exist !!");
        window.location = "Formulaire.php";
		</script>';

		$var = 1;
	}

}
if ($var ==0) {
	
	if (Mysqli_Query($conn, $sql)) {
		header("location: Login.php");
		
	}
	else {
	echo '<script>alert("Failed Ajout !!");
        window.location = "Login.php";
		</script>';
	}
}



?>