<?php

$dsn = 'mysql:host=localhost;
        dbname=bus';

$username = 'root';

$password = '';

$options = [];


try {

$connection = new PDO($dsn, $username, $password, $options);

//echo 'connection successful';

} catch(PDOException $e) {

}




?>