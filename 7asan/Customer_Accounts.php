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


<center><br><br><br> <a  class="animated rubberBand" > <font size="17" face="Gabriola" color="#808080"><strong>Customer Accounts</strong></font> </a> </b> </center>

<center>
<form method ="post" name="form" action = "Admin_Edit.php">
<!-- <h1> <a > Log in </a> </h1> --> 

<br><br> 
<label>Customer ID:</label> 
<input type="text"  name="name" class="textfield" /> 
&nbsp;
<button  class="myButton"  type="submit" name = "edit_customer"  ac>Edit Customer</button>
</form>



</center>
<br><br>
<center>
<font size="5px" face="Gabriola" >
<?php
     
    $servername = "localhost";
	$username = "root";
	$password = "";
	$DP = "db";
	$conn = new mysqli($servername, $username, $password,$DP);
    $all="SELECT * FROM `customer`";
    $result = mysqli_query($conn,$all);
	
	
	if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
  
	echo "Customer ID : ".$row["CustomerID"].str_repeat('&nbsp;&nbsp;', 7)
	."First name : ". $row["FirstName"]. "<br>"
	."Email: ". $row["Email"]. str_repeat('&nbsp;&nbsp;', 7)
	."Last name : ". $row["LastName"]. "<br>"; 
	
	echo"______________________________________________________________________________________________________________________". "<br>";
	
	
    }
	}
	
 else {
    echo "0 results";
}

?>
</center>
</font>
</body>

<div id="footer"><p class="centerr"><font size="5px" face="Gabriola" ><b><a href="#top" style="text-decoration:none; color:#000000";>Copyright &copy; Eshtery.com 2014</a></b></font></p></div>
	


<!--/////////////////////////////////////////////////////////////////////////////(PHP)/////////////////////////////////////////////////////////////////-->

</html>