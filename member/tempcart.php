		<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            GYM PACKAGE</div>
<div class="card-body">
<?php



	$cnn=mysqli_connect("localhost","root","","dbproject");
	
if(isset($_POST["btnSubmit"]))
{	
	//session_start();
	//$id=$_SESSION["mid"];
	$id=1;
	//date_default_timezone_set('Asia/Kolkata');
	$date=date("Y-m-d");

	$cnn=mysqli_connect("localhost","root","","dbproject");
	
	$str1="insert into ordersmst(odate,mid)values('$date','$id')";	
	echo "<h1>".$str1."</h1>";
	$result=$cnn->query($str1);
	$strt="Select max(oid) as oid from ordersmst";
	$result2=$cnn->query($strt);
	$row2=$result2->fetch_assoc();
	$oid=$row2["oid"]; 
	echo "<h1>".$oid."</h1>";

	$qry="select * from tempcard";
	echo "<h1>".$qry."</h1>";
	$results=$cnn->query($qry);

	while($row=$results->fetch_assoc())
	{	
		$pid=$row["pid"];
		$pname=$row["pname"];
		$qty=$row["qty"];
		$total=$row["pq"];
		$pimg=$row["img"];
		$str3="insert into orderdetailmst(oid,pid,pname,qty,pq,image) values('$oid','$pid','$pname','$qty','$total','$pimg')";
		echo $str3;
		$result3=$cnn->query($str3);
	}

				//clear cart after thos qry..
	$str4="Delete from tempcard";
	echo $str4;
	$result3=$cnn->query($str4);


	//echo("<script>location.href='prj/paytm/pgRedirect.php'</script>");
	//echo("<script>location.href='http://localhost:prj/paytm/pgRedirect.php'</script>");
	
	echo("<script>location.href='thankyou.php'</script>");


}


$x=0;
$result=$cnn->query("select * from tempcard");

$str="<table class='table'><tr><th>product Name</th><th>Price</th><th>Pic</th><th>Quantity</th><th>Total</th></tr>";

while($row=$result->fetch_assoc())

{
	$str.="<tr><td>".$row["pname"]."</td><td>".$row["price"]." RS</td><td><img src='image/".$row["img"]."' height='100' width='100'></td><td>".$row["qty"]."</td><td>".$row["pq"]."</td></tr>";
	$x=$x+$row["pq"];
}
$str.="</table><Br>Total = $x Rs.";
echo $str;

?>
<form name="frm1" method="post">



<input type="Submit" name="btnSubmit" class="btn btn-primary btn-block" value="Conform 	Order">


</form>
</div>
</div>
</div>
<?php include_once("footer.php");?>