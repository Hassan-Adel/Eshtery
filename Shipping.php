
<html>
<head>
<title> Shipping </title>
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


<!--/////////////////////////////////////////////////////////////////////////(Top_Menu)///////////////////////////////////////////////////////////////////////////-->
<center>
<ul class="pureCssMenu pureCssMenum">
	<li class="pureCssMenui"><a class="pureCssMenui" href="Store_Admin.php">Store</a></li>
	<li class="pureCssMenui"><a class="pureCssMenui" href="Store_Add.php">Add Product</a></li>
	<li class="pureCssMenui"><a class="pureCssMenui" href="Store_Edit.php">Edit Product</a></li>
	<li class="pureCssMenui"><a class="pureCssMenui" href="Customer_Accounts.php">Customer Accounts</a></li>
	<li class="pureCssMenui"><a class="pureCssMenui" href="Shipping.php">Shipping</a></li>
	
</ul>

</center>

<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


<center> <br><br><br> <a class="animated rubberBand" > <font size="17" face="Gabriola" color="#808080"><strong> Shipping </strong></font> </a> </b> </center>

 <center>
<form method ="post"  name="form1">
 <br>
tracking number: 
<input type="text" name="number">
<br><br><br>

shipping company: 
<input type="text" name="comp">
<br><br><br>
<button class="myButton" type="submit" name = "shipall">Ship all</button>
   
</form>
<form method ="post"  name="form2">
 <br>
tracking number: 
<input type="text" name="trackingnumber2" >
<br><br><br>

transaction id: 
<input type="text" name="tid" >
<br><br><br>

shipping company: 
<input type="text" name= "shippingcompany2" >
<br><br><br>
<button class="myButton" type="submit" name = "ship" >Ship</button>
   
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
	
if(isset($_POST["shipall"])){
	$sel="SELECT * FROM `order processing` WHERE `shipped` = '0'";
    $all="UPDATE `order processing` SET `shipped` = '1' WHERE `shipped` = '0'";
    $result = mysqli_query($conn,$all);
	$res =  mysqli_query($conn,$sel);
	if (mysqli_num_rows($res) > 0) {
    while($row = mysqli_fetch_array($result)) {
	$num = $_POST["number"];
	$com = $_POST["comp"];
	$in = "INSERT INTO `order processing`(`TrackingNumber`, ` ShippingCompany` )  VALUES ('$num','$com')";
	$re =  mysqli_query($conn,$in);
	echo "<script type=\"text/javascript\">   window.location = 'Admin_Links.php'; </script>";
	}
	}
	
	}
	
	if(isset($_POST["ship"])){
	$td=$_POST['tid'];	
    $all="UPDATE `order processing` SET `shipped` = '1' where `TranactionID` = '$td'";
    $result = mysqli_query($conn,$all);
	$t= $_POST["trackingnumber2"];
	$sc=$_POST["shippingcompany2"];
	$in = "INSERT INTO `order processing` SET (`TrackingNumber`, ` ShippingCompany`) VALUES ('$t','$sc')" ;
	$result2 = mysqli_query($conn,$in);
	echo "<script type=\"text/javascript\">   window.location = 'Admin_Links.php'; </script>";
	}
	
?>



</body>

<div id="footer"><p class="centerr"><font size="5px" face="Gabriola" ><b><a href="#top" style="text-decoration:none; color:#000000";>Copyright &copy; Eshtery.com 2014</a></b></font></p></div>
	

</html>