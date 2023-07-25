<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table">Member search</i>
            </div>
<div class="card-body">
<?php
$batchid=0;
if(isset($_POST["btnSubmit"]))
{
	$cnn=mysqli_connect("localhost","root","","dbproject");
	$batchid=$_POST["cmb"];
	$qry="select uname,fname,lname,contactno,img from member where batchid='$batchid'";
	
	$result=$cnn->query($qry);
	$str1="<table border='3'><tr><th>User Name</th><th>Name</th><th>Call</th><th>Pic</th></tr>";
	while($row=$result->fetch_assoc())
	{
      $str1.="<tr><td>".$row["uname"]."</td><td>".$row["fname"]." ".$row["lname"]."</td><td>".$row["contactno"]."</td><td><img src='image/".$row["img"]."' height='100' width='100'></td></tr>";
	}
    
    
    $str1.="</table>";
	echo $str1;
}	
?>


<form name="form1" method="post">
<?php
$cnn=mysqli_connect("localhost","root","","dbproject");
$qry="Select * from batch";
$result=$cnn->query($qry);
?>

<select name="cmb">
<?php
while($row=$result->fetch_assoc())
{
	$str=$row["batchname"];

	if($batchid!=0 && $row["batchid"]==$batchid)
	{
		echo "<option value=".$row["batchid"]." selected>".$str."</option>";

	}
	else
	{
		echo "<option value=".$row["batchid"].">".$str."</option>";

	}
	

//$str.="</table>";
//echo $str;
}
?>
</select>
<input type="Submit" value="Submit" name="btnSubmit">
</form>

</div>
</div>
</div>