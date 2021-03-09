<!DOCTYPE html>
<html>
<head>
	<title>Image</title>
</head>
<body>
	<h1>Image Upload</h1>
	<form method="post" action="/image/upload" enctype="multipart/form-data">
		@csrf
		<table>
			<tr>
				<td></td>
				<td>
					<input type="file" name="image">
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
</body>
</html>