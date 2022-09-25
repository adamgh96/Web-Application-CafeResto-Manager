<?php 


include("Connection.php");

$sql = "select * from plat";
$res = Mysqli_Query($conn, $sql);


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="css/Menu.css">
</head>
<body>
    <div class="background">
       <!-- <div class="shape"></div>
        <div class="shape"></div>-->
    </div>
    <form>
	<div class="portfolio">
        
            <div class="imgs-container">
                <?php while ($row = mysqli_fetch_assoc($res)) {?>

                <div class="box">

                    <img src="imagesPlats/<?php echo $row['image']; ?>" alt="photo-1">

                    <div class="caption">

                        <h2><?php echo $row['nomplat']?></h2>
                        <br>
                        <h5 style="display: flex;">Price: <p><?php echo $row['prix']?></p>Dt</h5>

                    </div>

                </div>
                <?php }?>
            </div>
        
            
            
    </div>
    </form>

</body>
</html>


