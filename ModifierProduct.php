<?php 
include("Connection.php");

$Id = $_GET['id'];

$sql1 = "select * from plat where idplat = '$Id' ";
$res1 = Mysqli_Query($conn, $sql1);
$row1 = Mysqli_fetch_Assoc($res1);

$sql = "select catg from categ ";
$res = Mysqli_Query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Modify Product</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Formulaire.css">
 
</head>
<body>
    <div class="background">
       
    </div>
    <form action="UpdateProduct.php" method="POST" enctype="multipart/form-data">
        
        <h3>Modify PRODUCT</h3>

        <label for="Categorie">Categorie</label>
        <input list="browser" name="categorie" placeholder="Categorie" 
        value="<?php echo $row1['catg'];?>">
          <datalist id="browser">
            <?php while ($row = Mysqli_fetch_Assoc($res)) { ?>
            <option value="<?php echo $row['catg']; ?>"></option>
            <?php }?>
            
          </datalist>

        <label for="platname">Plat Name</label>
        <input type="text" placeholder="First Name" id="nom" name="platname" value="<?php echo $row1['nomplat'] ?>">

        <label for="prix">Prix</label>
        <input type="text" placeholder="Prix" id="prix" name="prix" 
        value="<?php echo $row1['prix'] ?>">

        <label for="image">Image</label>
        <input type="file" placeholder="Image" id="image" name="image" 
        value="<?php echo $row1['image'] ?>">

        <input type="submit" value="Modify">
        
        <input type="hidden" name="id" value="<?php echo $row1['idplat'];?>">
    </form>

</body>
</html>
