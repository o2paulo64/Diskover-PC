//var CLOUDINARY_URL = 'https://api.cloudinary.com/v1_1/diskover/upload';
var CLOUDINARY_URL = ' https://api.cloudinary.com/v1_1/dmmqe1m3m/image/upload';
//var CLOUDINARY_UPLOAD_PRESET = 'b8ay1z9e';
var CLOUDINARY_UPLOAD_PRESET = 'pv0uvamk';

//var imgPreview = document.getElementById('img-preview');
var fileUploadb = document.getElementById('file-uploadb');
var fileSubmit = document.getElementById('new-submit');

var result;
var trigg = 0;

var buildingName = document.getElementsByName('buildingName');
var otherName = document.getElementsByName('otherName');
var buildingDescription = document.getElementsByName('buildingDescription');
var Directions = document.getElementsByName('Directions');
var longitude = document.getElementsByName('longitude');
var latitude = document.getElementsByName('latitude');

fileUploadb.addEventListener('change', function(event){
	var file = event.target.files[0];
	var formData = new FormData();
	formData.append('file', file);
	formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET);
	document.getElementById("y").style.display = "block";
	axios({
		url: CLOUDINARY_URL,
		method: 'POST',
		headers: {
			'Content-Type': 'application/x-www-form-urlencoded'
		},
		data: formData
	}).then(function(res){
		console.log(res);
		result = res.data.secure_url;
		trigg = 1;
		document.getElementById("y").style.display = "none";

		//window.location.href = "uploadBuilding.php?w1=" + result;
		//imgPreview.src = res.data.secure_url;
	}).catch(function(err){
		console.error(err);
	});

});

var myFunction = function(){
	if(trigg===1 && buildingName[0].value !== "" && otherName[0].value !== "" && buildingDescription[0].value !=="" && Directions[0].value !== "" && longitude[0].value !=="" && latitude[0].value!==""){
	if(confirm("Are you sure?")){
	window.location.href = "uploadBuilding.php?w1=" + result + "&w2=" + buildingName[0].value + "&w3=" + otherName[0].value + "&w4=" + buildingDescription[0].value + "&w5=" + Directions[0].value + "&w6="+latitude[0].value+"&w7="+longitude[0].value;}}
	else{
		alert("Complete the form before hitting Submit. Check if you have uploaded an image or if it has been uploaded completely.");
	}
}