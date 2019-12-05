<?php
include "connect.php";
$cusname=$_POST["name"];
$cuscnic=$_POST["code"];
$add=$_POST["sal"];
$qry="INSERT INTO emploeey values('','".$cusname."','".$cuscnic."',  '".$add."' )";
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