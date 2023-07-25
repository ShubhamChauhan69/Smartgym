<?php session_start(); ?>
	<?php
	include_once("header.php");
	?>

	<?php

	$tid=$_SESSION["tid"];
	$cnn=mysqli_connect("localhost","root","","dbproject");
	$qry="select * from trainer where tid='$tid'";
	$result=$cnn->query($qry);
	$row=$result->fetch_assoc();
	$tuname=$row["tuname"];
	$tpwd=$row["tpwd"];
	$fname=$row["fname"];
	$lname=$row["lname"];
	$img=$row["img"];
	$email=$row["email"];
	$contactno=$row["contactno"];
//	date_default_timezone_get("Asia/kolkata");
	$doj=date("Y-m-d");
	$dob=$row["dob"];
	


//echo $qry;
	if(isset($_POST["btnSubmit"]))
{
	$tuname=$_POST["txttuname"];
	$tpwd=$_POST["txttpwd"];
	$fname=$_POST["txtfname"];
	$lname=$_POST["txtlname"];
	$img=$_POST["txtimg"];
	$email=$_POST["txtem1"];
	$contactno=$_POST["txtcontactno"];
	//date_default_timezone_get("Asia/kolkata");
	$doj=date("Y-m-d");
	$dob=$_POST["txtdob"];
	$qry="Update trainer set tuname='$tuname',tpwd='$tpwd',fname='$fname',lname='$lname',img='$img',email='$email',contactno='$contactno',dob='$dob' where tid=$tid";
	$result=$cnn->query($qry);

}	
	?>

	<form name="form1" method="post">

<div class="card card-login mx-auto mt-5">
      <div class="card-header"></div>
      <div class="card-body">
        <div>User Name</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txttuname" value="<?php echo $tuname; ?>"> 
            </div>
          </div>

          <div>Password</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txttpwd" value="<?php echo $tpwd; ?>"> 
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
              <input type="text" class="form-control" name="txtem1" value="<?php echo $email; ?>">
           	</div>
          </div>

          <div>Call</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtcontactno" value="<?php echo $contactno; ?>">
           	</div>
          </div>

          
          <div>Birthdate</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtdob" value="<?php echo $dob; ?>">
           	</div>
          </div>
          <input type="Submit" name="btnSubmit" class="btn btn-primary btn-block" value="Submit">
       </div>
    </div>

</div>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
