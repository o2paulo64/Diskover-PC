<div id="floating-panel">
			    <center> <h6><b>Mode of Travel:</b>
			    <select id="mode">
					<option value="DRIVING">Driving</option>
					<option value="WALKING">Walking</option>
			    </select> </center></h6>
		    </div>
		    <div class='img-responsive center-block' id="map" style="width: 480px; height:360px;"></div>

		    <script>
		      	function initMap() {
			      	var latitude=parseFloat(<?php echo $lat; ?>);
			      	var longitude=parseFloat(<?php echo $long; ?>);
			      	
			        var directionsDisplay = new google.maps.DirectionsRenderer;
			        var directionsService = new google.maps.DirectionsService;
			        var map = new google.maps.Map(document.getElementById('map'), {
			          zoom: 10,
			          center: {lat: 14.65639, lng: 121.06876}
			        });
			        directionsDisplay.setMap(map);

			        calculateAndDisplayRoute(directionsService, directionsDisplay);
			        document.getElementById('mode').addEventListener('change', function() {
			          calculateAndDisplayRoute(directionsService, directionsDisplay);
		        	});
		      	

			    }
			  

		      	function calculateAndDisplayRoute(directionsService, directionsDisplay) {
		      	// var lat=14.65639;
		      	// var longi=121.06876;
			      	if (navigator.geolocation) {
				          navigator.geolocation.watchPosition(function(position) {
				            
				            var cur_lat=position.coords.latitude;
				            var cur_long=position.coords.longitude;

				            var latitude=<?php echo $lat; ?>;
					      	var longitude=<?php echo $long; ?>;
					      	var lat=parseFloat(latitude);
					      	var longi=parseFloat(longitude);

					      	var selectedMode = document.getElementById('mode').value;
					        directionsService.route({
					          origin: {lat: cur_lat, lng: cur_long},  // Haight.
					          destination: {lat: lat, lng: longi},  // Ocean Beach.
					          // Note that Javascript allows us to access the constant
					          // using square brackets and a string value as its
					          // "property."
			          		travelMode: google.maps.TravelMode[selectedMode]

			        		}, function(response, status) {
				          		if (status == 'OK') {
				           			directionsDisplay.setDirections(response);
				          		} else {
				            		window.alert('Directions request failed due to ' + status);
				          		}
			        		}); 
				    	},function() {
	            			var latitude=<?php echo $lat; ?>;
					      	var longitude=<?php echo $long; ?>;
					      	var lat=parseFloat(latitude);
					      	var longi=parseFloat(longitude);

					        var selectedMode = document.getElementById('mode').value;
					        directionsService.route({
					          origin: {lat: 14.654820, lng: 121.063414},  // Haight.
					          destination: {lat: lat, lng: longi},  // Ocean Beach.
					          // Note that Javascript allows us to access the constant
					          // using square brackets and a string value as its
					          // "property."
					          travelMode: google.maps.TravelMode[selectedMode]
					        }, function(response, status) {
					          if (status == 'OK') {
					            directionsDisplay.setDirections(response);
					          } else {
					            window.alert('Directions request failed due to ' + status);
					          }
					        });
	         			});
				    }else{
				    	var latitude=<?php echo $lat; ?>;
				      	var longitude=<?php echo $long; ?>;
				      	var lat=parseFloat(latitude);
				      	var longi=parseFloat(longitude);

				        var selectedMode = document.getElementById('mode').value;
				        directionsService.route({
				          origin: {lat: 14.654820, lng: 121.063414},  // Haight.
				          destination: {lat: lat, lng: longi},  // Ocean Beach.
				          // Note that Javascript allows us to access the constant
				          // using square brackets and a string value as its
				          // "property."
				          travelMode: google.maps.TravelMode[selectedMode]
				        }, function(response, status) {
				          if (status == 'OK') {
				            directionsDisplay.setDirections(response);
				          } else {
				            window.alert('Directions request failed due to ' + status);
				          }
				        });
				     }

			    }

		      	
		    </script>
		    <?php
		    echo "<script async defer src='https://maps.googleapis.com/maps/api/js?key=".$api."&callback=initMap'></script>"; ?>