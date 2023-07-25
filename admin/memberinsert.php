<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Member Details</div>
<div class="card-body">
<?php
if(isset($_POST["btnSubmit"]))
{

$cnn=mysqli_connect("localhost","root","","dbproject");
$uname=$_POST["txtuname"];
$pwd=$_POST["txtpwd"];
$fname=$_POST["txtfname"];
$lname=$_POST["txtlname"];
$img=$_POST["txtimg"];
$email=$_POST["txtemail"];
$contactno=$_POST["txtcontactno"];
$height=$_POST["txtheight"];
$weight=$_POST["txtweight"];
date_default_timezone_get("Asia/kolkata");
$doj=date("Y-m-d");
$dob=$_POST["txtdob"];

$qry="Insert into member(uname,pwd,fname,lname,img,email,contactno,height,weight,doj,dob) values ('$uname','$pwd','$fname','$lname','$img','$email','$contactno','$height','$weight','$doj','$dob')";

echo $qry;
$result=$cnn->query($qry);
echo("<script>location.href='member.php'</script>");
}

?>
<form name="form1" method="post">

<div class="card card-login mx-auto mt-5">
      <div class="card-header"></div>
      <div class="card-body">
        <div>User Name</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txtuname"> 
            </div>
          </div>

          <div>Paasword</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txtpwd"> 
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

          <div>Height</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txtheight"> 
            </div>
          </div>

          <div>Weight</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txtweight"> 
            </div>
          </div>

          <div>Birthdate</div>
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
</div>
</div>
</div>
</div>
</div>
</div>

