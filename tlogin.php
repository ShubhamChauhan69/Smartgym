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

<body class="bg-dark">
 <?php
  $e1=""; 
    if(isset($_POST["btnsubmit"]))
{
  session_start();
  $username=$_POST["txtusername"];
  $pass=$_POST["txtpassword"];
  $cnn=mysqli_connect("localhost","root","","dbproject");
  $str1="select * from trainer where email='$username' && tpwd='$pass'";
  //echo $str1;
  $result=$cnn->query($str1);
  $row=$result->fetch_assoc();
  $_SESSION["tid"]=$row["tid"];
  $x=mysqli_num_rows($result);
  if($x==1)
  {
    echo("<script>location.href='trainer/home.php'</script>");
  }
  else
  {
    $e1="<font color='red'>plese enter valid username or password";
  }
}



     ?>


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
               <div class="login-form">
                    <form method="POST">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="txtusername" placeholder="Email">
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="txtpassword" placeholder="Password">
                                <?php echo $e1;  ?>
                        </div>
                                
                                </div>
                                <input type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="btnsubmit" value="Sign in">
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="trainer/registration.php"> Sign Up Here</a></p>
                                </div>
                                <div class="register-link m-t-15 text-center">
                                    <p> <a href="trainer/forgot.php">Forgot password</a></p>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
