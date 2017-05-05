<?php
	include 'db.php';
/*
$parkingName=$_POST['parkingName'];
$pDescription=$_POST['pDescription'];
$pDirections=$_POST['pDirections'];
$otherName=$_POST['otherName'];
*/
if(isset($_GET["w1"]) && isset($_GET["w2"]) && isset($_GET["w3"]) && isset($_GET["w4"]) && isset($_GET["w5"]) && isset($_GET["w6"]) && isset($_GET["w7"])){
	$yuarel = $_GET["w1"];
	$parkingName = $_GET["w2"];
	$plotherName = $_GET["w3"];
	$pDescription = $_GET["w4"];
	$pDirections = $_GET["w5"];
	$latitude = $_GET["w6"];
	$longitude = $_GET["w7"];
}
//Execute the query
///

//$result = pg_query($pg_conn, "INSERT INTO Buildings (buildingName,Directions) VALUES ('$buildingName','$Directions');");

$query = "INSERT INTO ParkingLot (parkingName, pDescription, pDirections, otherName,latitude,longitude,url) VALUES (' ".pg_escape_string($parkingName)." ','".pg_escape_string($pDescription)."', '".pg_escape_string($pDirections)."', ' ".pg_escape_string($plotherName)." ', '".pg_escape_string($latitude)."', '".pg_escape_string($longitude)."', '".pg_escape_string($yuarel)."')";
$result = pg_query($db, $query);
header("Location: new_loc_successpage.php");
///
/*
mysqli_query($connect,"INSERT INTO Buildings (buildingName, Directions)
		        VALUES ('$buildingName', '$Directions')");
				
	if(mysqli_affected_rows($connect) > 0){
	echo "<p>Building Added</p></br>";
	echo '<a href="index.php">Go Back</a>';
	echo '<a href="building.php">Show</a>';
} else {
	echo "Building NOT Added<br />";
	echo mysqli_error ($connect);
}*/
?>