<?php

	/*echo ($_POST['fname'].'<br>'.$_POST['lname'].'<br>'.$_POST['age'].'<br>'.$_POST['city'].'<br>');*/


						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname= "php_day_01";
						$conn = new mysqli($servername, $username, $password,$dbname);

	$sql = 'INSERT INTO users ( fname, lname, age, city) 
			VALUES ( "'.$_POST['fname'].'", "'.$_POST['lname'].'",' .$_POST['age'].',"'.$_POST['city'].'")';



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
			$conn->close();


?>