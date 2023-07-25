<?php 
session_start();
include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table">Member search</i>
            </div>
<div class="card-body">


<form name="form1" method="post">

<?php
$batchid=0;


	$cnn=mysqli_connect("localhost","root","","dbproject");
	$mid=$_SESSION["mid"];
	$qry="select ispresent,dot  from attendance,timetbl where attendance.ttid=timetbl.ttid and mid=$mid";
	//echo $qry;
	$result=$cnn->query($qry);
	$str1="<table border='2'><tr><th>Attendance</th><th>Date Of Time</th></tr>";
	while($row=$result->fetch_assoc())
	{
      $str1.="<tr><td>".$row["ispresent"]."</td><td>".$row["dot"]."</td></tr>";
	}
    
    
    $str1.="</table>";
	echo $str1;
	
?>


</form>

</div>
</div>
</div>