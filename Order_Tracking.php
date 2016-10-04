
<html>
<head>
<title>SignUp</title>
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


<center> <br><br><br> <a class="animated rubberBand" > <font size="17" face="Gabriola" color="#808080"><strong>Order Tracking</strong></font> </a> </b> </center>

 <center>

<form method ="post" name="form1" >

 <br>
<label>TranactionID:</label>
<input type="text" name="transId" class="textfield">
<br><br><br>
<button class="myButton" type="submit" name = "track" class="submitButton"> order track </button>
</form>
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
if(isset($_POST['track'])){
$id = $_POST['transId'];	
$all="SELECT * FROM `order processing` where TransactionID = '$id'";
$result = mysqli_query($conn,$all);
$row = mysqli_fetch_array($result);
if(mysqli_num_rows($result) == 1){
echo "customer Id : ".$row["CustomerID"]. "<br>"
	."product id : ". $row["ProductID"]. "<br>" 
    ."Quantity : ".$row["Quantity"]. "<br>";
if( $row["Shipped"] == 1 ){
	echo "comaopny: ".$row["ShippingCompany	"]."<br>"
	."Date : ". $row["Date / Time"]. "<br>"; 
}
}
else
echo "invalid id ";

}


?>

</font >

</center>

</body>

<div id="footer"><p class="centerr"><font size="5px" face="Gabriola" ><b><a href="#top" style="text-decoration:none; color:#000000";>Copyright &copy; Eshtery.com 2014</a></b></font></p></div>
	

</html>