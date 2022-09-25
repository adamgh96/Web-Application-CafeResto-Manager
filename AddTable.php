<?php 
session_start();
if(isset($_SESSION['nom'])) {

include("Connection.php");
$sql = "select position from position ";
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

    
    <form action="AjoutTable.php" method="POST">
        
        <h3>ADD NEW TABLE</h3>

        <label for="platname">Num Table</label>
        <input type="text" placeholder="Num Table" id="platname" name="numtable">

        <label for="Position">Position</label>
        <input list="browser" placeholder="Position" name="position">
          <datalist id="browser">
            <?php while ($row = Mysqli_fetch_Assoc($res)) { ?>
            <option value="<?php echo $row['position']; ?>"></option>
            <?php }?>
            
          </datalist>

        

        

        <input type="submit" value="ADD">
        
    </form>
</body>
</html>

<?php } 
else {
    header('location: LoginEmployee.php');
}

