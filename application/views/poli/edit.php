<div class="card">
	<div class="card-header">Edit Poli</div>
	<div class="card-body">
		<form action="<?= base_url('poli/do_edit/'.$poli->id) ?>" method="post" id="form-submit" multipart>
			<div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" class="form-control" name="nama" value="<?=$poli->nama?>" id="nama" placeholder="Nama Lengkap">
			</div>
			<div class="form-group">
			    <label for="gambar">Icon</label>
			    <input type="file" class="form-control" name="gambar" id="gambar">
			</div>
			<img src="<?=base_url($poli->icon)?>" width="25%" id="preview">
		</form>
		<button type="submit" class="btn btn-success btn-md" form="form-submit">Simpan</button>
		<a href="<?=base_url('poli')?>" class="btn btn-danger btn-md">Batal</a>
	</div>
</div>