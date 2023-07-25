<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Tips Detais</div>
<div class="card-body">
<?php
if(isset($_POST["btnSubmit"]))
{

$cnn=mysqli_connect("localhost","root","","dbproject");
$tid=$_GET["id"];
$ttitle=$_POST["txtttitle"];
$tdescription=$_POST["txttdescription"];
$qry="Delete from tips where tid=$tid";
//echo $qry;
$result=$cnn->query($qry);
echo("<script>location.href='tipsshow.php'</script>");
}
$id=$_GET["Id"];
$cnn=mysqli_connect("localhost","root","","dbproject");
$qry="select * from tips where tid=$id";


$result=$cnn->query($qry);
$row=$result->fetch_assoc();
$tid=$row["tid"];
$ttitle=$row["ttitle"];
$tdescription=$row["tdescription"];
?>
<form name="form1" method="post">

<div class="card card-login mx-auto mt-5">
      <div class="card-header"></div>
      <div class="card-body">
        <div>Tips No</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txttid" 
              value="<?php echo $tid; ?>">
              
            </div>
          </div>
          <div>Tips Title</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtttitle" value="<?php echo $txtttitle; ?>">
            </div>
          </div>

          <div>Tips Description</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txttdescription"  value="<?php echo $tdescription; ?>">
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