<div class="fix">
	<h1>User</h1>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="hidden" name="module" value="user" />
		<input type="hidden" name="action" value="list" />
	</form>
    <div class="fix-table">
        <table class="table-design" border="1px" height="20%">
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="5%">Username</th>
                    <th width="5%">Nama</th>
                    <th width="5%">TTL</th>
                    <th width="5%">Alamat</th>
                    <th width="5%">Jenis Kelamin</th>
                    <th width="5%">Telp</th>
                    <th width="5%">Email</th>
                </tr>
            </thead>
            <tbody>
			<?php 
				$no = 1;
				$sql=$db->prepare("SELECT * FROM tb_user");
				$sql->execute();
				while($hasil=$sql->FETCH(PDO::FETCH_ASSOC)){
			?>
			<tr>
				<td style="text-align: center;"><?php echo $no; ?></td>
				<td><?php echo $hasil['username'];?></td>
				<td><?php echo $hasil['nama'];?></td>
				<td><?php echo $hasil['ttl'];?></td>
				<td><?php echo $hasil['alamat'];?></td>
				<td><?php echo $hasil['jenis_kelamin'];?></td>
				<td><?php echo $hasil['telp'];?></td>
				<td><?php echo $hasil['email'];?></td>
			</tr>
			<?php
				$no++;
				}
			?>
            </tbody>
		</table>
		<p>Catatan : Staff tidak bisa membuat, merubah, dan menghapus pada table User.</p>
    </div>
</div>