<?php

require 'db.php';

$id = $_GET['id'];

$sql = 'DELETE FROM book WHERE id=:id';

$statement = $connection->prepare($sql);

if ($statement->execute([':id' => $id])){

header("location:indexx.php");

}





?>