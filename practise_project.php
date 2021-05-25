<?php

// registration of teacher id 

$teacher_use=$_POST['email'];
$teacher_pass=$_POST['Pass'];
$teacher_name=$_POST['name'];
$teacher_phone= $_POST['phone'];

$teacher_subject=$_POST['subject'];

//use these 

$ecoded_pass=bin2hex($teacher_pass);



$connection= mysqli_connect("localhost","root","","shashank") or die("connection failed");

$sql_query= "INSERT INTO teacher_sheet (teacher_userid,teacher_password,NAME_TEAHCER,PHONE_NUMBER,Branch)
VALUES ('{$teacher_use}','{$ecoded_pass}','{$teacher_name}','{$teacher_phone}','{$teacher_subject}')";

$result=mysqli_query($connection,$sql_query) or die("i know why ");

mysqli_close($connection);





?>