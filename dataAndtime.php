<?php
// date_default_timezone_set("Asia/Kolkata");

// date("d:m:y");
date_default_timezone_set("Asia/Kolkata");


// $date = date_create("2021-05-28");


$connect=mysqli_connect("localhost","root","","shashank") or die("NBO");
// $date = $_POST['Date'];


$mysql= "CREATE TABLE '21-05-2021'(P VARCHAR(1),A VARCHAR (1)
)";

$result= mysqli_query($connect,$mysql) or die("no");

// $end=30;
// $starting=1;

// for($starting=1;$starting<=$end;$starting++)
// {
   

//    date_add($date,date_interval_create_from_date_string("1 days"));
//    echo date_format($date,"y-m-d");
//    echo ("<br>");


// }


?>