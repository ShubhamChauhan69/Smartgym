<?php include_once("header.php");?>


<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Batch Details</div>

<div class="card-body">
<?php
{
$cnn=mysqli_connect("localhost","root","","dbproject");

$result=$cnn->query("select * from batch");

$str="<table class='table table-bordered dataTable'><tr><th>Batch Name</th><th>Batch Timing</th><th>Edit</th><th>Delete</th></tr>";

while($row=$result->fetch_assoc())

{
	$str.="<tr><td>".$row["batchname"]."</td><td>".$row["batchtiming"]."</td><td><a href='batchedit.php?Id=".$row["batchid"]."'><img src='image/del.png' height='30' width='30'></a></td><td><a href='batchdelete.php?Id=".$row["batchid"]."'><img src='image/edit.png' height='30' width='30'></a></td></tr>";
}
$str.="</table>";
echo $str;
}
?>
</div>
</div>
</div>
<?php include_once("footer.php") ?>