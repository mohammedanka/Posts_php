<?php
	include_once '../includes/connect.php';
	session_start();
	$sql = "SELECT * FROM posts WHERE userId = '" . $_SESSION['userId'] . "';";
	$result = mysqli_query( $conn, $sql);
	if(mysqli_num_rows($result) > 0) {
		$txt = "<table border=\"1\"><tr><th>Post</th><th>Date</th><th>Choose</th></tr>";
		while ($row = mysqli_fetch_assoc($result)) {
			$txt .= "<tr><td>" . $row['text'] . "</td><td>" . $row['date'] . "</td><td><input type=\"radio\" onchange=\"radioBtnSelected();\" name=\"selectPost\" value=\"" . $row['postId'] . "\"/></td></tr>";
		}
		echo $txt;
		exit();
	} else {
		echo "Failed";
	}
	
?>