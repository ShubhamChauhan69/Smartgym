<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            MEMBER PACKAGE</div>
<div class="card-body">
<?php
{
$cnn=mysqli_connect("localhost","root","","dbproject");

$result=$cnn->query("select * from gympackage");

$str="<table class='table table-bordered dataTable'>";

while($row=$result->fetch_assoc())

{
	$str.="<tr><td><img src='image/".$row["Gpimg"]."' height='100' width='100'><br>".$row["Gpname"]."<Br>".$row["Gpprice"]." RS</td></tr>";
}
$str.="</table>";
echo $str;
}
?>
</div>
</div>
</div>
