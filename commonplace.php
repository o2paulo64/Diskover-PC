<?php
	include 'head.php';
	include 'db.php';
	
	
	$result = pg_query($db, "SELECT commonpID, commonpName FROM CommonP ORDER BY commonpName");

?>

	<div class='container'>
		<div class='row'>
			<div class='col-md-12' id='Building-Label'><h1><strong><center>Common Place</center></strong></h1></div>
		</div>
		<div class='row'>
  			<div class='col-md-4'></div>
	  		<div class='col-md-4' id='selectoption'>
				<div class='form-group'>
					<form method='GET' action='showcommp.php'>
					<select name = 'name' class = 'form-control' id = 'sell' class='form-control' onchange='this.form.submit()'>
						<option>Choose Common Place..</option>

<?php					
	while ($row = pg_fetch_row($result)) {
	    echo "<option value=".$row[0].">".$row[1]."</option>";    
	}	
?>

						</optgroup>
					</select>
					</form>
				</div>
       		</div>
        </div>
	</div>
</body>
</html>
