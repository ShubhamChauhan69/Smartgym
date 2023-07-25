<?php include_once("header.php");?>
<?php
if(isset($_POST["btnSubmit"]))
{
	$cnn=mysqli_connect("localhost","root","","dbproject");

	$gpid=$_POST["cmb1"];
	$mid=$_POST["cmb2"];
	date_default_timezone_get("Asia/kolkata");
	$dop=date("Y-m-d");
	$str="Insert into memberpackage(gpid,mid,dop) values ('$gpid','$mid','$dop')";
	//echo $str;
	$result=$cnn->query($str);
	
	
}
?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Member PACKAGE</div>
<div class="card-body">


<form name="form1" method="post">
<?php
$cnn=mysqli_connect("localhost","root","","dbproject");
$str="Select * from gympackage";
//echo $str;
$result=$cnn->query($str);

?>
Package 
<select name="cmb1">
<?php
while($row=$result->fetch_assoc())
{
	echo "<option value=".$row["Gpid"].">".$row["Gpname"]."</option>";
}
?>
</select>
<?php
$cnn=mysqli_connect("localhost","root","","dbproject");
$str="Select * from member";
$result=$cnn->query($str);
?>
<br>
Member
<select name="cmb2">
<?php

while($row=$result->fetch_assoc())
{
	$str=$row["fname"]." ".$row["lname"]." ".$row["contactno"];
	echo "<option value=".$row["mid"].">".$str."</option>";
}
$str.="</table>";
echo $str;

?>

<input type="Submit" value="Submit" name="btnSubmit">
</form>
</select>
</div>
</div>
</div>



