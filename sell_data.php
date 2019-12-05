<?php

include "connect.php";
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
	<p align="right" > welcome</p>
	<div class="page-header" align="center">
		<h1>Enter seller & car  data</h1>
	</div>
<form action="data_sell.php" method="POST">	
<div class="form-group row">
	<div class="col-sm-4"></div>
	<input type="text" name="name" class="form-control col-sm-4" placeholder="custmer name">
	<div class="col-sm-4"></div>
</div>
<div class="form-group row">
	<div class="col-sm-4"></div>
	<input type="text" name="cnic" class="form-control col-sm-4" placeholder="custmer cnic">
	<div class="col-sm-4"></div>
</div>
<div class="form-group row">
	<div class="col-sm-4"></div>
	<input type="text" name="add" class="form-control col-sm-4" placeholder="Address">
	<div class="col-sm-4"></div>
</div>
<div class="form-group row">
	<div class="col-sm-4"></div>
	<input type="text" name="car_no" class="form-control col-sm-4" placeholder="Car No">
	<div class="col-sm-4"></div>
</div>
<div class="form-group row">
	<div class="col-sm-4"></div>
	<input type="text" name="car_pri" class="form-control col-sm-4" placeholder="Car price">
	<div class="col-sm-4"></div>
</div>
<div class="form-group row">
	<div class="col-sm-4"></div>
	<input type="text" name="car_col" class="form-control col-sm-4" placeholder="car color">
	<div class="col-sm-4"></div>
</div>
<div class="form-group row">
	<div class="col-sm-4"></div>
	<input type="text" name="car_seet" class="form-control col-sm-4" placeholder="car seets">
	<div class="col-sm-4"></div>
</div>
<div class="form-group row">
	<div class="col-sm-4"></div>
	<textarea name="des" class="form-control col-sm-4" placeholder="car description"></textarea>
	<!--<input type="text" name="car_des" class="form-control col-sm-4" placeholder="car description"-->
	<div class="col-sm-4"></div>
</div>
<div class="form-group row">
	<div class="col-sm-7"></div>
	<input type="submit" value="save" class="col-sm-1" >
	<div class="col-sm-4"></div>
</div>
</form>
</body>
</html>.