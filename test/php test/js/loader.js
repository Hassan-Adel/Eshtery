/*
$(document).ready(function(){
	$("#section").load("home.php");
});
*/
$('a').click(function(){
	var page = $(this).attr('href');
	$("#section").load(page);
	return false;
});


