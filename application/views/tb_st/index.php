<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Daftar Surat Tugas</h1>
	<p class="mb-4">Cara Pengisian...</a>.</p>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div align="left"><a href="<?php echo site_url('tb_st/add'); ?>" class="btn btn-danger btn-sm">Tambah Surat Tugas</a></div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Detail</th>
							<th>Nomor</th>
							<th>No Surat Tugas</th>
							<th>Tanggal Surat</th>
							<th>Tempat Tujuan</th>
							<th>Tambah Peserta</th>



						</tr>
					</thead>
					<!-- <tfoot>
						<tr>
							<th>Nomor</th>
							<th>No St</th>
							<th>Tgl Surat</th>
							<th>Dasar</th>
							<th>Maksud</th>
							<th>T Berangkat</th>
							<th>T Tujuan</th>
							<th>Tgl Berangkat</th>
							<th>Tgl Kembali</th>
							<th>Alat Angkut</th>
							<th>Tanggal Surat Tugas</th>
							<th>Actions</th>
						</tr>
					</tfoot> -->
					<?php $no = 1; ?>
					<?php foreach ($tb_st as $t) { ?>
						<tr>
							<td>
								<a href="<?php echo site_url('detail/detail_st/' . $t['id_st']); ?>" class="btn btn-warning btn-xs"><i class="fas fa-align-justify"></i></a>
							</td>
							<td><?php echo $no++; ?></td>
							<td><?php echo $t['no_st']; ?></td>
							<td><?php echo date('d-m-Y', strtotime($t['tgl_surat'])); ?></td>
							<td><?php echo $t['t_tujuan']; ?></td>


							<td>
								<a href="<?php echo site_url('detail/index_spd/' . $t['id_st']); ?>" class="btn btn-info btn-xs"><span class="fa fa-user-plus"></span></a>
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