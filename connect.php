<?php

$server="localhost";
$user="root";
$pass="";
$dbname="moter_car";
$con=new mysqli($server,$user,$pass,$dbname);
//echo "ahmad awan";
if($con->connect_error)

	echo"error :",$con->connec_error;


?>