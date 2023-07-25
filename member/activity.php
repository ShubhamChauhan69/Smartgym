<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Activity</div>
<div class="card-body">
<?php
{
$cnn=mysqli_connect("localhost","root","","dbproject");

$result=$cnn->query("select * from activity where actid!=8");

$str="<table class='table'>";
$x=1;

while($row=$result->fetch_assoc())
{
	if($x==1)
	{
		$str.="<tr>";
	}
	$x++;

	$str.="<td>".$row["actname"]."<br><img src='image/".$row["actimg"]."' height='100' width='100'>";

	
	$qry2="select day,timings from activity,activitytrainer where activity.actid=activitytrainer.actid and activity.actid!=8 and actname='".$row["actname"]."'";

	$result2=$cnn->query($qry2);

	while($row2=$result2->fetch_assoc())
	{
		$str.="<Br>". $row2["day"]."<Br>".$row2["timings"];
	}

	$str.="</td>";
	if($x==5)
	{
		$str.="</tr>";
		$x=1;
	}
}
$str.="</table>";
echo $str;
}
?>
</div>
</div>
</div>

<?php include_once("footer.php");?>