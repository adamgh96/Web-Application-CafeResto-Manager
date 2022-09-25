<html>

	<head>
	<title>Facture</title>
		<style type="text/css">
		body {		
			font-family: Verdana;
		}
		
		div.invoice {
		border:1px solid #ccc;
		padding:10px;
		height:740pt;
		width:330pt;
		}

		div.company-address {
			float:left;
			width:200pt;
		}
		
		div.invoice-details {
			
			text-align: right;
			margin-right: 10px;
		}
		
		div.customer-address {
			
			float:right;
			margin-bottom:50px;
			margin-top:100px;
			width:200pt;
			text-align: center;
			margin-right: 50%;
			transform: translateX(50%);
		}
		
		div.clear-fix {
			clear:both;
			float:none;
		}
		
		table {
			width:100%;
		}
		
		th {
			text-align: left;
		}
		
		td {
		}
		
		.text-left {
			text-align:left;
		}
		
		.text-center {
			text-align:center;
		}
		
		.text-right {
			text-align:right;
		}
		
		</style>
	</head>

	<body>

		<?php 
		include("Connection.php");
		$NumTable = $_GET['numtable'];
		$sql = "select * from facturecaissier where numTable = '$NumTable' ";
		$res = Mysqli_Query($conn,$sql);
		$row = mysqli_fetch_assoc($res);
		$NumFacture = $row['numFacture'];
		
		$Time = date("h:i:sa");

		$sql2 = "update tablee set commande = 'Pas De Commande', etat = 'libre'  where numTable = '$NumTable'";
		$res2 = Mysqli_Query($conn, $sql2);
		


		?>
	<div class="invoice">
		<div class="company-address">
			Café-Resto:
			<br />
			TUNISIA SOUSSE 5000
			<br />
			SAHLOULL, Rue ...
			<br />

		</div>

	
		<div class="invoice-details">

			Facture N°: <?php echo $row['numFacture'];?>
			<br />
			Date: <?php echo date("d/m/Y");  ?>
			<br>
			Time: <?php echo $Time;?>
		</div>
		
		<div class="customer-address">
			Table Num:<?php echo $row['numTable'];?>
			<br />
			
		</div>
		
		<div class="clear-fix"></div>
			<table border='1' cellspacing='0'>
				<tr>
					<th width=250>Plat</th>
					<th width=80>Qty</th>
					<th width=100>Prix</th>
					<th width=100>Total Prix</th>
				</tr>

			<?php
			

			$sql1 = "select * from factureproduitcaissier where numFacture = '$NumFacture'";
			$res1 = mysqli_query($conn, $sql1);

			while ($row1 = mysqli_fetch_assoc($res1)) {
			 	$NomPlat = $row1['nomplat'];
			 	$Qty = $row1['qty'];
			 	$Prix = $row1['prix'];
			 	$PrixTotal = $row1['prixtotal'];
			 	$Total = $row1['total'];
			 
					
					echo("<tr>");
					echo("<td> $NomPlat</td>");
					echo("<td class='text-center'>$Qty</td>");
					echo("<td class='text-right'>$Prix Dt</td>");
					echo("<td class='text-right'>$PrixTotal Dt</td>");
					echo("</tr>");
			}
			
			
			echo("</tr>");
			echo("<tr>");
			echo("<td colspan='3' class='text-right'><b>TOTAL</b></td>");
			echo("<td class='text-right'><b>".$Total."Dt</b></td>");
			echo("</tr>");

			$sql3 = "delete from factureproduitcaissier where numFacture= '$NumFacture'";
			$res3 = Mysqli_Query($conn, $sql3);
			$sql4 = "delete from commande where numTable = '$NumTable'";
			$res4 = Mysqli_Query($conn, $sql4);
			?>
			</table>
		</div>
		<script>
			window.print();
		</script>
	</body>

</html>
