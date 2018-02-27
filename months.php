<!DOCTYPE html>
<html>
<head>
	<title>MONTHS</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<?php 
		$year = date('y');
		$feb;
		if($year % 4 == 0){
			$feb = 29;
		}else{
			$feb = 28;
		}
		$months= [
			"JANUARY" => 31,
			"FEBRUARY" => 28,
			"MARCH" => 31,
			"APRIL" => 30,
			"MAY" => 31,
			"JUNE" => 30,
			"JULY" => 31,
			"AUGUST" => 31,
			"SEPTEMBER" => 30,
			"OCTOBER" => 31,
			"NOVEMBER" => 30,
			"DECEMBER" => 31,
		];
		function month($montharray){
			foreach($montharray as $months => $days){
				$monthsupper = strtoupper($months);
				echo "<option value ='$monthsupper'>$monthsupper</option>";
			}
		}

	?>
	<div class="container-fluid text-center">
		<h1>Choose the month</h1>
			<form action="months.php" method="post">

				<div class="form-group">
					<select class="Form-control" name="month_dropdown">
						<?php 
							month($months);

						 ?>
					</select>
				</div>
				<input type="Submit" name="Submit" value="Choose month">
			</form>
		
	
	<?php 

	echo "<br />";
		if(isset($_POST['Submit'])){
			$monthselected = $_POST['month_dropdown'];
			$date = $months[$monthselected];

			if($monthselected !== "February"){
				echo "The month of $monthselected has $date days";
			}
			else{
				if($date == 29){
					echo "The month of $monthselected has $days days because its  a leap year";
				}else{
					echo "The month of $monthselected has $date days because it is not a leap year";
				}
			}
		}






	 ?>
	 </div>


</body>
</html>