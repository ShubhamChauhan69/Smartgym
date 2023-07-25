<?php session_start(); ?>
<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            My Batch</div>
<div class="card-body">
<?php
$mid="";

{
$cnn=mysqli_connect("localhost","root","","dbproject");
$mid=$_SESSION["mid"];
$qry="select batchname,batchtiming from batch,member where batch.batchid=member.batchid and member.mid=$mid";
$result=$cnn->query($qry);

$str="<table class='table table-bordered dataTable'><tr><th>Batch Name</th><th>Timming</th></tr>";

while($row=$result->fetch_assoc())

{
	$str.="<tr><td>".$row["batchname"]."</td><td>".$row["batchtiming"]."</td></tr>";
}
$str.="</table>";
echo $str;
}
?>



</div>
</div>
</div>
<?php include_once("footer.php");?>