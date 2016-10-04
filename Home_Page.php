<!DOCTYPE html>
<html>
<head>
<title> Home Page </title>
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
<center> <br><br><br><br><br><br><br><br><br> <a  class="animated rubberBand" > <font size="17" face="Gabriola" color="#808080"><strong>Login</strong></font> </a> </b> </center>
<Allign>
<center>
<form method ="post" name="form" action="<?php echo $_SERVER["PHP_SELF"];?>" onsubmit="return validateLogin()">
<!-- <h1> <a > Log in </a> </h1> --> 

<br><br> 
<label>Email :</label> 
<input type="text"  name="name" class="textfield" /> 
<br>
<br> <label>Password :</label> 
<input type="password" name="Password" class="textfield" /><br> <br>
<button  class="myButton"  type="submit" name = "login" >Member Login</button>
<button class="myButton" type="submit" name = "log_as_admin">Admin Login</button>
</form>

<br>

 <a href="Signup.php"  class="myButton2" >Signup </a> 
&nbsp;
<a href="Guest_Links.html" class="myButton2" >Guest</a>


</center>
</Allign>



</body>

<div id="footer"><p class="centerr"><font size="5px" face="Gabriola" ><b><a href="#top" style="text-decoration:none; color:#000000";>Copyright &copy; Eshtery.com 2014</a></b></font></p></div>
	


<!--/////////////////////////////////////////////////////////////////////////////(PHP)/////////////////////////////////////////////////////////////////-->
<?php
    $servername = "localhost";
	$username = "root";
	$password = "";
	$DP = "db";
	$conn = new mysqli($servername, $username, $password,$DP);
	
	if (mysqli_connect_error()) {
		die("Database connection failed: " . mysqli_connect_error());
	}
							  
	if(isset($_POST['login'])){
	        $mail = $_POST["name"];
			$pass = $_POST["Password"];
			$validate_query = "SELECT * FROM `customer` WHERE email='$mail' and password = '$pass'";
			$flag = mysqli_query($conn , $validate_query);
			$row  = mysqli_fetch_array($flag);
			if( !$flag || $row == null ){
				echo "<script type='text/javascript'>alert('this data doesn't exist');</script>";
			}
			
			else{
				
			session_start();
			$_SESSION['id']=$row["CustomerID"];
			    echo "
            <script type=\"text/javascript\">
window.location = 'Customer_Links.php';
</script>
        ";
			}
		}
	
	else if (isset($_POST['log_as_admin'])){
	        $aname = $_POST["name"];
			$apass = $_POST["Password"];
			$select_query =" SELECT * FROM `admin` WHERE Username='$aname' and password = '$apass' ";
			$selection = mysqli_query($conn , $select_query);
			$row  = mysqli_fetch_array($selection);
			 echo "$row";
			if(!$selection || $row == null ){
			    echo "<script type='text/javascript'>alert('this data doesn't exist');</script>";
			}
	        else{
	                   echo "
            <script type=\"text/javascript\">
window.location = 'Admin_Links.php';
</script>
        ";
	         }
	}
		?>

</html>