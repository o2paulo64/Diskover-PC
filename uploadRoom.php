<?php
	include 'db.php';


if(isset($_GET["w1"]) && isset($_GET["w2"]) && isset($_GET["w3"]) && isset($_GET["w4"]) && isset($_GET["w5"]) && isset($_GET["w6"]) && isset($_GET['w7']) ){
$result1 = $_GET['w1'];
$roomName = $_GET['w2'];
$result2 = $_GET['w3'];
$roomDescription = $_GET['w4'];
$roomDirections = $_GET['w5'];
$result3 = $_GET['w6'];
$buildID = $_GET['w7'];
}
//$buildID=$_POST['buildID'];
/*
$roomName=$_POST['roomName'];
$roomDescription=$_POST['roomDescription'];
$roomDirections=$_POST['roomDirections'];
//$Directions=$_POST['Directions'];
//Execute the query
///
*/

//$result = pg_query($pg_conn, "INSERT INTO Buildings (buildingName,Directions) VALUES ('$buildingName','$Directions');");

$query = "INSERT INTO Rooms (buildID, roomName, roomDescription, roomDirections, url1, url2, url3) VALUES ('".pg_escape_string($buildID)."', ' ".pg_escape_string($roomName)." ', '".pg_escape_string($roomDescription)."', '".pg_escape_string($roomDirections)."', '".pg_escape_string($result1)."', '".pg_escape_string($result2)."', '".pg_escape_string($result3)."')";
$result = pg_query($db, $query);
//echo "".$roomName."";
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