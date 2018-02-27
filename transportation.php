<!DOCTYPE html>	
<html>
<head>
	<title>TRANSPORTTION</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<?php 
		$modesofTransportation = ["Automobile", "jet", "train", "ferry"];
		echo "Travel takes many forms, whether across the country or around the world. Here is list of some of the common means of tranportation";
		echo "<ul>";
		foreach ($modesofTransportation as $key => $value) {
			echo "<li>$value</li>";
		}
		echo "</ul>";
	 ?>
	 <div class="container">
	 	<form action="tranportation.php" method="post">
	 		<div class="form-group">
	 			<label>Add other forms of transportation (separated by commas)</label>
	 			<br>
	 			<input type="text" name="additions" placeholder="Item1, item2, item3 ........">
	 		</div>
	 		<input type="submit" name="submit">
	 	</form>
	 </div>
	 <?php 
	 	if(isset($_POST['submit'])){
	 		$additionsWithspace = $_POST['additions'];
	 		$additionsWithoutspace = str_replace("", "", $additionsWithspace);
		}





	  ?>
			
	
		


</body>
</html>