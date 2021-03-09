<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<div class="container">
		<form method="post" action="/registration">
			@csrf
			<table>
				<tr>
					<td>Name:</td>
					<td>
						<input type="text" name="name">
					</td>
				</tr>
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
						<input type="submit" value="Save">
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>