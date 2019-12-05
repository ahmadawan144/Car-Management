<?php
include "connect.php";
$cusname=$_POST["name"];
$cuscnic=$_POST["code"];
$count=$_POST["emp_count"];
$add=$_POST["add"];
$qry="INSERT INTO branches values('".$cuscnic."','".$cusname."','".$count."','".$add."' )";
//echo "$qry";
if($con->query($qry))
{
	//echo "right";
}
else
{
	//echo "wrong";
}
header("location:select.php");

?>	