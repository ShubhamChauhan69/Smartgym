<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            GYM PACKAGE</div>
<div class="card-body">
<?php
{
$cnn=mysqli_connect("localhost","root","","dbproject");

$result=$cnn->query("select * from gympackage");

$str="<table class='table table-bordered dataTable'><tr><th>Gym Package Name</th><th>Price</th><th>Pic</th><th>Edit</th><th>Delete</th></tr>";

while($row=$result->fetch_assoc())

{
	$str.="<tr><td>".$row["Gpname"]."</td><td>".$row["Gpprice"]." RS</td><td><img src='image/".$row["Gpimg"]."' height='100' width='100'></td><td><a href='PackageEdit.php?Id=".$row["Gpid"]."'><img src='image/del.png' height='30' width='30'></a></td><td><a href='packagedelete.php?Id=".$row["Gpid"]."'><img src='image/edit.png' height='30' width='30'></a></td></tr>";
}
$str.="</table>";
echo $str;
}
?>
</div>
</div>
</div>
<?php include_once("footer.php");?>