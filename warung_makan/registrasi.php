<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Warung Makan</title>
	<link rel="shortcut icon" href="images/logo/logo.png" />
    <link rel="stylesheet" href="css/frontend/style.css">
</head>
<body>
	<div class="register">
		<div class="register-header">
			<h2>Register</h2>
		<form action="index.php?module=registrasi&action=proses" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="proc" value="add" />
			<div class="register-main">
				<div class="place">
				<table>
					<tr>
						<td>Username</td>
						<td>:</td>
						<td>
							<input type="text" name="username" placeholder="Ketikan Username..." />
						</td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td>
							<input type="password" name="password"  placeholder="Ketikan Password..." />
						</td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td>
							<input type="text" name="nama" placeholder="Ketikan Nama..." />
						</td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td>:</td>
						<td>
							<input type="date" name="ttl" />
						</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>
							<input type="text" name="alamat" placeholder="Ketikan Alamat...." />
						</td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>
							<input type="radio" name="jenis_kelamin" value="Laki" />
							<label>Laki</label>
							<input type="radio" name="jenis_kelamin" value="Perempuan" />
							<label>Perempuan</label>
						</td>
					</tr>
					<tr>
						<td>Nomer Telpon</td>
						<td>:</td>
						<td>
							<input type="text" name="telp" placeholder="Ketikan Nomer Telpon..." />
						</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td>
							<input type="email" name="email" placeholder="Ketikan Email..." />
						</td>
					</tr>
				</table>
				<div class="register-submit">
					<input type="submit"></input>
				</div>
				<div class="register-cancel">
					<input type="button" value="Cancel" onclick="javascript:window.location.href='login.php'"></input>
				</div>
			</div>
			</div>
		</form>
		</div>
	</div>
</body>
</html>