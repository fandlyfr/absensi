<?php
/* Database connection settings */
	$servername = "localhost";
    $username = "root";		//put your phpmyadmin username.(default is "root")
    $password = "1234";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "biometricattendace";
    
    // $servername = "localhost";
    // $username = "fanfanmy_admin";		//put your phpmyadmin username.(default is "root")
    // $password = "fanfanmy123";			//if your phpmyadmin has a password put it here.(default is "root")
    // $dbname = "fanfanmy_biometricattendace";
    
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
?>