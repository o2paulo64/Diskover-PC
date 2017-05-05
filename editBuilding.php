<?php
	include 'db.php';


if(isset($_GET["w1"]) && isset($_GET["w2"]) && isset($_GET["w3"]) && isset($_GET["w4"]) && isset($_GET["w5"]) && isset($_GET["w6"]) && isset($_GET["w7"]) && isset($_GET["w8"])){
	
	$yuarel = $_GET["w1"];
	$buildingName = $_GET["w2"];
	$otherName = $_GET["w3"];
	$buildingDescription = $_GET["w4"];
	$Directions = $_GET["w5"];
	$latitude = $_GET["w6"];
	$longitude = $_GET["w7"];
	$id = $_GET["w8"];
}


$query = "UPDATE Buildings SET buildingname=' ".$buildingName." ', directions='$Directions', buildingdescription='$buildingDescription', othername=' ".$otherName." ', latitude='$latitude', longitude='$longitude', url='$yuarel' WHERE buildingid=$id;";
$result = pg_query($db, $query);
header("Location: showbuild.php?name=$id");

?>