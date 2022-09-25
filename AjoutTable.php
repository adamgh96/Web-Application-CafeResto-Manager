<?php 
include("Connection.php");

$NumTable = $_POST['numtable'];
$Position = $_POST['position'];
$var = 0;

$sql = "insert into tablee (NumTable, position, etat) values ('$NumTable', '$Position', 'libre')";



$sql1 = "select numTable from tablee";
$res1 = Mysqli_Query($conn, $sql1);

while ($row = Mysqli_fetch_Assoc($res1)) {
	if ($NumTable == $row['numTable']) {
		echo "Table deja exist";
		$var = 1;
	}

}

if ($var ==0) {
	
		if (Mysqli_Query($conn, $sql)){
		header("location: GerantIntf.php");

	}
	else {
		echo '<script>alert("Failed ADD Table!!");
        window.location = "Addtable.php";
		</script>';
	}
}


?>