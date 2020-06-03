<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['user'])){
    die("Anda belum login");//jika belum login jangan lanjut
}
//cek level user
if($_SESSION['level']!="user"){
    die("You Not User..!");//jika bukan admin jangan lanjut
}
?>


<?php require 'header2.php';?>




<h2>Hi...!</h2> &nbsp;<br>
<font color="black" size="40px" >
	<strong>
	<b style="background: white"> <?=$_SESSION['username']?></b>
	 </strong>

</font>&nbsp;||&nbsp;

<a href="logout.php" class="btn btn-danger">Log Out&nbsp;&nbsp;</a>

</td>
    <td>&nbsp;</td>




<?php require 'footer.php';?>