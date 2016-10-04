<!DOCTYPE html>
<html>
<head>
<title> Add to Store </title>
<meta charset="UTF=8">
<link rel="stylesheet" href="css\global.css">
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\cssmenu.css">
<script src="jq.js"></script>
<script language="javascript" type="text/javascript">
  
  
$(document).ready(function(){
//let's create arrays
var tech = [
    {display: "Mobiles", value: "mobiles" },
    {display: "Laptops", value: "laptops" },
    {display: "Camera", value: "camera" },
    {display: "Flash Drive", value: "flash_drive" }];
	
var cars = [
    {display: "Audi", value: "audi" },
    {display: "Daewoo", value: "daewoo" },
    {display: "Renault", value: "renault" },
    {display: "Ferrari", value: "ferrari" }];
   
var furniture = [
    {display: "Tables", value: "tables" },
    {display: "Chairs", value: "chairs"},
    {display: "Beds", value: "beds" },
    {display: "Closets", value: "closets" }];

	
var clothes = [
    {display: "T-Shirts", value: "t-shirts" },
    {display: "Jeans", value: "jeans" },
    {display: "Skirts", value: "skirts" },
    {display: "Shoes", value: "shoes" }];


//If parent option is changed
$("#parent_selection").change(function() {
        var parent = $(this).val(); //get option value from parent
       
        switch(parent){ //using switch compare selected option and populate child
              case 'tech':
                list(tech);
                break;
              case 'cars':
                list(cars);
                break;             
              case 'furniture':
                list(furniture);
                break;
                
			case 'clothes':
                list(clothes);
                break;				
            default: //default child option is blank
                $("#child_selection").html('');  
                break;
           }
});

//function to populate child select box
function list(array_list)
{
    $("#child_selection").html(""); //reset child options
    $(array_list).each(function (i) { //populate child options
        $("#child_selection").append("<option value=\""+array_list[i].value+"\">"+array_list[i].display+"</option>");
    });
}

});
</script>

<script>
	function verify(){
		var a = document.forms.["form1"]["product_id"].value();
		if ( a =="" || a == Null ){
			alert("Please enter product ID");
			return false;
		}
		var b = document.forms.["form1"]["item_name"].value();
		if ( b =="" || b == Null ){
			alert("Please enter item name");
			return false;
		}
		var c = document.forms.["form1"]["item_discription"].value();
		if ( c =="" || c == Null ){
			alert("Please enter item description");
			return false;
		}
		var d = document.forms.["form1"]["quantity"].value();
		if ( d =="" || d == Null ){
			alert("Please enter quantity");
			return false;
		}
		var e = document.forms.["form1"]["price"].value();
		if ( e =="" || e == Null ){
			alert("Please enter price");
			return false;
		}
		return true;
	}
</script>

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



<center> <br><br><br> <a  class="animated rubberBand" > <font size="17" face="Gabriola" color="#808080"><strong>Add Product</strong></font> </a> </b><br> </center>

<center>

<form method ="post"  name="form1"  enctype="multipart/form-data" onsubmit="return verify()">
 <br>
<label>Product ID:</label> 
<input type="text" name="product_id" class="textfield">
<br><br><br>

<label>Item Name:</label>
<input type="text" name="item_name" class="textfield">
<br><br><br>
<label>Item Description:</label>
<input type="text" name="item_discription" class="textfield">
<br><br><br>

<label>Quantity In Stock:</label>
<input type="text" name="quantity" class="textfield">
<br><br><br>

<label>Price:</label>
<input type="text" name="price" class="textfield">
<br><br><br>

 
<div class="wrapper">
Category : <select name="parent_selection" id="parent_selection">
    <option value="">-- Please Select --</option>
    <option value="tech">Technologies</option>
    <option value="cars">Cars</option>
    <option value="furniture">Furniture</option>
	<option value="clothes">Clothes</option>
</select>
<select name="child_selection" id="child_selection">
</select>
</div>
<br><br><br>


Image:
    <input type="file" name="img"> 
<br><br>
<label>Visible:</label> 
<br>
<input type="radio" name="visible" value="yes" checked>Yes
<br>
<input type="radio" name="visible" value="no">No
<br>

<br><br>
<button class="myButton" type="submit" name = "Add_product" > Edit_product </button>

<br>
</form>
  
  </center>
  
<?php
  
    $servername = "localhost";
	$username = "root";
	$password = "";
	$DP = "db";
	$conn = new mysqli($servername, $username, $password,$DP);
	if (mysqli_connect_error()) {
		die("Database connection failed: " . mysqli_connect_error());
	}
	
	if(isset($_POST['Add_product'])){
		
	$id = $_POST["product_id"] ; 
	$name = $_POST["item_name"];
	$discription = $_POST["item_discription"];
	$quan = $_POST["quantity"];
	$price = $_POST["price"];
	$category = $_POST["parent_selection"];
	$sub = $_POST["child_selection"];
	$vis = $_POST["visible"];
	
    $image_name = $_FILES["img"]["name"];	
    $image = file_get_contents($_FILES["img"]["tmp_name"]);
    $image_type = $_FILES["img"]["type"];

    $in = "INSERT INTO `products`(`ProductID`, `ItemName`, `ItemDescription`, `Quantity In Stock`, `Price`, `Visible`,`Category`, `SubCategory`) VALUES ('$id','$name','$discription','$quan','$price','$vis','$category', '$sub')";
	
	mysql_query("INSERT INTO `products`('Picture') 
	VALUES('$image')");
	
	
	$flag = mysqli_query($conn , $in);
	
	if( !$flag || substr ($image_type,0,5) != "image")
	                mysql_error($conn);
	else{		 
	
     echo "
            <script type=\"text/javascript\">
window.location = 'Admin_Links.php';
</script>
        ";	
	}
	}
  

	
?>

</body>

<br><br>
<div id="footer"><p class="centerr"><font size="5px" face="Gabriola" ><b><a href="#top" style="text-decoration:none; color:#000000";>Copyright &copy; Eshtery.com 2014</a></b></font></p></div>
	

</html>

 <!-- ?>$file = $_FILES['image']['tmp_name'];

if (!isset($file))
    echo "please select an image.";
else
  {
  $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
  $image_name = $_FILES['image']['name'];
  $image_size = getimagesize($_FILES['image']['tmp_name']);
	
	
	$img="image";
	$image_name = $_FILES["image"]["name"];
	
	$in = "INSERT INTO `products`(`Product ID`, `Item Name`, `Item Description`, `Quantity In Stock`, `Price`, `Category`,    `Sub Category`, `Visible`, `Picture`) VALUES ([$id],[$name],[$discription],[$quan],[$price],[$category],[$sub],[$vis],
	[$image_data])";
	$flag = mysqli_query($conn , $in); 
	if(!$flag){
				echo "Error" . mysqli_error($conn);
			}
			else{
				header('Locaton : Home_admin.php');
			}

   
	
	  $allowed_type = array('image/png', 'image/gif', 'image/jpg', 'image/jpeg');
	  
     if(in_array($picture_type, $allowed_type)) {
        $path = 'images/'.$picture_name; 
    } else {
        $error[] = 'File type not allowed';
    }
	
	-->
	