<?php session_start(); ?>
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
$mid=$_SESSION["mid"];
$qry="select mid,fname,lname,img,email,contactno,height,weight,dob  from member where mid='$mid'";
$result=$cnn->query($qry);

$str="<table class='table'><tr><th>mid</th><th>Name</th><th>Pic</th><th>Email</th><th>Call</th><th>Height</th><th>Weight</th><th>Birthdate</th></tr>";

while($row=$result->fetch_assoc())

{
	$str.="<tr><td>".$row["mid"]."</td><td>".$row["fname"]." ".$row["lname"]."</td><td><img src='image/".$row["img"]."' height='100' width='100'></td><td>".$row["email"]."</td><td>".$row["contactno"]."</td><td>".$row["height"]."</td><td>".$row["weight"]."</td><td>".$row["dob"]."</td></tr>";
}
$str.="</table>";
echo $str;
}
?>



</div>
</div>
</div>
<?php include_once("footer.php");?>