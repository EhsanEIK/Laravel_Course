<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
    @endforeach
	<div class="container">
		<form method="post" action="/user/store">
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
					<td>Age:</td>
					<td>
						<input type="text" name="age">
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