
<html>


<form method ="post"  name="form1"  enctype="multipart/form-data">
 <br>

Image:
    <input type="file" name="img"> 
<br><br>


<br><br>
<button class="myButton" type="submit" name = "Add_product" > Add product </button>

<br>
</form>
  
  </center>
  
<?php
  
	if(isset($_POST['Add_product'])){

    $image_name = $_FILES["img"]["name"];
	
	echo "$image_name";
	
	echo '<img src="'.$image_name.'" width="150" height="112.5" />';
	
	
}


	
	?>
	
</html>

