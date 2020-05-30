<div class="dashboard">
    <h1>Makanan</h1>
    <?php
                $sql=$db->prepare("SELECT A.id_menu, A.nama AS nama_menu, A.deskripsi, A.harga, A.gambar, B.nama AS nama_type FROM tb_menu AS A INNER JOIN tb_type AS B ON(A.id_type = B.id_type) WHERE B.id_type = 1");
                $sql->execute();
                while($menu_makanan=$sql->FETCH(PDO::FETCH_ASSOC)){
    ?>
    <div class="product">
        <div class="product-images">
            <img src="images/menu/<?php echo $menu_makanan['gambar']; ?>" />
        </div>
        <div class="product-name">
            <?php echo $menu_makanan['nama_menu']; ?>
        </div>
        <div class="product-price">
            Rp. <?php echo $menu_makanan['harga']; ?>
        </div>
        <div class="product-button">
            <button type="submit">Buy</button>
        </div>
    </div>
    <?php
        }
    ?>
    <h1>Minuman</h1>
    <?php
                $sql=$db->prepare("SELECT A.id_menu, A.nama AS nama_menu, A.deskripsi, A.harga, A.gambar, B.nama AS nama_type FROM tb_menu AS A INNER JOIN tb_type AS B ON(A.id_type = B.id_type) WHERE B.id_type = 2");
                $sql->execute();
                while($menu_minuman=$sql->FETCH(PDO::FETCH_ASSOC)){
    ?>
    <div class="product">
        <div class="product-images">
            <img src="images/menu/<?php echo $menu_minuman['gambar']; ?>" />
        </div>
        <div class="product-name">
            <?php echo $menu_minuman['nama_menu']; ?>
        </div>
        <div class="product-price">
            Rp. <?php echo $menu_minuman['harga']; ?>
        </div>
        <div class="product-button">
            <button type="submit">Buy</button>
        </div>
    </div>
    <?php
        }
    ?>
</div>