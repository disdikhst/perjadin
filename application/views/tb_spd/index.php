<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Daftar Pegawai Yang Berangkat</h1>
	<p class="mb-4">Berdasarkan Surat Tugas No : <?php echo $detail2['no_st'] ?></a>.</p>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div align="center">
				<a href="<?php echo site_url('tb_st/index'); ?>" class="btn btn-danger btn-sm">Kembali ke Daftar Surat Tugas</a>
				<a href="<?php echo site_url('tb_spd/add'); ?>" class="btn btn-success btn-sm">Tambah Data</a>
			</div>

		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>NIP</th>
						<th>Jabatan</th>
						<th>tanggal Surat Tugas</th>
						<th>tujuan</th>
						<th>Edit/Hapus</th>
					</tr>
					<?php
					$no = 1;
					foreach ($daftar_peg2 as $dp2) : ?>
						<tr>
							<td><?php echo $no++; ?></td>
							
							<td><?php echo $dp2->nama; ?></td>
							<td><?php echo $dp2->nip_peg; ?></td>
							<td><?php echo $dp2->jabatan; ?></td>
							<td><?php echo date('d-m-Y', strtotime($dp2->tgl_surat)); ?></td>
							<td><?php echo $dp2->t_tujuan; ?></td>
							<td>
								<a href="<?php echo site_url('tb_spd/edit/' . $dp2->id_spd); ?>" class="btn btn-info btn-xs"><span class="fa fa-edit"></s></a>
								<a href="<?php echo site_url('tb_spd/remove/' . $dp2->id_spd); ?>" class="btn btn-danger btn-xs" onclick="javascript: return confirm('anda yakin dihapus')"><span class="fa fa-trash"></span></a>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->