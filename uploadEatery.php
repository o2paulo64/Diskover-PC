<?php
	include 'db.php';

/*
$eateryName=$_POST['eateryName'];
$eDescription=$_POST['eDescription'];
$eDirections=$_POST['eDirections'];
$otherName=$_POST['otherName'];
*/
//Execute the query
///
if(isset($_GET["w1"]) && isset($_GET["w2"]) && isset($_GET["w3"]) && isset($_GET["w4"]) && isset($_GET["w5"]) && isset($_GET["w6"]) && isset($_GET["w7"])){
	$yuarel = $_GET["w1"];
	$eateryName = $_GET["w2"];
	$eotherName = $_GET["w3"];
	$eDescription = $_GET["w4"];
	$eDirections = $_GET["w5"];
	$latitude = $_GET["w6"];
	$longitude = $_GET["w7"];
}

//$result = pg_query($pg_conn, "INSERT INTO Buildings (buildingName,Directions) VALUES ('$buildingName','$Directions');");

$query = "INSERT INTO Eatery (eateryName, eDescription, eDirections, otherName, latitude, longitude, url) VALUES (' ".pg_escape_string($eateryName)." ','".pg_escape_string($eDescription)."', '".pg_escape_string($eDirections)."', ' ".pg_escape_string($eotherName)." ', '".pg_escape_string($latitude)."', '".pg_escape_string($longitude)."', '".pg_escape_string($yuarel)."' )";
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