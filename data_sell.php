<?php
include "connect.php";
$cusname=$_POST["name"];
$cuscnic=$_POST["cnic"];
$date=$_POST["add"];
$carno=$_POST["car_no"];
$carpri=$_POST["car_pri"];
$color=$_POST["car_col"];
$seet=$_POST["car_seet"];
$des=$_POST["des"];
$qry="INSERT INTO seller values('','".$cusname."','".$cuscnic."', '".$carno."', '".$date."' )"; 
if($con->query($qry))
{
//	echo "right";
}
$qry1="INSERT INTO car_info values('".$carno."','".$color."', '".$seet."', '".$des."','".$carpri."' )" ;
//echo "$qry1";
if($con->query($qry1))
{
	//echo "right";
}
header("location:select.php");

?>