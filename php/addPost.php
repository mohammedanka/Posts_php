<?php
	include_once '../includes/connect.php';
	$date = date("Y-m-d h:i:s");
	session_start();
	$sql = "INSERT INTO posts VALUES( null, '" . $_SESSION['userId'] . "', '" . $date . "', '" . $_POST['textarea'] . "');";
	$result = mysqli_query( $conn, $sql);
	if ($result) {
		echo "success";
		exit();
	} else {
		echo "failed";
	}
?>