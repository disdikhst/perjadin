<div class="container">

	<div class="card o-hidden border-0 shadow-lg my-5 col-lg-15 mx-auto">
		<div class="card-body p-0">
			<!-- Nested Row within Card Body -->
			<div class="row">

				<div class="col-lg">
					<div class="p-5">
						<div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">Isi Data</h1>
						</div>
						<?php echo form_open('tb_ttd/edit/' . $tb_ttd['id_nip_ttd']); ?>
						<div class="box-body">
							<div class="row clearfix">
								<div class="col-md-6">
									<label for="nama_ttd" class="control-label"><span class="text-danger">*</span>Nama</label>
									<div class="form-group">
										<input type="text" name="nama_ttd" value="<?php echo ($this->input->post('nama_ttd') ? $this->input->post('nama_ttd') : $tb_ttd['nama_ttd']); ?>" class="form-control" id="nama_ttd" />
										<span class="text-danger"><?php echo form_error('nama_ttd'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="nip" class="control-label"><span class="text-danger">*</span>NIP</label>
									<div class="form-group">
										<input type="text" name="nip_ttd" value="<?php echo ($this->input->post('nip_ttd') ? $this->input->post('nip_ttd') : $tb_ttd['nip_ttd']); ?>" class="form-control" id="nip_ttd" />
										<span class="text-danger"><?php echo form_error('nip_ttd'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="pangkat_gol" class="control-label"><span class="text-danger">*</span>Pangkat Gol</label>
									<div class="form-group">
										<input type="text" name="pangkat_gol_ttd" value="<?php echo ($this->input->post('pangkat_gol_ttd') ? $this->input->post('pangkat_gol_ttd') : $tb_ttd['pangkat_gol_ttd']); ?>" class="form-control" id="pangkat_gol_ttd" />
										<span class="text-danger"><?php echo form_error('pangkat_gol_ttd'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="jabatan_ttd" class="control-label"><span class="text-danger">*</span>Jabatan</label>
									<div class="form-group">
										<input type="text" name="jabatan_ttd" value="<?php echo ($this->input->post('jabatan_ttd') ? $this->input->post('jabatan_ttd') : $tb_ttd['jabatan_ttd']); ?>" class="form-control" id="jabatan_ttd" />
										<span class="text-danger"><?php echo form_error('jabatan_ttd'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="kewenangan" class="control-label"><span class="text-danger">*</span>Kewenangan</label>
									<div class="form-group">
										<input type="text" name="kewenangan" value="<?php echo ($this->input->post('kewenangan') ? $this->input->post('kewenangan') : $tb_ttd['kewenangan']); ?>" class="form-control" id="kewenangan" />
										<span class="text-danger"><?php echo form_error('kewenangan'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="lokasi_ttd" class="control-label"><span class="text-danger">*</span>Lokasi Penandatanganan</label>
									<div class="form-group">
										<input type="text" name="lokasi_ttd" value="<?php echo ($this->input->post('lokasi_ttd') ? $this->input->post('lokasi_ttd') : $tb_ttd['lokasi_ttd']); ?>" class="form-control" id="lokasi_ttd" />
										<span class="text-danger"><?php echo form_error('lokasi_ttd'); ?></span>
									</div>
								</div>
							</div>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-success">
								<i class="fa fa-check"></i> Simpan
							</button>
						</div>
						<?php echo form_close(); ?>
						<hr>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>