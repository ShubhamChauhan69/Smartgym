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
$Gpname=$_POST["txtGpname"];
$Gpprice=$_POST["txtGpprice"];
$Gpimg=$_POST["txtGpimg"];
$Gpid=$_GET["Id"];
$qry="Update gympackage set Gpname='$Gpname',Gpprice='$Gpprice',Gpimg='$Gpimg',Gpname='$Gpname' where Gpid=$Gpid";
//echo $qry;
$result=$cnn->query($qry);
echo("<script>location.href='packageshow.php'</script>");
}

$id=$_GET["Id"];
$cnn=mysqli_connect("localhost","root","","dbproject");
$qry="select * from gympackage where gpid=$id";
//echo $qry;

$result=$cnn->query($qry);
$row=$result->fetch_assoc();
$Gpname=$row["Gpname"];
$Gpprice=$row["Gpprice"];
$Gpimg=$row["Gpimg"];

?>
<form name="form1" method="post">

<div class="card card-login mx-auto mt-5">
      <div class="card-header"></div>
      <div class="card-body">
        <div>Package Name</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txtGpname" 
              value="<?php echo $Gpname; ?>">
              
            </div>
          </div>
          <div>Price</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtGpprice" value="<?php echo $Gpprice; ?>">
            </div>
          </div>

          <div>Pic</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtGpimg"  value="<?php echo $Gpimg; ?>">
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