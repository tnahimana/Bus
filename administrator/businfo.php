<?php
require 'db.php';

$sql = 'SELECT *FROM available ';

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
         <!-- <h1>Welcome...!</h1>
          &nbsp;
          <br><font color="#456">
          	<strong> -->
          	 <!-- <?=$_SESSION['username']?> -->
          	 	
          	<!--  </strong></font>
          	 &nbsp;||&nbsp; -->
<!--           	 <a href="logout.php">Log Out&nbsp;&nbsp; -->
    

		</div>
		
		<div class="card-body">
			<table class="table table-bordered">
				<tr>
					<th>ID</th>
					<th><i class="fa fa-bus"></i> Plate</th>
					<th><i class="fa fa-bus"></i> Departure</th>

					<th>Action</th>

				</tr>
                
                 <?php foreach ($person as $p):?>

				<tr>
					<td><?=$p->id;?></td>
					<td><?=$p->plate;?></td>
					<td><?=$p->departure;?></td>
					<td>
						<a href="editbus.php?id=<?= $p->id ?>" class="btn btn-info"><i class="fa fa-edit"></i></a>

						<a onclick="return confirm('Are you sure want to delete this entry?')" href="deletebus.php?id=<?= $p->id ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>

						
					</td>

				</tr>

               <?php endforeach; ?>
			
			</table>
			
		</div>


	</div>
	
</div>


<?php require 'footer.php';?>
