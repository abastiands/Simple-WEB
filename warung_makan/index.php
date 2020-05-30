<?php session_start(); ?>
<?php
	if(@$_GET['module'] == 'login'){
		include("frontend/login.php");
	}elseif(@$_GET['module'] == 'register'){
		include("frontend/register.php");
	}else{
		include("koneksi.php");
?>
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
    <div class="container">
        <div class="header">
            <div class="header-left">
                <div class="header-logo-name">
                    <a href="index.php">WARUNG MAKAN</a>
                </div>
            </div>
            <div class="menu-bar">
                <ul>
                    <a href="index.php"><li><font>HOME</font></li></a>
                    <a href="index.php?module=aboutus"><li><font>ABOUT US</font></li></a>
                    <a href="index.php?module=contactus"><li></font>CONTACT US</font></li></a>
                </ul>
            </div>
            <div class="header-button"> 
                <?php if(@$_SESSION['username'] == ''){ ?>
                    <button type="submit" onclick="javascript:window.location.href='login.php'">LOGIN</button>
				<?php }else{ ?>
                    <button type="submit" onclick="javascript:window.location.href='index.php?module=proses_logout&action=proses'">LOGOUT</button>
				<?php } ?>
            </div>
        </div>
        <div class="main">
            <div class="content">
                <?php
                    if(@$_GET['module'] !=''){
                        if(@$_GET['action'] !=''){
                            include("frontend/".@$_GET['module']."/".@$_GET['action'].".php");
                        }else{
                            include("frontend/".@$_GET['module']."/list.php");
                        }
                    }else{
                        include("frontend/home/list.php");
                    }
                ?>
            </div>
        </div>
        <div class="footer">
            <p>&copy; Copyright Abastian Dwi Saputra 2020.</p>
        </div>
    </div>
</body>
</html>
                <?php } ?>