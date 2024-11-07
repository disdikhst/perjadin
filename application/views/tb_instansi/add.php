<div class="container">

	<div class="card o-hidden border-0 shadow-lg my-5 col-lg-15 mx-auto">
		<div class="card-body p-0">
			<!-- Nested Row within Card Body -->
			<div class="row">

				<div class="col-lg">
					<div class="p-5">
						<div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">Isi Data Instansi Untuk Kop Surat</h1>
						</div>
						<?php echo form_open_multipart('tb_instansi/add'); ?>
						<div class="box-body">
							<div class="row clearfix">
								<div class="col-md-6">
									<label for="nm_instansi" class="control-label"><span class="text-danger">*</span>Nama Instansi</label>
									<div class="form-group">
										<input type="text" name="nm_instansi" value="<?php echo $this->input->post('nm_instansi'); ?>" class="form-control" id="nm_instansi" />
										<span class="text-danger"><?php echo form_error('nm_instansi'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="nm_skpd" class="control-label"><span class="text-danger">*</span>Nama SKPD</label>
									<div class="form-group">
										<input type="text" name="nm_skpd" value="<?php echo $this->input->post('nm_skpd'); ?>" class="form-control" id="nm_skpd" />
										<span class="text-danger"><?php echo form_error('nm_skpd'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="maksud" class="control-label"><span class="text-danger">*</span>Alamat</label>
									<div class="form-group">
										<textarea name="alamat" class="form-control" id="alamat" style="height:200px"><?php echo $this->input->post('alamat'); ?></textarea>
										<span class="text-danger"><?php echo form_error('alamat'); ?></span>
									</div>
								</div>
								<!-- <div class="col-md-6">
									<label for="alamat" class="control-label"><span class="text-danger">*</span>Alamat</label>
									<div class="form-group">
										<input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" />
										<span class="text-danger"><?php echo form_error('alamat'); ?></span>
									</div>
								</div> -->
								<div class="col-md-6">
									<label for="gambar" class="control-label"><span class="text-danger">*</span>Logo Otomatis Adalah Logo Pemkab HST, Apabila ingin Mengubah Logo Silahkan Ubah di Bagian Edit</label>
									<!-- <div class="form-group">
										<input type="file" name="gambar" value="<?php echo $this->input->post('gambar'); ?>" class="form-control" id="gambar" />
										<span class="text-danger"><?php echo form_error('gambar'); ?></span>
									</div> -->
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