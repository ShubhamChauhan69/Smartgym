<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Trainer Details</div>
<div class="card-body">
<form name="form1" method="post">
Mobile NO <input type="text" name="txtcontactno">
<input type="submit" value="Submit" name="btnSubmit">
</form>

<?php

if(isset($_POST["btnSubmit"]))
{
$cnn=mysqli_connect("localhost","root","","dbproject");

$contactno=$_POST["txtcontactno"];


$qry="Select * from member where contactno='$contactno'";
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
