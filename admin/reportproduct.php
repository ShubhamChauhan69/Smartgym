<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Product</div>
            

<div class="card-body">
<?php

$cnn=mysqli_connect("localhost","root","","dbproject");
$qry="select pid,pname,price,pimg from product";

$result=$cnn->query($qry);

$str="<table class='table'>";
$x=1;
while($row=$result->fetch_assoc())
{
	if($x==1)
	{
		$str.="<tr>";
	}
	$x++;


	$str.="<td><a href='ProductDes.php?Id=".$row["pid"]."'>".$row["pname"]."</a><br>".$row["price"]." RS<br><img src='image/".$row["pimg"]."' height='100' width='100'></td>";
	if($x==5)
	{
		$str.="</tr>";
		$x=1;
	}
}
$str.="</table>";
echo $str;

?>


	<form name="form1" method="post">

          </form>
          </div>
          </div>
          </div>
          
</div>
</div>
</div>
