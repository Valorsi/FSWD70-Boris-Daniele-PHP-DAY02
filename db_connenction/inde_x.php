<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style type="text/css" media="screen">

	#my_name{

		margin: 0 auto;
		color: red;
		width: 20px;
		line-height: 20em;
	}
	#table{

		width: 100%;
	}

	td{
		border-right: 2px solid darkgray;

	}
	
</style>
<body>

	<div class="container-fluid">
		
<div class="container mt-5">
	
	<form action="form.php" method="POST" accept-charset="utf-8">
		<div>
			<label for="fname">First Name</label>	
		</div>
		<div>
			<input type="text" name="fname">
		</div>
		<div>
			<label for="lname">Last Name</label>	
		</div>
		<div>
			<input type="text" name="lname">
		</div>
		<div>
			<label for="age">Age</label>	
		</div>
		<div>
			<input type="text" name="age">
		</div>
		<div>
			<label for="City">City</label>	
		</div>
		<div>
			<input type="text" name="city">
		</div>
		<div class="mt-3">
			<input type="submit" name="submit">
		</div>
	</form>
</div>
		
				<?php
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname= "php_day_01";
						$conn = new mysqli($servername, $username, $password,$dbname);
					



/*
						$sql = 'SELECT employees.first_name, employees.last_name FROM employees ';





						$result = $conn->query($sql);

							if ($result->num_rows > 0) {
					
							    while($row = $result->fetch_assoc()) {
							        echo  $row["first_name"]." " .$row["last_name"]."<br>";
							    }
							} else {
							    echo "0 results";
							}

*/




							$conn->close();

?>


	</div>
	
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>