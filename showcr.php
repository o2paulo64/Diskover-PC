<?php 
	include 'head.php';
	include 'db.php';


	if(isset($_GET['name'])) {	
		$name = $_GET['name'];
	}
	else{
		//echo "not set";
	}
	
	$result = pg_query($db, "SELECT * FROM ComfRoom WHERE crID=".$name.";");	
	while ($row = pg_fetch_row($result)) {
		$b_name=$row[1];
		$b_desc=$row[2];
		$directions=$row[3];
		$othername=$row[4];
		$lat=$row[5]; 
		$long=$row[6];
		$url=$row[7];
	}
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3">
			<form action="cr.php">
				<button type="submit" class="btn btn-sm btn-default" id="backbutton"><span class="glyphicon glyphicon-arrow-left"></span></button>
			</form>	
		</div>
		<?php 
			if(isset($_SESSION['id'])){
					echo "
						<div class='col-sm-8'></div>
						<div class='col-sm-1'>
							<a href='edit102938.php?id=".$name."&from=4'><u>Edit</u></a>
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
	
</div>
</body>
</html>