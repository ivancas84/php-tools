<?php

$host       = "localhost";
$username   = "planfi10_2020";
$password   = "Marcelita1024";
$dbname     = "planfi10_test2"; // will use later
$dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
			  
			  
try {
$connection = new PDO("mysql:host=$host", $username, $password, $options);

$connection->exec("
  USE	 planfi10_2020;

  CREATE TABLE users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    age INT(3),
    location VARCHAR(50),
    date TIMESTAMP
  );
");
}catch(PDOException $exception){
	echo $exception->getMessage();
}

