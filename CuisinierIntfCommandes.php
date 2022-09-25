<?php  

session_start();
if(isset($_SESSION['nom'])) {
	
Include("Connection.php");
$NumTable = $_GET['numtable'];
$sql = "select * from commandecuisinier where numTable = '$NumTable'";
$res = Mysqli_Query($conn, $sql);

$sql2 = "update tablee set commande = 'En train de préparer' where numTable = '$NumTable'";
$res2 = Mysqli_Query($conn, $sql2);


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>cuisinier Commandes</title>
	<link rel="stylesheet" type="text/css" href="css/CuisinierIntfCommandes.css">
</head>
<body>
	

	<table class="container">
		<h1 style="text-align: center;
    transform: translateX(-5%);
    color: #FFF842;
    margin: 60px auto;">Table Num: <?php echo $NumTable;?></h1>
		
		

		<thead>
			
			<tr>
				<th><h1>Id Product</h1></th>
				<th><h1>Name Product</h1></th>
				<th><h1>Quantity</h1></th>
				
				
				

			</tr>
		</thead>
		<tbody>
			
			<?php while ($row = mysqli_fetch_assoc($res)) { ?>
		<tr>

			
			
			<td style="font-size: 20px"><?php echo $row['idplat'];?></td>

			<?php  
			$nTable = $row['numTable'];
			$IdPlat = $row['idplat'];
			$sql1 = "select * from plat where idplat = '$IdPlat';";
			$res1 = mysqli_query($conn, $sql1);
			$row1 = mysqli_fetch_assoc($res1);
			 ?>
			<td><?php echo $row1['nomplat']?></td>
			<td><?php echo $row['qty']?></td>
			
			

			<?php }?>
		</tr>
		
		

			
		</tbody>

	</table>
	<a href="CommandePrete.php?numtable=<?php echo $NumTable;?>"><input type="button"  value="commande prête"></a>

	
	



</body>
</html>

<?php } 
else {
    header('location: LoginEmployee.php');
}

