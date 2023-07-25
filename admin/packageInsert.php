<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            GYM PACKAGE</div>
<div class="card-body">
<?php
if(isset($_POST["btnSubmit"]))
{

$cnn=mysqli_connect("localhost","root","","dbproject");
$gpname=$_POST["txtGpname"];
$gpprice=$_POST["txtGpprice"];
$gpimg=$_POST["txtGpimg"];

$qry="Insert into gympackage(Gpname,Gpprice,Gpimg) values ('$gpname','$gpprice','$gpimg')";

//echo $qry;
$result=$cnn->query($qry);
echo("<script>location.href='packageshow.php'</script>");
}


?>
<form name="form1" method="post">

<div class="card card-login mx-auto mt-5">
      <div class="card-header"></div>
      <div class="card-body">
        <div>Package Name</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txtGpname">
              
            </div>
          </div>
          <div>Price</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtGpprice">
            </div>
          </div>

          <div>Pic</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtGpimg">
            </div>
          </div>

          <input type="Submit" name="btnSubmit" class="btn btn-primary btn-block" value="Submit">
       </div>
    </div>


</form>
</div>
</div>
</div>
<?php include_once("footer.php");?>
