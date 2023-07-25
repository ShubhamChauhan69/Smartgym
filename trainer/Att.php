<?php

$cnn=mysqli_connect("localhost","root","","dbproject");
$pa=$_GET["a"];
$ttid=$_GET["ttid"];
$mid=$_GET["mid"];

$qry="insert into attendance(mid,ttid,ispresent) values('$mid','$ttid','$pa')";
$result=$cnn->query($qry);
header('Location:attendancemember.php');
//echo("<script><a href='attendancemember.php'></script>");
//echo "<script><a href='attendancemember.php?bid=$bid&date=$date'></script>";
?>
