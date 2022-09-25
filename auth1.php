<?php 
session_start();
include("Connection.php");

$Email = $_POST['email'];
$Password = $_POST['password'];


$sql = "select * from client where email = '$Email' and password = '$Password' ";


$res = Mysqli_Query($conn, $sql);
$row = mysqli_fetch_assoc($res);

if (mysqli_num_rows($res) == 1 ) {
	//header('location: consulte.php');
	$_SESSION['email'] = $Email;
	$_SESSION['password'] = $Password;
	$_SESSION['username'] = $row['username'];
	$_SESSION['lastname'] = $row['lastname'];
	$_SESSION['id'] = $row['id'];
	
	header('location:Menu.php');
}
else {
	echo '<script>alert("Password or Email incorrect!!");
        window.location = "Login.php";
		</script>';
}



?>