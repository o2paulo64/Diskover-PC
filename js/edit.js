//var CLOUDINARY_URL = 'https://api.cloudinary.com/v1_1/diskover/upload';
var CLOUDINARY_URL = ' https://api.cloudinary.com/v1_1/dmmqe1m3m/image/upload';
//var CLOUDINARY_UPLOAD_PRESET = 'b8ay1z9e';
var CLOUDINARY_UPLOAD_PRESET = 'pv0uvamk';

//var imgPreview = document.getElementById('img-preview');
var fileUpload = document.getElementById('file-uploadEDIT');
var fileSubmit = document.getElementById('new-submit');

var result;
var trigg = 0;

var namek = document.getElementsByName('buildingName');
var other =  document.getElementsByName('otherName');
var desc = document.getElementsByName('buildingDescription');
var direction = document.getElementsByName('Directions');
var long = document.getElementsByName('longitude');
var lat = document.getElementsByName('latitude');
var fromwhere=document.getElementById('from').value;
var id=document.getElementById('infoD').value;
var _url=document.getElementById('_url').value;

// //alert(fromwhere);
// //alert(id);

fileUpload.addEventListener('change', function(event){
	var file = event.target.files[0];
	var formData = new FormData();
	formData.append('file', file);
	formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET);
	document.getElementById("e").style.display = "block";
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
		document.getElementById("e").style.display = "none";

	}).catch(function(err){
		console.error(err);
	});
});

var myFunctionEDIT = function(){
	
	if(namek[0].value !== "" && other[0].value !== "" && desc[0].value !=="" && direction[0].value !== "" && long[0].value !=="" && lat[0].value!==""){
		if(trigg===0){
			result=_url;
		}
		if(confirm("Are you sure?")){
			if(fromwhere=="1"){
				//alert("checking");

				window.location.href = "editBuilding.php?w1=" + result + "&w2=" + namek[0].value + "&w3=" + other[0].value + "&w4=" + desc[0].value + "&w5=" + direction[0].value+ "&w6="+lat[0].value+"&w7="+long[0].value+"&w8="+id;
			}
			else if(fromwhere=="2"){
				//alert("foodcheck");

				window.location.href = "editFood.php?w1=" + result + "&w2=" + namek[0].value + "&w3=" + other[0].value + "&w4=" + desc[0].value + "&w5=" + direction[0].value+ "&w6="+lat[0].value+"&w7="+long[0].value+"&w8="+id;
			}else if(fromwhere=="3"){
				//alert("checking");

				window.location.href = "editCommon.php?w1=" + result + "&w2=" + namek[0].value + "&w3=" + other[0].value + "&w4=" + desc[0].value + "&w5=" + direction[0].value+ "&w6="+lat[0].value+"&w7="+long[0].value+"&w8="+id;
			}else if(fromwhere=="4"){
				//alert("checking");

				window.location.href = "editComfort.php?w1=" + result + "&w2=" + namek[0].value + "&w3=" + other[0].value + "&w4=" + desc[0].value + "&w5=" + direction[0].value+ "&w6="+lat[0].value+"&w7="+long[0].value+"&w8="+id;
			}else if(fromwhere=="5"){
				//alert("checking");

				window.location.href = "editParking.php?w1=" + result + "&w2=" + namek[0].value + "&w3=" + other[0].value + "&w4=" + desc[0].value + "&w5=" + direction[0].value+ "&w6="+lat[0].value+"&w7="+long[0].value+"&w8="+id;
			}
		}
	}

	else{
		alert("Complete the form before hitting Submit. Check if you have uploaded an image or if it has been uploaded completely.");
		return false;
	}
}