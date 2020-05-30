<?php

    include("koneksi.php");

	@$proc = @$_REQUEST['proc'];
	
	@$username = @$_POST['username'];
	@$password = @$_POST['password'];
	@$nama = @$_POST['nama'];
	@$ttl = @$_POST['ttl'];
	@$alamat = @$_POST['alamat'];
	@$jenis_kelamin = @$_POST['jenis_kelamin'];
	@$telp = @$_POST['telp'];
	@$email = @$_POST['email'];

    switch(@$proc){

        case "add" :

            $sql=$db->prepare("INSERT INTO tb_user(username, password, nama, ttl, alamat, jenis_kelamin, telp, email) VALUES(:username, :password, :nama, :ttl, :alamat, :jenis_kelamin, :telp, :email)");
            $sql->bindParam(':username', @$username);
            $sql->bindParam(':password', @$password);
            $sql->bindParam(':nama', @$nama);
            $sql->bindParam(':ttl', @$ttl);
            $sql->bindParam(':alamat', @$alamat);
            $sql->bindParam(':jenis_kelamin', @$jenis_kelamin);
            $sql->bindParam(':telp', @$telp);
            $sql->bindParam(':email', @$email);
            $sql->execute();

            echo"
                <script>
                    alert('Apakah anda ingin membuat');
                    window.location.href='login.php';
                </script>
            ";
        break;
    }

?>