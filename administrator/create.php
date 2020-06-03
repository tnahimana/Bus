
<?php
   require 'db.php';

   $message  = '';

  if (isset($_POST['names']) && isset($_POST['no']) && isset($_POST['phone']) && isset($_POST['date']) && isset($_POST['destination']) && isset($_POST['paytype']) ) {
  	
    $names = $_POST['names'];
    $no = $_POST['no'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $destination = $_POST['destination'];
    $paytype = $_POST['paytype'];

    $sql = 'INSERT INTO  book(names,no,phone,date,destination,paytype) VALUES(:names, :no, :phone, :date, :destination, :paytype)';
    
    $statement = $connection->prepare($sql);
    
    if($statement->execute([':names' => $names, ':no' => $no, ':phone' => $phone, ':date' => $date, ':destination' => $destination, ':paytype' => $paytype]) ) {

      $message ='data inserted successfully';
    }

    }  
?>

<?php require 'header.php';?>

<div class="container">
	<div class="card mt-5">
		<div class="card-header">
			<h2>Create For:</h2>
		</div>
     <div class="card-body">
     	
      <?php if (!empty($message)): ?>
       
      <div class="alert alert-success">
      <?php echo $message;  ?>
      </div>

      <?php endif; ?>



       <form method="post">
       	
       	<div class="form-group">
       		<label for="names">Names</label>
       		<input type="text" name="names" id="names" class="form-control" required/>
       	</div>

       	<!-- <div class="form-group">
       		<label for="phone">Phone</label>
       		<input type="text" name="phone" id="phone" class="form-control">
       	</div> -->

       	<div class="form-group">
       		<label for="no">No.ticket</label>
       		<input type="text" name="no" id="no" class="form-control">
       	</div>

        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="email" name="phone" id="phone" class="form-control">
        </div>

                <div class="form-group">
          <label for="date">Date-Departure</label>
          <input type="date" name="date" id="date" class="form-control">
        </div>

                <div class="form-group">
          <label for="destination">Destination</label>
          <input type="text" name="destination" id="destination" class="form-control">
        </div>

                <div class="form-group">
          <label for="paytype">Payment Type</label>
          <input type="text" name="paytype" id="paytype" class="form-control">
        </div>

       	<div class="form-group">
       		<button type="submit" class="btn btn-info" >Creat a Person</button>
       	</div>


       </form>


     </div>


	</div>
	

</div>


<?php require 'footer.php';?>