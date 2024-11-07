<div class="container">

	<div class="card o-hidden border-0 shadow-lg my-5 col-lg-15 mx-auto">
		<div class="card-body p-0">
			<!-- Nested Row within Card Body -->
			<div class="row">

				<div class="col-lg">
					<div class="p-5">
						<div class="text-center">
							<h1 class="h4 text-gray-900 mb-4" style="font-weight: bold;">Isi Data (Kolom Kanan dari SPD)</h1>
						</div>
						<?php echo form_open('tb_st/edit2/' . $tb_st['id_st']); ?>
						<div class="box-body">
							<div class="row clearfix">
								<!-- Kolom kiri baris Pertama -->
								<div class="list-group-item col-md-6">
									<div>
										<label for="no_st" class="control-label" style="font-weight: bold;"><span class="text-danger">*</span>Tiba di (Baris Pertama)</label>
										<div class="form-group">
											<input type="text" name="tibadi1" value="<?php echo ($this->input->post('tibadi1') ? $this->input->post('tibadi1') : $tb_st['tibadi1']); ?>" class="form-control" id="tibadi1" />
											<span class="text-danger"><?php echo form_error('tibadi1'); ?></span>
										</div>
									</div>
									<div>
										<label for="no_st" class="control-label"><span class="text-danger">*</span>Pada Tanggal</label>
										<div class="form-group">
											<input type="text" name="tgl_kiri1" value="<?php echo ($this->input->post('tgl_kiri1') ? $this->input->post('tgl_kiri1') : $tb_st['tgl_kiri1']); ?>" class="form-control" id="tgl_kiri1" />
											<span class="text-danger"><?php echo form_error('tgl_kiri1'); ?></span>
										</div>
									</div>
									<div>
										<label for="no_st" class="control-label"><span class="text-danger">*</span>Jabatan/Kepala</label>
										<div class="form-group">
											<input type="text" name="kepalakiri1" value="<?php echo ($this->input->post('kepalakiri1') ? $this->input->post('kepalakiri1') : $tb_st['kepalakiri1']); ?>" class="form-control" id="kepalakiri1" />
											<span class="text-danger"><?php echo form_error('kepalakiri1'); ?></span>
										</div>
									</div>
									<div>
										<label for="no_st" class="control-label"><span class="text-danger">*</span>Nama</label>
										<div class="form-group">
											<input type="text" name="namakiri1" value="<?php echo ($this->input->post('namakiri1') ? $this->input->post('namakiri1') : $tb_st['namakiri1']); ?>" class="form-control" id="namakiri1" />
											<span class="text-danger"><?php echo form_error('namakiri1'); ?></span>
										</div>
									</div>
									<div>
										<label for="no_st" class="control-label"><span class="text-danger">*</span>NIP/NIK</label>
										<div class="form-group">
											<input type="text" name="nipkiri1" value="<?php echo ($this->input->post('nipkiri1') ? $this->input->post('nipkiri1') : $tb_st['nipkiri1']); ?>" class="form-control" id="nipkiri1" />
											<span class="text-danger"><?php echo form_error('nipkiri1'); ?></span>
										</div>
									</div>
								</div>
								<!-- Kolom Kanan Baris Pertama -->
								<div class="list-group-item col-md-6">
									<div>
										<label for="no_st" class="control-label" style="font-weight: bold;"><span class="text-danger">*</span>Berangkat Dari (Baris Pertama)</label>
										<div class="form-group">
											<input type="text" name="dari1" value="<?php echo ($this->input->post('dari1') ? $this->input->post('dari1') : $tb_st['dari1']); ?>" class="form-control" id="dari1" />
											<span class="text-danger"><?php echo form_error('dari1'); ?></span>
										</div>
									</div>
									<div>
										<label for="no_st" class="control-label"><span class="text-danger">*</span>Ke</label>
										<div class="form-group">
											<input type="text" name="ke1" value="<?php echo ($this->input->post('ke1') ? $this->input->post('ke1') : $tb_st['ke1']); ?>" class="form-control" id="ke1" />
											<span class="text-danger"><?php echo form_error('ke1'); ?></span>
										</div>
									</div>
									<div>
										<label for="no_st" class="control-label"><span class="text-danger">*</span>Pada Tanggal</label>
										<div class="form-group">
											<input type="text" name="tgl_kanan1" value="<?php echo ($this->input->post('tgl_kanan1') ? $this->input->post('tgl_kanan1') : $tb_st['tgl_kanan1']); ?>" class="form-control" id="tgl_kanan1" />
											<span class="text-danger"><?php echo form_error('tgl_kanan1'); ?></span>
										</div>
									</div>
									<div>
										<label for="no_st" class="control-label"><span class="text-danger">*</span>Jabatan/ Kepala, Nama, NIP/NIK Ikut Sebelah Kiri </label>
									</div>
								</div>
								<hr>
								<!-- Kolom Kiri Baris Kedua -->
								<div class="list-group-item col-md-6">
									<div>
										<label for="no_st" class="control-label" style="font-weight: bold;"><span class="text-danger">*</span>Tiba di (Baris Kedua)</label>
										<div class="form-group">
											<input type="text" name="tibadi2" value="<?php echo ($this->input->post('tibadi2') ? $this->input->post('tibadi2') : $tb_st['tibadi2']); ?>" class="form-control" id="tibadi2" />
											<span class="text-danger"><?php echo form_error('tibadi2'); ?></span>
										</div>
									</div>
									<div>
										<label for="no_st" class="control-label"><span class="text-danger">*</span>Pada Tanggal</label>
										<div class="form-group">
											<input type="text" name="tgl_kiri2" value="<?php echo ($this->input->post('tgl_kiri2') ? $this->input->post('tgl_kiri2') : $tb_st['tgl_kiri2']); ?>" class="form-control" id="tgl_kiri2" />
											<span class="text-danger"><?php echo form_error('tgl_kiri2'); ?></span>
										</div>
									</div>
									<div>
										<label for="no_st" class="control-label"><span class="text-danger">*</span>Jabatan/Kepala</label>
										<div class="form-group">
											<input type="text" name="kepalakiri2" value="<?php echo ($this->input->post('kepalakiri2') ? $this->input->post('kepalakiri2') : $tb_st['kepalakiri2']); ?>" class="form-control" id="kepalakiri2" />
											<span class="text-danger"><?php echo form_error('kepalakiri2'); ?></span>
										</div>
									</div>
									<div>
										<label for="no_st" class="control-label"><span class="text-danger">*</span>Nama</label>
										<div class="form-group">
											<input type="text" name="namakiri2" value="<?php echo ($this->input->post('namakiri2') ? $this->input->post('namakiri2') : $tb_st['namakiri2']); ?>" class="form-control" id="namakiri2" />
											<span class="text-danger"><?php echo form_error('namakiri2'); ?></span>
										</div>
									</div>
									<div>
										<label for="no_st" class="control-label"><span class="text-danger">*</span>NIP/NIK</label>
										<div class="form-group">
											<input type="text" name="nipkiri2" value="<?php echo ($this->input->post('nipkiri2') ? $this->input->post('nipkiri2') : $tb_st['nipkiri2']); ?>" class="form-control" id="nipkiri2" />
											<span class="text-danger"><?php echo form_error('nipkiri2'); ?></span>
										</div>
									</div>
								</div>
								<!-- Kolom Kanan Baris Kedua -->
								<div class="list-group-item col-md-6">
									<div>
										<label for="no_st" class="control-label" style="font-weight: bold;"><span class="text-danger">*</span>Berangkat Dari (Baris Kedua)</label>
										<div class="form-group">
											<input type="text" name="dari2" value="<?php echo ($this->input->post('dari2') ? $this->input->post('dari2') : $tb_st['dari2']); ?>" class="form-control" id="dari2" />
											<span class="text-danger"><?php echo form_error('dari2'); ?></span>
										</div>
									</div>
									<div>
										<label for="no_st" class="control-label"><span class="text-danger">*</span>Ke</label>
										<div class="form-group">
											<input type="text" name="ke2" value="<?php echo ($this->input->post('ke2') ? $this->input->post('ke2') : $tb_st['ke2']); ?>" class="form-control" id="ke2" />
											<span class="text-danger"><?php echo form_error('ke2'); ?></span>
										</div>
									</div>
									<div>
										<label for="no_st" class="control-label"><span class="text-danger">*</span>Pada Tanggal</label>
										<div class="form-group">
											<input type="text" name="tgl_kanan2" value="<?php echo ($this->input->post('tgl_kanan2') ? $this->input->post('tgl_kanan2') : $tb_st['tgl_kanan2']); ?>" class="form-control" id="tgl_kanan2" />
											<span class="text-danger"><?php echo form_error('tgl_kanan2'); ?></span>
										</div>
									</div>
									<div>
										<label for="no_st" class="control-label"><span class="text-danger">*</span>Jabatan/ Kepala, Nama, NIP/NIKIkut Sebelah Kiri </label>
									</div>
								</div>
								<!-- Kolom Kiri Baris Ketiga -->
								<div class="list-group-item col-md-6">
									<div>
										<label for="no_st" class="control-label" style="font-weight: bold;"><span class="text-danger">*</span>Tiba di (Baris Ketiga)</label>
										<div class="form-group">
											<input type="text" name="tibadi3" value="<?php echo ($this->input->post('tibadi3') ? $this->input->post('tibadi3') : $tb_st['tibadi3']); ?>" class="form-control" id="tibadi3" />
											<span class="text-danger"><?php echo form_error('tibadi3'); ?></span>
										</div>
									</div>
									<div>
										<label for="no_st" class="control-label"><span class="text-danger">*</span>Pada Tanggal</label>
										<div class="form-group">
											<input type="text" name="tgl_kiri3" value="<?php echo ($this->input->post('tgl_kiri3') ? $this->input->post('tgl_kiri3') : $tb_st['tgl_kiri3']); ?>" class="form-control" id="tgl_kiri3" />
											<span class="text-danger"><?php echo form_error('tgl_kiri3'); ?></span>
										</div>
									</div>
									<div>
										<label for="no_st" class="control-label"><span class="text-danger">*</span>Jabatan/Kepala</label>
										<div class="form-group">
											<input type="text" name="kepalakiri3" value="<?php echo ($this->input->post('kepalakiri3') ? $this->input->post('kepalakiri3') : $tb_st['kepalakiri3']); ?>" class="form-control" id="kepalakiri3" />
											<span class="text-danger"><?php echo form_error('kepalakiri3'); ?></span>
										</div>
									</div>
									<div>
										<label for="no_st" class="control-label"><span class="text-danger">*</span>Nama</label>
										<div class="form-group">
											<input type="text" name="namakiri3" value="<?php echo ($this->input->post('namakiri3') ? $this->input->post('namakiri3') : $tb_st['namakiri3']); ?>" class="form-control" id="namakiri3" />
											<span class="text-danger"><?php echo form_error('namakiri3'); ?></span>
										</div>
									</div>
									<div>
										<label for="no_st" class="control-label"><span class="text-danger">*</span>NIP/NIK</label>
										<div class="form-group">
											<input type="text" name="nipkiri3" value="<?php echo ($this->input->post('nipkiri3') ? $this->input->post('nipkiri3') : $tb_st['nipkiri3']); ?>" class="form-control" id="nipkiri3" />
											<span class="text-danger"><?php echo form_error('nipkiri3'); ?></span>
										</div>
									</div>
								</div>
								<!-- Kolom Kanan Baris Ketiga -->
								<div class="list-group-item col-md-6">
									<div>
										<label for="no_st" class="control-label" style="font-weight: bold;"><span class="text-danger">*</span>Berangkat Dari (Baris Ketiga)</label>
										<div class="form-group">
											<input type="text" name="dari3" value="<?php echo ($this->input->post('dari3') ? $this->input->post('dari3') : $tb_st['dari3']); ?>" class="form-control" id="dari3" />
											<span class="text-danger"><?php echo form_error('dari3'); ?></span>
										</div>
									</div>
									<div>
										<label for="no_st" class="control-label"><span class="text-danger">*</span>Ke</label>
										<div class="form-group">
											<input type="text" name="ke3" value="<?php echo ($this->input->post('ke3') ? $this->input->post('ke3') : $tb_st['ke3']); ?>" class="form-control" id="ke3" />
											<span class="text-danger"><?php echo form_error('ke3'); ?></span>
										</div>
									</div>
									<div>
										<label for="no_st" class="control-label"><span class="text-danger">*</span>Pada Tanggal</label>
										<div class="form-group">
											<input type="text" name="tgl_kanan3" value="<?php echo ($this->input->post('tgl_kanan3') ? $this->input->post('tgl_kanan3') : $tb_st['tgl_kanan3']); ?>" class="form-control" id="tgl_kanan3" />
											<span class="text-danger"><?php echo form_error('tgl_kanan3'); ?></span>
										</div>
									</div>
									<div>
										<label for="no_st" class="control-label"><span class="text-danger">*</span>Jabatan/ Kepala, Nama, NIP/NIKIkut Sebelah Kiri </label>
									</div>
								</div>
								<!-- untuk menangkap id_st -->
								<div class="col-md-2">
									<div class="form-group">
										<input type="hidden" name="id_st" value="<?php echo ($this->input->post('id_st') ? $this->input->post('id_st') : $tb_st['id_st']); ?>" class="form-control" id="id_st" />
										<span class="text-danger"><?php echo form_error('id_st'); ?></span>
									</div>
								</div>




							</div>
						</div>
						<hr>
						<div class="box-footer">
							<a href="<?php echo base_url('detail/detail_st/') . $tb_st['id_st']; ?>" class="btn btn-danger">Kembali</a>
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