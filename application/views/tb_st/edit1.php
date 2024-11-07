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
						<?php echo form_open('tb_st/edit1/' . $tb_st['id_st']); ?>
						<div class="box-body">
							<div class="row clearfix">
								<div class="col-md-2">
									<label for="no_st" class="control-label"><span class="text-danger">*</span>Penomoran/label 1</label>
									<div class="form-group">
										<input type="text" name="no_u1" value="<?php echo ($this->input->post('no_u1') ? $this->input->post('no_u1') : $tb_st['no_u1']); ?>" class="form-control" id="no_u1" />
										<span class="text-danger"><?php echo form_error('no_u1'); ?></span>
									</div>
								</div>
								<div class="col-md-10">
									<label for="dasar" class="control-label"><span class="text-danger">*</span>Hasil Yang Dicapai</label>
									<div class="form-group">
										<textarea name="lap1" id="lap1" class="form-control" style="height:100px;"><?php echo ($this->input->post('lap1') ? $this->input->post('lap1') : $tb_st['lap1']); ?></textarea>
										<span class="text-danger"><?php echo form_error('lap1'); ?></span>
									</div>
								</div>
								<div class="col-md-2">
									<label for="no_st" class="control-label"><span class="text-danger">*</span>Penomoran/label 2</label>
									<div class="form-group">
										<input type="text" name="no_u2" value="<?php echo ($this->input->post('no_u2') ? $this->input->post('no_u2') : $tb_st['no_u2']); ?>" class="form-control" id="no_u2" />
										<span class="text-danger"><?php echo form_error('no_u2'); ?></span>
									</div>
								</div>
								<div class="col-md-10">
									<label for="dasar" class="control-label"><span class="text-danger">*</span>Hasil Yang Dicapai</label>
									<div class="form-group">
										<textarea name="lap2" id="lap2" class="form-control" style="height:100px;"><?php echo ($this->input->post('lap2') ? $this->input->post('lap2') : $tb_st['lap2']); ?></textarea>
										<span class="text-danger"><?php echo form_error('lap2'); ?></span>
									</div>
								</div>
								<div class="col-md-2">
									<label for="no_st" class="control-label"><span class="text-danger">*</span>Penomoran/label 3</label>
									<div class="form-group">
										<input type="text" name="no_u3" value="<?php echo ($this->input->post('no_u3') ? $this->input->post('no_u3') : $tb_st['no_u3']); ?>" class="form-control" id="no_u3" />
										<span class="text-danger"><?php echo form_error('no_u3'); ?></span>
									</div>
								</div>
								<div class="col-md-10">
									<label for="dasar" class="control-label"><span class="text-danger">*</span>Hasil Yang Dicapai</label>
									<div class="form-group">
										<textarea name="lap3" id="lap3" class="form-control" style="height:100px;"><?php echo ($this->input->post('lap3') ? $this->input->post('lap3') : $tb_st['lap3']); ?></textarea>
										<span class="text-danger"><?php echo form_error('lap3'); ?></span>
									</div>
								</div>
								<div class="col-md-2">
									<label for="no_st" class="control-label"><span class="text-danger">*</span>Penomoran/label 4</label>
									<div class="form-group">
										<input type="text" name="no_u4" value="<?php echo ($this->input->post('no_u4') ? $this->input->post('no_u4') : $tb_st['no_u4']); ?>" class="form-control" id="no_u4" />
										<span class="text-danger"><?php echo form_error('no_u4'); ?></span>
									</div>
								</div>
								<div class="col-md-10">
									<label for="dasar" class="control-label"><span class="text-danger">*</span>Hasil Yang Dicapai</label>
									<div class="form-group">
										<textarea name="lap4" id="lap4" class="form-control" style="height:100px;"><?php echo ($this->input->post('lap4') ? $this->input->post('lap4') : $tb_st['lap4']); ?></textarea>
										<span class="text-danger"><?php echo form_error('lap4'); ?></span>
									</div>
								</div>
								<div class="col-md-2">
									<label for="no_st" class="control-label"><span class="text-danger">*</span>Penomoran/label 5</label>
									<div class="form-group">
										<input type="text" name="no_u5" value="<?php echo ($this->input->post('no_u5') ? $this->input->post('no_u5') : $tb_st['no_u5']); ?>" class="form-control" id="no_u5" />
										<span class="text-danger"><?php echo form_error('no_u5'); ?></span>
									</div>
								</div>
								<div class="col-md-10">
									<label for="dasar" class="control-label"><span class="text-danger">*</span>Hasil Yang Dicapai</label>
									<div class="form-group">
										<textarea name="lap5" id="lap5" class="form-control" style="height:100px;"><?php echo ($this->input->post('lap5') ? $this->input->post('lap5') : $tb_st['lap5']); ?></textarea>
										<span class="text-danger"><?php echo form_error('lap5'); ?></span>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<input type="hidden" name="id_st" value="<?php echo ($this->input->post('id_st') ? $this->input->post('id_st') : $tb_st['id_st']); ?>" class="form-control" id="id_st" />
										<span class="text-danger"><?php echo form_error('id_st'); ?></span>
									</div>
								</div>







							</div>
						</div>
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