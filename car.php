<?php
include "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>serch invoice</title>
	 <link rel="icon" href="ss3.gif" type="image/gif">
	 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/tablestyles.css" rel="stylesheet">
	<Style>
	.tblh{
		background: #415451;
		font-size: 14px;
		color: white;
	}
	.trow1{
		font-size: 12px;
		background:#445566;
		color: white; 
	}
	.trow2{
		font-size: 12px;
		background:#455667;
		color: white; 
	}
	.bod
	{
		background-color: gray;
	}
</Style>
</head>
<body class="bod" background="back.jpg">
	 <div class="page-header" align='center'>
            <h2>Available Cars </h2>
        </div>
<?php
$qry="SELECT * FROM  car_info ";
$res=$con->query($qry);
$row1="";
  $result = "<div class='form-group row'>";
$result .= "<div class='col-sm-2'></div>";
if($res->num_rows>0)
{
				
                $class = "trow1";
                $count =1;
				$result .= "<div class='col-sm-8'>";
                $result .= "<table class='table table-bordered'>";
				$result .= "<th class='tblh'>  Car No </th> <th class='tblh'> Car color </th><th class='tblh' >Car Seets</th><th class='tblh' >Car Price</th><th class='tblh' >Car Description</th>";
				//echo "ahmad";
				while ($row = $res->fetch_assoc()) 
				{
					//one row
					$result .= "<tr class='".$class."'>
									<td>
										".$row['car_no']."
									</td>
									<td>
										".$row['car_color']."
									</td>
											<td>
										".$row['car_seets']."
									</td>
									<td>
										".$row['car price']."
									</td>	
											<td>
										".$row['car_description']."
									</td>										
								</tr>";
                   if(($count%2)==0)
                        $class = "trow1";
                    else 
                        $class = "trow2";                
                    $count++;
                  				}
				$result .= "</table>";
                $result .= "</div>";
			}
			else
				$result = "No record found";            
            $result .= "<div class='col-sm-2'></div></div>";
			 echo $result;
?>
<div class="form-group row">
	<div class="col-sm-7"></div>
<button onclick="myFunction()" class="btn btn-primary" class="col-sm-2">Print </button>
	<div class="col-sm-4"></div>
</div>
</body >
<script>
function myFunction() {
    window.print();
}
</script>
</body>
</html>