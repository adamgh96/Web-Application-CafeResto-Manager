<?php 

include("Connection.php");

$Id = $_GET['id'];

$sql = "select * from plat where idplat = '$Id'";
$res = Mysqli_Query($conn, $sql);
$row = mysqli_fetch_assoc($res);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Login</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/VerifSuppEmployee.css">
 
</head>
<body>
    <div class="background">
       <!-- <div class="shape"></div>
       <div class="shape"></div>-->
    </div>
    <form>
        
        <h3 style="line-height: 70px;">delete product Name: <?php echo $row['nomplat']." categorie: ".$row['catg']?> ?</h3>

        <a href="SuppProduct.php?id=<?php echo $Id;?>"><input type="button" value="Delete" name="Modifier" style="margin-top: 80px"></a>
	<a href="ProductIntf.php"> <input type="button" value="Back"></a>
        

        
        
    </form>
</body>
</html>
