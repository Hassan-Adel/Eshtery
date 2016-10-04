<?php
    
    $servername = "localhost";
	$username = "root";
	$password = "";
	$DP = "db";
	$conn = new mysqli($servername, $username, $password,$DP);
    $all="SELECT * FROM `products` where Category = 'cars' AND subCategory = 'daewoo' AND Visible = 'yes' ";
    $result = mysqli_query($conn,$all);
	
	if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
        
	echo "Product Id : ".$row["ProductID"].str_repeat('&nbsp;&nbsp;', 5)
	."Item Name : ". $row["ItemName"]. "<br>"
	.'<img src="'.$row["Picture"].'" width="200" height="150" style="float:right;"/>'
	."Item Description: ". $row["ItemDescription"]. str_repeat('&nbsp;&nbsp;', 5) 
    ."Quantity : ".$row["Quantity In Stock"]."<br>"
	."Price : ".$row["Price"]. str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', 5)
	."Category : ".$row["Category"]
	;
	 
	 $_SESSION['pid']=$row["ProductID"];
	  $_SESSION['pq']="quan";
	  if("quan" > $row["Quantity In Stock"]){
	  $_SESSION['pq']=$row["Quantity In Stock"];
	  }
	?>
    <html>
    <form method = "post" action = "Shopping_Cart.php">
    <select name="quan">
	  <option value="0" selected>-Quantity-</option>
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  <option value="4">4</option>
	  <option value="5">5</option>
	</select>
	&nbsp;&nbsp;
	<button class="myButton" type="submit" name = "buy">Add to Cart</button>
    </html>
    </form>
 
   <?php
 
echo	"________________________________________________________________________________________________________________________________________". "<br>";		
    }
	}
 else {
    echo "0 results";
}

?>

