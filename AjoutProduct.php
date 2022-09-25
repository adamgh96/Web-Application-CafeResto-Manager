<?php 
include("Connection.php");

$PlatName = $_POST['platname'];
$Categorie = $_POST['categorie'];
$Prix = $_POST['prix'];



$Image = $_FILES['image']['name'];

if ( $Image=="") {
	$Image = "default.png";
}

$tmp_file = $_FILES['image']['tmp_name'];
$dest_file = "./imagesPlats/".$Image;
move_uploaded_file($tmp_file, $dest_file);





$sql = "insert into plat (catg, nomplat, prix, image) values ('$Categorie', '$PlatName', '$Prix', '$Image')  ";





	
	if (Mysqli_Query($conn, $sql)) {
		header("location: GerantIntf.php");
	}
	else {
	echo '<script>alert("Failed ADD Product !!");
        window.location = "AddProduct.php";
		</script>';	}


?>