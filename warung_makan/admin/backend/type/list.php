<div class="fix">
	<h1>Type</h1>
	<div class="fix-input">
			<input type="submit" value="Create" onclick="javascript:window.location.href='index.php?module=type&action=add'"></input>
	</div>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="hidden" name="module" value="type" />
		<input type="hidden" name="action" value="list" />
	</form>
    <div class="fix-table">
        <table class="table-design" border="1px" height="20%">
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="30%">Nama</th>
                    <th width="6%">Option</th>
                </tr>
            </thead>
            <tbody>
			<?php 
				$no = 1;
				$sql=$db->prepare("SELECT * FROM tb_type");
				$sql->execute();
				while($hasil=$sql->FETCH(PDO::FETCH_ASSOC)){
			?>
			<tr>
				<td style="text-align: center;"><?php echo $no; ?></td>
				<td><?php echo $hasil['nama'];?></td>
				<td>
					<div class="option-button">
						<button onclick="javascript:window.location.href='index.php?module=type&action=add&id=<?php echo base64_encode($hasil['id_type']); ?>'">Edit</button>
						<button onclick="javascript:window.location.href='index.php?module=type&action=proses&id=<?php echo base64_encode($hasil['id_type']); ?>&proc=delete';">Delete</button>
					</div>
				</td>
			</tr>
			<?php
				$no++;
				}
			?>
            </tbody>
        </table>
    </div>
</div>