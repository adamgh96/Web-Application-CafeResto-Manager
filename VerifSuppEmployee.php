<?php 

include("Connection.php");

$All = $_GET['all'];
$Id = strrchr($All, ",");

$Fonc0 =  strstr($All,$Id,true);


$Id1 = substr($Id,1);

$sql = "select * from $Fonc0 where id = '$Id1'";
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
        
        <h3 style="line-height: 70px;">Are you sure to delete <?php echo $row['nom']."  ".$row['prenom']?> ?</h3>

        <a href="SuppEmployee.php?all=<?php echo$Fonc0.",".$Id1;?>"><input type="button" value="Delete" name="Modifier" style="margin-top: 80px"></a>
	<a href="GerantIntf.php"> <input type="button" value="Back"></a>
        

        
        
    </form>
</body>
</html>
