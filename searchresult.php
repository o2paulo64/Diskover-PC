<?php
	include 'headhome.php';
	include 'db.php';

?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-6">
			<form action="searchresult.php" method="GET">
				<div class="input-group" id="searchresults">
					<input type="text" class="form-control input-sm" id="barresults" name="search" placeholder="Search">
						<div class="input-group-btn">
							
							<button class="btn btn-primary btn-sm" id="searchbuttonresults" name="submit-search" type="submit" onclick="nosearch(); return false;"><i class="glyphicon glyphicon-search"></i></button>
						
						</div>
				</div> 
			</form>
		</div>
	</div>

	<div class="row" style="margin-top: 20px ">
		<?php
				if(isset($_GET['submit-search'])){
					$searched_text=$_GET['search'];
					$search=pg_escape_string($db,$_GET['search']);
					

					$pgsql="SELECT * FROM Buildings WHERE LOWER(buildingName) LIKE LOWER('$search%')
													OR LOWER(buildingName) LIKE LOWER('% $search %')
													OR LOWER(otherName) LIKE LOWER('% $search %')";


					$pgsql2="SELECT * FROM Eatery WHERE LOWER(eateryName) LIKE LOWER('$search%')
												OR LOWER(eateryName) LIKE LOWER('% $search %')
												OR LOWER(otherName) LIKE LOWER('% $search %')";

					$pgsql3="SELECT * FROM CommonP WHERE LOWER(commonpName) LIKE LOWER('$search%')
												OR LOWER(commonpName) LIKE LOWER('% $search %')
												OR LOWER(otherName) LIKE LOWER('% $search %')";

					$pgsql4="SELECT * FROM ComfRoom WHERE LOWER(crName) LIKE LOWER('$search%')
												 OR LOWER(crName) LIKE LOWER('% $search %')
												 OR LOWER(otherName) LIKE LOWER('% $search %')";

					$pgsql5="SELECT * FROM ParkingLot WHERE LOWER(parkingName) LIKE LOWER('$search%')
												OR LOWER(parkingName) LIKE LOWER('% $search %')
												OR LOWER(otherName) LIKE LOWER('% $search %')";

					$pgsql1="SELECT * FROM Rooms WHERE LOWER(roomName) LIKE LOWER('%$search%')";

					$result=pg_query($db, $pgsql);
					$result_room=pg_query($db, $pgsql1);
					$result_eat=pg_query($db, $pgsql2);
					$result_park=pg_query($db, $pgsql5);
					$result_common=pg_query($db, $pgsql3);
					$result_cr=pg_query($db, $pgsql4);

					$query_result=pg_num_rows($result);
					$query_result_room=pg_num_rows($result_room);
					$query_result_eat=pg_num_rows($result_eat);
					$query_result_park=pg_num_rows($result_park);
					$query_result_common=pg_num_rows($result_common);
					$query_result_cr=pg_num_rows($result_cr);
					$total_result=$query_result+$query_result_room+
								  $query_result_eat+$query_result_park+
								  $query_result_common+$query_result_cr;



					

					if($total_result > 0 && $searched_text!=""){
						echo "
							<hgroup class='mb20'>
								<h1>Search Results</h1>
								<h2 class='lead'><strong class='text-danger'>".$total_result."</strong> results were found for the search for <strong class='text-danger'>".$searched_text."</strong></h2>								
							</hgroup>

							<section class='col-xs-12 col-sm-6 col-md-12'>
						";
		
						while($row=pg_fetch_row($result)){
							
							echo "
						
							<article class='search-result row'>
			
								<div class='col-xs-12 col-sm-12 col-md-6'>
									<h3><a href='showbuild.php?name=".$row[0]."' title=''>".$row[1]."</a></h3>
									<p>".$row[7]."</p>					
								</div>
								
							</article>
							";
						}
						while($row=pg_fetch_row($result_eat)){
							
							echo "
						
							<article class='search-result row'>
			
								<div class='col-xs-12 col-sm-12 col-md-6'>
									<h3><a href='showfood.php?name=".$row[0]."' title=''>".$row[1]."</a></h3>
									<p>".$row[2]."</p>					
								</div>
								
							</article>
							";
						}
						while($row=pg_fetch_row($result_park)){
							
							echo "
						
							<article class='search-result row'>
			
								<div class='col-xs-12 col-sm-12 col-md-6'>
									<h3><a href='showpark.php?name=".$row[0]."' title=''>".$row[1]."</a></h3>
									<p>".$row[2]."</p>					
								</div>
								
							</article>
							";
						}
						while($row=pg_fetch_row($result_common)){
							
							echo "
						
							<article class='search-result row'>
			
								<div class='col-xs-12 col-sm-12 col-md-6'>
									<h3><a href='showcommp.php?name=".$row[0]."' title=''>".$row[1]."</a></h3>
									<p>".$row[2]."</p>					
								</div>
								
							</article>
							";
						}
						while($row=pg_fetch_row($result_cr)){
							
							echo "
						
							<article class='search-result row'>
			
								<div class='col-xs-12 col-sm-12 col-md-6'>
									<h3><a href='showcr.php?name=".$row[0]."' title=''>".$row[1]."</a></h3>
									<p>".$row[2]."</p>					
								</div>
								
							</article>
							";
						}
					}
						while($row=pg_fetch_row($result_room)){
							
							echo "
						
							<article class='search-result row'>
			
								<div class='col-xs-12 col-sm-12 col-md-6'>
									<h3><a href='showroom.php?name=".$row[0]."' title=''>".$row[2]."</a></h3>
									<p>".$row[3]."</p>					
								</div>
								
							</article>
							";
						}

					
					if($total_result==0){
						echo "
							<hgroup class='mb20'>
								<h1>No Results were found</h1>
								<h2 class='lead'><strong class='text-danger'>0</strong> results were found for the search for <strong class='text-danger'>".$searched_text."</strong></h2>								
							</hgroup>
						";
					}
					echo "</section>";
				}	
			?>			
		</div>
	</div>	
</div>