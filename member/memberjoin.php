<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table">Member Package</i>
            </div>
<div class="card-body">
<?php
if(isset($_POST["btnSubmit"]))
{
	$cnn=mysqli_connect("localhost","root","","dbproject");
	$mid=$_POST["cmb"];
	$qry="select Gpname,dop from gympackage,memberpackage where gympackage.Gpid=memberpackage.Gpid and mid=$mid";

	$result=$cnn->query($qry);
	$str1="<table border='3'><tr><th>Package</th><th>Date of Package</th></tr>";
	while($row=$result->fetch_assoc())
	{
      $str1.="<tr><td>".$row["Gpname"]."</td><td>".$row["dop"]."</td></tr>";
	}
    
    
    $str1.="</table>";
	//echo $str;
}	
?>


<form name="form1" method="post">
<?php
$cnn=mysqli_connect("localhost","root","","dbproject");
$qry="Select * from member";
$result=$cnn->query($qry);
?>

<select name="cmb">
<?php
while($row=$result->fetch_assoc())
{
	$str=$row["fname"]." ".$row["lname"]." ".$row["contactno"];
	echo "<option value=".$row["mid"].">".$str."</option>";
//$str.="</table>";
//echo $str;
}
?>
</select>
<input type="Submit" value="Submit" name="btnSubmit">
</form>
<?php if(isset($_POST["btnSubmit"]))
{echo "<br>".$str1;}
?>
</div>
</div>
</div>