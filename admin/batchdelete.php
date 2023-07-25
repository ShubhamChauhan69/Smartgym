<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Batch Details</div>
<div class="card-body">
<?php

if(isset($_POST["btnSubmit"]))
{

$cnn=mysqli_connect("localhost","root","","dbproject");
$batchname=$_POST["txtbatchname"];
$batchtiming=$_POST["txtbatchtiming"];
$batchid=$_GET["Id"];
$qry="Delete from batch where batchid=$batchid";
//echo $qry;
$result=$cnn->query($qry);
echo("<script>location.href='batch.php'</script>");
}

$id=$_GET["Id"];
$cnn=mysqli_connect("localhost","root","","dbproject");
$qry="select * from batch where batchid=$id";
//echo $qry;

$result=$cnn->query($qry);
$row=$result->fetch_assoc();
$batchname=$row["batchname"];
$batchtiming=$row["batchtiming"];

?>
<form name="form1" method="post">

<div class="card card-login mx-auto mt-5">
      <div class="card-header"></div>
      <div class="card-body">
        <div>Batch Name</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txtbatchname" 
              value="<?php echo $batchname; ?>">
              
            </div>
          </div>
          <div>Batch Timming</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtbatchtiming" value="<?php echo $batchtiming; ?>">
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