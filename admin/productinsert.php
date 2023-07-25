<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Product Details</div>
<div class="card-body">
<?php
if(isset($_POST["btnSubmit"]))
{

$cnn=mysqli_connect("localhost","root","","dbproject");
$pname=$_POST["txtpname"];
$price=$_POST["txtprice"];
$pimg=$_POST["txtpimg"];

$qry="Insert into product(pname,price,pimg) values ('$pname','$price','$pimg')";


//echo $qry;
$result=$cnn->query($qry);
echo("<script>location.href='product.php'</script>");
}

?>
<form name="form1" method="post">

<div class="card card-login mx-auto mt-5">
      <div class="card-header"></div>
      <div class="card-body">
        <div>Product Name</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txtpname"> 
            </div>
          </div>

          <div>Price</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txtprice"> 
            </div>
          </div>



          <div>Pic</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtpimg">
           	</div>
          </div>
          <input type="Submit" name="btnSubmit" class="btn btn-primary btn-block" value="Submit">
       </div>
    </div>

</div>
</div>
</div>
</div>
</div>
<?php include_once("footer.php"); ?>