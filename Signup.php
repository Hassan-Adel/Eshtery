
<html>
<head>
<title>Signup</title>
<meta charset="UTF=8">
<link rel="stylesheet" href="css\global.css">
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\cssmenu.css">
<script>
function validateSignUp() {
    var a = document.forms["form1"]["firstname"].value;
    if (a == null || a == "") {
        alert("firstname must be filled out");
        return false;
    }
	var b = document.forms["form1"]["lastname"].value;
    if (b == null || b == "") {
        alert("lastname must be filled out");
        return false;
    }
	var d = document.forms["form1"]["password"].value;
    if (d == null || d == "") {
        alert("password must be filled out");
        return false;
    }
	var e = document.forms["form1"]["billing_address"].value;
    if (e == null || e == "") {
        alert(" billing address must be filled out");
        return false;
    }
	var f = document.forms["form1"]["billing_city"].value;
    if (f == null || f == "") {
        alert(" billing city must be filled out");
        return false;
    }
	var g = document.forms["form1"]["billing_state"].value;
    if (g == null || g == "") {
        alert(" billing state must be filled out");
        return false;
    }
	var h = document.forms["form1"]["billing_zip"].value;
    if (h == null || h == "") {
        alert(" billing zip must be filled out");
        return false;
    }
	var i = document.forms["form1"]["shipping_address"].value;
    if (i == null || i == "") {
        alert(" shipping address must be filled out");
        return false;
    }
	var j = document.forms["form1"]["shipping_city"].value;
    if (j == null || j == "") {
        alert(" shipping city must be filled out");
        return false;
    }
	var k = document.forms["form1"]["shipping_state"].value;
    if (k == null || k == "") {
        alert(" shipping state must be filled out");
        return false;
    }
	var l = document.forms["form1"]["shipping_zip"].value;
    if (l == null || l == "") {
        alert(" shipping zip must be filled out");
        return false;
    }
	var m = document.forms["form1"]["phone"].value;
    if (m == null || m == "" || isNaN(m)) {
        alert(" phone is empty or unvalid");
        return false;
    }
	var n = document.forms["form1"]["mail"].value;
    var atpos = n.indexOf("@");
    var dotpos = n.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=n.length) {
        alert("Not a valid e-mail address");
        return false;
    }
	return true;
}
</script>

<div id="wrap">

    <div id="header"></div>

    <div class="undef">
        <div class="top_h"></div>
		

</head>


<body>

<center> <br><br><br><br><br><br><br> <a class="animated rubberBand" > <font size="17" face="Gabriola" color="#808080"><strong>Signup</strong></font> </a> </b> </center>

 <center>

<form method ="post" name="form1" onsubmit="return validateSignUp()">

 <br>
<label>First name:</label>
<input type="text" name="firstname"  class="textfield">
<br><br><br>
<label>Last name:</label>
<input type="text" name="lastname" class="textfield">
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
<input type="text" name="shipping_state" class="textfield">
<br><br><br>

<label>Shipping Zip:</label>
<input type="text" name="shipping_zip" class="textfield">
<br><br><br>


<label>Phone:</label>
<input type="text" name="phone" class="textfield">
<br><br><br>

<label>E-Mail:</label>
<input type="text" name="mail" class="textfield">
<br><br><br>

<label>Password:</label>
<input type="password" name="password" class="textfield">


<br><br><br>
<button class="myButton" type="submit" name = "Signup" class="submitButton"> sign up now </button>
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
	
	if (mysqli_connect_error()) {
		die("Database connection failed: " . mysqli_connect_error());
	}
	
 if(isset($_POST['Signup'])){	
	$fname = $_POST["firstname"]; 
	$lname = $_POST["lastname"];
	$pass = $_POST["password"];
	$mail = $_POST["mail"];
	$phone = $_POST["phone"];
	$billaddress = $_POST["billing_address"];
	$billcity = $_POST["billing_city"];
	$billstate = $_POST["billing_state"];
	$billzip = $_POST["billing_zip"];
	$shipaddress = $_POST["shipping_address"];
	$shipcity = $_POST["shipping_city"];
	$shipstate = $_POST["shipping_state"];
	$shipzip = $_POST["shipping_zip"];
	
	$in = "INSERT INTO `customer`(`FirstName`, `LastName`, `BillingAddress`, `BillingCity`, `BillingState`, `BillingZip`, `ShippingAddress`, `ShippingCity`, `ShippingState`, `ShippingZip`, `Phone`, `Email`, `Password`) VALUES('$fname','$lname','$billaddress','$billcity','$billstate','$billzip','$shipaddress',
'$shipcity','$shipstate','$shipzip','$phone','$mail','$pass')";
    $flag = mysqli_query($conn , $in);
   if(!$flag) 	
            mysqli_error($conn);
   
	else  
	echo "<script type=\"text/javascript\">   window.location = 'Customer_Links.php'; </script>";
	
}

?>


</body>

<div id="footer"><p class="centerr"><font size="5px" face="Gabriola" ><b><a href="#top" style="text-decoration:none; color:#000000";>Copyright &copy; Eshtery.com 2014</a></b></font></p></div>
	

</html>