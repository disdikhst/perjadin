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
						<?php echo form_open('tb_pegawai/add'); ?>
						<div class="box-body">
							<div class="row clearfix">
								<div class="col-md-6">
									<label for="nip_peg" class="control-label"><span class="text-danger">*</span>NIP</label>
									<div class="form-group">
										<input type="text" name="nip_peg" value="<?php echo $this->input->post('nip_peg'); ?>" class="form-control" id="nip_peg" />
										<span class="text-danger"><?php echo form_error('nip_peg'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="nama" class="control-label"><span class="text-danger">*</span>Nama</label>
									<div class="form-group">
										<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="form-control" id="nama" />
										<span class="text-danger"><?php echo form_error('nama'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="pangkat_gol" class="control-label"><span class="text-danger">*</span>Pangkat Gol</label>
									<div class="form-group">
										<input type="text" name="pangkat_gol" value="<?php echo $this->input->post('pangkat_gol'); ?>" class="form-control" id="pangkat_gol" />
										<span class="text-danger"><?php echo form_error('pangkat_gol'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="jabatan" class="control-label"><span class="text-danger">*</span>Jabatan</label>
									<div class="form-group">
										<input type="text" name="jabatan" value="<?php echo $this->input->post('jabatan'); ?>" class="form-control" id="jabatan" />
										<span class="text-danger"><?php echo form_error('jabatan'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="ttl" class="control-label"><span class="text-danger">(Tidak wajib di isi)</span>Tanggal Lahir</label>
									<div class="form-group">
										<input type="date" name="ttl" value="<?php echo $this->input->post('ttl'); ?>" class="form-control" id="ttl" />
										<span class="text-danger"><?php echo form_error('ttl'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="pendidikan" class="control-label"><span class="text-danger">(Tidak wajib di isi)</span>Pendidikan</label>
									<div class="form-group">
										<input type="text" name="pendidikan" value="<?php echo $this->input->post('pendidikan'); ?>" class="form-control" id="pendidikan" />
										<span class="text-danger"><?php echo form_error('pendidikan'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="skpd" class="control-label"><span class="text-danger">*</span>Skpd</label>
									<div class="form-group">
										<input type="text" name="skpd" value="<?php echo $this->input->post('skpd'); ?>" class="form-control" id="skpd" />
										<span class="text-danger"><?php echo form_error('skpd'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="instansi" class="control-label"><span class="text-danger">*</span>Instansi</label>
									<div class="form-group">
										<input type="text" name="instansi" value="<?php echo $this->input->post('instansi'); ?>" class="form-control" id="instansi" />
										<span class="text-danger"><?php echo form_error('instansi'); ?></span>
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