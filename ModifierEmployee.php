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

//$sql = "select * from $Fonc0 where id = '1' ";
$sql = "select * from $Fonc0 where id = '$Id1' ";
$res = Mysqli_Query($conn, $sql);
$row = mysqli_fetch_assoc($res);



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Modify</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/ModifyEmployee.css">
 
</head>
<body>
    <div class="background">
       <!-- <div class="shape"></div>
        <div class="shape"></div>-->
    </div>
    <form action="UpdateEmployee.php" method="POST">
        
        <h3>Modify Account</h3>
        <div class="content">
          <div >
            <label for="nom">First Name</label>
            <input type="text" placeholder="First Name" id="nom" name="nom" value="<?php echo $row['nom'] ?>">

            <label for="prenom">Last Name</label>
            <input type="text" placeholder="Last Name" id="prenom" name="prenom" value="<?php echo $row['prenom'] ?>">

            <label for="Login">Login</label>
            <input type="text" placeholder="Login" id="Login" name="login" value="<?php echo $row['login'] ?>">
          </div>

          <div class="contetn2">
            <label for="password">Password</label>
            <input type="password" placeholder="Password" id="password" name="password" value="<?php echo $row['password'] ?>">

            <label for="TEL">TEL</label>
            <input type="text" placeholder="TEL" id="TEL" name="tel" value="<?php echo $row['tel'] ?>">

            <label for="Adresse">Adresse</label>
            <input type="text" placeholder="Adresse" id="Adresse" name="adresse" value="<?php echo $row['adresse'] ?>">
          </div>
          
        </div>
        
        <div class="FonctionEmployee">
          <label for="fonction">Fonction: </label>
          <input list="browser" name="fonction" value="<?php echo $Fonc0?>">
          <datalist id="browser">
            <option value="caisier"></option>
            <option value="serveur"></option>
            <option value="cuisinier"></option>
          </datalist>
        </div>

        <input type="submit" value="Modify">
        <a href="GerantIntf.php"><input type="button" value="Annuler"></a>
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        <input type="hidden" name="fonc0" value="<?php echo $Fonc0;?>">
        
    </form>
</body>
</html>
