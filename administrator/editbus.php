
<?php

  require 'db.php';

   $id = $_GET['id'];
   
   $sql = 'SELECT *FROM available WHERE id=:id';

   $statement = $connection->prepare($sql);

   $statement->execute([':id' => $id ]);

   $p = $statement->fetch(PDO::FETCH_OBJ);

   //$message  = '';

  if (isset($_POST['plate']) && isset($_POST['departure']) ) {
  	
    $plate = $_POST['plate'];
    $departure = $_POST['departure'];
    

    $sql = 'UPDATE  available SET plate=:plate, departure=:departure WHERE id=:id';
    
    $statement = $connection->prepare($sql);
    
    if($statement->execute([':plate' => $plate, ':departure' => $departure,':id' => $id ]) ) {
      
      header('location:businfo.php');
      
      //$message ='data inserted successfully';
    }

    }  
?>

<?php require 'header.php';?>

<div class="container">
	<div class="card mt-5">
		<div class="card-header">
			<h2>Update a Person</h2>
		</div>
     <div class="card-body">
     	
      <?php if (!empty($message)): ?>
       
      <div class="alert alert-success">
      <?php echo $message;  ?>
      </div>

      <?php endif; ?>

       <form method="post">
       	
       	<div class="form-group">
       		<label for="plate">Plate</label>
       		<input value="<?= $p->plate;?>" type="text" name="plate" id="plate" class="form-control" required/>
       	</div>

       	<!-- <div class="form-group">
       		<label for="phone">Phone</label>
       		<input type="text" name="phone" id="phone" class="form-control">
       	</div> -->

       	<div class="form-group">
       		<label for="departure">Departure</label>
       		<input type="time" value="<?= $p->departure;?>" name="departure" id="departure" class="form-control">
       	</div>

        
       	<div class="form-group">
       		<button type="submit" class="btn btn-info" >Update</button>
       	</div>


       </form>


     </div>


	</div>
	

</div>


<?php require 'footer.php';?>