<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../js/app.js"></script>
</head>
<body>
	<form method="POST" id="form-register" onsubmit="event.preventDefault();">
		<fieldset>
			<legend>Register</legend>
			<table>
				<tr>
					<th><label>Name: </label></th>
					<td><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<th><label>Family: </label></th>
					<td><input type="text" name="family" value=""></td>
				</tr>
				<tr>
					<th><label>Username: </label></th>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<th><label>Password: </label></th>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="register" value="Register" onclick="registerFunction()"></td>
				</tr>
			</table>
		</fieldset>
	</form>
	<div id="error"></div>
</body>
</html>