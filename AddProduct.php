 <?php  
session_start();
if(isset($_SESSION['nom'])) {
    
include("Connection.php");
$sql = "select catg from categ ";
$res = Mysqli_Query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Add Product</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Formulaire.css">
 
</head>
<body>
    <div class="background">
       
    </div>
    <form action="AjoutProduct.php" method="POST" enctype="multipart/form-data">
        
        <h3>ADD NEW PRODUCT</h3>

        <label for="Categorie">Categorie</label>
        <input list="browser" name="categorie" placeholder="Categorie">
          <datalist id="browser">
            <?php while ($row = Mysqli_fetch_Assoc($res)) { ?>
            <option value="<?php echo $row['catg']; ?>"></option>
            <?php }?>
            
          </datalist>

        <label for="platname">Plat Name</label>
        <input type="text" placeholder="Plat Name" id="platname" name="platname">

        <label for="prix">Prix</label>
        <input type="text" placeholder="Prix" id="prix" name="prix">

        <label for="image">Image</label>
        <input type="file" placeholder="Image" id="image" name="image">

        <input type="submit" value="Sign Up">
        
    </form>
</body>
</html>
<?php } 
else {
    header('location: LoginEmployee.php');
}
