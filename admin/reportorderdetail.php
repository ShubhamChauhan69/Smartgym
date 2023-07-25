<?php include_once("header.php") ?>
	<div class="Page-header">
				<h1>
					
					<small>
					<i class="ace-icon fa fa-angle-double-right"></i>
					OverView &amp; stats
					</small>
				</h1>
		</div>

<?php
$cnn=mysqli_connect("localhost","root","","dbproject");
$result=$cnn->query("select * from orderdetailmst;");

$str="<table border='2' class='table table-bordered table-hover'><tr><th>Order Id</th><th>Product Id</th><th>Product Name</th><th>Quantity</th><th>Total Price</th><th>Image</th></tr>";

while($row=$result->fetch_assoc())
{
	$str.="<tr><td>".$row["oid"]."</td><td>".$row["pid"]."</td><td>".$row["pname"]."</td><td>".$row["qty"]."</td><td>".$row["pq"]."</td><td><img src='image/".$row["image"]."'height='200' width='200'></td></tr>";
}

$str.="</table>";

echo $str;

?>

<?php include_once("footer.php") ?>