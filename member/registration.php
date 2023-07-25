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
    <title>Gym managment - Member</title>
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
        $hig="";
        $wig="";
        $doj="";
        $dob="";
        $pic="";
        $unam="";
        $psw="";
        $e1="";
        $e2="";
        $e3="";
        $e4="";
        $e5="";
        $e6="";
        $e7="";
        $e8="";
        $e9="";
        $e10="";
        $e11="";
        

        if(isset($_POST["btnsubmit"]))
        {

             $fnam=$_POST["txtfnam"];
             $x=0;
             
             if($fnam=="")
             {
                $e1="<font color='red'>plz enter first name</font>";
                $x=1;
                
             }

             $lnam=$_POST["txtlnam"];
             
            if($lnam=="")
             {
                $e2="<font color='red'>plz enter last name</font>";
                $x=1;    
             }

             $email=$_POST["txtmail"];
             
             if($email=="")
             {
                $e3="<font color='red'>plz enter email </font>";
                $x=1;    
             }

            
             $cno=$_POST["txtcno"];

              if($cno=="")
             {
                $e4="<font color='red'>plz enter contact no </font>";
                $x=1;    
             }


             $hig=$_POST["txthig"];

             if($hig=="")
             {
                $e5="<font color='red'>plz enter height</font>";
                $x=1;    
             }

             $wig=$_POST["txtwig"];

               if($hig=="")
             {
                $e6="<font color='red'>plz enter weight</font>";
                $x=1;    
             } 

             $doj=$_POST["txtdoj"];

                if($doj=="")
             {
                $e7="<font color='red'>plz enter date of join</font>";
                $x=1;    
             } 

             $dob=$_POST["txtdob"];

             if($dob=="")
             {
                $e8="<font color='red'>plz enter date of birth </font>";
                $x=1;    
             } 

             $pic=$_POST["txtpic"];

             if($pic=="")
             {
                $e9="<font color='red'>plz insert image</font>";
                $x=1;    
             } 

             $unam=$_POST["txtunam"];

             if($unam=="")
             {
                $e10="<font color='red'>plz enter username</font>";
                $x=1;    
             } 

             $psw=$_POST["txtpsw"];

             if($psw=="")
             {
                $e11="<font color='red'>plz enter password</font>";
                $x=1;    
             } 


            if($x==0)
                {
        $qry="insert into member(uname,pwd,fname,lname,img,email,contactno,height,weight,doj,dob)values('$unam','$psw','$fnam','$lnam','$pic','$email','$cno','$hig','$wig','$doj','$dob')";
        $result=$cnn->query($qry);
            }
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
                            <?php echo $e1; ?>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="txtlnam" class="form-control" placeholder="Last Name">
                            <?php echo $e2; ?>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" class="form-control" name="txtmail" placeholder="Email" >
                            <?php echo $e3; ?>
                        </div>
                        <div class="form-group">
                            <label>Contact</label>
                            <input type="text" class="form-control" placeholder="Phone Number" name="txtcno">
                             <?php echo $e4; ?>
                        </div>
                        <div class="form-group">
                            <label>Hight</label>
                            <input type="text" class="form-control" name="txthig" placeholder="Your Hight" >
                             <?php echo $e5; ?>
                        </div>
                        <div class="form-group">
                            <label>Wight</label>
                            <input type="text" class="form-control" name="txtwig" placeholder="Your wight" >
                            <?php echo $e6; ?>
                        </div>
                        <div class="form-group">
                            <label>Date Of Join</label>
                            <input type="date" class="form-control" placeholder="date of join" name="txtdoj">
                            <?php echo $e7; ?>
                        </div>
                        <div class="form-group">
                            <label>Date Of Birth</label>
                            <input type="date" class="form-control" name="txtdob" placeholder=" date of birth" >
                            <?php echo $e8; ?>
                        </div>
                        <div class="form-group">
                            <label>Profile Picture</label>
                            <input type="file" class="form-control" name="txtpic" placeholder="profile picture" >
                            <?php echo $e9; ?>
                        </div>
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" name="txtunam" placeholder="User Name">
                            <?php echo $e10; ?>
                        </div>
                       
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="txtpsw" placeholder="Password">
                                <?php echo $e11; ?>
                        </div>
                                
                                <a href=""><input type="submit" name="btnsubmit" class="btn btn-success btn-flat m-b-30 m-t-30" value="Sign Up"/></a>
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
