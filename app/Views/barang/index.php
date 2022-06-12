<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>Barang</h1>

<a href="<?= site_url('barang/create') ?>" class="btn btn-sm btn-success"> 
<i class="bi bi-plus	"></i>
	Tambah 
</a>

<table class="table">
	<thead>
		<th>No</th>
		<th>Barang</th>
		<th>Gambar</th>
		<th>Harga</th>
		<th>Stok</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php foreach($barangs as $index=>$barang): ?>
			<tr>
				<td><?= ($index+1) ?></td>
				<td><?= $barang->nama ?></td>
				<td>
					<a href="<?= base_url('uploads/'.$barang->gambar) ?>" target="_blank">
						<img class="img-fluid" style="width: 50px; height: 50px;"alt="gambar" src="<?= base_url('uploads/'.$barang->gambar) ?>" />
					</a>
				</td>
				<td><?= $barang->harga ?></td>
				<td><?= $barang->stok ?></td>
				<td>
					<a href="<?= site_url('barang/view/'.$barang->id) ?>" class="btn btn-sm btn-primary">
						<i class="bi bi-eye"></i>
						View
					</a>
					<a href="<?= site_url('barang/update/'.$barang->id) ?>" class="btn btn-sm btn-success">
						<i class="bi bi-pen"></i>
						Update
					</a>
					<a href="<?= site_url('barang/delete/'.$barang->id) ?>" class="btn btn-sm btn-danger">
						<i class="bi bi-trash"></i>
						Delete
					</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
<?= $this->endSection() ?>