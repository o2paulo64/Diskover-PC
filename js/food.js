//var CLOUDINARY_URL = 'https://api.cloudinary.com/v1_1/diskover/upload';
var CLOUDINARY_URL = ' https://api.cloudinary.com/v1_1/dmmqe1m3m/image/upload';
//var CLOUDINARY_UPLOAD_PRESET = 'b8ay1z9e';
var CLOUDINARY_UPLOAD_PRESET = 'pv0uvamk';

//var imgPreview = document.getElementById('img-preview');
var fileUpload = document.getElementById('file-uploadf');
var fileSubmit = document.getElementById('new-submit');

var result;
var trigg = 0;

var eateryName = document.getElementsByName('eateryName');
var eotherName = document.getElementsByName('eotherName');
var eDescription = document.getElementsByName('eDescription');
var eDirections = document.getElementsByName('eDirections');
var longitude = document.getElementsByName('longitude');
var latitude = document.getElementsByName('latitude');

fileUpload.addEventListener('change', function(event){
	var file = event.target.files[0];
	var formData = new FormData();
	formData.append('file', file);
	formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET);
	document.getElementById("eatwaiting").style.display = "block";
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
		document.getElementById("eatwaiting").style.display = "none";
		//window.location.href = "uploadBuilding.php?w1=" + result;
		//imgPreview.src = res.data.secure_url;
	}).catch(function(err){
		console.error(err);
	});

});

var myFunctionf = function(){
	/*console.log(eateryName[0].value);
	console.log(eotherName[0].value);
	console.log(eateryName[0].value);
	console.log(eDirections[0].value);
	console.log(eDescription[0].value);
	console.log(longitude[1].value);
	console.log(latitude[1].value);
	console.log(trigg);*/
	if(trigg===1 && eateryName[0].value !== "" && eotherName[0].value !== "" && eDescription[0].value !=="" && eDirections[0].value !== "" && longitude[1].value !=="" && latitude[1].value!==""){
		if(confirm("Are you sure?")){
		window.location.href = "uploadEatery.php?w1=" + result + "&w2=" + eateryName[0].value + "&w3=" + eotherName[0].value + "&w4=" + eDescription[0].value + "&w5=" + eDirections[0].value+ "&w6="+latitude[1].value+"&w7="+longitude[1].value;}}
		//break;}
		//return true;}
	else{
		alert("Complete the form before hitting Submit. Check if you have uploaded an image or if it has been uploaded completely.");
		//window.location.reload(false);
		return false;
	}
	//return false;
}