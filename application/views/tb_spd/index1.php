<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Daftar Surat Tugas</h1>
	<p class="mb-4">Cara Pengisian...</a>.</p>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div align="right"><a href="<?php echo site_url('tb_st/add'); ?>" class="btn btn-success btn-sm">Tambah Data</a></div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>NIP</th>
						<th>Jabatan</th>
						<th>No Surat Tugas</th>
						<th>tanggal Surat Tugas</th>
						<th>tujuan</th>

						<th>Actions</th>
					</tr>
					<?php
					$no = 1;
					foreach ($daftar_peg as $t) { ?>

						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $t->nama; ?></td>
							<td><?php echo $t->nip_peg; ?></td>
							<td><?php echo $t->jabatan; ?></td>
							<td><?php echo $t->no_st; ?></td>
							<td><?php echo $t->date_created; ?></td>
							<td><?php echo $t->t_tujuan; ?></td>
							<td>
								<!-- <a href="<?php echo site_url('tb_spd/edit/' . $t['id_spd']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
									<a href="<?php echo site_url('tb_spd/remove/' . $t['id_spd']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a> -->
							</td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->