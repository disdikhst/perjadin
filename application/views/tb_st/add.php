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
						<?php echo form_open('tb_st/add'); ?>
						<div class="box-body">
							<div class="row clearfix">
								<div class="col-md-6">
									<label for="no_st" class="control-label"><span class="text-danger">*</span>No Surat Tugas</label>
									<div class="form-group">
										<input type="text" name="no_st" value="<?php echo $this->input->post('no_st'); ?>" class="form-control" id="no_st" />
										<span class="text-danger"><?php echo form_error('no_st'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="tgl_surat" class="control-label"><span class="text-danger">*</span>Tanggal Surat</label>
									<div class="form-group">
										<input type="date" name="tgl_surat" value="<?php echo $this->input->post('tgl_surat'); ?>" class="has-datepicker form-control" id="tgl_surat" />
										<span class="text-danger"><?php echo form_error('tgl_surat'); ?></span>
									</div>
								</div>
								<!-- <div class="col-md-6">
									<label for="dasar" class="control-label"><span class="text-danger">*</span>Dasar</label>
									<div class="form-group">
										<input type="text" name="dasar" value="<?php echo $this->input->post('dasar'); ?>" class="has-datepicker form-control" id="dasar" />
										<span class="text-danger"><?php echo form_error('dasar'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="maksud" class="control-label"><span class="text-danger">*</span>maksud</label>
									<div class="form-group">
										<input type="text" name="maksud" value="<?php echo $this->input->post('maksud'); ?>" class="has-datepicker form-control" id="maksud" />
										<span class="text-danger"><?php echo form_error('maksud'); ?></span>
									</div>
								</div> -->

								<div class="col-md-6">
									<label for="dasar" class="control-label"><span class="text-danger">*</span>Dasar</label>
									<div class="form-group">
										<textarea name="dasar" class="form-control" id="dasar" style="height:200px"><?php echo $this->input->post('dasar'); ?></textarea>

										<span class="text-danger"><?php echo form_error('dasar'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="maksud" class="control-label"><span class="text-danger">*</span>Maksud/Untuk</label>
									<div class="form-group">
										<textarea name="maksud" class="form-control" id="maksud" style="height:200px"><?php echo $this->input->post('maksud'); ?></textarea>
										<span class="text-danger"><?php echo form_error('maksud'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="t_berangkat" class="control-label"><span class="text-danger">*</span>Tempat Berangkat</label>
									<div class="form-group">
										<input type="text" name="t_berangkat" value="<?php echo $this->input->post('t_berangkat'); ?>" class="form-control" id="t_berangkat" />
										<span class="text-danger"><?php echo form_error('t_berangkat'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="t_tujuan" class="control-label"><span class="text-danger">*</span>Tempat Tujuan</label>
									<div class="form-group">
										<input type="text" name="t_tujuan" value="<?php echo $this->input->post('t_tujuan'); ?>" class="form-control" id="t_tujuan" />
										<span class="text-danger"><?php echo form_error('t_tujuan'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="tgl_berangkat" class="control-label"><span class="text-danger">*</span>Tanggal Berangkat</label>
									<div class="form-group">
										<input type="date" name="tgl_berangkat" value="<?php echo $this->input->post('tgl_berangkat'); ?>" class="form-control" id="tgl_berangkat" />
										<span class="text-danger"><?php echo form_error('tgl_berangkat'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="tgl_kembali" class="control-label"><span class="text-danger">*</span>Tanggal Kembali</label>
									<div class="form-group">
										<input type="date" name="tgl_kembali" value="<?php echo $this->input->post('tgl_kembali'); ?>" class="form-control" id="tgl_kembali" />
										<span class="text-danger"><?php echo form_error('tgl_kembali'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="id_instansi" class="control-label">Tabel SKPD</label>
									<div class="form-group">
										<select name="id_instansi" class="form-control">
											<option value="">Pilih SKPD Yang Sudah Didaftarkan</option>
											<?php
											foreach ($all_tb_instansi as $tb_instansi) {
												$selected = ($tb_instansi['id_instansi'] == $this->input->post('id_instansi')) ? ' selected="selected"' : "";

												echo '<option value="' . $tb_instansi['id_instansi'] . '" ' . $selected . '>' . $tb_instansi['nm_skpd'] . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<label for="id_nip_ttd" class="control-label">Tb Tanda Tangan</label>
									<div class="form-group">
										<select name="id_nip_ttd" class="form-control">
											<option value="">Pilih Pejabat Berwenang Yang ttd Surat</option>
											<?php
											foreach ($all_tb_ttd as $tb_ttd) {
												$selected = ($tb_ttd['id_nip_ttd'] == $this->input->post('id_nip_ttd')) ? ' selected="selected"' : "";

												echo '<option value="' . $tb_ttd['id_nip_ttd'] . '" ' . $selected . '>' . $tb_ttd['nama_ttd'] . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<label for="alat_angkut" class="control-label"><span class="text-danger">*</span>Alat Angkut/ Transportasi</label>
									<div class="form-group">
										<input type="text" name="alat_angkut" value="<?php echo $this->input->post('alat_angkut'); ?>" class="form-control" id="alat_angkut" />
										<span class="text-danger"><?php echo form_error('alat_angkut'); ?></span>
									</div>
								</div>

							</div>
						</div>
						<div class="box-footer">
							<a href="<?php echo base_url('tb_st/index/'); ?>" class="btn btn-danger">Kembali</a>
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