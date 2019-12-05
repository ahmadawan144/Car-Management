<?php
include "connect.php";

$cusname=$_POST["name"];
$cuscnic=$_POST["cnic"];
$add=$_POST["add"];
$carno=$_POST["car_no"];
$date=$_POST["date"];
$carpri=$_POST["car_pri"];
$agent=$_POST["agent_name"];
$paid=$_POST["paid"];
$qry="INSERT INTO buyer values('','".$cusname."','".$cuscnic."', '".$carno."', '".$add."' )"; 
//if($con->query($qry))
{
	//echo "right";
}
$qry1="INSERT INTO `commition _paid` values('','".$agent."','".$carno."','".$paid."','".$date."')" ;
//echo "$qry1";
if($con->query($qry1))
{
//	echo "right";
}
$qry2="INSERT INTO car_price values('','".$carno."','".$carpri."')" ;
//echo "$qry2";
if($con->query($qry2))
{
	//echo "right";
}
else
{
	//echo "wrong";
}
header("location:select.php");

?>