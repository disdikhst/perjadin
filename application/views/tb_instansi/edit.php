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
						<?php echo form_open_multipart('tb_instansi/edit/' . $tb_instansi['id_instansi']); ?>
						<div class="box-body">
							<div class="row clearfix">
								<div class="col-md-6">
									<label for="nm_instansi" class="control-label"><span class="text-danger">*</span>Nama Instansi</label>
									<div class="form-group">
										<input type="text" name="nm_instansi" value="<?php echo ($this->input->post('nm_instansi') ? $this->input->post('nm_instansi') : $tb_instansi['nm_instansi']); ?>" class="form-control" id="nm_instansi" />
										<span class="text-danger"><?php echo form_error('nm_instansi'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="nm_skpd" class="control-label"><span class="text-danger">*</span>Nama SKPD</label>
									<div class="form-group">
										<input type="text" name="nm_skpd" value="<?php echo ($this->input->post('nm_skpd') ? $this->input->post('nm_skpd') : $tb_instansi['nm_skpd']); ?>" class="form-control" id="nm_skpd" />
										<span class="text-danger"><?php echo form_error('nm_skpd'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="dasar" class="control-label"><span class="text-danger">*</span>Alamat</label>
									<div class="form-group">
										<textarea name="alamat" id="alamat" class="form-control" style="height:100px"><?php echo htmlspecialchars($this->input->post('alamat') ? $this->input->post('alamat') : $tb_instansi['alamat']); ?></textarea>
										<span class="text-danger"><?php echo form_error('alamat'); ?></span>
									</div>
								</div>
								<!-- <div class="col-md-6">
									<label for="alamat" class="control-label"><span class="text-danger">*</span>Alamat</label>
									<div class="form-group">
										<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $tb_instansi['alamat']); ?>" class="form-control" id="alamat" />
										<span class="text-danger"><?php echo form_error('alamat'); ?></span>
									</div>
								</div> -->
								<div class="col-md-6">
									<label for="gambar" class="control-label"><span class="text-danger">*</span>Gambar</label>
									<div class="form-group">
										<input type="file" name="gambar" value="<?php echo ($this->input->post('gambar') ? $this->input->post('gambar') : $tb_instansi['gambar']); ?>" class="form-control" id="gambar" />
										<img src="<?= base_url('assets/foto/') . $tb_instansi['gambar']; ?>" style="width:100px">
										<span class="text-danger"><?php echo form_error('gambar'); ?></span>
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