<div class="content-main">
    <h1>Type</h1>
    <form action="index.php?module=type&action=proses" method="POST" enctype="multipart/form-data">
        <?php
            if(@$_GET['id'] !=''){
        ?>
            <input type="hidden" name="id_type" value="<?php echo @$_GET['id']; ?>" />
            <input type="hidden" name="proc" value="edit" />
        <?php
            }else{
        ?>
            <input type="hidden" name="proc" value="add" />
        <?php
            }
        ?>
        <div class="form-main">
            <table width="70%">
                <?php
                    $id_type = base64_decode(@$_GET['id']);
                    $sql=$db->prepare("SELECT * FROM tb_type WHERE id_type = :id_type");
                    $sql->bindParam(':id_type', $id_type);
                    $sql->execute();
                    $hasil=$sql->FETCH(PDO::FETCH_ASSOC);
                ?>
                <tr>
                    <td width="20%">Nama</td>
                    <td width="5%">:</td>
                    <td><input type="text" name="nama" placeholder="Ketikan Nama..." value="<?php echo @$hasil['nama']; ?>" /></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <button type="submit" class="btn">Submit</button>
                        <button type="button" class="btn" onclick="javascript:window.location.href='index.php?module=type'">Cancel</button>
                    </td>
                </tr>
            </table>
        </div>
    </form>
</div>