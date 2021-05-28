<?php

require 'connectivity.php';

$connc=new connective\Connect();

$student_id=$_POST['SID'];
$student_name=$_POST['F_name'];
$student_branch=$_POST['branch'];
$student_section = $_POST['section'];

$connection= mysqli_connect("localhost","root","","shashank") or die("connection failed");

$query= "INSERT INTO student_table(STU_ID,STU_NAME,BRANCH,SECTION)
VALUES  (
'{$student_id}','{$student_name}','{$student_branch}','{$student_section}')";

$result=mysqli_query($connection,$query) or die("failed");

header("Location:http:enroll_student.php");






mysqli_close($connection);


?>