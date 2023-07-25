<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Tips</div>
<div class="card-body">


<div class="animated fadeIn">

<?php
{
$cnn=mysqli_connect("localhost","root","","dbproject");

$result=$cnn->query("select * from tips");

$str="<table class='table table-bordered dataTable'><tr><th>Tips Title</th><th>Tips Description</th><th>Edit</th><th>Delete</th><tr>";

while($row=$result->fetch_assoc())

{
    $id=$row["tid"];
    $str.="<tr><td>".$row["ttitle"]."</td><td>".$row["tdescription"]." </td><td><a href='tipsedit.php?Id=$id'><img src='image/del.png' height='30' width='30'></a></td><td><a href='tipsdelete.php?Id=$id'><img src='image/edit.png' height='30' width='30'></a></td></tr>";
}
$str.="</table>";
echo $str;
}
?>


                    <!-- /# column -->
                </div>




            </div>
</div>
</div>
</div>

	<?php include_once("footer.php");?>