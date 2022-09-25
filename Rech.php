<?php  
session_start();
if(isset($_SESSION['nom'])) {

Include("Connection.php");

$Rech = $_POST['rech'];

$sql = "select * from facture where numFacture like '%$Rech%' or date like '%$Rech%' ";

$res = mysqli_query($conn, $sql);




?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cuisinier Tables</title>
	<link rel="stylesheet" type="text/css" href="css/CuisinierIntfTables.css">
</head>
<body>
	

	<table class="container">
		
		

		<thead>
			
			<tr>
				<th><h1>Num Facture</h1></th>
				<th><h1>Num Table</h1></th>
				<th><h1>Date & Time</h1></th>
				
				
				<th align="right"><a href="GerantIntf.php"><button style="background-color: #185875;
			    color: #FFF842;
			    border: none;
			    border-radius: 3px;
			    padding: 13px 20px;
			    font-weight: bold;
			    height: 100%;
			    cursor: pointer;">Back TO Gerant</button></a>
				</th>

			</tr>
		</thead>
		<tbody>
			
			<?php while ($row = mysqli_fetch_assoc($res)) { ?>
		<tr>

			
			
			<td style="font-size: 20px"><?php echo $row['numFacture'];?></td>

			<?php  
			$aa = $row['numTable'];
			$sql1 = "select * from commande where numTable = '$aa';";
			$res1 = mysqli_query($conn, $sql1);
			$row1 = mysqli_num_rows($res1);
			 ?>
			 
			<td><?php echo $aa?></td>
			<td><?php echo $row['date']." / ".$row['time']?></td>
			
			

			<td class="buttons">
				<a href="VoireFactureHistorique.php?numtable=<?php echo $row['numTable'];?>">
					<input type="button" value="Voire La Facture" >
				</a>
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

