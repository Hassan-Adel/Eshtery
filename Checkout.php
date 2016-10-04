
<html>
<head>
<title>Checkout</title>
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


<center> <br><br><br> <a class="animated rubberBand" > <font size="17" face="Gabriola" color="#808080"><strong>Checkout</strong></font> </a> </b> </center>

 <center>


 </center>
 
<br><br><br>

<!--///////////////////////////////PHP///////////////////////////-->

<center>
<font size="6px" face="Gabriola" >


<?php
   $servername = "localhost";
	$username = "root";
	$password = "";
	$DP = "db";
	$conn = new mysqli($servername, $username, $password,$DP);
session_start();
$id = $_SESSION['id'];
 $all = "SELECT * FROM `order processing` WHERE CustomerID = '$id' ";
 $info = "SELECT * FROM `customer` WHERE CustomerID = '$id' ";
    $result = mysqli_query($conn,$all);
	$result2 = mysqli_query($conn,$info);
	if (mysqli_num_rows($result2) > 0) {
    while($row = mysqli_fetch_array($result2)) {
 
	echo "BillingAddress ".$row["BillingAddress"].str_repeat('&nbsp;&nbsp;', 5)
	."BillingCity: ". $row["BillingCity"]. "<br>"
	."BillingState: ". $row["BillingState"]. str_repeat('&nbsp;&nbsp;', 5) 
    ."BillingZip: ".$row["BillingZip"]. "<br>"
	."ShippingAddress ".$row["ShippingAddress"].str_repeat('&nbsp;&nbsp;', 5)
	."ShippingCity: ". $row["ShippingCity"]. "<br>"
	."ShippingState: ". $row["ShippingState"]. str_repeat('&nbsp;&nbsp;', 5) 
    ."ShippingZip: ".$row["ShippingZip"]."<br>";
}
	}
	if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
	echo "customer Id : ".$row["CustomerID"]. "<br>"
	."product id : ". $row["ProductID"]. "<br>" 
    ."Quantity : ".$row["Quantity"]. "<br>";
	 $_SESSION['trans']=$row["TransactionID"];
	?>
    <html>
    <form type = "post" action = "Thanks.php">
    <button class="myButton" type="submit" name = "purchase">purchase</button>
	
    </form>
    
   <?php
  echo	"________________________________________________________________________________________________________________________________________". "<br>";	
	}
	
}
?>

</center>
</font >


</body>

<div id="footer"><p class="centerr"><font size="5px" face="Gabriola" ><b><a href="#top" style="text-decoration:none; color:#000000";>Copyright &copy; Eshtery.com 2014</a></b></font></p></div>
	

</html>