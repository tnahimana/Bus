


<?php



function showError($ex)
{
	echo "<div style='border: 1px solid #cc0000;border-top: 10px solid #cc0000;width: 500px;'> <span style='background : red;color: #fff'> Error : </span> <span style='background: grey;color: #000'> ";
	echo $ex->getCode() . "</span><br>";
	echo $ex->getMessage() . " in " . $ex->getFile() . " on line " . $ex->getLine();
	echo "</div>";
}

set_exception_handler('showError');


$dsn = 'mysql:host=localhost;dbname=bus;charset=utf8mb4';
$db_user ='root';
$db_pass = '';


$db = new PDO($dsn, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	

//require 'dbFunctions.php';


?>