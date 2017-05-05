<?php
include 'head.php';
include 'db.php';
if(isset($_GET["w1"]) && isset($_GET["w2"]) && $_GET["w2"]==2){
	$buildID = $_GET['w1'];
}
$result1 = pg_query($db, "SELECT * FROM Buildings WHERE buildingID=".$buildID."");
while ($row1 = pg_fetch_row($result1)){$b_name = $row1[1];}
$result2 = pg_query($db, "SELECT roomID, roomName FROM Rooms WHERE buildID=".$buildID." ORDER BY roomName");
?>

<script>
var roomDel = function(){
	var roomIDdelete = document.getElementsByName('roomdel');
	var roomDelete = roomIDdelete[0].value;
	
	if(roomDelete!='Choose room..'){
		if(confirm("Are you sure? All data associated to this building will be deleted.")){
			//var roomIDdelete = document.getElementsByName('roomdel');
			//var roomDelete = roomIDdelete[0].value;
			var column = 2;
			window.location.href = "delete.php?w1="+roomDelete+"&w2="+column;
		}	
	}
	else{
		alert('Choose a room!');
	}
}
</script>
<div class='row'>
<div class="col-sm-1"></div>
<div class="col-sm-3">
	<form action="remove.php">
		<button type="submit" class="btn btn-sm btn-default" id="backbutton"><span class="glyphicon glyphicon-arrow-left"></span></button>
	</form>	
</div>
</div>





