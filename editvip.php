<?php 
	include 'head.php';
	include 'db.php';
	// id=".$name."&name".$b_name."&direction".$directions."&lat".$lat."&long".$long."&other".$othername."&desc".$b_desc."



	$id=$_GET['id'];
	$from=$_GET['from'];


	$result5 = pg_query($db, "SELECT * FROM Rooms WHERE roomID=".$id.";");

	$row5=pg_fetch_row($result5);

	if($row5[0]!="" && $from=="6"){
		$result5 = pg_query($db, "SELECT * FROM Rooms WHERE roomid=".$id.";");

		while ($row5 = pg_fetch_row($result5)) {
			$name=$row5[2];
			$direction=$row5[4];
			$bID=$row5[1];
			$desc=$row5[3];
			$url1=$row5[5];
			$url2=$row5[6];
			$url3=$row5[7];
		}

	}

?>

<div class="container">

  		<div class="row">
			
			<div class="col-md-3">
				
				<input type="hidden" id="from" value="<?php echo $from; ?>"/>
				<input type="hidden" id="infoD" value="<?php echo $id; ?>"/>
				<input type="hidden" id="_url1" value="<?php echo $url1; ?>"/>
				<input type="hidden" id="_url2" value="<?php echo $url2; ?>"/>
				<input type="hidden" id="_url3" value="<?php echo $url3; ?>"/>

				<div class="form-group-lg" id="lgsbar">
					<label for="inputdefault">Name</label>
					<div class="form-group has-success has-feedback">
						<input type="text" class="form-control" id="infos" name="buildingName" value="<?php echo $name; ?>">
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
			 		<div id="roomz"></div>		
					<label class="file-upload-container" for="file-upload">
						Select room image to upload
						<input id="editfile-upload1" type="file" accept="image/*" >

						Select room image to upload
						<input id="editfile-upload2" type="file" accept="image/*" >
						<div id="roomz"></div>		
						Select room image to upload
						<input id="editfile-upload3" type="file" accept="image/*" >
						<div id="roomz"></div>		
						
					</label>
				</div>
				<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
				<script src="js/editroom.js"></script>

				
		 	</div>
		</div>

		<div class='row'>
			<div class='col-md-8'></div>
			<div class='col-md-2'>
				<input type="button" class="btn btn-default btn-lg" id="newsubmit" onclick="myFunctionEDITROOM()" value="Submit" />
			</div>
		</div>
	
 	</div>
</div>
