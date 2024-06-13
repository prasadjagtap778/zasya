<?php
	
	$dbhost = 'localhost';
    $dbuser = 'zasyaelt_U5er';
    $dbpass = 'Us6Z@5y@1234';
    $dbname = 'zasyaelt_db';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
    if(! $conn ) {
		die('Could not connect: ' . mysqli_error());
	}

?>