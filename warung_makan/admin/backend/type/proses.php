<?php

    include("../koneksi.php");

	@$proc = @$_REQUEST['proc'];
	
	@$id_type = base64_decode(@$_POST['id_type']);
	@$nama = @$_POST['nama'];

    switch(@$proc){

        case "add" :


            $sql=$db->prepare("INSERT INTO tb_type(nama) VALUES(:nama)");
            $sql->bindParam(':nama', @$nama);
            $sql->execute();

            echo"
                <script>
                    alert('Apakah anda ingin membuat');
                    window.location.href='index.php?module=type';
                </script>
            ";
        break;

        case "edit" :

            $sql=$db->prepare("UPDATE tb_type SET nama = :nama WHERE id_type = :id_type");
            $sql->bindParam(':id_type', @$id_type);
            $sql->bindParam(':nama', @$nama);
            $sql->execute();

            echo"
                <script>
                    alert('Apakah anda ingin merubah');
                    window.location.href='index.php?module=type';
                </script>
            ";
        break;

        case "delete" :

            $id_type = base64_decode(@$_GET['id']);

            $sql=$db->prepare("DELETE FROM tb_type WHERE id_type = :id_type");
            $sql->bindParam(':id_type', @$id_type);
            $sql->execute();

            echo"
                <script>
                    alert('Apakah anda ingin menghapus');
                    window.location.href='index.php?module=type';
                </script>
            ";
        break;
    }

?>