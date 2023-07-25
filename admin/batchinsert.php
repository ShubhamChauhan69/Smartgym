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

$qry="Insert into batch(batchname,batchtiming) values ('$batchname','$batchtiming')";

//echo $qry;
$result=$cnn->query($qry);
echo("<script>location.href='batch.php'</script>");
}


?>
<form name="form1" method="post">

<div class="card card-login mx-auto mt-5">
      <div class="card-header"></div>
      <div class="card-body">
        <div>Batch Name</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txtbatchname">
              
            </div>
          </div>
          <div>Batch Timming</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtbatchtiming">
            </div>
          </div>

          
          <input type="Submit" name="btnSubmit" class="btn btn-primary btn-block" value="Submit">
       </div>
    </div>


</form>
</div>
</div>
</div>

