<?php
session_start();

$USER=$_POST['uid'];

$USER_PASSWORD=$_POST['pass'];

$decoded_pass=bin2hex($USER_PASSWORD);

$connect=mysqli_connect("localhost","root","","shashank") or die("connection failed ");

$loged="SELECT NAME_TEAHCER FROM teacher_sheet WHERE teacher_userid = '{$USER}' AND teacher_password = '{$decoded_pass}'";

$FINALLY_result=mysqli_query($connect,$login) or die("failed") ;

$_SESSION['tname']=$loged;

mysqli_close($connect);

?>