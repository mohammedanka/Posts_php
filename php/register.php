<?php
	$name = $_POST['name'];
	$family = $_POST['family'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($name) || empty($family) || empty($username) || empty($password)) {
		echo "Fill all sets";
	} else {
		include_once '../includes/connect.php';

		$search = mysqli_query($conn, "SELECT * FROM users WHERE username = '" . $username . "';");
		if (mysqli_num_rows($search) > 0) {
			echo "User already exists";
		} else {
			$insert = "INSERT INTO users VALUES ( null, '" . $name . "', '" . $family . "', '" . $username . "', '" . $password . "');";
			$insert_result = mysqli_query($conn, $insert);
			if ($insert_result) {
				echo "success";
			}
		}
	}
?>