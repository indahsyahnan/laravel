<!DOCTYPE html>
<html>
	<head>
		<title>Buat Account Baru</title>
	</head>
	<body>
		<h2>Buat Account Baru !</h2>
		<h4>Sign Up Form</h4>
		<form action="/welcome" method="POST">
			{{ csrf_field() }}
			<label for="first_name">First name : </label><br><br>
			<input type="text" name="first_name"><br><br>
			<label for="last_name">Last name : </label><br><br>
			<input type="text" name="last_name"><br><br>
			<label>Gender :</label><br><br>
			<input type="radio" name="gender" value="0">Male<br>
			<input type="radio" name="gender" value="1">Female<br>
			<input type="radio" name="gender" value="2">Other<br>
			<br>
			<label>Nationality :</label><br><br>
			<select>
				<option>Indonesian</option>
				<option>Singaporian</option>
				<option>Malaysian</option>
				<option>Australian</option>
			</select>
			<br><br>
			<label>Languange Spoken :</label><br><br>
			<input type="checkbox">Bahasa Indonesia<br>
			<input type="checkbox">English<br>
			<input type="checkbox">Other<br><br>
			<label>Bio :</label><br><br>
			<textarea cols="30" rows="10"></textarea><br>
			<input type="submit" value="SignUp"></a>
		</form>
	</body>
</html>