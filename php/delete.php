<?php 
	include_once '../includes/connect.php';
	$postId = $_POST['selectPost'];
	$sql = "DELETE FROM posts WHERE postId = '" . $postId . "';";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "success";
	}
?>