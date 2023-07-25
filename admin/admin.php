<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Admin Details</div>
<div class="card-body">
<?php
{
$cnn=mysqli_connect("localhost","root","","dbproject");

$result=$cnn->query("select * from admin");

$str="<table class='table table-bordered dataTable'><tr><th>User Name</th><th>Password</th><th>Name</th><th>Conatact no</th><th>Email</th><th>image</th><th>Edit</th><th>Delete</th></tr>";

while($row=$result->fetch_assoc())

{
	$str.="<tr><td>".$row["username"]."</td><td>".$row["psw"]."</td><td>".$row["fname"]." ".$row["lname"]."</td><td>".$row["contactno"]."</td><td>".$row["email"]."</td><td><img src='image/".$row["img"]."' height='100' width='100'></td><td><a href='adminedit.php?Id=".$row["aid"]."'><img src='image/del.png' height='30' width='30'></a></td><td><a href='admindelete.php?Id=".$row["aid"]."'><img src='image/edit.png' height='30' width='30'></a></td></tr>";;
}
$str.="</table>";
echo $str;
}
?>
</div>
</div>
</div>
<?php include_once("footer.php");?>