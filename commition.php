<?php
include "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>profit</title>
	
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
<body class="bod">
	<form action="" method="post">
	<div class="page-header" align="center">
		<h3>serch ON Agent</h3>
	</div>
	<div class="form-group row">
		<div class="col-sm-4"></div>
		<input type="text" name="cusname" class="form-control col-sm-3" placeholder="Agent  name">
		<input type="submit" value="serch"  class="btn btn-primary" class="form-control col-sm-1" >
		<div class="col-sm-4" onclick="about"></div>
	</div>
	</form>
	 <div class="page-header" align='center'>
            <h2>Total summery</h2>
        </div>
<?php
		if(isset($_POST["cusname"]))
		{	
			$cusname=$_POST["cusname"];
			$qry="SELECT * from `commition _paid`  WHERE agent_nmae='".$cusname."'";
			//echo "$qry";
			$res=$con->query($qry);
			$row1="";
			$total=" ";
			  $result = "<div class='form-group row'>";
			$result .= "<div class='col-sm-2'></div>";
			if($res->num_rows>0)
			{
							$pro=" ";
			                $class = "trow1";
			                $count =1;
							$result .= "<div class='col-sm-8'>";
			                $result .= "<table class='table table-bordered'>";
							$result .= "<th class='tblh'>  Agent Name </th> <th class='tblh'> Car No </th><th class='tblh' >Commition </th>";
							//echo "ahmad";
							while ($row = $res->fetch_assoc()) 
							{
													$result .= "<tr class='".$class."'>
												<td>
													".$row['agent_nmae']."
												</td>
												<td>
													".$row['car_ no']."
												</td>
														<td>
													".$row['paid']."
												</td>										
											</tr>";
											$total=$row['paid']+$total;
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
						 $result2="";
			$result2 .="<div class='form-group row' align='center'>";
			$result2 .= "<div class='col-sm-4'></div>";
			$result2 .= "<div class='col-sm-4' >";
			$result2 .= "<table class='table table-bordered'>";
			$result2 .= "<tr>
								<td class='line'>
									Total commition paid
								</td>
								<td>
									".$total."
								</td>
						</tr>";
								$result2 .= "</table></div>";
								$result2 .= "<div class='col-sm-4'></div>";
								$result2 .="</div>";
								echo  $result2;
			
			
			}
else {
		$qry= "SELECT * from `commition _paid` ";
		//echo "$qry";
		$res=$con->query($qry);
		$row1="";
		$total=" ";
		  $result = "<div class='form-group row'>";
		$result .= "<div class='col-sm-2'></div>";
		if($res->num_rows>0)
		{
						$pro=" ";
		                $class = "trow1";
		                $count =1;
						$result .= "<div class='col-sm-8'>";
		                $result .= "<table class='table table-bordered'>";
						$result .= "<th class='tblh'>  Agent Name </th> <th class='tblh'> Car No </th><th class='tblh' >Commition </th>";
						//echo "ahmad";
						while ($row = $res->fetch_assoc()) 
						{
							$result .= "<tr class='".$class."'>
											<td>
												".$row['agent_nmae']."
											</td>
											<td>
												".$row['car_ no']."
											</td>
													<td>
												".$row['paid']."
											</td>										
										</tr>";
										$total=$row['paid']+$total;
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
					 $result2="";
		$result2 .="<div class='form-group row' align='center'>";
		$result2 .= "<div class='col-sm-4'></div>";
		$result2 .= "<div class='col-sm-4' >";
		$result2 .= "<table class='table table-bordered'>";
		$result2 .= "<tr>
							<td class='line'>
								Total commition paid
							</td>
							<td>
								".$total."
							</td>
					</tr>";
							$result2 .= "</table></div>";
							$result2 .= "<div class='col-sm-4'></div>";
							$result2 .="</div>";
		echo  $result2;		
}
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