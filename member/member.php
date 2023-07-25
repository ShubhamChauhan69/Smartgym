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
$id=$_SESSION["mid"];
$qry="select mid,uname,pwd,fname,lname,img,email,contactno,height,weight,doj,dob  from member where mid='$id'";
//echo $qry;
$result=$cnn->query($qry);

$str="<table class='table table-bordered dataTable'><tr><th>User Name</th><th>Password</th><th>Name</th><th>Conatact no</th><th>Email</th><th>Height</th><th>Weight</th><th>Join Date</th><th>Birth Date</th><th>image</th><th>Edit</th><th>Delete</th></tr>";

while($row=$result->fetch_assoc())

{
	$str.="<tr><td>".$row["uname"]."</td><td>".$row["pwd"]."</td><td>".$row["fname"]." ".$row["lname"]."</td><td>".$row["contactno"]."</td><td>".$row["email"]."</td><td>".$row["height"]."</td><th>".$row["weight"]."<th>".$row["doj"]."</th><th>".$row["dob"]."</th></th><td><img src='image/".$row["img"]."' height='100' width='100'></td><td><a href='memberedit.php?Id=".$row["mid"]."'><img src='image/del.png' height='30' width='30'></a></td><td><a href='memberdelete.php?Id=".$row["mid"]."'><img src='image/edit.png' height='30' width='30'></a></td></tr>";;
}
$str.="</table>";
echo $str;
}
?>



</div>
</div>
</div>
<?php include_once("footer.php");?>