<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Product Details</div>
<div class="card-body">
<?php
{
$cnn=mysqli_connect("localhost","root","","dbproject");

$result=$cnn->query("select * from product");

$str="<table class='table table-bordered dataTable'><tr><th>Product Name</th><th>Price</th><th>Pic</th><th>Edit</th><th>Delete</th><tr>";

while($row=$result->fetch_assoc())

{
	$str.="<tr><td>".$row["pname"]."</td><td>".$row["price"]." RS</td><td><img src='image/".$row["pimg"]."' height='100' width='100'></td><td><a href='productedit.php?Id=".$row["pid"]."'><img src='image/del.png' height='30' width='30'></a></td><td><a href='productdelete.php?Id=".$row["pid"]."'><img src='image/edit.png' height='30' width='30'></a></td></tr>";
}
$str.="</table>";
echo $str;
}
?>
</div>
</div>
</div>
<?php include_once("footer.php");?>