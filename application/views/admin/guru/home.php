<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Administrator<small>Home</small></h1>
</section>

<!-- Main content -->
<section class="content container-fluid">
	<div class="box">
		<div class="row">
			<div class="col-lg-12">
				<?php if ($this->session->has_userdata('guru')) : ?>
					<?php if ($this->session->userdata('guru')['status'] == 'success') : ?>
					<div class="alert alert-success"><?php echo $this->session->userdata('guru')['message']; ?></div>
					<?php else: ?>
					<div class="alert alert-danger"><?php echo $this->session->userdata('guru')['message']; ?></div>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="box-header with-border">
			<h3 class="box-title">Title</h3>
		</div>
		<div class="box-body">
			<table class="table table-hover table-striped">
				<thead>
					<th>No</th>
					<th>NIK</th>
					<th>Nama Lengkap</th>
					<th>Tanggal Lahir</th>
					<th>Agama</th>
					<th>Jurusan</th>
					<th>Mata Pelajaran</th>
					<th>Opsi</th>
				</thead>
				<tbody>
					<?php foreach ($guru as $key => $value) : ?>
					<tr>
						<td><?php echo $key+1 ?></td>
						<td><?php echo $value->nik ?></td>
						<td><?php echo $value->full_name ?></td>
						<td><?php echo $value->birthday ?></td>
						<td><?php echo $value->religion ?></td>
						<td><?php echo $value->jurusan ?></td>
						<td><?php echo $value->guru_mapel ?></td>
						<td><?php echo $value->nik ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<div class="box-footer">
			<a href="<?php echo base_url('admin/add_guru') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data Guru</a>
		</div>
	</div>
</section>