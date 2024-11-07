<div class="card-body">
			<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th>No</th>
						<th>Nama</th>
						<th>NIP</th>
						<th>Jabatan</th>
						<th>No Surat Tugas</th>
                        <th>tujuan</th>
                        <th>dasar</th>
                        <th>maksud</th>
                        <th>tujuan</th>
                        <th>tanggal Berangkat</th>
                            <th>tanggal Kembali</th>
                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    <?php foreach ($rekapan as $t) { ?>
                        <tr>
                        <td><?php echo $no++; ?></td>
							<td><?php echo $t->nama; ?></td>
							<td><?php echo $t->nip_peg; ?></td>
							<td><?php echo $t->jabatan; ?></td>
							<td><?php echo $t->no_st; ?></td>
                            <td><?php echo $t->t_tujuan; ?></td>
                            <td><?php echo $t->dasar; ?></td>
                            <td><?php echo $t->maksud; ?></td>
                            <td><?php echo $t->t_tujuan; ?></td>
                            <td><?php echo $t->tgl_berangkat; ?></td>
                            <td><?php echo $t->tgl_kembali; ?></td>
                        </tr>
                    <?php } ?>
                </table>
			</div>
		</div>
	