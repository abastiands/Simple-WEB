<div class="fix">
    <h1>Admin</h1>
    <div class="fix-table">
        <table class="table-design" border="1px" height="20%">
            <thead>
                <tr>
                    <th width="10%">No</th>
                    <th width="20%">Username</th>
                    <th width="20%">Password</th>
                    <th width="20%">Nama</th>
                    <th width="20%">Level</th>
                </tr>
            </thead>
            <tbody>
			<?php 
				$no = 1;
				$sql=$db->prepare("SELECT * FROM tb_admin");
				$sql->execute();
				while($hasil=$sql->FETCH(PDO::FETCH_ASSOC)){
			?>
			<tr>
				<td style="text-align: center;"><?php echo $no; ?></td>
				<td><?php echo $hasil['username'];?></td>
				<td><?php echo $hasil['password'];?></td>
				<td><?php echo $hasil['nama'];?></td>
				<td><?php echo $hasil['level'];?></td>
			</tr>
			<?php
				$no++;
				}
			?>
            </tbody>
        </table>
		<p>Catatan : Staff tidak bisa membuat, merubah, dan menghapus pada table Admin.</p>
    </div>
</div>