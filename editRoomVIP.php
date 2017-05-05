<?php
	include 'db.php';


if(isset($_GET["w1"]) && isset($_GET["w2"]) && isset($_GET["w4"]) && isset($_GET["w5"]) && isset($_GET["w8"])){
	
	$yuarel = $_GET["w1"];
	$yuarel1 = $_GET["w6"];
	$yuarel2 = $_GET["w7"];
	$buildingName = $_GET["w2"];
	$buildingDescription = $_GET["w4"];
	$Directions = $_GET["w5"];
	$id = $_GET["w8"];
}


$query = "UPDATE Rooms SET roomname=' ".$buildingName." ', roomdirections='$Directions', roomdescription='$buildingDescription', url1='$yuarel', url2='$yuarel1', url3='$yuarel2' WHERE roomid=$id;";
$result = pg_query($db, $query);
header("Location: showroom.php?name=$id");

?>