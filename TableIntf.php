<?php  
session_start();
if(isset($_SESSION['nom'])) {


Include("Connection.php");

$sql = "select * from tablee ";
$res = Mysqli_Query($conn, $sql);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tables</title>
	<link rel="stylesheet" type="text/css" href="css/GerantIntf.css">
</head>
<body>
	

	<table class="container">
		
		

		<thead>
			
			<tr>
				<th><h1>Num Table</h1></th>
				<th><h1>Position</h1></th>
				<th><h1>Etat</h1></th>
				
				<th align="right"><a href="GerantIntf.php"><button style="background-color: #185875;
			    color: #FFF842;
			    border: none;
			    border-radius: 3px;
			    padding: 13px 10px;
			    font-weight: bold;
			    height: 100%;
			    cursor: pointer;">Home</button></a>
				</th>

			</tr>
		</thead>
		<tbody>
			
			<?php while ($row = mysqli_fetch_assoc($res)) { ?>
		<tr>
			
			
			<td><?php echo $row['numTable']; ?></td>
			<td><?php echo $row['position']; ?></td>
			<td ><?php echo $row['etat']; ?></td>
			

			<td class="buttons">
				<a href="ModifierTable.php?numtable=<?php echo $row['numTable'];?>">
					<input type="button" value="Modifier" name="Modifier" >
				</a>


				<a href="VerifSuppTable.php?numtable=<?php echo $row['numTable'];?>">
					<input type="button" value="Supprimer" name="Supprimer" >
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
