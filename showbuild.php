<?php 
	include 'head.php';
	include 'db.php';


	if(isset($_GET['name'])) {	
		$name = $_GET['name'];
		
	}
	else{
		//echo "not set";
	}
	$result = pg_query($db, "SELECT * FROM Buildings WHERE buildingID=".$name.";");	
	while ($row = pg_fetch_row($result)) {
		$b_name=$row[1];
		$directions=$row[2];
		$lat=$row[3]; 
		$long=$row[4];
		$url=$row[5];
		//$cheat=$row[7];
		$othername=$row[6];
		$b_desc=$row[7];
	}

?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3">
			<form action="building.php">
				<button type="submit" class="btn btn-sm btn-default" id="backbutton"><span class="glyphicon glyphicon-arrow-left"></span></button>
			</form>	
		</div>
		<?php 
			if(isset($_SESSION['id'])){
					echo "
						<div class='col-sm-8'></div>
						<div class='col-sm-1'>
							<a href='edit102938.php?id=".$name."&from=1'><u>Edit</u></a>
						</div>
					";
			}
		?>
	</div>
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6" id="Building-Label"><h1><strong><center>
			<?php echo $b_name;?>
		</center></strong></h1>
		</div>
	</div>

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<?php
		echo "<img class='img-responsive center-block' src='".$url."' width=480px height=360px style='margin-top: 25px; 'alt='logo'/>";?>
		</div>
	    <div class="col-md-5">
	    	<?php include 'googlemap.php'  ?>
		    
	    </div>
	</div>

	<div class="row" style="margin-top: 20px;">
		<div class="col-sm-1"></div>
		<div class="col-sm-5">
			<div class="panel-group">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
					  		<a class="accordion-toggle">Description</a>
						</h4>
				  	</div>

					<div class="panel-body">
						<p>
							<?php echo $b_desc;?> 
						</p>
					</div>
			  	</div>
			</div>
		</div>

		<div class="col-sm-5">
			<div class="panel-group">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
					  		<a class="accordion-toggle">Location</a>
						</h4>
				  	</div>

					<div class="panel-body">
						<p>
							<?php echo $directions;?> 
						</p>
					</div>
			  	</div>
			</div>
		</div>
	</div>

										<?php
										pg_connection_reset($db);
										
										$result1 = pg_query($db, "SELECT * FROM Rooms WHERE buildID=".$name." ORDER BY roomName;");
										$row1 = pg_fetch_row($result1);
										if($row1[0]!=0){
											echo "
	<div class='row'>
		<div class='col-sm-1'></div>
		<div class='col-sm-5'>
			<div class='panel-group' id='accordion'>
				<div class='panel panel-default'>
					<div class='panel-heading' data-toggle='collapse' data-target='#collapse1'>
						<h4 class='panel-title'>
					  		<a class='accordion-toggle'>Rooms</a>
						</h4>
				  	</div>

					<div id='collapse1' class='collapse panel-collapse'>
						<div class='panel-body'>
							<div class='row'>
		    					<div class='col-sm-12'>
									<ul style='margin-right: 30px;'>
										<form action='showroom.php?' method='GET'>";
										
												$result1 = pg_query($db, 'SELECT * FROM Rooms WHERE buildID='.$name.' ORDER BY roomName;');
												while ($row1 = pg_fetch_row($result1)) {
													echo "
													<button input type='Submit' class='btn btn-sm btn-default' id='roomdsn' name='name' value=".$row1[0]."><a>".$row1[2]."</a></button>";
								                }
										
											echo "
										</form>
									</ul>
						 		</div> 
							</div>
						</div>
					</div>

				</div>
			</div>

	   	</div>	
	</div>
											";
										}
										?>

</div>

</body>
</html>