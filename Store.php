<!DOCTYPE html>
<html>
<head>
<title> Store </title>
<meta charset="UTF=8">
<link rel="stylesheet" href="css\global.css">
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\cssmenu.css">
</head>


<div id="wrap">

    <div id="header"></div>

    <div class="undef">
        <div class="top_h"></div>
		

<script>
$(function(){
    $("#page_content").css("height", $(window).height() - $("#header").height() - $("#footer").height() + "px");
});
</script>


<script>
document.getElementById("two").style.left = document.getElementById("one").offsetLeft + "px";
var zoom = 0;
setInterval(function() {
  var newZoom = document.getElementById("two").offsetLeft / document.getElementById("one").offsetLeft;
  if (newZoom == zoom) return;
  zoom = newZoom;
  document.getElementById("log").innerHTML += zoom + "<br>";
}, 200);
</script>

<body>

<center>
<ul class="pureCssMenu pureCssMenum">
	<li class="pureCssMenui"><a class="pureCssMenui" href="Store.php">Store</a></li>
	<li class="pureCssMenui"><a class="pureCssMenui" href="Store_Add.php">Add Product</a></li>
	<li class="pureCssMenui"><a class="pureCssMenui" href="Store_Edit.php">Edit Product</a></li>
	<li class="pureCssMenui"><a class="pureCssMenui" href="customer_accounts page.php">Customer Accounts</a></li>
	<li class="pureCssMenui"><a class="pureCssMenui" href="Sipping.php">Shipping</a></li>
	
</ul>

</center>

<p id="page_content">fhsdjkfhjsdfhjdhsjfskdhssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssfkjsdhfjksdhfndcjjsdncksndcsdbhcbdsbhfbvhfhf</p>

</body>

</html>