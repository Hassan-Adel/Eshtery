<!DOCTYPE html>
<html>
<head>
<title> Links </title>
<meta charset="UTF=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="stylesheet" href="css\global.css">
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\cssmenu.css">

</head>

<div id="wrap">

<style>

</style>
  <center>  <div id="header"> </div> </center>

    <div class="undef">
        <div class="top_h"></div>
		

<script>
$(function(){
    $("#page_content").css("height", $(window).height() - $("#header").height() - $("#footer").height() + "px");
});
</script>
<!-- /////////////////////////////////////////////(Play Images)////////////////////////////////////////// -->
<script type="text/javascript">  
      var aImages  =  [ "1.jpg",  
                        "2.jpg",  
                        "3.jpg",  
                        "4.jpg",  
                        "5.jpg",
						"6.jpg",  
                        "7.jpg",  
                        "8.jpg"];  
      var oImage   =  null;  
      var iIdx     =  0;  
      function play(){  
        try{  
          //look only once in DOM and cache it  
          if(oImage===null){  
            oImage  =  window.document.getElementById("imgHolder");  
          }  
          oImage.src  =  aImages[(++iIdx)%8];  
          setTimeout('play()',1500);  
        }catch(oEx){  
          //some error handling here  
        }  
      }      
    </script>  
<!-- /////////////////////////////////////////////////////////////////////////////////////// -->	

<body onload="play()">




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


<br><br><br><br><br><br><br>
<center>
<!--<label><img id="imgHolder" width="701px" hight="464px" align="middle"/></label>
<label><img id="imgHolder" width="24.73%" hight="16.37%" align="middle"/></label>-->

<label><img id="imgHolder" width="30.2138%" hight="20%" align="middle"/></label>

</center>



</body>
<div id="footer"><p class="centerr"><font size="5px" face="Gabriola" ><b><a href="#top" style="text-decoration:none; color:#000000";>Copyright &copy; Eshtery.com 2014</a></b></font></p></div>
	

</html>

