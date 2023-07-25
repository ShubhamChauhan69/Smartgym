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

$str="<table class='table table-bordered dataTable'><tr><th>User Name</th><th>Name</th><th>Pic</th><th>Email</th><th>Call</th><th>Join date</th><th>Birthdate</th><th>Edit</th><th>Delete</th><tr>";

while($row=$result->fetch_assoc())

{
	$str.="<tr><td>".$row["fname"]." ".$row["lname"]."</td><td><img src='image/".$row["img"]."' height='100' width='100'></td><td>".$row["email"]."</td><td>".$row["contactno"]."</td><td>".$row["doj"]."</td><td>".$row["dob"]."</td><td><a href='memberedit.php?Id=".$row["mid"]."'><img src='image/del.png' height='30' width='30'></a></td><td><a href='memberdelete.php?Id=".$row["mid"]."'><img src='image/edit.png' height='30' width='30'></a></td></tr>";
}

$str.="</table>";
echo $str;
}
?>
</div>
</div>
</div>
<?php include_once("footer.php"); ?>