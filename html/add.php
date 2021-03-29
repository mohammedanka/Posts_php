<!DOCTYPE html>
<html>
<head>
	<title>My Posts</title>
	<?php include_once '../includes/header.php'; ?>
	<table>
		<tr>
			<td>
				<form method="post" id="formAddPostId" onsubmit="event.preventDefault();">
					<table>
						<tr>
							<td>
								<textarea name="textarea" placeholder="type here..." style="width: 50%;" rows="15"></textarea>
							</td>
						</tr>
						<tr>
							<td><input type="submit" name="add" value="Add Post" onclick="addPostFunction()"></td>
						</tr>
						<tr>
							<td id="error"></td>
						</tr>
					</table>
				</form>
			</td>
			<td>
				<form method="post" id="formDelUptPost" onsubmit="event.preventDefault();">
					<table>
						<tr>
							<th><input type="submit" id="delete" name="delete" disabled value="Delete" onclick="deletePost();"></th>
							<th><input type="submit" id="edit" name="edit" disabled value="Edit" onclick="editPost();"></th>
						</tr>
						<tr>
							<td colspan="2" id="myPostsId"></td>
						</tr>
						<tr>
							<td id="error_2"></td>
						</tr>
						<tr>
							<td colspan="2" id="editPost" style="visibility: hidden;">
								<table>
									<tr>
										<td>
											<textarea name="textareaToUpdate" placeholder="type here..." style="width: 50%;" rows="15"></textarea>
										</td>
									</tr>
									<tr>
										<td><input type="submit" name="add" value="Add Post" onclick="updatePostFunction()"></td>
									</tr>
									<tr>
										<td id="error"></td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</form>
			</td>
		</tr>
	</table>
</body>
</html>