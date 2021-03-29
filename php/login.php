<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username) || empty($password)) {
		echo "Fill all sets";
	} else {
		include_once '../includes/connect.php';

		$search = mysqli_query($conn, "SELECT * FROM users WHERE username = '" . $username . "';");
		if (mysqli_num_rows($search) > 0) {
			$search_2 = mysqli_query($conn, "SELECT * FROM users WHERE username = '" . $username . "' and password = '" . $password . "' ;");
			if (mysqli_num_rows($search_2) > 0) {
				session_start();
				while ($row = mysqli_fetch_assoc($search_2) ) {
					$_SESSION['userId'] = $row['userId'];
				}
				echo "success";
			} else {
				echo "Wrong password<br/>";
			}
		} else {
			echo "Wrong username<br/>";
		}
	}
?>