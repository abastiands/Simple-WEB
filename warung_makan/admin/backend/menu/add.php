<div class="content-main">
    <h1>Menu</h1>
    <form action="index.php?module=menu&action=proses" method="POST" enctype="multipart/form-data">
        <?php
            if(@$_GET['id'] !=''){
        ?>
            <input type="hidden" name="id_menu" value="<?php echo @$_GET['id']; ?>" />
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
                    $id_menu = base64_decode(@$_GET['id']);
                    $sql=$db->prepare("SELECT * FROM tb_menu WHERE id_menu = :id_menu");
                    $sql->bindParam(':id_menu', $id_menu);
                    $sql->execute();
                    $hasil=$sql->FETCH(PDO::FETCH_ASSOC);
                ?>
                <tr>
                    <td width="20%">Nama Type</td>
                    <td width="5%">:</td>
                    <td>
                        <select name="id_type">
                            <?php
                                $type = $db->prepare("SELECT * FROM tb_type");
                                $type->execute();
                                while($result = $type->FETCH(PDO::FETCH_ASSOC)){
                            ?>
                            <option value="<?php echo $result['id_type']; ?>"><?php echo $result['nama'];?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="20%">Nama Menu</td>
                    <td width="5%">:</td>
                    <td><input type="text" name="nama" placeholder="Ketikan Nama..." value="<?php echo @$hasil['nama']; ?>" /></td>
                </tr>
                <tr>
                    <td width="20%">Deskripsi</td>
                    <td width="5%">:</td>
                    <td><input type="text" name="deskripsi" placeholder="Ketikan Deskripsi..." value="<?php echo @$hasil['deskripsi']; ?>" /></td>
                </tr>
                <tr>
                    <td width="20%">Harga</td>
                    <td width="5%">:</td>
                    <td><input type="text" name="harga" placeholder="Ketikan Harga..." value="<?php echo @$hasil['harga']; ?>" /></td>
                </tr>
                <tr>
                    <td width="20%">Gambar</td>
                    <td width="5%">:</td>
                    <td><input type="file" name="gambar" /></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <button type="submit" class="btn">Submit</button>
                        <button type="button" class="btn" onclick="javascript:window.location.href='index.php?module=menu'">Cancel</button>
                    </td>
                </tr>
            </table>
        </div>
    </form>
</div>