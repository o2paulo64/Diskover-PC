//var CLOUDINARY_URL = 'https://api.cloudinary.com/v1_1/diskover/upload';
var CLOUDINARY_URL = ' https://api.cloudinary.com/v1_1/dmmqe1m3m/image/upload';
//var CLOUDINARY_UPLOAD_PRESET = 'b8ay1z9e';
var CLOUDINARY_UPLOAD_PRESET = 'pv0uvamk';

//var imgPreview = document.getElementById('img-preview');
var fileUpload1 = document.getElementById('file-upload1');
var fileUpload2 = document.getElementById('file-upload2');
var fileUpload3 = document.getElementById('file-upload3');
var fileSubmit = document.getElementById('new-submit');

var result1;
var result2;
var result3;
var trigg = 0;

var roomName = document.getElementsByName('roomName');
var roomDescription = document.getElementsByName('roomDescription');
var roomDirections = document.getElementsByName('roomDirections');
var buildID = document.getElementsByName('buildID');


fileUpload1.addEventListener('change', function(event){
	var file = event.target.files[0];
	var formData = new FormData();
	formData.append('file', file);
	formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET);
	document.getElementById("x").style.display = "block";

	axios({
		url: CLOUDINARY_URL,
		method: 'POST',
		headers: {
			'Content-Type': 'application/x-www-form-urlencoded'
		},
		data: formData
	}).then(function(res){
		console.log(res);
		result1 = res.data.secure_url;
		trigg ++;
		document.getElementById("x").style.display = "none";
		//window.location.href = "uploadBuilding.php?w1=" + result;
		//imgPreview.src = res.data.secure_url;
	}).catch(function(err){
		console.error(err);
	});

});

fileUpload2.addEventListener('change', function(event){
	var file = event.target.files[0];
	var formData = new FormData();
	formData.append('file', file);
	formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET);
	document.getElementById("x").style.display = "block";

	axios({
		url: CLOUDINARY_URL,
		method: 'POST',
		headers: {
			'Content-Type': 'application/x-www-form-urlencoded'
		},
		data: formData
	}).then(function(res){
		console.log(res);
		result2 = res.data.secure_url;
		trigg ++;
		document.getElementById("x").style.display = "none";
		//window.location.href = "uploadBuilding.php?w1=" + result;
		//imgPreview.src = res.data.secure_url;
	}).catch(function(err){
		console.error(err);
	});

});

fileUpload3.addEventListener('change', function(event){
	var file = event.target.files[0];
	var formData = new FormData();
	formData.append('file', file);
	formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET);
	document.getElementById("x").style.display = "block";
	axios({
		url: CLOUDINARY_URL,
		method: 'POST',
		headers: {
			'Content-Type': 'application/x-www-form-urlencoded'
		},
		data: formData
	}).then(function(res){
		console.log(res);
		result3 = res.data.secure_url;
		trigg ++;
		document.getElementById("x").style.display = "none";
		//window.location.href = "uploadBuilding.php?w1=" + result;
		//imgPreview.src = res.data.secure_url;
	}).catch(function(err){
		console.error(err);
	});

});

var myFunctionr = function(){
	if(trigg===3 && roomName[0].value !== "" && roomDescription[0].value !=="" && roomDirections[0].value !== "" && buildID[0].value!==""){
	//console.log(roomName[0].value);
	//console.log(buildID[0].value);
	if(confirm("Are you sure?")){
	window.location.href = "uploadRoom.php?w1=" + result1 + "&w2=" + roomName[0].value + "&w3=" + result2 + "&w4=" + roomDescription[0].value + "&w5=" + roomDirections[0].value + "&w6=" + result3 + "&w7=" + buildID[0].value;}}
	else{
		alert("Complete the form before hitting Submit. Check if you have uploaded an image or if it has been uploaded completely.");
	}
}