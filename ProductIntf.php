<?php 
 
session_start();
if(isset($_SESSION['nom'])) {
Include("Connection.php");

$sql = "select * from plat ";
$res = Mysqli_Query($conn, $sql);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gerant</title>
	<link rel="stylesheet" type="text/css" href="css/GerantIntf.css">
</head>
<body>
	

	<table class="container">
		
		

		<thead>
			
			<tr>
				<th><h1>Image</h1></th>
				<th><h1>Nom</h1></th>
				<th><h1>Prix</h1></th>
				<th><h1>Categorie</h1></th>
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
			<td ><img src="imagesPlats/<?php echo $row['image']; ?>" width="80px"></td>
			
			<td><?php echo $row['nomplat']; ?></td>
			<td><?php echo $row['prix']; ?></td>
			<td ><?php echo $row['catg']; ?></td>
			

			<td class="buttons">
				<a href="ModifierProduct.php?id=<?php echo $row['idplat'];?>">
					<input type="button" value="Modifier" name="Modifier" >
				</a>


				<a href="VerifSuppProduct.php?id=<?php echo $row['idplat'];?>">
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