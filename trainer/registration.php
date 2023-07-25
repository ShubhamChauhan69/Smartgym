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

    <?php
        $cnn=mysqli_connect("localhost","root","","dbproject");
        $fnam="";
        $lnam="";
        $email="";
        $cno="";
        $doj="";
        $dob="";
        $pic="";
        $unam="";
        $psw="";
        if(isset($_POST["btnsubmit"]))
        {
            

             $fnam=$_POST["txtfnam"];
             $lnam=$_POST["txtlnam"];
             $email=$_POST["txtmail"];
             $cno=$_POST["txtcno"];
             $doj=$_POST["txtdoj"];
             $dob=$_POST["txtdob"];
             $img=$_POST["txtpic"];
             $unam=$_POST["txtunam"];
             $psw=$_POST["txtpsw"];

        $qry="insert into trainer(tuname,tpwd,fname,lname,img,email,contactno,doj,dob)values('$unam','$psw','$fnam','$lnam','$pic','$email','$cno','$doj','$dob')";


        $result=$cnn->query($qry);
        


        }
        ?>


</head>

<body class="bg-dark">


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
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="First Name" name="txtfnam">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name"
                            name="txtlnam">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" class="form-control" placeholder="Email" name="txtmail">
                        </div>
                        <div class="form-group">
                            <label>Contact</label>
                            <input type="text" class="form-control" placeholder="Phone Number" name="txtcno">
                        </div>
                        
                        <div class="form-group">
                            <label>Date Of Join</label>
                            <input type="date" class="form-control" placeholder="date of join" name="txtdoj">
                        </div>
                        <div class="form-group">
                            <label>Date Of Birth</label>
                            <input type="date" class="form-control" placeholder=" date of birth" name="txtdob">
                        </div>
                        <div class="form-group">
                            <label>Profile Picture</label>
                            <input type="file" class="form-control" placeholder="profile picture" name="txtpic">
                        </div>
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" placeholder="User Name"
                            name="txtunam">
                        </div>
                       
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="txtpsw">
                        </div>
                        <input type="submit" name="btnsubmit" class="btn btn-success btn-flat m-b-30 m-t-30" value="Sign Up"/>
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
