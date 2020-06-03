<?php

$user = $_POST['user'];
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$level = $_POST['level'];

if (!empty($user) || !empty($username) || !empty($password) || !empty($phone) || !empty($level)) {

	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "bus";

	// connection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

	if (mysqli_connect_error()) {
		die('connection Erorr('.mysqli_connect_error().')'. mysqli_connect_error());
	} else {

		$SELECT = "SELECT phone FROM login WHERE phone = ? Limit 1";
		$INSERT = "INSERT INTO login(user, username, password, phone, level) VALUES(?, ?, ?, ?, ?)";
		// prepare statement

		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $phone);
		$stmt->execute();
		$stmt->bind_result($phone);
		$stmt->store_result();
		$rnum = $stmt->num_rows;

		if ($rnum==0) {
         $stmt->close();
         $stmt = $conn->prepare($INSERT);
         $stmt->bind_param("ssssii", $user, $username, $password, $phone, $level);
         $stmt->execute();
         echo "New Record Inserted";

		} else {
			echo "Someone already registered with this Phone";
			// header("location:apply.php");
		}
		$stmt->close();
		$conn->close();
	}

} else{


	echo "All field are required";
	die();
}
?>