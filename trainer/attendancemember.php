<?php 
session_start();
include_once("header.php");?>
<?php

$cnn=mysqli_connect("localhost","root","","dbproject");
$bid=$_SESSION["bid"];
$date=$_SESSION["date"];
$nameofday= date('D' , strtotime($date));
$nameofday=strtolower($nameofday);

$qry5="Select ttid from timetbl where  batchid=$bid and dot='$date'";
//echo $qry5;
$result=$cnn->query($qry5);
$row=$result->fetch_assoc();
$ttid=$row["ttid"];

echo "<h1>$ttid</h1>";



$qry2="SELECT fname,lname FROM `batchtrainer`,trainer WHERE batchid=$bid  and day like '$nameofday%' and trainer.tid=batchtrainer.tid";
//echo $qry2;
$result=$cnn->query($qry2);
$str="<table class='table'><tr><th>Trainers Name</th></tr><tr>";
while($row=$result->fetch_assoc())
{
$str.="<td>".$row["fname"]." ".$row["lname"]."</td>";
}
$str.="</tr></table>";
echo $str;

$qry3="SELECT actname FROM `batchtrainer`,activity WHERE batchid=$bid  and day like '$nameofday%' and activity.actid=batchtrainer.actid";
//echo $qry2;
$result=$cnn->query($qry3);
$cnt=mysqli_num_rows($result);

if($cnt==1)
{
$str="<table class='table'><tr><th>Activityname</th></tr><tr>";
while($row=$result->fetch_assoc())
{
$str.="<td>".$row["actname"]."</td>";
}
$str.="</tr></table>";
echo $str;
}
else
{
	echo "<b>Activity = General</b>";
}


$qry="select * from member where batchid=$bid";
//echo $qry;
$result=$cnn->query($qry);
$str="<table class='table'><tr><th> Name</th><th>Contact Number</th><th>Photo<th><th>Present</th><th>Absent</th></tr>";

while($row=$result->fetch_assoc())
{
	$str.="<tr><td>".$row["fname"]." ".$row["lname"]."</td><td>".$row["contactno"]."</td><td><img src='image/".$row["img"]."' height='100' width='100'><td><td><a href='Att.php?ttid=".$ttid."&mid=".$row["mid"]."&a=present'><font color='red'><b>Present</b></font></a></td><td><a href='Att.php?ttid=".$ttid."&mid=".$row["mid"]."&a=absent'><font color='blue'><b>Absent</b></font></a></td></tr>";
}
$str.="</table>";
echo $str;


?>


include_once("header.php");?>