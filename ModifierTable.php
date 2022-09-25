<?php 
include("Connection.php");
$IdTable = $_GET['numtable'];
$sql = "select position from position ";
$res = Mysqli_Query($conn, $sql);

$sql1 = "select * from tablee where numTable = '$IdTable'";
$res1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($res1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Update Table</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Formulaire.css">
 
</head>
<body>
    <div class="background">
       
    </div>

    
    <form action="UpdateTable.php" method="POST">
        
        <h3>Update TABLE</h3>

        <label for="platname">Num Table</label>
        <input type="text" placeholder="Num Table" id="platname" name="numtable" 
        value="<?php echo $row1['numTable']; ?>">

        <label for="Position">Position</label>
        <input list="browser" placeholder="Position" name="position"
        value="<?php echo $row1['position']; ?>">
          <datalist id="browser">
            <?php while ($row = Mysqli_fetch_Assoc($res)) { ?>
            <option value="<?php echo $row['position']; ?>"></option>
            <?php }?>
            
          </datalist>

        

        
          <input type="hidden" name="idtable" value="<?php echo $IdTable ?>">
        <input type="submit" value="Modify">
        
    </form>
</body>
</html>
