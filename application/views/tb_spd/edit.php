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
						<?php echo form_open('tb_spd/edit/' . $tb_spd['id_spd']); ?>
						<div class="box-body">
							<div class="row clearfix">
								<div class="col-md-6">
									<label for="id_instansi" class="control-label">Tabel Instansi</label>
									<div class="form-group">
										<select name="id_instansi" class="form-control">
											<option value="">Pilih Data Instansi</option>
											<?php
											foreach ($all_tb_instansi as $tb_instansi) {
												$selected = ($tb_instansi['id_instansi'] == $tb_spd['id_instansi']) ? ' selected="selected"' : "";

												echo '<option value="' . $tb_instansi['id_instansi'] . '" ' . $selected . '>' . $tb_instansi['nm_skpd'] . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<label for="id_st" class="control-label">Tabel Surat Tugas</label>
									<div class="form-group">
										<select name="id_st" class="form-control">
											<option value="">Pilih data Surat Tugas</option>
											<?php
											foreach ($all_tb_st as $tb_st) {
												$selected = ($tb_st['id_st'] == $tb_spd['id_st']) ? ' selected="selected"' : "";

												echo '<option value="' . $tb_st['id_st'] . '" ' . $selected . '>' . $tb_st['no_st'] . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<label for="id_nip" class="control-label">Tabel Pegawai</label>
									<div class="form-group">
										<select name="id_nip" class="form-control">
											<option value="">pilih data Pegawai</option>
											<?php
											foreach ($all_tb_pegawai as $tb_pegawai) {
												$selected = ($tb_pegawai['id_nip'] == $tb_spd['id_nip']) ? ' selected="selected"' : "";

												echo '<option value="' . $tb_pegawai['id_nip'] . '" ' . $selected . '>' . $tb_pegawai['nama'] . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<label for="id_nip_ttd" class="control-label">Tabel Penandatangan</label>
									<div class="form-group">
										<select name="id_nip_ttd" class="form-control">
											<option value="">Pilih Pejabat Yang Menandatangani</option>
											<?php
											foreach ($all_tb_ttd as $tb_ttd) {
												$selected = ($tb_ttd['id_nip_ttd'] == $tb_spd['id_nip_ttd']) ? ' selected="selected"' : "";

												echo '<option value="' . $tb_ttd['id_nip_ttd'] . '" ' . $selected . '>' . $tb_ttd['nama_ttd'] . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<label for="peng1" class="control-label">Pengikut 1</label>
									<div class="form-group">
										<input type="text" name="peng1" value="<?php echo ($this->input->post('peng1') ? $this->input->post('peng1') : $tb_spd['peng1']); ?>" class="form-control" id="peng1" />
									</div>
								</div>
								<div class="col-md-6">
									<label for="tgl_lahir_peng1" class="control-label">Tgl Lahir Pengikut 1</label>
									<div class="form-group">
										<input type="text" name="tgl_lahir_peng1" value="<?php echo ($this->input->post('tgl_lahir_peng1') ? $this->input->post('tgl_lahir_peng1') : $tb_spd['tgl_lahir_peng1']); ?>" class="form-control" id="tgl_lahir_peng1" />
									</div>
								</div>
								<div class="col-md-6">
									<label for="peng2" class="control-label">Pengikut 2</label>
									<div class="form-group">
										<input type="text" name="peng2" value="<?php echo ($this->input->post('peng2') ? $this->input->post('peng2') : $tb_spd['peng2']); ?>" class="form-control" id="peng2" />
									</div>
								</div>
								<div class="col-md-6">
									<label for="tgl_lahir_peng2" class="control-label">Tgl Lahir Pengikut 2</label>
									<div class="form-group">
										<input type="text" name="tgl_lahir_peng2" value="<?php echo ($this->input->post('tgl_lahir_peng2') ? $this->input->post('tgl_lahir_peng2') : $tb_spd['tgl_lahir_peng2']); ?>" class="form-control" id="tgl_lahir_peng2" />
									</div>
								</div>
								<div class="col-md-6">
									<label for="skpd_pembeban" class="control-label"><span class="text-danger">*</span>SKPD Pembebana Biaya</label>
									<div class="form-group">
										<input type="text" name="skpd_pembeban" value="<?php echo ($this->input->post('skpd_pembeban') ? $this->input->post('skpd_pembeban') : $tb_spd['skpd_pembeban']); ?>" class="form-control" id="skpd_pembeban" />
										<span class="text-danger"><?php echo form_error('skpd_pembeban'); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label for="kode_belanja" class="control-label"><span class="text-danger">*</span>Kode Belanja</label>
									<div class="form-group">
										<input type="text" name="kode_belanja" value="<?php echo ($this->input->post('kode_belanja') ? $this->input->post('kode_belanja') : $tb_spd['kode_belanja']); ?>" class="form-control" id="kode_belanja" />
										<span class="text-danger"><?php echo form_error('kode_belanja'); ?></span>
									</div>
								</div>
							</div>
						</div>
						<div class="box-footer">
							<a href="#" class="btn btn-warning" onclick="javascript: return window.history.back()">Kembali</a>
							<button type="submit" class="btn btn-success" onclick="javascript: return window.history.go(-4)">
								<i class=" fa fa-check"></i>Simpan
							</button>
							<!-- <a href="#" class="btn btn-success" onclick="javascript: return window.history.back()">Previous</a> -->
						</div>
						<?php echo form_close(); ?>
						<hr>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>