<div class="container-fluid" >
		<div class="col-lg-1"></div>
		
		<div class="col-lg-10" id="tabzz">
			<ul class="nav nav-tabs">
			  <li class="active"><a data-toggle="tab" href="#room">Room</a></li>	  
			  <li ><a data-toggle="tab" href="#building">Building</a></li>
				 
			  <li><a data-toggle="tab" href="#food">Food</a>
			  	
			  </li>
			  <li><a data-toggle="tab" href="#commonplace">Commonplace</a></li>
			  <li><a data-toggle="tab" href="#parkinglot">Parking Lot</a></li>
			  <li><a data-toggle="tab" href="#comfortroom">Comfort Room</a></li>
			</ul>

			<div class="tab-content">
				<div id="room" class="tab-pane fade">
					<div class="row">
						<div class="col-sm-4"></div>
						<div class="col-sm-6" id="Building-Label"><p style='margin-top: 20px; color: #6a090a;'><strong>
							Building: <?php  echo $b_name; ?>
						</strong></p>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-4'></div>
						<div class='col-sm-4'>
							<form method='post' enctype='multipart/form-data' >
								<select class="form-control" id="sel1" name='roomdel'>
									<option>Choose room..</option>
									<?php
									while ($row = pg_fetch_row($result2)) {
									  echo '<option value="'.$row[0].'">'.$row[1].'</option>';               
									}
									?>
									</optgroup>
								</select>
							<div class='row' style='margin-top: 20px;'>
							<div class='col-sm-4'></div>
							<input type="button" class="btn btn-default btn-sm" id="newsubmit" value="Delete Room" onclick='roomDel()'/>
							</div>
							</form>
						</div>
					</div>
				</div>				
				<div id="building" class="tab-pane fade in active">
					<?php
						$result1 = pg_query($db, "SELECT buildingID, buildingName FROM Buildings ORDER BY buildingName");
					?>
					<script>
						function deleteBuild(){
							var buildIDdelete = document.getElementsByName('buildIDdelete');
							var buildDelete = buildIDdelete[0].value;
							//console.log(buildDelete);
							if(buildDelete!='Choose location.. '){
								if(confirm("Are you sure? All data associated to this building will be deleted.")){
									//var buildIDdelete = document.getElementsByName('buildIDdelete');
									//var buildDelete = buildIDdelete[0].value;
									var column = 1;
									window.location.href = "delete.php?w1="+buildDelete+"&w2="+column;
								}
							}
							else{
								alert('Choose a building!');
							}
						}

					</script>

					<div class='container'>
						<div class='row' style='margin-top: 20px;'>
							<div class='col-sm-4'></div>
							<div class='col-sm-4'>
								<form method='post' enctype='multipart/form-data' >
									<select class="form-control" id="sel1" name='buildIDdelete'>
										<option>Choose location.. </option>
										<?php
										while ($row = pg_fetch_row($result1)) {
										  echo '<option value="'.$row[0].'">'.$row[1].'</option>';               
										}
										?>
										</optgroup>
									</select>
								<div class='row' style='margin-top: 20px;'>
								<div class='col-sm-4'></div>
								<input type="button" class="btn btn-default btn-sm" id="newsubmit" value="Delete Location" onclick='deleteBuild()'/>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>


				<div id="food" class="tab-pane fade">
					<?php
						$result3 = pg_query($db, "SELECT eateryID, eateryName FROM Eatery ORDER BY eateryName");
					?>
					<script>
						function deleteFood(){
							var foodIDdelete = document.getElementsByName('foodIDdelete');
							var foodDelete = foodIDdelete[0].value;
							if(foodDelete!='Choose location.. '){
								if(confirm("Are you sure? All data associated to this building will be deleted.")){
									//var foodIDdelete = document.getElementsByName('foodIDdelete');
									//var foodDelete = foodIDdelete[0].value;
									var column = 3;
									window.location.href = "delete.php?w1="+foodDelete+"&w2="+column;
								}
							}
							else{
								alert('Choose a building!');
							}
						}

					</script>

					<div class='container'>
						<div class='row' style='margin-top: 20px;'>
							<div class='col-sm-4'></div>
							<div class='col-sm-4'>
								<form method='post' enctype='multipart/form-data' >
									<select class="form-control" id="sel1" name='foodIDdelete'>
										<option>Choose location.. </option>
										<?php
										while ($row = pg_fetch_row($result3)) {
										  echo '<option value="'.$row[0].'">'.$row[1].'</option>';               
										}
										?>
										</optgroup>
									</select>
								<div class='row' style='margin-top: 20px;'>
								<div class='col-sm-4'></div>
								<input type="button" class="btn btn-default btn-sm" id="newsubmit" value="Delete Location" onclick='deleteFood()'/>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				
				<div id="commonplace" class="tab-pane fade">
					<?php
						$result4 = pg_query($db, "SELECT commonpID, commonpName FROM CommonP ORDER BY commonpName");
					?>
					<script>
						function deleteCommonPlace(){
							var cpIDdelete = document.getElementsByName('cpIDdelete');
							var cpDelete = cpIDdelete[0].value;
							if(cpDelete!='Choose location.. '){
								if(confirm("Are you sure? All data associated to this building will be deleted.")){
									//var cpIDdelete = document.getElementsByName('cpIDdelete');
									//var cpDelete = cpIDdelete[0].value;
									var column = 4;
									window.location.href = "delete.php?w1="+cpDelete+"&w2="+column;
								}
							}
							else{
								alert('Choose a building!');
							}
						}

					</script>

					<div class='container'>
						<div class='row' style='margin-top: 20px;'>
							<div class='col-sm-4'></div>
							<div class='col-sm-4'>
								<form method='post' enctype='multipart/form-data' >
									<select class="form-control" id="sel1" name='cpIDdelete'>
										<option>Choose location.. </option>
										<?php
										while ($row = pg_fetch_row($result4)) {
										  echo '<option value="'.$row[0].'">'.$row[1].'</option>';               
										}
										?>
										</optgroup>
									</select>
								<div class='row' style='margin-top: 20px;'>
								<div class='col-sm-4'></div>
								<input type="button" class="btn btn-default btn-sm" id="newsubmit" value="Delete Location" onclick='deleteCommonPlace()'/>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				
				<div id="parkinglot" class="tab-pane fade">
					<?php
						$result5 = pg_query($db, "SELECT parkingID, parkingName FROM ParkingLot ORDER BY parkingName");
					?>
					<script>
						function deleteParkingLot(){
							var parkingIDdelete = document.getElementsByName('parkingIDdelete');
							var parkingDelete = parkingIDdelete[0].value;
							if(parkingDelete!='Choose location.. '){
								if(confirm("Are you sure? All data associated to this building will be deleted.")){
									//var parkingIDdelete = document.getElementsByName('parkingIDdelete');
									//var parkingDelete = parkingIDdelete[0].value;
									var column = 5;
									window.location.href = "delete.php?w1="+parkingDelete+"&w2="+column;
								}
							}
							else{
								alert('Choose a building!');
							}
						}

					</script>

					<div class='container'>
						<div class='row' style='margin-top: 20px;'>
							<div class='col-sm-4'></div>
							<div class='col-sm-4'>
								<form method='post' enctype='multipart/form-data' >
									<select class="form-control" id="sel1" name='parkingIDdelete'>
										<option>Choose location.. </option>
										<?php
										while ($row = pg_fetch_row($result5)) {
										  echo '<option value="'.$row[0].'">'.$row[1].'</option>';               
										}
										?>
										</optgroup>
									</select>
								<div class='row' style='margin-top: 20px;'>
								<div class='col-sm-4'></div>
								<input type="button" class="btn btn-default btn-sm" id="newsubmit" value="Delete Location" onclick='deleteParkingLot()'/>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				
				<div id="comfortroom" class="tab-pane fade">
					<?php
						$result6 = pg_query($db, "SELECT crID, crName FROM ComfRoom ORDER BY crName");
					?>
					<script>
						function deleteComfRoom(){
							var crIDdelete = document.getElementsByName('crIDdelete');
							var crDelete = crIDdelete[0].value;
							if(crDelete!='Choose location.. '){
								if(confirm("Are you sure? All data associated to this building will be deleted.")){
									//var crIDdelete = document.getElementsByName('crIDdelete');
									//var crDelete = crIDdelete[0].value;
									var column = 6;
									window.location.href = "delete.php?w1="+crDelete+"&w2="+column;
								}
							}
							else{
								alert('Choose a building!');
							}
						}

					</script>

					<div class='container'>
						<div class='row' style='margin-top: 20px;'>
							<div class='col-sm-4'></div>
							<div class='col-sm-4'>
								<form method='post' enctype='multipart/form-data' >
									<select class="form-control" id="sel1" name='crIDdelete'>
										<option>Choose location.. </option>
										<?php
										while ($row = pg_fetch_row($result6)) {
										  echo '<option value="'.$row[0].'">'.$row[1].'</option>';               
										}
										?>
										</optgroup>
									</select>
								<div class='row' style='margin-top: 20px;'>
								<div class='col-sm-4'></div>
								<input type="button" class="btn btn-default btn-sm" id="newsubmit" value="Delete Location" onclick='deleteComfRoom()'/>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			
			</div>
				
		</div>
</div>







