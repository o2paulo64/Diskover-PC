<?php
	include 'head.php';
	include 'db.php';

	if(isset($_GET['name'])) {	
		$name = $_GET['name'];
		
		$result = pg_query($db, "SELECT * FROM Rooms WHERE roomID=".$name.";");
		
		while ($row = pg_fetch_row($result)) {$roo=$row[2]; $desc=$row[3]; $dir=$row[4]; $build=$row[1]; $url1=$row[5];
			$url2=$row[6]; $url3=$row[7];}
		$result1 = pg_query($db, "SELECT * FROM Buildings WHERE buildingID=".$build.";");
		while ($rows = pg_fetch_row($result1)) { $bname=$rows[1]; $lat=$rows[3]; $long=$rows[4]; $picBuild=$rows[5];}

	}
?>
			
<div class='container-fluid'>
	<div class="row">
		<div class="col-sm-3">
		
				<a href='showbuild.php?name=<?php echo $build ?>'><button type="submit" class="btn btn-sm btn-default" id="backbutton"><span class="glyphicon glyphicon-arrow-left"></span></button></a>
			
		</div>
		<?php 
			if(isset($_SESSION['id'])){
					echo "
						<div class='col-sm-8'></div>
						<div class='col-sm-1'>
							<a href='editvip.php?id=".$name."&from=6'><u>Edit</u></a>
						</div>
					";
			}
		?>
	</div>

	<div class='row'>
		<div class="col-sm-3"></div>
		<div class='col-sm-6' id='Building-Label'><h1><strong><center>
			<?php echo $roo;?></center></strong></h1></div>
		
	</div>

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			
			
			<?php
		echo "<img class='img-responsive center-block' src='".$picBuild."' width=480px height=360px style='margin-top: 25px;' alt='logo'/>";?>
		<h4 style="color:#6a090a;"><b><center><?php echo $bname; ?></center></b></h4>
		</div>

		<div class="col-sm-2 hidden-md hidden-lg"></div>
		<div class="col-md-5 col-sm-8">
			
			<div class="panel-group" style='margin-top: 25px;'>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
					  		<a class="accordion-toggle">Room Description</a>
						</h4>
				  	</div>

					<div class="panel-body">
						<p>
							<?php echo $desc;?> 
						</p>
					</div>
			  	</div>
			</div>

			<?php echo "<a href='#' class='pop'><img src='".$url1."' style='width: 75px; height: 75px;'></a>";?>
			<?php echo "<a href='#' class='pop'><img src='".$url2."' style='width: 75px; height: 75px;'></a>";?>
			<?php echo "<a href='#' class='pop'><img src='".$url3."' style='width: 75px; height: 75px;'></a>";?>
			<!--<a href='#' class='pop'><img src='images/305-307/IMG_3116.JPG' style='width: 75px; height: 75px;'></a>
			<a href='#' class='pop'><img src='images/305-307/IMG_3116.JPG' style='width: 75px; height: 75px;'></a>
			<a href='#' class='pop'><img src='images/305-307/IMG_3116.JPG' style='width: 75px; height: 75px;'></a>-->			
			<div class='modal fade' id='imagemodal' tabindex='-1'	 role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
			  <div class='modal-dialog'>
				<div class='modal-content'>              
				  <div class='modal-body'>
					<button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
					<img src='' class='imagepreview' style='width: 100%;' >
				  </div>
				</div>
			  </div>
			</div>

			<div class="panel-group">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
					  		<a class="accordion-toggle">Location</a>
						</h4>
				  	</div>

					<div class="panel-body">
						<p>
							<?php echo $dir;?> 
						</p>
					</div>
			  	</div>
			</div>

		</div>
	</div>

	<div class="row">
	<div class="col-md-1"></div>
		<div class="col-md-5">
	    	<?php include 'googlemap.php'  ?>
		    
	    </div>
		
</div>
</body>
</html>