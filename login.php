<?php
include "connect.php";
?>

<html>
<head>
    <title>Log In</title>
         <link rel="icon" href="ss3.gif" type="image/gif">
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bclr{
            background: #F3F2F2;
        }
    </style>
</head>
<body background="back1.jpg">
     <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html"> <img src="logo.png" width="150" height="40" alt=""></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
             <li class="nav-item ">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="car.php">cars</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="login.php">login</a>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
     <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">login</li>
      </ol>
<form action='login_try.php' method='post'>
        <div class="page-header" align='center'>
            <h2>Login</h2>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
            <input type="text" name="name" class="form-control col-sm-4" placeholder="User Name" required>
            <div class="col-sm-4"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
            <input type="Password" name="pass" class="form-control col-sm-4" placeholder="Password" required>
            <div class="col-sm-4"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
            <input type='submit' value='Log In' class="btn btn-primary col-sm-4">
            <div class="col-sm-4"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <?php 
                        if(isset($_GET["message"]))
                        {
                            echo "<p class='alert alert-danger'>";
                            echo $_GET['message'];
                            echo "</p>";
                        }
                ?>
            </div>
            <div class="col-sm-4"></div>
        </div>                                    
</form>
</body>
</html>









