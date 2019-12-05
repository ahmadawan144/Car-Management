<?php
include "connect.php";
session_start();
$user=$_POST['name'];
$pas=$_POST['pass'];
$qry="SELECT * FROM ` moter_owner` WHERE name='$user'";
//echo "$qry";
$row=" ";
$res=$con->query($qry);
//echo "$res";
if($res->num_rows>0)
{
//echo "user found"; 
	if($row=$res->fetch_assoc())
	{

		if($pas==$row['password'] )
		{
			$_SESSION["user"]=$user;
				//echo "welcome ";
					$msg= $row['name'];		
				header("location:select.php?message=$msg");
		}
		else
		{
			//echo "welcome  wroong";
			$msg= "password wrong";
			header("location:login.php?message=$msg");
		}
	}	
		//invalid password
}
else
{
		//echo "user not exit";
	$msg= "user not exit";
	header("location:login.php?message=$msg");
	//user not found
}
?>