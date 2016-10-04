
<html>
<head>
<title>Shopping Cart</title>
<meta charset="UTF=8">
<link rel="stylesheet" href="css\global.css">
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\cssmenu.css">

<div id="wrap">

    <div id="header"></div>

    <div class="undef">
        <div class="top_h"></div>
		

</head>


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


<center> <br><br><br> <a class="animated rubberBand" > <font size="17" face="Gabriola" color="#808080"><strong>Shopping Cart</strong></font> </a> </b> </center>

 <center>


 </center>
 
<br><br><br>

<!--///////////////////////////////PHP///////////////////////////-->
<center>
<font size="6px" face="Gabriola" >


<?php
session_start();
$id = $_SESSION['id'];
$pid = $_SESSION['pid'];
$pq =  $_SESSION['pq'];
$t = date('Y-m-d s:i:H');
 $servername = "localhost";
	$username = "root";
	$password = "";
	$DP = "db";
	$conn = new mysqli($servername, $username, $password,$DP);
if (mysqli_connect_error()) {
		die("Database connection failed: " . mysqli_connect_error());
	}
		
if(isset($_POST['buy'])){
	$in = "INSERT INTO `order processing`(`CustomerID`, `ProductID`,`Quantity`, `Date / Time`, `Processed`, `Shipped`) VALUES ('$id','$pid','$pq','$t','0','0')";
	
	$flag = mysqli_query($conn , $in);
	
 $all = "SELECT * FROM `order processing` WHERE CustomerID = '$id' ";
    $result = mysqli_query($conn,$all);
	
	if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
	echo "customer Id : ".$row["CustomerID"]. "<br>"
	."product id : ". $row["ProductID"]. "<br>" 
    ."Quantity : ".$row["Quantity"]. "<br>";
	echo"_____________________________________________________________"."<br>";
	}
	
	}}
?>

</center>
</font >


</body>

<div id="footer"><p class="centerr"><font size="5px" face="Gabriola" ><b><a href="#top" style="text-decoration:none; color:#000000";>Copyright &copy; Eshtery.com 2014</a></b></font></p></div>
	

</html>