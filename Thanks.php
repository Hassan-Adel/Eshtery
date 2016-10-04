<!DOCTYPE html>
<html>
<head>
<title> Thank you </title>
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


<body>

<!--///////////////////////////////////////////////////////////////////////(Top_Menu)///////////////////////////////////////////////////////////////////-->
<center>
<ul class="pureCssMenu pureCssMenum">
	<li class="pureCssMenui"><a class="pureCssMenui" href="Customer_Information.php">My Account</a></li>
	<li class="pureCssMenui"><a class="pureCssMenui" href="User_Edit.php">Edit Account</a></li>
	<li class="pureCssMenui"><a class="pureCssMenui" href="Products_List.php">Products List</a></li>
	<li class="pureCssMenui"><a class="pureCssMenui" href="Shopping_Cart.php">Shopping Cart</a></li>
	<li class="pureCssMenui"><a class="pureCssMenui" href="Order_Tracking.php">Order Tracking</a></li>
	<li class="pureCssMenui"><a class="pureCssMenui" href="Checkout.php">Checkout</a></li>
	<li class="pureCssMenui"><a class="pureCssMenui" href="contact_us.html">Contact Us</a></li>
	
</ul>

</center>

<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


<center> <br><br><br> <a class="animated rubberBand" > <font size="17" face="Gabriola" color="#808080"><strong>Thanks!!</strong></font> </a> </b> </center>


<style>


#round {
  border: 15px solid transparent;
    width: 250px;
    padding: 10px 20px;
    -webkit-border-image: url(border.png) 30 30 round; /* Safari 3.1-5 */
    -o-border-image: url(border.png) 30 30 round; /* Opera 11-12.1 */
    border-image: url(border.png) 30 30 round;
}
</style>



<br><br><br><br>
<center>

<div id="round">
<center>
<font size="5px" face="Gabriola" ><b>
Thanks for purchasing from Eshtery.com<br>
You Transaction ID : 



</b></font>
</center>
 </div><br>

</center>
<center>
<font size="6px" face="Gabriola" >
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$DP = "db";
	$conn = new mysqli($servername, $username, $password,$DP);
	if (mysqli_connect_error()) {
		die("Database connection failed: " . mysqli_connect_error());
	}
	session_start();
	$tr= $_SESSION['trans'];
	echo $tr;
	
	$id = $_SESSION['pid'];
	$pq =  $_SESSION['pq'];
	
	$in = "UPDATE `order processing` SET `Processed`= 1 WHERE `ProductID`='$id'";
	$flag = mysqli_query($conn,$in);
	if(!$flag)
		mysqli_error($conn);
	$select = "SELECT `Quantity` FROM `order processing` WHERE `ProductID`='$id'";
	$flag2 = mysqli_query($conn,$select);
	if(!$flag2)
		mysqli_error($conn);
	else{
		$var = mysqli_fetch_array($flag2);
		if($var["Quantity"]>= $pq ){
			$pq =  $var["Quantity"]-$pq;
			$update = "UPDATE `order processing` SET `Quantity`= '$pq' WHERE `ProductID`='$id'";
		}
		else
			echo "Error";
	}
?>


</font >
</center>
</body>

<div id="footer"><p class="centerr"><font size="5px" face="Gabriola" ><b><a href="#top" style="text-decoration:none; color:#000000";>Copyright &copy; Eshtery.com 2014</a></b></font></p></div>
	


</html>