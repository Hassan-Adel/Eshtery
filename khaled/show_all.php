<?php
    $servername = "localhost";
	$username = "root";
	$password = "";
	$DP = "db";
	$conn = new mysqli($servername, $username, $password,$DP);
    $all="SELECT * FROM `products` where Visible = 'yes'";
    $result = mysqli_query($conn,$all);
	
	if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
   
	echo "Product Id : ".$row["ProductID"].str_repeat('&nbsp;&nbsp;', 5)
	."Item Name : ". $row["ItemName"]. "<br>"
	."Item Discription: ". $row["ItemDescription"]. str_repeat('&nbsp;&nbsp;', 5) 
    ."Quantity : ".$row["Quantity In Stock"]. "<br>"
	."Price : ".$row["Price"]. str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', 5)
	."Category : ".$row["Category"]. "<br>"
	."Sub Category : ".$row["SubCategory"];
	 session_start();
	  $_SESSION['pid']=$row["ProductID"];
	  $_SESSION['pq']=$row["Quantity In Stock"];
     echo $_SESSION['pid'];
	?>
    <html>
    <form method = "post"  action = "Shopping_Cart.php">
    <select>
	  <option value="1" selected>1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  <option value="4">4</option>
	  <option value="5">5</option>
	</select>
	<button type="submit" name = "buy">Buy</button>
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