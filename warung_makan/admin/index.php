<?php session_start(); ?>
<?php
	include("../koneksi.php");
	if(@$_SESSION['username'] == ''){
		if(@$_GET['module'] != ""){
			if(@$_GET['action'] != ""){
				include("backend/".@$_GET['module']."/".@$_GET['action'].".php");
			}else{
				include("backend/".@$_GET['module']."/list.php");
			}
		}else{
			include("login.php");
		}
	}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Makan</title>
	<link rel="shortcut icon" href="../images/logo/logo.png" />
    <link rel="stylesheet" href="../css/backend/style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-left">
                <a href="index.php">ADMIN</a>
            </div>
            <div class="header-right">
                <button type="submit" onclick="javascript:window.location.href='login.php'">LOGOUT</button>
            </div>
        </div>
        <div class="main">
            <div class="navbar">
                <ul>
                    <a href="index.php"><li><font>Dashboard</font></li></a>
                    <a href="index.php?module=admin"><li><font>Admin</font></li></a>
                    <a href="index.php?module=menu"><li><font>Menu</font></li></a>
                    <a href="index.php?module=type"><li><font>Type</font></li></a>
                    <a href="index.php?module=user"><li><font>User</font></li></a>
                </ul>
            </div>
            <div class="content">
                <?php
                    if(@$_GET['module'] !=''){
                        if(@$_GET['action'] !=''){
                            include("backend/".@$_GET['module']."/".@$_GET['action'].".php");
                        }else{
                            include("backend/".@$_GET['module']."/list.php");
                        }
                    }else{
                        include("backend/dashboard/list.php");
                    }
                ?>
            </div>
        </div>
        <div class="footer">
            <p>&copy; Copyright By Abastian Dwi Saputra 2020.</p>
        </div>
    </div>
</body>
</html>
<?php } ?>