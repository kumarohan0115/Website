<?php
require 'Connectivity.php';

$hello= new connective\Connect();//object 
 $use=  $hello->Getservername();


//  echo $hello->Getservername();


header("Location:http:$use");


?>