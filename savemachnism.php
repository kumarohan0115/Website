<?php

$USER=$_POST['uid'];

$USER_PASSWORD=$_POST['pass'];

$decoded_pass=bin2hex($USER_PASSWORD);


$connect=mysqli_connect("localhost","root","","shashank") or die("connection failed ");

$login="SELECT *FROM teacher_sheet WHERE teacher_userid = '{$USER}' AND teacher_password = '{$decoded_pass}'";

$FINALLY_result=mysqli_query($connect,$login) or die("failed") ;

if(mysqli_num_rows($FINALLY_result)>0)
{
    header("Location:http://localhost//Github//student.txt");

}
else{
    header("Location:http://localhost//Github//login.php");
}

mysqli_close($connect);

?>
