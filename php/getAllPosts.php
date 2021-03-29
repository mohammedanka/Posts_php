<?php
	include_once '../includes/connect.php';
	$sql = "SELECT * FROM posts;";
	$result = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($result);

	$txt = "<table border=\"1\"><tr><th>User</th><th>Post</th><th>Date</th></tr>";
	if($num > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$txt .= "<tr><td>";
			$sql_2 = "SELECT * FROM users WHERE userId = '" . $row['userId'] . "';";
			$result_2 = mysqli_query($conn, $sql_2);
			while ($row_2 = mysqli_fetch_assoc($result_2)) {
				$txt .= $row_2['firstName'] . " " . $row_2['lastName'] . "</td>";
			}
			$txt .= "<td>" . $row['text'] . "</td><td>" . $row['date'] . "</td></tr>";
		}
		$txt .= "</table><br/>";
		echo $txt;
	} else {
		echo "failed";
	}
?>