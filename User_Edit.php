<html>
<head>
<title>Edit Account</title>
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


<center> <br><br><br> <a class="animated rubberBand" > <font size="17" face="Gabriola" color="#808080"><strong>Edit Account</strong></font> </a> </b> </center>

 <center>

<form method ="post" name="form1" onsubmit="return validateSignUp()">


<br><br><br>

<label>First name:</label>

<input type="text" name="firstname"  class="textfield">

<br><br><br>

<label>Last name:</label>

<input type="text" name="lastname" class="textfield">

<br><br><br>

<label>E-mail:</label>

<input type="text" name="mail" class="textfield">

<br><br><br>

<label>Billing Address:</label>

<input type="text" name="billing_address" class="textfield" >

<br><br><br>

<label>Billing City:</label>
<input type="text" name="billing_city" class="textfield">
<br><br><br>

<label>Billing State:</label>
<input type="text" name="billing_state" class="textfield">
<br><br><br>

<label>Billing Zip:</label>
<input type="text" name="billing_zip" class="textfield">
<br><br><br>


<label>Shipping Address:</label>
<input type="text" name="shipping_address" class="textfield">
<br><br><br>

<label>Shipping City:</label>
<input type="text" name="shipping_city" class="textfield">
<br><br><br>

<label>Shipping State:</label>
<input type="text" name="newshipping_state" class="textfield">
<br><br><br>

<label>Shipping Zip:</label>
<input type="text" name="shipping_zip" class="textfield">
<br><br><br>


<label>Phone:</label>
<input type="text" name="phone" class="textfield">
<br><br><br>


<label>Password:</label>
<input type="password" name="password" class="textfield">


<br><br><br>
<button class="myButton" type="submit" name = "Edit" class="submitButton">Edit</button>
<br>
</form>

 </center>
 
<br><br><br>

<!--///////////////////////////////PHP///////////////////////////-->

<?php
    $servername = "localhost";
	$username = "root";
	$password = "";
	$DP = "db";
	$conn = new mysqli($servername, $username, $password,$DP);
	session_start();
	$id = $_SESSION['id'];
	if (mysqli_connect_error()) {
		die("Database connection failed: " . mysqli_connect_error());
	}
	
 if(isset($_POST['Edit'])){	
  echo "hello";
	$fname = $_POST["firstname"]; 
	$lname = $_POST["lastname"];
	$email = $_POST["mail"];
	$pass = $_POST["password"];
	$phone = $_POST["phone"];
	$billaddress = $_POST["billing_address"];
	$billcity = $_POST["billing_city"];
	$billstate = $_POST["billing_state"];
	$billzip = $_POST["billing_zip"];
	$shipaddress = $_POST["shipping_address"];
	$shipcity = $_POST["shipping_city"];
	$shipstate = $_POST["shipping_state"];
	$shipzip = $_POST["shipping_zip"];
	$Flag = false;
	if($fname != NULL || $fname != "") {
		$in = "UPDATE `customer` SET `FirstName` = '{$fname}' WHERE `CustomerID` = '{$id}' ";
		$flag = mysqli_query($conn , $in);
	   if(!$flag) 	
			mysqli_error($conn);
		else
			$Flag = true;
	}
	if($lname != NULL || $lname != "") {
		$in = "UPDATE `customer` SET `LastName` = '{$lname}' WHERE `CustomerID` = '{$id}' ";
		$flag = mysqli_query($conn , $in);
	   if(!$flag) 	
			mysqli_error($conn);
		else
			$Flag = true;;
	}
	if($email != NULL || $email != "") {
		$in = "UPDATE `customer` SET `Email` = '{$email}' WHERE `CustomerID` = '{$id}'";
		$flag = mysqli_query($conn , $in);
	   if(!$flag) 	
			mysqli_error($conn);
		else
			$Flag = true;;
	}
	if($pass != NULL || $pass != "") {
		$in = "UPDATE `customer` SET `Password` = '{$pass}' WHERE `CustomerID` = '{$id}'";
		$flag = mysqli_query($conn , $in);
	   if(!$flag) 	
			mysqli_error($conn);
		else
			$Flag = true;
	}
	if($phone != NULL || $phone != "") {
		$in = "UPDATE `customer` SET `Phone` = '{$phone}' WHERE `CustomerID` = '{$id}'";
		$flag = mysqli_query($conn , $in);
	   if(!$flag) 	
			mysqli_error($conn);
		else
			$Flag = true;;
	}
	if($billaddress != NULL || $billaddress != "") {
		$in = "UPDATE `customer` SET `BillingAddress` = '{$billaddress}' WHERE `CustomerID` = '{$id}'";
		$flag = mysqli_query($conn , $in);
	   if(!$flag) 	
			mysqli_error($conn);
		else
			$Flag = true;
	}
	if($billcity != NULL || $billcity != "") {
		$in = "UPDATE `customer` SET `BillingCity` = '{$billcity}' WHERE `CustomerID` = '{$id}'";
		$flag = mysqli_query($conn , $in);
	   if(!$flag) 	
			mysqli_error($conn);
		else
			$Flag = true;
	}
	if($billstate != NULL || $billstate != "") {
		$in = "UPDATE `customer` SET `BillingState` = '{$billstate}' WHERE `CustomerID` = '{$id}'";
		$flag = mysqli_query($conn , $in);
	   if(!$flag) 	
			mysqli_error($conn);
		else
			$Flag = true;
	}
	if($billzip != NULL || $billzip != "") {
		$in = "UPDATE `customer` SET `BillingZip` = '{$billzip}' WHERE `CustomerID` = '{$id}'";
		$flag = mysqli_query($conn , $in);
	   if(!$flag) 	
			mysqli_error($conn);
		else
			$Flag = true;
	}
	if($shipaddress != NULL || $shipaddress != "") {
		$in = "UPDATE `customer` SET `ShippingAddress` = '{$shipaddress}' WHERE `CustomerID` = '{$id}'";
		$flag = mysqli_query($conn , $in);
	   if(!$flag) 	
			mysqli_error($conn);
		else
			$Flag = true;
	}
	if($shipcity != NULL || $shipcity != "") {
		$in = "UPDATE `customer` SET `ShippingCity` = '{$shipcity}' WHERE `CustomerID` = '{$id}'";
		$flag = mysqli_query($conn , $in);
	   if(!$flag) 	
			mysqli_error($conn);
		else
			$Flag = true;
	}
	if($shipstate != NULL || $shipstate != "") {
		$in = "UPDATE `customer` SET `ShippingState` = '{$shipstate}' WHERE `CustomerID` = '{$id}'";
		$flag = mysqli_query($conn , $in);
	   if(!$flag) 	
			mysqli_error($conn);
		else
			$Flag = true;
	}
	if($shipzip != NULL || $shipzip != "") {
		$in = "UPDATE `customer` SET `ShippingZip` = '{$shipzip}' WHERE `CustomerID` = '{$id}'";
		$flag = mysqli_query($conn , $in);
	   if(!$flag) 	
			mysqli_error($conn);
		else
			$Flag = true;
	}
	if ($Flag){
		echo "
				<script type=\"text/javascript\">
	window.location = 'Customer_Links.php';
	</script>
			";
	}
	
}

?>


</body>

<div id="footer"><p class="centerr"><font size="5px" face="Gabriola" ><b><a href="#top" style="text-decoration:none; color:#000000";>Copyright &copy; Eshtery.com 2014</a></b></font></p></div>
	

</html>