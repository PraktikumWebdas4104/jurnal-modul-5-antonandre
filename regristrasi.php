<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>

<form method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" name="nim" length="10"></td>
		</tr>

		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" length="25"></td>
		</tr>

		<tr>
			<td>E-mail</td>
			<td>:</td>
			<td><input type="email" name="email"></td>
		</tr>

		<tr>
			<td><input type="submit" name="kirim"></td>
		</tr>		
	</table>
</form>
<?php 
	if(isset($_POST['kirim']){
		include 'prosesregris.php';
	}
?>
</body>
</html>
 
