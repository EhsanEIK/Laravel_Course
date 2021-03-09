<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Blog Login</h1>
	<form method="post" action="/login">
		@csrf
		<table>
				<tr>
					<td>Email:</td>
					<td>
						<input type="text" name="email">
					</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td>
						<input type="password" name="password">
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="Log In">
					</td>
				</tr>
			</table>
	</form>
</body>
</html>