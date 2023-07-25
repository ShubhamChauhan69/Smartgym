
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
$username=$_POST["txtusername"];
$psw=$_POST["txtpsw"];
$fname=$_POST["txtfname"];
$lname=$_POST["txtlname"];
$img=$_POST["txtimg"];
$email=$_POST["txtemail"];
$contactno=$_POST["txtcontactno"];
$aid=$_GET["Id"];
$qry="Update admin set username='$username',psw='$psw',fname='$fname',lname='$lname',img='$img',email='$email',contactno='$contactno' where aid=$aid";
//echo $qry;
$result=$cnn->query($qry);
echo("<script>location.href='admin.php'</script>");
}


$id=$_GET["Id"];
$cnn=mysqli_connect("localhost","root","","dbproject");
$qry="select * from admin where aid=$id";


$result=$cnn->query($qry);
$row=$result->fetch_assoc();
$username=$row["username"];
$psw=$row["psw"];
$fname=$row["fname"];
$lname=$row["lname"];
$img=$row["img"];
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
              <input type="text"  class="form-control" name="txtusername" value="<?php echo $username; ?>"> 
            </div>
          </div>

          <div>Paasword</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txtpsw" value="<?php echo $psw; ?>"> 
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
              <input type="text" class="form-control" name="txtimg" value="<?php echo $img; ?>"> 
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


