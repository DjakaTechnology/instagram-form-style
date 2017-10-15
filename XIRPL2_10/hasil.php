<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran berhasil</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form id="result" method="POST" action="hasil.php">
	<div class="content">
		<div class="header">
			<h1>Djagram</h1>
		</div>
		<h3>Registration Complete!!</h3>
		<hr width="80%">
		<table width="320px">
			<col width="45%">
			<col width="3%">
			<col width="52%">
			<tr>
				<td>Mobile Number or Email</td>
				<td>:</td>
				<td><?php echo $_POST["email"]; ?></td>
			</tr>
			<tr>
				<td>Full Name</td>
				<td>:</td>
				<td><?php echo $_POST["name"]; ?></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><?php echo $_POST["username"]; ?></td>
			</tr>
			<tr>	
				<td>Password</td>
				<td>:</td>
				<td><?php echo $_POST["password"]; ?></td>
			</tr>
		</table>
		<a href="form.php"><button type="button">Back</button></a>
	</div>
</body>
</html>