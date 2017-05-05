

<?php
include 'db.php';
if(isset($_GET["w1"]) && isset($_GET["w2"]) && $_GET["w2"]==1){
	$buildIDdelete = $_GET['w1'];
	$query = "DELETE FROM Buildings WHERE buildingID=".$buildIDdelete."";
	$result = pg_query($db, $query);
}

else if(isset($_GET["w1"]) && isset($_GET["w2"]) && $_GET["w2"]==2){
	$roomIDdelete = $_GET['w1'];
	$query = "DELETE FROM Rooms WHERE roomID=".$roomIDdelete."";
	$result = pg_query($db, $query);
}

else if(isset($_GET["w1"]) && isset($_GET["w2"]) && $_GET["w2"]==3){
	$foodIDdelete = $_GET['w1'];
	$query = "DELETE FROM Eatery WHERE eateryID=".$foodIDdelete."";
	$result = pg_query($db, $query);
}

else if(isset($_GET["w1"]) && isset($_GET["w2"]) && $_GET["w2"]==4){
	$cpIDdelete = $_GET['w1'];
	$query = "DELETE FROM CommonP WHERE commonpID=".$cpIDdelete."";
	$result = pg_query($db, $query);
}

else if(isset($_GET["w1"]) && isset($_GET["w2"]) && $_GET["w2"]==5){
	$parkingIDdelete = $_GET['w1'];
	$query = "DELETE FROM ParkingLot WHERE parkingID=".$parkingIDdelete."";
	$result = pg_query($db, $query);
}

else if(isset($_GET["w1"]) && isset($_GET["w2"]) && $_GET["w2"]==6){
	$crIDdelete = $_GET['w1'];
	$query = "DELETE FROM ComfRoom WHERE crID=".$crIDdelete."";
	$result = pg_query($db, $query);
}
header("Location: removesuccesspage.php");
//$query = "INSERT INTO Rooms (buildID, roomName, roomDescription, roomDirections, url1, url2, url3) VALUES ('".pg_escape_string($buildID)."', '".pg_escape_string($roomName)."', '".pg_escape_string($roomDescription)."', '".pg_escape_string($roomDirections)."', '".pg_escape_string($result1)."', '".pg_escape_string($result2)."', '".pg_escape_string($result3)."')";
//echo $buildIDdelete;

?>