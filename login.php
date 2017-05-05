<?php
session_start();
 include 'db.php';

$username=pg_escape_string($_POST['username']);
$password=pg_escape_string($_POST['password']);


$result = pg_query($db,"SELECT * FROM login_data WHERE username='".$username."' AND password='".$password."';");
$row = pg_fetch_row($result);

if(sizeof($row) < 3){
	header("Location: loginfail.php");
} else{
	$_SESSION['id']=$row[0];
	header("Location: index.php");
}
?>
