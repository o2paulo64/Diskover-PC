<?php
	include 'db.php';

/*$buildingName=$_POST['buildingName'];
$Directions=$_POST['Directions'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
$otherName=$_POST['otherName'];
$buildingDescription=$_POST['buildingDescription'];*/
if(isset($_GET["w1"]) && isset($_GET["w2"]) && isset($_GET["w3"]) && isset($_GET["w4"]) && isset($_GET["w5"]) && isset($_GET["w6"]) && isset($_GET["w7"])){
	$yuarel = $_GET["w1"];
	$buildingName = $_GET["w2"];
	$otherName = $_GET["w3"];
	$buildingDescription = $_GET["w4"];
	$Directions = $_GET["w5"];
	$latitude = $_GET["w6"];
	$longitude = $_GET["w7"];
}
//Execute the query
///

//$result = pg_query($pg_conn, "INSERT INTO Buildings (buildingName,Directions) VALUES ('$buildingName','$Directions');");

$query = "INSERT INTO Buildings (buildingName, Directions, latitude, longitude, otherName,buildingDescription, url) VALUES (' ".pg_escape_string($buildingName)." ', '".pg_escape_string($Directions)."', '".pg_escape_string($latitude)."', '".pg_escape_string($longitude)."', ' ".pg_escape_string($otherName)." ', '".pg_escape_string($buildingDescription)."', '".pg_escape_string($yuarel)."')";
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