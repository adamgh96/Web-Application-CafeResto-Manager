<?php  
session_start();
if(isset($_SESSION['nom'])) {



include("connection.php");


$sql1 ="select * from caisier";
$res1 = mysqli_query($conn, $sql1);

$sql2 ="select * from serveur";
$res2 = mysqli_query($conn, $sql2);

$sql3 ="select * from cuisinier";
$res3 = mysqli_query($conn, $sql3);
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
		<div class="connect-like">
			
			<a href="AddProduct.php"><button>Add New Product</button></a>
			<a href="AddTable.php"><button>Add New Table</button></a>
			<a href="ProductIntf.php"><button>See All Products.. </button></a>
			<a href="TableIntf.php"><button>See All Tables.. </button></a>

		</div>
		<div class="deconnect">
			<h2><?php echo $_SESSION['nom']." ".$_SESSION['prenom'];?></h2>
			<ul style="list-style-type: none;">
				
				<li><a href="Deconnect.php"> <button>Deconnect</button></a></li>
				<li><a href="CaissierIntf.php"><button>Caisier</button></a></li>
				<li><a href="ServeurIntfTables.php"><button>Serveur</button></a></li>
				<li><a href="HistoriqueFactureIntf.php"><button>Historique Factures</button></a></li>
			</ul>
		</div>

		<thead>
			
			<tr>
				<th><h1>Nom</h1></th>
				<th><h1>Prenom</h1></th>
				<th><h1>Num TEL</h1></th>
				<th><h1>Password</h1></th>
				<th><h1>Fonction</h1></th>
				<th><h1>Modif/Supp</h1></th>

			</tr>
		</thead>
		<tbody>
			
			<?php while ($row1 = mysqli_fetch_assoc($res1)) { ?>
		<tr>
			<td><?php echo $row1['nom']; ?></td>
			
			<td><?php echo $row1['prenom']; ?></td>
			<td><?php echo $row1['tel']; ?></td>
			<td ><?php echo $row1['password']; ?></td>
			<td><?php echo "Caisier";?></td>

			<td class="buttons">
				<a href="ModifierEmployee.php?all=<?php echo"caisier,",$row1['id'];?>"><input type="button" value="Modifier" name="Modifier" ></a>


				<a href="VerifSuppEmployee.php?all=<?php echo"caisier,",$row1['id'];?>"><input type="button" value="Supprimer" name="Modifier" ></a>
			</td>

			<?php while ($row2 = mysqli_fetch_assoc($res2)) { ?>
		<tr>
			<td><?php echo $row2['nom']; ?></td>
			
			<td><?php echo $row2['prenom']; ?></td>
			<td><?php echo $row2['tel']; ?></td>
			<td><?php echo $row2['password']; ?></td>
			<td><?php echo "Serveur"; ?></td>
			<td class="buttons">
				<a href="ModifierEmployee.php?all=<?php echo"serveur,",$row2['id'];?>"><input type="button" value="Modifier" name="Modifier" ></a>

				<a href="VerifSuppEmployee.php?all=<?php echo"serveur,",$row2['id'];?>"><input type="button" value="Supprimer" name="Modifier" ></a>
			</td>

			<?php while ($row3 = mysqli_fetch_assoc($res3)) { ?>
		<tr>
			<td><?php echo $row3['nom']; ?></td>
			
			<td><?php echo $row3['prenom']; ?></td>
			<td><?php echo $row3['tel']; ?></td>
			<td><?php echo $row3['password']; ?></td>
			<td><?php echo "Cuisinier"; ?></td>

			<td class="buttons">
				<a href="ModifierEmployee.php?all=<?php echo"cuisinier,",$row3['id'];?>"><input type="button" value="Modifier" name="Modifier" ></a>
				<a href="VerifSuppEmployee.php?all=<?php echo"cuisinier,",$row3['id'];?>"><input type="button" value="Supprimer" name="Modifier" ></a>
			</td>

		<?php }?>
		<?php }?>
	</tr>
		<?php }?>
	</tr>
		

			
		</tbody>

	</table>
	<div class="add">
		<a href="FormulaireEmployee.php"><button>ADD NEW EMPLOYEE+</button></a>
	</div>



</body>
</html>
<?php } 
else {
	header('location: LoginEmployee.php');
}