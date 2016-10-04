<!DOCTYPE html>
<html>
<head>
<title> Customer Accounts </title>
<meta charset="UTF=8">
<link rel="stylesheet" href="css\global.css">
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\cssmenu.css">
</head>

<script>
$(function(){
    $("#page_content").css("height", $(window).height() - $("#header").height() - $("#footer").height() + "px");
});
</script>

<script>
function validateLogin(){
var x = document.forms["form1"]["email"].value;
    if (x == null || x == "") {
        alert("unvalid user name");
        return false;
    }
	var y = document.forms["form1"]["Password"].value;
    if (y == null || y == "") {
        alert("unvalid password");
        return false;
    }
	}
</script>

<div id="wrap">

    <div id="header"></div>

    <div class="undef">
        <div class="top_h"></div>
		


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
	<li class="pureCssMenui"><a class="pureCssMenui" href="Logout.php">Logout</a></li>
	
</ul>

</center>

<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


<center><br><br><br> <a  class="animated rubberBand" > <font size="17" face="Gabriola" color="#808080"><strong>My Accounts</strong></font> </a> </b> </center>

<center>



</center>
<br><br>
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
	$all="SELECT * FROM `customer` WHERE CustomerID ='$id' ";
	$result = mysqli_query($conn,$all);
	$row = mysqli_fetch_array($result);
  
	
    if (mysqli_num_rows($result) > 0) {
	echo "Customer ID : ".$row["CustomerID"]."<br>"
	."First name: ". $row["FirstName"]. "<br>"
	."Last name: ". $row["LastName"]. "<br>" 
	."email: ". $row["Email"]. "<br>"
	."Billing Address: ".$row["BillingAddress"]. "<br>"
	."Billing City`: ".$row["BillingCity"]. "<br>"
	."Billing State: ".$row["BillingState"]. "<br>"
	."Billing Zip: ".$row["BillingZip"].  "<br>"
	."shipping Address: ".$row["ShippingAddress"]. "<br>"
	."shipping City`: ".$row["ShippingCity"]. "<br>"
	."shipping State: ".$row["ShippingState"]. "<br>"
	."shipping Zip: ".$row["ShippingZip"].  "<br>";
	}
	else
	    echo "11111";
?>
</center>
</font>
</body>

<div id="footer"><p class="centerr"><font size="5px" face="Gabriola" ><b><a href="#top" style="text-decoration:none; color:#000000";>Copyright &copy; Eshtery.com 2014</a></b></font></p></div>
	
<!--/////////////////////////////////////////////////////////////////////////////(PHP)/////////////////////////////////////////////////////////////////-->

</html>