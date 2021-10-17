<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Administrator<small>Guru</small></h1>
</section>

<!-- Main content -->
<section class="content container-fluid">
	<form method="post" action="<?php echo base_url('admin/add_guru') ?>">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Edit Data Guru</h3>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label>NIK</label>
							<input type="text" class="form-control" placeholder="NIK" name="nik" value="<?php echo set_value('nik', $data->nik) ?>">
							<?php echo form_error('nik', '<span class="help-block error">', '</span>'); ?>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo set_value('email', $data->email) ?>">
							<?php echo form_error('email', '<span class="help-block error">', '</span>'); ?>
						</div>
						<div class="form-group">
							<label>Nama Lengkap</label>
							<input type="text" class="form-control" placeholder="Nama Lengkap" name="full_name" value="<?php echo set_value('full_name', $data->full_name) ?>">
							<?php echo form_error('full_name', '<span class="help-block error">', '</span>'); ?>
						</div>
						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="text" class="form-control" placeholder="Tanggal Lahir" name="birthday" value="<?php echo set_value('birthday', $data->birthday) ?>">
							<?php echo form_error('birthday', '<span class="help-block error">', '</span>'); ?>
						</div>
						<div class="form-group">
							<label>Agama</label>
							<input type="text" class="form-control" placeholder="Agama" name="religion" value="<?php echo set_value('religion', $data->religion) ?>">
							<?php echo form_error('religion', '<span class="help-block error">', '</span>'); ?>
						</div>
						<div class="form-group">
							<label>Jurusan</label>
							<input type="text" class="form-control" placeholder="Jurusan" name="jurusan" value="<?php echo set_value('jurusan', $data->jurusan) ?>">
							<?php echo form_error('jurusan', '<span class="help-block error">', '</span>'); ?>
						</div>
						<div class="form-group">
							<label>Guru Mapel</label>
							<input type="text" class="form-control" placeholder="Guru Mapel" name="guru_mapel" value="<?php echo set_value('guru_mapel', $data->guru_mapel) ?>">
							<?php echo form_error('guru_mapel', '<span class="help-block error">', '</span>'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<button type="submit" class="btn btn-success">Simpan</button>
			</div>
		</div>
	</form>
</section>