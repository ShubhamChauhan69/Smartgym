<?php include_once("header.php") ?>
		<div class="Page-header">
			<h1>
				Order
				<small>
					<i class="ace-icon fa fa-angle-double-right"></i>
					OverView &amp; stats
					<ol class="breadcrumb">
            			<li class="breadcrumb-item">
              			<a href="home_admin.php">Home</a>
          				</li>
          			</ol>	
				</small>
			</h1>
		</div>

<?php
$cnn=mysqli_connect("localhost","root","","dbproject");

$str1="select 
	ordersmst.oid,ordersmst.odate,member.fname,member.lname from ordersmst,member";

$result=$cnn->query($str1);
//echo $str1;
	

$str="<table border='2' class='table table-bordered table-hover'><tr><th>Order Id</th><th>Order Date</th><th>Member First Name</th><th>Member Last Name</th></tr>";	

while($row=$result->fetch_assoc())
{
	$str.="<tr><td><a href='orderdetail.php?Id=".$row["oid"]."'>View</a></td><td>".$row["odate"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td></tr>";
}

$str.="</table>";

echo $str;

?>

<?php include_once("footer.php") ?>