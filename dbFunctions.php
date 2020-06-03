<?php  

require_once 'dtb.php';


function countOf($table, $where)
{
	global $db;
	$sql = $db->query("SELECT * FROM $table WHERE $where ");

	return $sql->rowCount();
}

function countOfAll($table)
{
	global $db;
	$sql = $db->query("SELECT * FROM $table");

	return $sql->rowCount();
}

function sumOf($table, $column, $cond)
{
	global $db;

	$sql = $db->query("SELECT SUM($column) AS sum FROM $table WHERE $cond ");

	$data = $sql->fetch(PDO::FETCH_NUM);

	return $data[0];
}

function sumOfAll($table, $column)
{
	global $db;

	$sql = $db->query("SELECT SUM($column) as sum FROM $table ");

	$data = $sql->fetch(PDO::FETCH_NUM);

	return $data[0];
}

function queryUniqueValue($query)
{
	global $db;
	$query  = $query . ' LIMIT 1 ';

	$sql = $db->query($query);
	$data = $sql->fetch(PDO::FETCH_NUM);

	return $data[0];
}

function nextId($table, $column)
{
	global $db;

	$id = 1;

	//----- check if that id is used

	$checkSQL = $db->query("SELECT * FROM $table WHERE $column='$id' ");

	while ($checkSQL->rowCount() != 0 ) 
	{
		$id++;

		$checkSQL = $db->query("SELECT * FROM $table WHERE $column='$id' ");
	}
	
	return $id;
}




function notification($type, $msg)
{
	if ($type == 'success') 
	{
		?>
		<div id="noti" style="background: #265a88;color: #fff;width: 40%;box-shadow: 2px 2px 20px grey;padding: 10px 20px;text-align: left;margin-top: -22px" > <i class="fa fa-check-circle"></i>

		<?php
	}

	if ($type == 'danger') 
	{
		?>
		<div style="background: #cc0000;color: #fff;width: 40%;box-shadow: 2px 2px 20px grey;padding: 10px 20px;text-align: left;margin-top: -10px" id="noti">
		<?php
	}


	?>

     <?= $msg ?>
     <i class="fa fa-close" style="float: right;cursor: pointer;" id="close_noti"></i>
  </div>
	<?php
}


function are_you_sure($msg, $yes_link, $no_link)
{
	?>

	<div class="modal " style="background: rgba(15, 9, 10, 0.7);display: block;">
                <div class="modal-dialog" style="margin-top: 10%">
                    <div class="modal-content">
                        <div class="modal-body">
                        
                            <p><?= $msg ?> </p>
                        </div>
                        <div class="modal-footer" style="text-align: center;">
                            <a href="?<?= $yes_link ?>" class="btn btn-primary"> <i class="fa fa-check"></i> Yes </a>
                            <a href="?<?= $no_link ?>" class="btn btn-default"> <i class="fa fa-close"></i> No </a>
                        </div>
                    </div>
                </div>
            </div>
	<?php
}


?>