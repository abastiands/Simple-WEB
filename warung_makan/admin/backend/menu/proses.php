<?php

    include("../koneksi.php");

	@$proc = @$_REQUEST['proc'];
	
	@$id_menu = base64_decode(@$_POST['id_menu']);
	@$id_type = (@$_POST['id_type']);
	@$nama = @$_POST['nama'];
	@$deskripsi = @$_POST['deskripsi'];
	@$harga = @$_POST['harga'];
	@$awal = @$_FILES['gambar']['tmp_name'];
    @$tujuan = @$_FILES['gambar']['name'];
    
    move_uploaded_file(@$awal, "../images/menu/".@$tujuan);

    switch(@$proc){

        case "add" :


            $sql=$db->prepare("INSERT INTO tb_menu(id_type, nama, deskripsi, harga, gambar) VALUES(:id_type, :nama, :deskripsi, :harga, :gambar)");
            $sql->bindParam(':id_type', @$id_type);
            $sql->bindParam(':nama', @$nama);
            $sql->bindParam(':deskripsi', @$deskripsi);
            $sql->bindParam(':harga', @$harga);
            $sql->bindParam(':gambar', @$tujuan);
            $sql->execute();

            echo"
                <script>
                    alert('Apakah anda ingin membuat');
                    window.location.href='index.php?module=menu';
                </script>
            ";
        break;

        case "edit" :

            $sql=$db->prepare("UPDATE tb_menu SET id_type = :id_type, nama = :nama, deskripsi = :deskripsi, harga = :harga, gambar = :gambar WHERE id_menu = :id_menu");
            $sql->bindParam(':id_menu', @$id_menu);
            $sql->bindParam(':id_type', @$id_type);
            $sql->bindParam(':nama', @$nama);
            $sql->bindParam(':deskripsi', @$deskripsi);
            $sql->bindParam(':harga', @$harga);
            $sql->bindParam(':gambar', @$tujuan);
            $sql->execute();

            echo"
                <script>
                    alert('Apakah anda ingin merubah');
                    window.location.href='index.php?module=menu';
                </script>
            ";
        break;

        case "delete" :

            $id_menu = base64_decode(@$_GET['id']);

            $sql=$db->prepare("DELETE FROM tb_menu WHERE id_menu = :id_menu");
            $sql->bindParam(':id_menu', @$id_menu);
            $sql->execute();

            echo"
                <script>
                    alert('Apakah anda ingin menghapus');
                    window.location.href='index.php?module=menu';
                </script>
            ";
        break;
    }

?>