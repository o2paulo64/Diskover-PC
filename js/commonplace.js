//var CLOUDINARY_URL = 'https://api.cloudinary.com/v1_1/diskover/upload';
var CLOUDINARY_URL = ' https://api.cloudinary.com/v1_1/dmmqe1m3m/image/upload';
//var CLOUDINARY_UPLOAD_PRESET = 'b8ay1z9e';
var CLOUDINARY_UPLOAD_PRESET = 'pv0uvamk';

//var imgPreview = document.getElementById('img-preview');
var fileUpload = document.getElementById('file-uploadcp');
var fileSubmit = document.getElementById('new-submit');

var result;
var trigg = 0;

var commonpName = document.getElementsByName('commonpName');
var cpotherName = document.getElementsByName('cpotherName');
var cpDescription = document.getElementsByName('cpDescription');
var cpDirections = document.getElementsByName('cpDirections');
var longitude = document.getElementsByName('longitude');
var latitude = document.getElementsByName('latitude');

fileUpload.addEventListener('change', function(event){
	var file = event.target.files[0];
	var formData = new FormData();
	formData.append('file', file);
	formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET);
	document.getElementById("cpwaiting").style.display = "block";
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
		document.getElementById("cpwaiting").style.display = "none";
		//window.location.href = "uploadBuilding.php?w1=" + result;
		//imgPreview.src = res.data.secure_url;
	}).catch(function(err){
		console.error(err);
	});

});

var myFunctioncp = function(){
	if(trigg===1 && commonpName[0].value!== "" && cpotherName[0].value!== "" && cpDescription[0].value!=="" && cpDirections[0].value!== "" && longitude[2].value!=="" && latitude[2].value!==""){
		if(confirm("Are you sure?")){
		window.location.href = "uploadCommonP.php?w1=" + result + "&w2=" + commonpName[0].value+ "&w3=" + cpotherName[0].value+ "&w4=" + cpDescription[0].value+ "&w5=" + cpDirections[0].value+ "&w6="+latitude[2].value+"&w7="+longitude[2].value;}}
		//break;}
		//return true;}
	else{
		alert("Complete the form before hitting Submit. Check if you have uploaded an image or if it has been uploaded completely.");
		//window.location.reload(false);
		return false;
	}
	//return false;
}