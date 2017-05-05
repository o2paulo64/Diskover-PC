<?php 
	include 'head.php';
	include 'db.php';
	// id=".$name."&name".$b_name."&direction".$directions."&lat".$lat."&long".$long."&other".$othername."&desc".$b_desc."



	$id=$_GET['id'];
	$from=$_GET['from'];

	$result = pg_query($db, "SELECT * FROM Buildings WHERE buildingID=".$id.";");	
	$result1 = pg_query($db, "SELECT * FROM Eatery WHERE eateryID=".$id.";");	
	$result2 = pg_query($db, "SELECT * FROM CommonP WHERE commonpID=".$id.";");	
	$result3 = pg_query($db, "SELECT * FROM ComfRoom WHERE crID=".$id.";");	
	$result4 = pg_query($db, "SELECT * FROM ParkingLot WHERE parkingID=".$id.";");
	
	$row=pg_fetch_row($result);
	$row1=pg_fetch_row($result1);
	$row2=pg_fetch_row($result2);
	$row3=pg_fetch_row($result3);
	$row4=pg_fetch_row($result4);

	if($row[0]!="" && $from=="1"){
		$result = pg_query($db, "SELECT * FROM Buildings WHERE buildingID=".$id.";");	
		while ($row = pg_fetch_row($result)) {
			$name=$row[1];
			$direction=$row[2];
			$lat=$row[3]; 
			$long=$row[4];
			$other=$row[6];
			$desc=$row[7];
			$url=$row[5];
		}

	}else if($row1[0]!="" && $from=="2"){
		$result1 = pg_query($db, "SELECT * FROM Eatery WHERE eateryID=".$id.";");	

		while ($row1 = pg_fetch_row($result1)) {
			$name=$row1[1];
			$direction=$row1[3];
			$lat=$row1[5]; 
			$long=$row1[6];
			$other=$row1[4];
			$desc=$row1[2];
			$url=$row1[7];
		}

	}else if($row2[0]!="" && $from=="3"){
		$result2 = pg_query($db, "SELECT * FROM CommonP WHERE commonpID=".$id.";");	

		while ($row2 = pg_fetch_row($result2)) {
			$name=$row2[1];
			$direction=$row2[3];
			$lat=$row2[5]; 
			$long=$row2[6];
			$other=$row2[4];
			$desc=$row2[2];
			$url=$row2[7];
		}

	}else if($row3[0]!="" && $from=="4"){
		$result3 = pg_query($db, "SELECT * FROM ComfRoom WHERE crID=".$id.";");	

		while ($row3 = pg_fetch_row($result3)) {
			$name=$row3[1];
			$direction=$row3[3];
			$lat=$row3[5]; 
			$long=$row3[6];
			$other=$row3[4];
			$desc=$row3[2];
			$url=$row3[7];
		}

	}else if($row4[0]!="" && $from=="5"){
		$result4 = pg_query($db, "SELECT * FROM ParkingLot WHERE parkingID=".$id.";");

		while ($row4 = pg_fetch_row($result4)) {
			$name=$row4[1];
			$direction=$row4[3];
			$lat=$row4[5]; 
			$long=$row4[6];
			$other=$row4[4];
			$desc=$row4[2];
			$url=$row4[7];
		}

	}

?>

<div class="container">

  		<div class="row">
			
			<div class="col-md-3">
				
				<input type="hidden" id="from" value="<?php echo $from; ?>"/>
				<input type="hidden" id="infoD" value="<?php echo $id; ?>"/>
				<input type="hidden" id="_url" value="<?php echo $url; ?>"/>

				<div class="form-group-lg" id="lgsbar">
					<label for="inputdefault">Name</label>
					<div class="form-group has-success has-feedback">
						<input type="text" class="form-control" id="infos" name="buildingName" value="<?php echo $name; ?>">
					</div>
				</div>	

				<div class="form-group-lg" id="lgsbar">
					<label for="inputdefault">Other Name(s) <p style="font-size: 10px">Separate other names by space ( )</p></label>
					<div class="form-group has-success has-feedback">
						<input type="text" class="form-control" id="infos" name="otherName" value="<?php echo $other; ?>">
					</div>
				</div>	

				<div class="form-group">
					<label for="comment">Description</label>
					<textarea class="form-control" rows="5" id="comment" name="buildingDescription" v>
						<?php echo $desc; ?>
					</textarea>
				</div>

				<div class="form-group">
					<label for="comment">Location</label>
					<textarea class="form-control" rows="5" id="comment" name="Directions" >
						<?php echo $direction; ?>
					</textarea>
				</div>

			</div>

			<div class="col-md-3"></div>

		 	<div class="col-lg-3 col-md-4 col-sm-5">  		
				<div class="form-group well" style="margin-top: 20px;">
						<div id="e"></div>
					<label class="file-upload-container" for="file-upload">
						Select building image to upload
						<input id="file-uploadEDIT" type="file" accept="image/*">
					</label>
				</div>
				<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
				<script src="js/edit.js"></script>

				<a href='#' class='pop'>
					<img src='images/ex-coord.png' style='width: 100px; height: 70px;'>	
				</a><br>
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
				<a href="https://diskoverup.herokuapp.com/map.php" target="_blank" style="font-size: 11px"><u> Click here </u>to find the coordinates of desired location. </a><br>
				<label for="comment">Coordinates:</label><br>


				<div class="col-md-6">
					<div class="form-group">
						<label for="inputdefault">Latitude</label>
						<input class="form-control" id="infos" name="latitude" value="<?php echo $lat;?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputdefault">Longitude</label>
						<input class="form-control" id="infos" name="longitude" value="<?php echo $long;?>">
					</div>
				</div>
		 	</div>
		</div>

		<div class='row'>
			<div class='col-md-8'></div>
			<div class='col-md-2'>
				<input type="button" class="btn btn-default btn-lg" id="newsubmit" onclick="myFunctionEDIT()" value="Submit" />
			</div>
		</div>
	
 	</div>
</div>