//var CLOUDINARY_URL = 'https://api.cloudinary.com/v1_1/diskover/upload';
var CLOUDINARY_URL = ' https://api.cloudinary.com/v1_1/dmmqe1m3m/image/upload';
//var CLOUDINARY_UPLOAD_PRESET = 'b8ay1z9e';
var CLOUDINARY_UPLOAD_PRESET = 'pv0uvamk';

//var imgPreview = document.getElementById('img-preview');
var fileUpload = document.getElementById('file-uploadpl');
var fileSubmit = document.getElementById('new-submit');

var result;
var trigg = 0;

var parkingName = document.getElementsByName('parkingName');
var plotherName = document.getElementsByName('plotherName');
var pDescription = document.getElementsByName('pDescription');
var pDirections = document.getElementsByName('pDirections');
var longitude = document.getElementsByName('longitude');
var latitude = document.getElementsByName('latitude');

fileUpload.addEventListener('change', function(event){
	var file = event.target.files[0];
	var formData = new FormData();
	formData.append('file', file);
	formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET);
	document.getElementById("plwaiting").style.display = "block";
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
		document.getElementById("plwaiting").style.display = "none";
		//window.location.href = "uploadBuilding.php?w1=" + result;
		//imgPreview.src = res.data.secure_url;
	}).catch(function(err){
		console.error(err);
	});

});

var myFunctionpl = function(){
	if(trigg===1 && parkingName[0].value!== "" && plotherName[0].value!== "" && pDescription[0].value!=="" && pDirections[0].value!== "" && longitude[3].value!=="" && latitude[3].value!==""){
		if(confirm("Are you sure?")){
		window.location.href = "uploadpark.php?w1=" + result + "&w2=" + parkingName[0].value+ "&w3=" + plotherName[0].value+ "&w4=" + pDescription[0].value+ "&w5=" + pDirections[0].value+ "&w6="+latitude[3].value+"&w7="+longitude[3].value;}}
		//break;}
		//return true;}
	else{
		alert("Complete the form before hitting Submit. Check if you have uploaded an image or if it has been uploaded completely.");
		//window.location.reload(false);
		return false;
	}
	//return false;
}