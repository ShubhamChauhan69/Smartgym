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
$mid=$_GET["Id"];
$qry="view from member where mid=$mid";
//echo $qry;
$result=$cnn->query($qry);
echo("<script>location.href='member.php'</script>");
}


$id=$_GET["Id"];
$cnn=mysqli_connect("localhost","root","","dbproject");
$qry="select * from member where mid=$id";
$result=$cnn->query($qry);
$row=$result->fetch_assoc();
$uname=$row["uname"];
$pwd=$row["pwd"];
$fname=$row["fname"];
$lname=$row["lname"];
$img=$row["img"];
$email=$row["email"];
$contactno=$row["contactno"];
$height=$row["height"];
$weight=$row["weight"];
date_default_timezone_get("Asia/kolkata");
$doj=date("Y-m-d");
$dob=$row["dob"];

?>
<form name="form1" method="post">

<div class="card card-login mx-auto mt-5">
      <div class="card-header"></div>
      <div class="card-body">
        <div>User Name</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txtuname" value="<?php echo $uname; ?>" readonly> 
            </div>
          </div>

          <div>Paasword</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txtpwd" value="<?php echo $pwd; ?>" readonly> 
            </div>
          </div>



          <div>First Name</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtfname" value="<?php echo $fname; ?>" readonly> 
           	</div>
          </div>

          <div>Last Name</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtlname" value="<?php echo $lname; ?>" readonly> 
           	</div>
          </div>


          <div>Pic</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtimg" value="<?php echo $img; ?>" readonly> 
            </div>
          </div>

          <div>Email</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtemail" value="<?php echo $email; ?>" readonly> 
           	</div>
          </div>

          <div>Call</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtcontactno" value="<?php echo $contactno; ?>" readonly> 
           	</div>
          </div>

          <div>Height</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txtheight" value="<?php echo $height; ?>" readonly> 
            </div>
          </div>

          <div>Weight</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txtweight" value="<?php echo $weight; ?>" readonly>  
            </div>
          </div>

          <div>Birthdate</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtdob" value="<?php echo $dob; ?>" readonly> 
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
</form>
</form>
</div>
</div>
</div>

