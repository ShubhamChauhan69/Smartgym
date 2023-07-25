<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Member Details</div>
<div class="card-body">
<?php
{
$cnn=mysqli_connect("localhost","root","","dbproject");

$result=$cnn->query("select * from member");

$str="<table class='table'";
$x=1;
while($row=$result->fetch_assoc())
{
	if($x==1)
	{
		$str.="<tr>";
	}
	$x++;

{
	$str.="<td> Name : ".$row["fname"]." ".$row["lname"]."<br> Contact No : ".$row["contactno"]."<br><img src='image/".$row["img"]."' height='100' width='100'></td>";
}	
	if($x==5)
	{
		$str.="</tr>";
		$x=1;
	}
}
$str.="</table>";
echo $str;
}
?>
</div>
</div>
</div>
<?php include_once("footer.php"); ?>