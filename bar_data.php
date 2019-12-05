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
		<h1>Enter new branch</h1>
	</div>
<form action="data_bar.php" method="POST">
	
<div class="form-group row">

	<div class="col-sm-4"></div>
	<input type="text" name="name" class="form-control col-sm-4" placeholder="Branch name">
	<div class="col-sm-4"></div>
</div>
<div class="form-group row">
	<div class="col-sm-4"></div>
	<input type="text" name="code" class="form-control col-sm-4" placeholder="Branch code">
	<div class="col-sm-4"></div>
</div>
<div class="form-group row">
	<div class="col-sm-4"></div>
	<input type="text" name="add" class="form-control col-sm-4" placeholder="Address">
	<div class="col-sm-4"></div>
</div>

<div class="form-group row">
	<div class="col-sm-4"></div>
	<input type="text" name="emp_count" class="form-control col-sm-4" placeholder="no of emploeey">
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