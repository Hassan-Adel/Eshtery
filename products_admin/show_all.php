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
	.'<img src="'.$row["Picture"].'" width="200" height="150" style="float:right;"/>'
	."Item Description: ". $row["ItemDescription"]. str_repeat('&nbsp;&nbsp;', 5) 
    ."Quantity : ".$row["Quantity In Stock"]."<br>"
	."Price : ".$row["Price"]. str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', 5)
	."Category : ".$row["Category"]."<br>"
	."Sub Category : ".$row["SubCategory"]
	;
	 
	 
echo	"________________________________________________________________________________________________________________________________________". "<br>";
    }
	}
 else {
    echo "0 results";
}

?>


