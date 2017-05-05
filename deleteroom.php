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


<div class="container-fluid" >
		<div class="col-lg-1">
			
			<div class="col-sm-1"></div>
			<div class="col-sm-3 ">
				<form action="remove.php">
					<button type="submit" class="btn btn-sm btn-default" id="backbutton"><span class="glyphicon glyphicon-arrow-left"></span></button>
				</form>	
			</div>
		</div>
		
		<div class="col-lg-10" id="tabzz">
			<ul class="nav nav-tabs">
			  <li class="active"><a data-toggle="tab" href="#room">Room</a></li>	  
			 
			</ul>

			<div class="tab-content">
				<div id="room" class="tab-pane fade in active">
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
			</div>
				
		</div>
</div>







