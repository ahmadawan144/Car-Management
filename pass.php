
<?php
include "connect.php";
session_start();

        IF (!isset($_SESSION["user"]))
{
    header("location:login.php");
}
    else
        $msg="welcom  ".$_SESSION["user"];
 ?>
                <!DOCTYPE html>
<html>

<head>
	<title>cust_info</title>
	     <link rel="icon" href="ss3.gif" type="image/gif">
	 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style >
		.bod
		{
			background-color: gray;
		}
	</style>
</head>
<body class="bod">
	<p align="right" >
		<span>
            <?php
            echo "$msg";
            ?> </p>
	<div class="page-header" align="center">
		 
        </span>
		<h1>update Password</h1>
	</div>
<form action="pass1.php" method="POST">
	
<div class="form-group row">

	<div class="col-sm-4"></div>
	<input type="text" name="name" class="form-control col-sm-4" placeholder="Enter Current Password">
	<div class="col-sm-4"></div>
</div>
<div class="form-group row">
	<div class="col-sm-4"></div>
	<input type="text" name="code" class="form-control col-sm-4" placeholder="Enter New  password">
	<div class="col-sm-4"></div>
</div>
<div class="form-group row">
	<div class="col-sm-7"></div>
	<input type="submit" value="save" class="col-sm-1" >
	<div class="col-sm-4"></div>
</div>
</form>
</body>
</html>