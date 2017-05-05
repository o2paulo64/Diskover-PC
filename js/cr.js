//var CLOUDINARY_URL = 'https://api.cloudinary.com/v1_1/diskover/upload';
var CLOUDINARY_URL = ' https://api.cloudinary.com/v1_1/dmmqe1m3m/image/upload';
//var CLOUDINARY_UPLOAD_PRESET = 'b8ay1z9e';
var CLOUDINARY_UPLOAD_PRESET = 'pv0uvamk';

//var imgPreview = document.getElementById('img-preview');
var fileUpload = document.getElementById('file-uploadcr');
var fileSubmit = document.getElementById('new-submit');

var result;
var trigg = 0;

var crName = document.getElementsByName('crName');
var crotherName = document.getElementsByName('crotherName');
var crDescription = document.getElementsByName('crDescription');
var crDirections = document.getElementsByName('crDirections');
var longitude = document.getElementsByName('longitude');
var latitude = document.getElementsByName('latitude');

fileUpload.addEventListener('change', function(event){
	var file = event.target.files[0];
	var formData = new FormData();
	formData.append('file', file);
	formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET);
    document.getElementById("crwaiting").style.display = "block";
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
		document.getElementById("crwaiting").style.display = "none";
		//window.location.href = "uploadBuilding.php?w1=" + result;
		//imgPreview.src = res.data.secure_url;
	}).catch(function(err){
		console.error(err);
	});

});

var myFunctioncr = function(){
	if(trigg===1 && crName[0].value!== "" && crotherName[0].value!== "" && crDescription[0].value!=="" && crDirections[0].value!== "" && longitude[4].value!=="" && latitude[4].value!==""){
		if(confirm("Are you sure?")){
		window.location.href = "uploadCr.php?w1=" + result + "&w2=" + crName[0].value+ "&w3=" + crotherName[0].value+ "&w4=" + crDescription[0].value+ "&w5=" + crDirections[0].value+ "&w6="+latitude[4].value+"&w7="+longitude[4].value;}}
		//break;}
		//return true;}
	else{
		alert("Complete the form before hitting Submit. Check if you have uploaded an image or if it has been uploaded completely.");
		//window.location.reload(false);
		return false;
	}
	//return false;
}