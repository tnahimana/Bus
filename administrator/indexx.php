





<?php
require 'db.php';

$sql = 'SELECT *FROM book ';

$statement = $connection->prepare($sql);

$statement->execute();

$person = $statement->fetchAll(PDO::FETCH_OBJ);

?>

<?php require 'header.php';?>


<?php
session_start();

if(!isset($_SESSION['user'])){
    header("location:home_user.php");
}

if($_SESSION['level']!="Admin"){
    header("location:Admin.php");
}
?>
<div class="container">
	<div class="card mt-5">
		<div class="card-header">
         <!-- <h2>Reservation</h2> -->	
         <!-- <h1>Welcome...!</h1> &nbsp;<br><font color="#456"><strong> <?=$_SESSION['username']?></strong></font>&nbsp;||&nbsp;<a href="logout.php">Log Out&nbsp;&nbsp; -->
    

		</div>
		
		<div class="card-body">
			<table class="table table-bordered">
				<tr>
					<th>ID</th>
					<th>Names</th>
					<th><i class="fa fa-ticket"></i></th>
					<th><i class="fa fa-phone"></i></th>
					<th><i class="fa fa-calendar"></i></th>
					<th><i class="fa fa-bus"></i><i class="fa fa-road"></i></th>
					<th><i class="fa fa-money"></i></th>
					<th><i class="fa fa-bell"></i></th>
					
					<th>Action</th>

				</tr>
                
                 <?php foreach ($person as $p):?>

				<tr>
					<td><?=$p->id;?></td>
					<td><?=$p->names;?></td>
					<td><?=$p->no;?></td>
					<td><?=$p->phone;?></td>
					<td><?=$p->date;?></td>
					<td><?=$p->destination;?></td>
					<td><?=$p->paytype;?></td>
					<td><?=$p->avail;?></td>

					<td>
						<a href="edit.php?id=<?= $p->id ?>" class="btn btn-info"><i class="fa fa-edit"></i></a>

						<a onclick="return confirm('Are you sure want to delete this entry?')" href="delete.php?id=<?= $p->id ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>

						<a onclick="return confirm('Are you sure want to delete this entry?')" href="#" class="btn btn-info">Y</a>

						<a onclick="return confirm('Are you sure want to delete this entry?')" href="#" class="btn btn-danger">N</a>
					</td>

				</tr>

               <?php endforeach; ?>
			
			</table>
			
		</div>


	</div>
	
</div>


<?php require 'footer.php';?>
