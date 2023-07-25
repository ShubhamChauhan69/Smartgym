<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Admin Details</div>
<div class="card-body">
<?php

if(isset($_POST["btnSubmit"]))
{

$cnn=mysqli_connect("localhost","root","","dbproject");
$auname=$_POST["txtauname"];
$pwd=$_POST["txtpwd"];
$fname=$_POST["txtfname"];
$lname=$_POST["txtlname"];
$aimg=$_POST["txtaimg"];
$email=$_POST["txtemail"];
$contactno=$_POST["txtcontactno"];
$aid=$_GET["Id"];
$qry="Delete from admin where aid=$aid";
//echo $qry;
$result=$cnn->query($qry);
echo("<script>location.href='admin.php'</script>");
}


$id=$_GET["Id"];
$cnn=mysqli_connect("localhost","root","","dbproject");
$qry="select * from admin where aid=$id";


$result=$cnn->query($qry);
$row=$result->fetch_assoc();
$auname=$row["auname"];
$pwd=$row["pwd"];
$fname=$row["fname"];
$lname=$row["lname"];
$aimg=$row["aimg"];
$email=$row["email"];
$contactno=$row["contactno"];

?>
<form name="form1" method="post">

<div class="card card-login mx-auto mt-5">
      <div class="card-header"></div>
      <div class="card-body">
        <div>User Name</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txtauname" value="<?php echo $auname; ?>"> 
            </div>
          </div>

          <div>Paasword</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txtpwd" value="<?php echo $pwd; ?>"> 
            </div>
          </div>



          <div>First Name</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtfname" value="<?php echo $fname; ?>"> 
           	</div>
          </div>

          <div>Last Name</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtlname" value="<?php echo $lname; ?>"> 
           	</div>
          </div>

         


          <div>Pic</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtaimg" value="<?php echo $aimg; ?>"> 
            </div>
          </div>

          <div>Email</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtemail" value="<?php echo $email; ?>"> 
           	</div>
          </div>

          <div>Call</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtcontactno" value="<?php echo $contactno; ?>"> 
           	</div>
          </div>
          <input type="Submit" name="btnSubmit" class="btn btn-primary btn-block" value="Submit">
       </div>
    </div>

         

</form>
</div>
</div>
</div>
</div>
</div>


