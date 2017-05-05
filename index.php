<?php
	include 'headhome.php';
?>
	
<div class="container-fluid">

	<div class="row">
		<div class="col-sm-4"></div>
		
		<div class="col-sm-4" id="titlelogo">
			<a href=""> <img class="img-responsive center-block" src="images/logoff.png" alt="logo"/></a>
		</div>
		
	 	<div class="col-sm-4"></div>
	</div>
	
	<div class="row">
		<div class="col-sm-3"></div>
		
		<div class="col-sm-6">
			
			<div class="input-group" id="lgsbar">
				
				<form>
					<div class="input-group">
						<input type="text" class="form-control input-lg" id="searchbar" name="search" placeholder="Where are you headed?">
							<div class="input-group-btn">
								
								<button class="btn btn-primary btn-lg" id="searchbutton" name="submit-search" type="submit" onclick="nosearch(); return false;"><i class="glyphicon glyphicon-search"></i></button>
							
							</div>
					</div> 
				</form>
			</div> 
		</div>
	</div>
</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-2">
				<div class="imageWrapper" id=>
					
				    <a href="building.php"><img class="img-responsive center-block" src="images/UP_BUILDING.png" alt="logo"/></a>
				    <a href="building.php" class="cornerLink"><b>Building</b></a>

				</div>
				
			</div>

			<div class="col-sm-2">
				<div class="imageWrapper">
				    <a href="food.php"><img class="img-responsive center-block" src="images/UP_FOOD.png" alt="logo"/></a>
				    <a href="food.php" class="cornerLink"><b>Food</b></a>
				</div>
				
			</div>

			<div class="col-sm-2">
				<div class="imageWrapper">
				    <a href="commonplace.php"><img class="img-responsive center-block" src="images/UP_common.png" alt="logo"/></a>
				    <a href="commonplace.php" class="cornerLink"><b>Common Place</b></a>
				</div>
				
			</div>	
		</div>
		
		<div class="row" id="homerowpadding">

			<div class="col-sm-4"></div>

			<div class="col-sm-2">
				<div class="imageWrapper">
				    <a href="parkinglot.php"><img class="img-responsive center-block" src="images/UP_PARKINGLOT.png" alt="logo"/></a>
				    <a href="parking.php" class="cornerLink"><b>Parking Lot</b></a>
				</div>
				
			</div>

			<div class="col-sm-2">
				<div class="imageWrapper">
				    <a href="cr.php"><img class="img-responsive center-block" src="images/UP_CR.png" alt="logo"/></a>
				    <a href="cr.php" class="cornerLink"><b>Comfort Room</b></a>
				</div>
				
			</div>
		</div>  
	</div>


</body>
</html>