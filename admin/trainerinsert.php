<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Trainer Details</div>
<div class="card-body">
<?php
if(isset($_POST["btnSubmit"]))
{

$cnn=mysqli_connect("localhost","root","","dbproject");
$tuname=$_POST["txttuname"];
$tpwd=$_POST["txttpwd"];
$fname=$_POST["txtfname"];
$lname=$_POST["txtlname"];
$img=$_POST["txtimg"];
$email=$_POST["txtemail"];
$contactno=$_POST["txtcontactno"];
date_default_timezone_get("Asia/kolkata");
$doj=date("Y-m-d");
$dob=$_POST["txtdob"];

$qry="Insert into trainer(tuname,tpwd,fname,lname,img,email,contactno,doj,dob) values ('$tuname','$tpwd','$fname','$lname','$img','$email','$contactno','$doj','$dob')";


//echo $qry;
$result=$cnn->query($qry);
echo("<script>location.href='trainer.php'</script>");
}

?>
<form name="form1" method="post">

<div class="card card-login mx-auto mt-5">
      <div class="card-header"></div>
      <div class="card-body">
        <div>User Name</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txttuname"> 
            </div>
          </div>

          <div>Paasword</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txttpwd"> 
            </div>
          </div>



          <div>First Name</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtfname">
           	</div>
          </div>

          <div>Last Name</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtlname">
           	</div>
          </div>

         


          <div>Pic</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtimg">
            </div>
          </div>

          <div>Email</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtemail">
           	</div>
          </div>

          <div>Call</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtcontactno">
           	</div>
          </div>

         
</di          <div>Birthdate</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtdob">
           	</div>
          </div>
          <input type="Submit" name="btnSubmit" class="btn btn-primary btn-block" value="Submit">
       </div>
    </div>

</form>
</div>
</div>
</div>
