<?php 
session_start();
include_once("header.php");?>

<?php

				$tid=$_SESSION["tid"];
				$cnn1=mysqli_connect("localhost","root","","dbproject");
				$id=$_SESSION["tid"];
				$qry1="select actname,timings,day,fname,lname from activity,activitytrainer,trainer where activity.actid=activitytrainer.
				actid and trainer.tid = activitytrainer.tid and trainer.tid=$tid";
	 
				echo $qry1;
				$result=$cnn1->query($qry1);
				$str="<table><tr><th>Activity Name</th>th>Timings</th><th>Day</th><th>Fname</th><th>Lname</th>";

				while($row=$result->fetch_assoc())
				{

					$str.="<tr><Td>".$row["actname"]."</td><td>".$row["timings"]."</td><td>".$row["day"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td></tr>";
				}
				$str.="</table>";
				echo $str;

				?>


<?php include_once("footer.php");?>