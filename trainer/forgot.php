<?php 
session_start();
?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Forget Password</div>
<div class="card-body">
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gym managment - Trainer</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="image\logo.png">
    <link rel="shortcut icon" href="image\logo.png">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>


<form name="form1" method="post">

<?php
                $email="";
                $dob="";
                $con="";
                if(isset($_POST["btnSubmit"]))
                {
                $tid=$_SESSION["tid"];
                $cnn1=mysqli_connect("localhost","root","","dbproject");
                $id=$_SESSION["tid"];
                $email=$_POST["txtemail"];
                $dob=$_POST["txtdob"];
                $con=$_POST["txtcon"];

                $qry1="select tpwd from trainer where email='$email' and dob='$dob' and contactno='$con'";
                //echo $qry1;
                $result=$cnn1->query($qry1);
                $str="<table><tr><th>Password</th></tr>";

                while($row=$result->fetch_assoc())
                {

                    $str.="<tr><Td>".$row["tpwd"]."</td></tr>";
                }
                $str.="</table>";
                echo $str;
                }
                ?>  

<form name="form1" method="post">

<div class="card card-login mx-auto mt-5">
      <div class="card-header"></div>
      <div class="card-body">
        <div>Email</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txtemail" value="<?php echo $email; ?>">
            </div>
          </div>


          <div>Date Of Birth</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="date" class="form-control" name="txtdob" value="<?php echo $dob; ?>">
            </div>
          </div>

          <div>Contact No</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtcon" value="<?php echo $con; ?>">
            </div>
          </div>

          <input type="Submit" name="btnSubmit" class="btn btn-primary btn-block" value="Submit">
       </div>
    </div>

        
</div>
</div>
</form>
</div>
</div>
</div>
