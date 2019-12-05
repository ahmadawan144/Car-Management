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
	<title>select</title>
        <link rel="icon" href="ss3.gif" type="image/gif">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style >
	.bod
	{
		background-color: gray;
	}
</style>
</head>
<body class="bod" background="back.jpg" >
    <div align="right">
        <span>
            <?php
            echo "$msg";
            ?>
            <a href="logout.php"> Logout </a>
        </span>
	 <div class="page-header" align='center'>
            <h2  style="color: #3AAFA9">select one option</h2>
        </div>

		<div class="form-group row">
            <div class="col-sm-4" class=""></div>
           <a href="cus_data.php" class="btn btn-default btn-lg active col-sm-4 bg-dark text-white"> Add Buyer</a>
            <div class="col-sm-4"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
           <a href="sell_data.php" class="btn btn-default btn-lg active col-sm-4 bg-dark text-white">  Add Seller & car</a>
            <div class="col-sm-4"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
           <a href="agn_data.php" class="btn btn-default btn-lg active col-sm-4 bg-dark text-white">  Add Agent</a>
            <div class="col-sm-4"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
           <a href="emp_data.php" class="btn btn-default btn-lg active col-sm-4 bg-dark text-white"> Add emploeey</a>
            <div class="col-sm-4"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
           <a href="own_data.php" class="btn btn-default btn-lg active col-sm-4 bg-dark text-white"> Add Owner</a>
            <div class="col-sm-4"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
           <a href="bar_data.php" class="btn btn-default btn-lg active col-sm-4 bg-dark text-white "> Add Branch</a>
            <div class="col-sm-4"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
           <a href="profit.php" class="btn btn-default btn-lg active col-sm-4 bg-dark text-white "> profit</a>
            <div class="col-sm-4"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
           <a href="commition.php" class="btn btn-default btn-lg active col-sm-4 bg-dark text-white "> commitin paid</a>
            <div class="col-sm-4"></div>
        </div>
         <div class="form-group row">
            <div class="col-sm-4"></div>
           <a href="pass.php" class="btn btn-default btn-lg active col-sm-4 bg-dark text-white "> change Your Password</a>
            <div class="col-sm-4"></div>
        </div>

</body >
</html>