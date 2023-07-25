<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table">Attendance</i>
            </div>
<div class="card-body">
<?php
$batchid=0;
/*if(isset($_POST["btnSubmit"]))
{
	$cnn1=mysqli_connect("localhost","root","","dbproject");
	$batchid=$_POST["cmb1"];
	$qry1="select uname,fname,lname,contactno,img from member where batchid='$batchid'";
	
	$result1=$cnn->query($qry);
	$str1="<table border='3'><tr><th>User Name</th><th>Name</th><th>Call</th><th>Pic</th></tr>";
	while($row=$result1->fetch_assoc())
	{
      $str1.="<tr><td>".$row["uname"]."</td><td>".$row["fname"]." ".$row["lname"]."</td><td>".$row["contactno"]."</td><td><img src='image/".$row["img"]."' height='100' width='100'></td></tr>";
	}
    
    
}
*/
?>


<form name="form1" method="post" action="Atttemp.php">
<?php
$cnn1=mysqli_connect("localhost","root","","dbproject");
$qry1="Select * from batch";
$result=$cnn1->query($qry1);
?>

<select name="cmb1">
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

<input type="date" name="date">

<input type="Submit" value="Submit" name="btnSubmit">
</form>


</form>
</div>
</div>
</div>

