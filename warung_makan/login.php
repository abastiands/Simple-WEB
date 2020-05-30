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
<div class="login">
			<div class="login-header">
				<h2>LOGIN<h2>
			</div>
			<form action="index.php?module=proses_login&action=proses" method="POST">
				<div class="login-main">
					<div class="place">
						<table>
							<tr>
								<td>Username</td>
								<td>:</td>
								<td><input type="text" name="username" placeholder="Ketikkan Username..." /></td>
							</tr>
							<tr>
								<td>Password</td>
								<td>:</td>
								<td><input type="password" name="password" placeholder="Ketikkan Password..." /></td>
							</tr>
						</table>
						<div class="login-submit">
							<button type="submit" onclick="javascript:window.location.href='index.php'">Login</button>
						</div>
						<div class="login-cancel">
							<button type="button" onclick="javascript:window.location.href='registrasi.php'">Register</button>
						</div>
						<div class="login-back">
							<button type="button" onclick="javascript:window.location.href='index.php'">Back</button>
						</div>
					</div>
				</div>
			</form>
		</div>
</body>
</html>