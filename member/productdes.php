<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Product</div>
            

<div class="card-body">



<?php
$id=$_GET["Id"];
$cnn=mysqli_connect("localhost","root","","dbproject");
$qry="select pid,pname,price,pimg from product where pid=$id";

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

if(isset($_POST["btnSubmit"]))
{
  $cnn=mysqli_connect("localhost","root","","dbproject");

$id=$_GET["Id"];

$qry="select pid,pname,price,pimg from product where pid=$id";

//echo $qry;

$result=$cnn->query($qry);

$row=$result->fetch_assoc();

#insert in Tmpcart table...
$pname=$row["pname"];
$price=$row["price"];
$img=$row["pimg"];
$qty=$_POST["cmbqty"];
$pq=$price*$qty;

$id=$_GET["Id"];
$qry="insert into tempcard(pid,pname,price,img,qty,pq)values('$id','$pname','$price','$img','$qty','$pq') ";
//echo $qry;
$result=$cnn->query($qry);

  echo "<a href='Tempcart.php'><font color='red'><h3>View Cart</h3></font></a>";


}

?>


	<form name="form1" method="post">

<div class="card card-login mx-auto mt-5">
      <div class="card-header"></div>
      <div class="card-body">
        <div>Quantity</div>
          <div class="form-group">
            <div class="form-label-group">
              <select  class="form-control" name="cmbqty">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              </select> 
            </div>
          </div>

          <input type="Submit" name="btnSubmit" class="btn btn-primary btn-block" value="Add To Cart">

         
          </div>
          </div>
          </form>
          </div>
          </div>
          </div>
          
</div>
</div>
</div>
