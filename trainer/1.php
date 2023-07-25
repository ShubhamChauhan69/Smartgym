<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            </div>
<div class="card-body">
<?php
{
$cnn=mysqli_connect("localhost","root","","dbproject");
$result=$cnn->query("select * from batchtrainer where day='monday'");
$str="<table class='table'><tr><th>Btid</th><th>Batchid</th><th>tid</th><th>day</th><th>actid</th></tr>";
$btid=0;
while($row=$result->fetch_assoc())
{
	$btid=$row["batch id"];
	$tid=$row["tid"];
	$dy="sunday";
	//$actid=isset($row["actid"])?NULL:$row["actid"];
	$qry2="INSERT INTO `batchtrainer` (`btid`, `batch id`, `tid`, `day`, `actid`) VALUES (NULL,'$btid','$tid','$dy',NULL)";
	echo $qry2;
	$result2=$cnn->query($qry2);
}	
}
?>
</div>
</div>
</div>
<?php include_once("footer.php");?>