var nosearch = function(){
	var searched_text = document.getElementsByName('search');
	var submitsearch = document.getElementsByName('submit-search');
	if(searched_text[0].value!=""){
		window.location.href = "searchresult.php?submit-search="+submitsearch[0].value+"&search="+searched_text[0].value;
	}	
}

// var nologin = function(){
// 	var searched_text = document.getElementsByName('search');
// 	var submitsearch = document.getElementsByName('submit-search');
// 	var searched_text = document.getElementsByName('search');
// 	var searched_text = document.getElementsByName('search');
// 	if(searched_text[0].value!=""){
// 		window.location.href = "searchresult.php?submit-search="+submitsearch[0].value+"&search="+searched_text[0].value;
// 	}	
// }