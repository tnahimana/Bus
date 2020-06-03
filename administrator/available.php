
<?php
   require 'db.php';

   $message  = '';

  if (isset($_POST['plate']) && isset($_POST['departure']) ) {
  	
    $plate = $_POST['plate'];
    $departure = $_POST['departure'];
    

    $sql = 'INSERT INTO available(plate,departure) VALUES(:plate, :departure)';
    
    $statement = $connection->prepare($sql);
    
    if($statement->execute([':plate' => $plate, ':departure' => $departure ]) ) {

      $message ='data inserted successfully';
    }

    }  
?>

<?php require 'header.php';?>

<div class="container">
	<div class="card mt-5">
		<div class="card-header">
			<h2>Register Available Bus:</h2>
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
<!--        		<input type="text" name="plate" id="plate" class="form-control" required/>
 -->    <select class="form-control" name="plate">
         <option selected hidden>Bus-Plate</option>
         <option>RAB 123 E</option>
         <option>RAE 234 A</option>
         <option>RAD 456 D</option>
   
 </select>   



       	</div>

       	<!-- <div class="form-group">
       		<label for="phone">Phone</label>
       		<input type="text" name="phone" id="phone" class="form-control">
       	</div> -->

       	<div class="form-group">
       		<label for="departure">Departure</label>
       		<input type="time" name="departure" id="departure" class="form-control">
       	</div>

        
       	<div class="form-group">
       		<button type="submit" class="btn btn-info" >Save </button>
       	</div>


       </form>


     </div>


	</div>
	

</div>


<?php require 'footer.php';?>