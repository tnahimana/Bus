<?


?>


<!DOCTYPE html>
<html>
<head>
  <title>drop</title>
</head>
<body>


<form action="drop.php" method="post">

<select name="country">

<option value=""></option>

<?php 
$link=mysqli_connect("localhost", "root", "","eglise") or die("cant connect");



$query = mysqli_query($link, "SELECT DISTINCT country FROM churches");
$query_display = mysqli_query($link,"SELECT * FROM churches");
while ($row = mysqli_fetch_array($query)){
echo "<option value='" . $row['id']."'>". $row['country'] . "</option>";
}
?>
</select>


<select name="state">
<option value=""></option>

<?php 
$query = mysqli_query($link, "SELECT DISTINCT state FROM churches WHERE state != ''");
$query_display = mysqli_query($link,"SELECT * FROM churches WHERE state != ''");
while ($row = mysqli_fetch_array($query)){
echo "<option value='" . $row['id']."'>". $row['state'] . "</option>";
}
?>
</select>


<input type="submit" value="Go!">

</form>

<?php
  if(isset($_POST['country']))
  {
  $name = $_POST['country'];
    $fetch = "SELECT * FROM churches WHERE id = '".$name."'";
    $result = mysqli_query($link,$fetch);

  echo '<div class="churchdisplay">
        <h4>' .$row['churchname'].'</h4>
        <p class="detail">' .$row['detail'].'</p>
        <p><b>' .$row['city'].'</b>, ' .$row['state'].' ' .$row['country'].'</p>
        <p>' .$row['phone'].'</p>
        // etc etc
        </div>';
  }

  else{
  echo  "<p>Please enter a search query</p>";
  }

?>


</body>
</html>