<?php
include "connect.php";

$cusname=$_POST["name"];
$cuscnic=$_POST["cnic"];
$gen=$_POST["gender"];
$age=$_POST["age"];
$pass=$_POST["pass"];
$add=$_POST["add"];

$qry2="INSERT INTO ` moter_owner`(`ownerid`, `cnic`, `name`, `gender`, `age`, `password`, `address`) VALUES ('','".$cuscnic."','".$cusname."','".$gen."','".$age."','".$pass."','".$add."')" ;
//echo "$qry2";
if($con->query($qry2))
{
//	echo "right";
}
else
{
//	echo "wrong";
}
header("location:select.php");

?>