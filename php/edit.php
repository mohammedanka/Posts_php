<?php
	include_once '../includes/connect.php';
	if (!empty($_POST['textareaToUpdate'])) {
		$date = date("Y-m-d h:i:s");
		$sql = "UPDATE posts SET text = '" . $_POST['textareaToUpdate'] . "', date = '" . $date . "' WHERE postID = '" . $_POST['selectPost'] . "';";
		$result = mysqli_query( $conn, $sql);
		if ($result) {
			echo "success";
			exit();
		}
	} else {
		echo "empty";
	}
?>
