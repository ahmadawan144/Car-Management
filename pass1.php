<?php
include "connect.php";
session_start();

        IF (!isset($_SESSION["user"]))
{
    header("location:login.php");
}
    else
        $msg="welcom  ".$_SESSION["user"];
    $qry="UPDATE ` moter_owner` SET`password`='".$_POST['code']."' WHERE name='".$_SESSION["user"]."'";
    echo "$qry";
    if($con->query($qry))
{
	//echo "right";
}
else
{
	//echo "wrong";
}
header("location:select.php")
 ?>