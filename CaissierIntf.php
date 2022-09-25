<?php  

session_start();
if(isset($_SESSION['nom'])) {

Include("Connection.php");

$sql = "select * from tablee where etat = 'reservé'" ;
$res = Mysqli_Query($conn, $sql);


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Caissier</title>
	<link rel="stylesheet" type="text/css" href="css/ServeurIntfTables.css">
</head>
<body>
	

	<table class="container">
		
		

		<thead>
			
			<tr>
				<th><h1>Num Table</h1></th>
				<th><h1>Position</h1></th>
				<th><h1>Etat</h1></th>
				<th><h1>Etat Commande</h1></th>
				
				<th align="right"><a href="Deconnect.php"><button style="background-color: #185875;
			    color: #FFF842;
			    border: none;
			    border-radius: 3px;
			    padding: 13px 20px;
			    font-weight: bold;
			    height: 100%;
			    cursor: pointer;">Deconnect</button></a>
				</th>

			</tr>
		</thead>
		<tbody>
			
			<?php while ($row = mysqli_fetch_assoc($res)) { ?>
		<tr>
			
			
			<td style="font-size: 20px; font-weight: bold;"><?php echo $row['numTable']; ?></td>
			<td><?php echo $row['position']; ?></td>
			<td style="font-size: 20px; font-weight: bold;">
				<?php echo $row['etat']; ?>
					
				</td>
			<td style="font-size: 20px; font-weight: bold;">
				<?php echo $row['commande']; ?>
					
				</td>
			

			<td class="buttons">
				<a href="VoireFacture.php?numtable=<?php echo $row['numTable'];?>">
					<input type="button" value="Voire Facture" name="Modifier" style="cursor: pointer;">
				</a>

				
				<?php if ($row['commande'] == "Livré Et Facturé") {?>
					<a href="Facture.php?numtable=<?php echo $row['numTable'];?>">
					<input type="button" value="Payer" >
					</a>
					
				<?php
				}
				?>

			</td>

			
		
		
			<?php }?>
		</tr>
		

			
		</tbody>

	</table>


	



</body>
</html>

<?php } 
else {
    header('location: LoginEmployee.php');
}


