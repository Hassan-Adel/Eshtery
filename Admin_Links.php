<!DOCTYPE html>
<html>
<head>
<title> Admin Links </title>
<meta charset="UTF=8">
<link rel="stylesheet" href="css\global.css">
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\cssmenu.css">

</head>

<div id="wrap">

    <div id="header"></div>

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

<center>

<!--
<a href="Store.php" class="buttton"> Store </a> 

<a href="Store Add.php" class="buttton"> Add Store </a> 

<a href="Store Edit.php" class="buttton"> Edit Store </a> 
 
<a href="customer accounts page.php" class="buttton"> Customer Accounts </a> 

<a href="shipping page.php" class="buttton"> Shipping Page </a>    
-->

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

<br><br><br><br><br><br><br>
<center>
<label><img id="imgHolder" align="middle"/></label>
</center>



</center>




</body>

<div id="footer"><p class="centerr"><font size="5px" face="Gabriola" ><b><a href="#top" style="text-decoration:none; color:#000000";>Copyright &copy; Eshtery.com 2014</a></b></font></p></div>
	


</html>

