<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Trainer Details</div>
<div class="card-body">
<form name="form1" method="post">
Name <input type="text" name="txtuname">
<input type="submit" value="Submit" name="btnSubmit">
</form>

<?php

if(isset($_POST["btnSubmit"]))
{
$cnn=mysqli_connect("localhost","root","","dbproject");

$uname=$_POST["txtuname"];


$qry="Select * from member where uname='$uname'";
//echo $qry;
$result=$cnn->query($qry);

$str="<table class='table table-bordered dataTable'><tr><th>User Name</th><th>Name</th><th>Pic</th><th>Email</th><th>Call</th><th>Join date</th><th>Birthdate</th></tr>";

while($row=$result->fetch_assoc())
{
	$str.="<tr><td>".$row["uname"]."</td><td>".$row["fname"]." ".$row["lname"]."</td><td><img src='image/".$row["img"]."' height='100' width='100'></td><td>".$row["email"]."</td><td>".$row["contactno"]."</td><td>".$row["doj"]."</td><td>".$row["dob"]."</td></tr>";
}

$str.="</table>";
echo $str;
}
?>
