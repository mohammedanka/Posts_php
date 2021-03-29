<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>	
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../js/app.js"></script>
</head>
<body>
	<div class="container">
		<div class="login-form">
			<form id="form-login" method="POST" onsubmit="event.preventDefault();">
				<fieldset>
					<legend>Log In</legend>
					<table>
						<tr>
							<td><label>Username: </label></td>
							<td><input type="text" name="username" value=""></td>
						</tr>
						<tr>
							<td><label>Password: </label></td>
							<td><input type="password" name="password" value=""></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" name="login" value="Log In" onclick="loginFunction()"></td>
						</tr>
						<tr>
							<td colspan="2"><a class="a" href="register.php">Register</a></td>
						</tr>
					</table>
				</fieldset>
			</form>
		</div>
	</div>
	<div id="error"></div>
</body>
</html>