<?php 
session_start();
include("Connection.php");

$Login = $_POST['login'];
$Password = $_POST['password'];


$sql = "select * from gerant where login = '$Login' and password = '$Password' ";


$res = Mysqli_Query($conn, $sql);
$row = mysqli_fetch_assoc($res);

if (mysqli_num_rows($res) == 1 ) {
	
	$_SESSION['login'] = $Login;
	$_SESSION['password'] = $Password;
	$_SESSION['nom'] = $row['nom'];
	$_SESSION['prenom'] = $row['prenom'];
	$_SESSION['id'] = $row['id'];
	header('location: GerantIntf.php');
	
}
elseif (mysqli_num_rows($res) == 0) {
	$sql1 = "select * from caisier where login = '$Login' and password = '$Password' ";
	$res1 = Mysqli_Query($conn, $sql1);
	$row1 = mysqli_fetch_assoc($res1);

	if (mysqli_num_rows($res1) == 1 ) {
	
		$_SESSION['login'] = $Login;
		$_SESSION['password'] = $Password;
		$_SESSION['nom'] = $row1['nom'];
		$_SESSION['prenom'] = $row1['prenom'];
		$_SESSION['id'] = $row1['id'];
		header("location: CaissierIntf.php");
	}

	elseif(mysqli_num_rows($res1) == 0 ){
		$sql3 = "select * from serveur where login = '$Login' and password = '$Password' ";
		$res3 = Mysqli_Query($conn, $sql3);
		$row3 = mysqli_fetch_assoc($res3);
		if (mysqli_num_rows($res3) == 1 ) {
	
		$_SESSION['login'] = $Login;
		$_SESSION['password'] = $Password;
		$_SESSION['nom'] = $row3['nom'];
		$_SESSION['prenom'] = $row3['prenom'];
		$_SESSION['id'] = $row3['id'];
		header("location: ServeurIntfTables.php");
	}

	elseif(mysqli_num_rows($res3) == 0 ){
		$sql4 = "select * from cuisinier where login = '$Login' and password = '$Password' ";
		$res4 = Mysqli_Query($conn, $sql4);
		$row4 = mysqli_fetch_assoc($res4);
		if (mysqli_num_rows($res4) == 1 ) {
	
		$_SESSION['login'] = $Login;
		$_SESSION['password'] = $Password;
		$_SESSION['nom'] = $row4['nom'];
		$_SESSION['prenom'] = $row4['prenom'];
		$_SESSION['id'] = $row4['id'];
		header("location: CuisinierIntfTables.php");
	}
	else {
	echo '<script>alert("Password or Email incorrect!!");
        window.location = "LoginEmployee.php";
		</script>';
	}

	}
	
else {
	echo '<script>alert("Password or Email incorrect!!");
        window.location = "LoginEmployee.php";
		</script>';
	}

	}
	else {
	echo '<script>alert("Password or Email incorrect!!");
        window.location = "LoginEmployee.php";
		</script>';
}
	
}

	




?>