



<?php 
session_start();
include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Trainer View</div>
<div class="card-body">

<?php

				$tid=$_SESSION["tid"];
				$cnn1=mysqli_connect("localhost","root","","dbproject");
				$id=$_SESSION["tid"];
				$qry1="select actname,timings,day from activity,activitytrainer,trainer where activity.actid=activitytrainer.
				actid and trainer.tid = activitytrainer.tid and trainer.tid=$tid";
	 
								$result=$cnn1->query($qry1);
				$str="<table><tr><th>Activity Name</th><br><th>Timings</th><th>Day</th>";

				while($row=$result->fetch_assoc())
				{

					$str.="<tr><Td>".$row["actname"]."</td><td>".$row["timings"]."</td><td>".$row["day"]."</td><td></tr>";
				}
				$str.="</table>";
				echo $str;

				?>
</div>
</div>
</div>


<?php include_once("footer.php");?>