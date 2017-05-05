<?php 
  include 'db.php';


  if(isset($_POST['name'])) { 
    $name = $_POST['name'];
  }
  else{
    //echo "not set";
  }
  $result = pg_query($db, "SELECT * FROM Buildings WHERE buildingID=".$name.";"); 

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php 
while ($row = pg_fetch_row($result)) {
  $sample=$row[3];
  $sample2=$row[4]; 
}
echo $sample;
  ?>
    <script>
      var latitude=parseFloat(<?php echo $sample;?>);
      var longitude=parseFloat(<?php echo $sample2;?>);
       
        window.alert(latitude+longitude);
    </script>
</body>
</html>
