<?php 
	include 'head.php';
	include 'db.php';
?>
<div class="container-fluid">
		<div class="col-lg-1"></div>
		
		<div class="col-lg-10" id="tabzz">
			<ul class="nav nav-tabs">
			  <li class="active"><a data-toggle="tab" href="#building">Building</a></li>
				  
				 
			  <li><a data-toggle="tab" href="#food">Food</a>
			  	
			  </li>
			  <li><a data-toggle="tab" href="#commonplace">Common Place</a></li>
			  <li><a data-toggle="tab" href="#parkinglot">Parking Lot</a></li>
			  <li><a data-toggle="tab" href="#comfortroom">Comfort Room</a></li>
			</ul>

			<div class="tab-content">
				<div id="building" class="tab-pane fade in active">
					
				  	<ul class="nav nav-pills" id="tabzz">
						<li class="active"><a data-toggle="pill" href="#exist">Existing Building</a></li>
						<li><a data-toggle="pill" href="#newb">New Building</a></li>
  					</ul>
  
					<div class="tab-content">
					  	<?php
							
							$result = pg_query($db, "SELECT buildingID, buildingName FROM Buildings ORDER BY buildingName");
						?>
						<div id="exist" class="tab-pane fade in active">
						  	<div class="container">
							  	<div class="row">
									<div class="col-md-3">
										<div class="form-group" id="opt-group">
											<form method='post' enctype='multipart/form-data' >
												<select class="form-control" id="sel1" name='buildID'>
													<option>Choose building..</option>
													<?php
													while ($row = pg_fetch_row($result)) {
													  echo '<option value="'.$row[0].'">'.$row[1].'</option>';               
													}
													?>
													</optgroup>
												</select>
											</form>
										</div>

										<div class="form-group-lg" id="lgsbar">
											<label for="inputdefault">Room Name</label>
											<div class="form-group has-success has-feedback">
												<input type="text" class="form-control" id="infos" name='roomName'>
											</div>
										</div>

										<div class="form-group">
											<label for="comment">Room Description</label>
											<textarea class="form-control" rows="5" id="comment" name='roomDescription'></textarea>
										</div>

										<div class="form-group">
											<label for="comment">Room Directions</label>
											<textarea class="form-control" rows="5" id="comment" name='roomDirections'></textarea>
										</div>

										
									</div>

									<div class="col-md-3"></div>

									<div class="col-lg-3 col-md-4 col-sm-5">  		
										<div class="form-group well" style="margin-top: 20px;">
									 		<div id="x"></div>		
											<label class="file-upload-container" for="file-upload">
												Select room image to upload
												<input id="file-upload1" type="file" accept="image/*" >

												Select room image to upload
												<input id="file-upload2" type="file" accept="image/*" >
												<div id="x"></div>		
												Select room image to upload
												<input id="file-upload3" type="file" accept="image/*" >
												<div id="x"></div>		
												
											</label>
										</div>

										<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
										<script src="js/room.js"></script>

									</div>
								</div>

								<div class='row'>
									<div class='col-md-8'></div>
									<div class='col-md-2'>
										<input type='submit' class='btn btn-default btn-lg' id='newsubmit' onclick="myFunctionr(); return false;" value='Submit' />
									</div>
								</div>
						  	</div>
						</div>
						
						<div id="newb" class="tab-pane fade">
						  	<div class="container">
						  		<div class="row">
									
									<div class="col-md-3">

										<div class="form-group-lg" id="lgsbar">
											<label for="inputdefault">Building Name</label>
											<div class="form-group has-success has-feedback">
												<input type="text" class="form-control" id="infos" name="buildingName">
											</div>
										</div>	

										<div class="form-group-lg" id="lgsbar">
											<label for="inputdefault">Other Name(s) <p style="font-size: 10px">Separate other names by a space( )</p></label>
											<div class="form-group has-success has-feedback">
												<input type="text" class="form-control" id="infos" name="otherName">
											</div>
										</div>	

										<div class="form-group">
											<label for="comment">Building Description</label>
											<textarea class="form-control" rows="5" id="comment" name="buildingDescription"></textarea>
										</div>

										<div class="form-group">
											<label for="comment">Directions</label>
											<textarea class="form-control" rows="5" id="comment" name="Directions"></textarea>
										</div>

									</div>

									<div class="col-md-3"></div>

								 	<div class="col-lg-3 col-md-4 col-sm-5">  		
										<div class="form-group well" style="margin-top: 20px;">
												<div id="y"></div>
											<label class="file-upload-container" for="file-upload">
												Select building image to upload
												<input id="file-uploadb" type="file" accept="image/*">
												
											</label>
										</div>
										<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
										<script src="js/newb.js"></script>

										<?php include 'coordinatecode.php' ?>
								 	</div>
								</div>

								<div class='row'>
									<div class='col-md-8'></div>
									<div class='col-md-2'>
										<input type="button" class="btn btn-default btn-lg" id="newsubmit" onclick="myFunction()" value="Submit" />
									</div>
								</div>
							
						 	</div>
						</div>
					</div>
				</div>

				<div id="food" class="tab-pane fade">
					<div class="container">
						  		<div class="row">
									
									<div class="col-md-3">

										<div class="form-group-lg" id="lgsbar">
											<label for="inputdefault">Eatery Name</label>
											<div class="form-group has-success has-feedback">
												<input type="text" class="form-control" id="infos" name="eateryName">
											</div>
										</div>	

										<div class="form-group-lg" id="lgsbar">
											<label for="inputdefault">Other Name(s) <p style="font-size: 10px">Separate other names by a space( )</p></label>
											<div class="form-group has-success has-feedback">
												<input type="text" class="form-control" id="infos" name="eotherName">
											</div>
										</div>	

										<div class="form-group">
											<label for="comment">Eatery Description</label>
											<textarea class="form-control" rows="5" id="comment" name="eDescription"></textarea>
										</div>

										<div class="form-group">
											<label for="comment">Directions</label>
											<textarea class="form-control" rows="5" id="comment" name="eDirections"></textarea>
										</div>

									</div>

									<div class="col-md-3"></div>

								 	<div class="col-lg-3 col-md-4 col-sm-5">  		
										<div class="form-group well" style="margin-top: 20px;">
											<div id="eatwaiting"></div>
											<label class="file-upload-container" for="file-upload">
												Select Eatery image to upload
												<input id="file-uploadf" type="file" accept="image/*">
											
												
											</label>
										</div>
										<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
										<script src="js/food.js"></script>

										<?php include 'coordinatecode.php' ?>				
								 	</div>
								</div>

								<div class='row'>
									<div class='col-md-8'></div>
									<div class='col-md-2'>
										<input type="button" class="btn btn-default btn-lg" id="newsubmit" onclick="myFunctionf(); return false;" value="Submit" />
									</div>
								</div>
							
					</div>
				</div>
				
				<div id="commonplace" class="tab-pane fade">
					<div class="container">
						  		<div class="row">
									
									<div class="col-md-3">

										<div class="form-group-lg" id="lgsbar">
											<label for="inputdefault">Common Place Name</label>
											<div class="form-group has-success has-feedback">
												<input type="text" class="form-control" id="infos" name="commonpName">
											</div>
										</div>	

										<div class="form-group-lg" id="lgsbar">
											<label for="inputdefault">Other Name(s) <p style="font-size: 10px">Separate other names by a space( )</p></label>
											<div class="form-group has-success has-feedback">
												<input type="text" class="form-control" id="infos" name="cpotherName">
											</div>
										</div>	

										<div class="form-group">
											<label for="comment">Common Place Description</label>
											<textarea class="form-control" rows="5" id="comment" name="cpDescription"></textarea>
										</div>

										<div class="form-group">
											<label for="comment">Directions</label>
											<textarea class="form-control" rows="5" id="comment" name="cpDirections"></textarea>
										</div>

									</div>

									<div class="col-md-3"></div>

								 	<div class="col-lg-4 col-xl-3 col-md-4 col-sm-6">  		
										<div class="form-group well" style="margin-top: 20px;">
											<div id="cpwaiting"></div>
											<label class="file-upload-container" for="file-upload">
												Select Common Place image to upload
												<input id="file-uploadcp" type="file" accept="image/*">
												
											</label>
										</div>
										<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
										<script src="js/commonplace.js"></script>

										<?php include 'coordinatecode.php' ?>				
								 	</div>
								</div>

								<div class='row'>
									<div class='col-md-8'></div>
									<div class='col-md-2'>
										<input type="button" class="btn btn-default btn-lg" id="newsubmit" onclick="myFunctioncp(); return false;" value="Submit" />
									</div>
								</div>
							
					</div>
				</div>
				
				<div id="parkinglot" class="tab-pane fade">
					<div class="container">
						  		<div class="row">
									
									<div class="col-md-3">

										<div class="form-group-lg" id="lgsbar">
											<label for="inputdefault">Parking Lot Name</label>
											<div class="form-group has-success has-feedback">
												<input type="text" class="form-control" id="infos" name="parkingName">
											</div>
										</div>	

										<div class="form-group-lg" id="lgsbar">
											<label for="inputdefault">Other Name(s) <p style="font-size: 10px">Separate other names by a space( )</p></label>
											<div class="form-group has-success has-feedback">
												<input type="text" class="form-control" id="infos" name="plotherName">
											</div>
										</div>	

										<div class="form-group">
											<label for="comment">Parking Lot Description</label>
											<textarea class="form-control" rows="5" id="comment" name="pDescription"></textarea>
										</div>

										<div class="form-group">
											<label for="comment">Directions</label>
											<textarea class="form-control" rows="5" id="comment" name="pDirections"></textarea>
										</div>

									</div>

									<div class="col-md-3"></div>

								 	<div class="col-lg-4 col-md-4 col-sm-5">  		
										<div class="form-group well" style="margin-top: 20px;">
											<div id="plwaiting"></div>
											<label class="file-upload-container" for="file-upload">
												Select Parking Lot image to upload
												<input id="file-uploadpl" type="file" accept="image/*">
						
												
											</label>
										</div>
										<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
										<script src="js/parkinglot.js"></script>

										<?php include 'coordinatecode.php' ?>				
								 	</div>
								</div>

								<div class='row'>
									<div class='col-md-8'></div>
									<div class='col-md-2'>
										<input type="button" class="btn btn-default btn-lg" id="newsubmit" onclick="myFunctionpl(); return false;" value="Submit" />
									</div>
								</div>
							
					</div>
				</div>
				
				<div id="comfortroom" class="tab-pane fade">
					<div class="container">
						  		<div class="row">
									
									<div class="col-md-3">

										<div class="form-group-lg" id="lgsbar">
											<label for="inputdefault">Comfort Room Name</label>
											<div class="form-group has-success has-feedback">
												<input type="text" class="form-control" id="infos" name="crName">
											</div>
										</div>	

										<div class="form-group-lg" id="lgsbar">
											<label for="inputdefault">Other Name(s) <p style="font-size: 10px">Separate other names by a space( )</p></label>
											<div class="form-group has-success has-feedback">
												<input type="text" class="form-control" id="infos" name="crotherName">
											</div>
										</div>	

										<div class="form-group">
											<label for="comment">Comfort Room Description</label>
											<textarea class="form-control" rows="5" id="comment" name="crDescription"></textarea>
										</div>

										<div class="form-group">
											<label for="comment">Directions</label>
											<textarea class="form-control" rows="5" id="comment" name="crDirections"></textarea>
										</div>

									</div>

									<div class="col-md-3"></div>

								 	<div class="col-lg-4 col-md-4 col-sm-6">  		
										<div class="form-group well" style="margin-top: 20px;">
											<div id="crwaiting"></div>
											<label class="file-upload-container" for="file-upload">
												Select Comfort Room image to upload
												<input id="file-uploadcr" type="file" accept="image/*">
		
												
											</label>
										</div>
										<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
										<script src="js/cr.js"></script>

										<?php include 'coordinatecode.php' ?>				
								 	</div>
								</div>

								<div class='row'>
									<div class='col-md-8'></div>
									<div class='col-md-2'>
										<input type="button" class="btn btn-default btn-lg" id="newsubmit" onclick="myFunctioncr(); return false;" value="Submit" />
									</div>
								</div>
							
					</div>
				</div>
			
			</div>
				
		</div>
</div>