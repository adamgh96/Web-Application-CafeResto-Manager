<?php 
session_start();
if(isset($_SESSION['nom'])) {

include("Connection.php");

$sql = "select * from plat";
$res = Mysqli_Query($conn, $sql);

$i = 0;

$NumTable = $_GET['numtable'];

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
	<title>Serveur</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/ServeurIntf.css">
    
   

</head>
<body>
    <div class="background">
       
    </div>

    <form action="AddCommande.php" method="POST">

        <div class="portfolio">
            
                <div class="imgs-container">
                    <?php while ($row = mysqli_fetch_assoc($res)) { 
                        ?>
                    <div class="box">

                        <img src="imagesPlats/<?php echo $row['image']; ?>" alt="photo-1">

                        <div class="caption">
                            

                            <h2><?php echo $row['nomplat'];?></h2>
                            <h5 style="display: flex; margin-top: 10px;">Price: 
                                <p><?php echo $row['prix']?></p>DT
                            </h5>
                             
                             <div class="container">  


                                
                                    <label for="name"></label>
                                    <input type="hidden" name="idp[]" value="
                                    <?php echo $row['idplat'];?>">
                                    <input type="hidden" name="numtable" value="
                                    <?php echo $NumTable ?>">
                                    
                                    <input type="button" class="dec button" value="-">
                                    <input type="text" name="qty[]" id="1" value="0" />
                                    
                                    <input type="button" class="inc button" value="+">
                                

                            </div>
                            

                        </div>
                    </div>
                    <?php  } ?>
                    
                </div>      

        </div>
        <input type="submit" name="" value="Next→">

    </form>

 <script src="Compteur.js"></script>

</body>
</html>
<?php } 
else {
    header('location: LoginEmployee.php');
}