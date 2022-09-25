<?php 

include("Connection.php");

$IdTable = $_GET['numtable'];

$sql = "select * from tablee where numTable = '$IdTable'";
$res = Mysqli_Query($conn, $sql);
$row = mysqli_fetch_assoc($res);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Verif Supp</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/VerifSuppEmployee.css">
 
</head>
<body>
    <div class="background">
       
    </div>
    <form>
        
        <h3 style="line-height: 70px;">delete Table Num: <?php echo $row['numTable']." Position: ".$row['position']?> ?</h3>

        <a href="SuppTable.php?idTable=<?php echo $IdTable;?>"><input type="button" value="Delete" name="delete" style="margin-top: 80px"></a>
	<a href="TableIntf.php"> <input type="button" value="Back"></a>
        

        
        
    </form>
</body>
</html>
