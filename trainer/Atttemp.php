

<?php
session_start();
$_SESSION["bid"]=$_REQUEST["cmb1"];
$_SESSION["date"]=$_REQUEST["date"];
header('Location:attendancemember.php');
?>

