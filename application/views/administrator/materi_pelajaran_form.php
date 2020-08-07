<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-book"></i> Form Input Materi Pelajaran
    </div>

    <?php echo form_open_multipart('administrator/c_pelajaran/input_aksi') ?>

    <div class="form-group">
        <label>Kode Pelajaran</label>
        <input type="text" name="kode_jadwal" placeholder="Masukkan Kode Pelajaran" class="form-control">
        <?php echo form_error('kode_pelajaran', '<div class="text-danger small" ml-3>') ?>
    </div>
    <div class="form-group">
		<label>Nama Pelajaran</label>
        <input type="text" name="nama_jadwal" placeholder="Masukkan Nama Pelajaran" class="form-control">
        <?php echo form_error('nama_pelajaran', '<div class="text-danger small" ml-3>') ?>
    </div>
    <div class="form-group">
        <label>Kategori Pelajaran</label>
        <select name="kategori_jadwal" class="form-control">
            <option value="">-- Pilih Kategori Pelajaran --</option>
            <option>Bahasa</option>
            <option>Perhitungan</option>
            <option>Sejarah</option>
            <option>Olahraga</option>
			<option>Sains</option>
        </select>
		<?php echo form_error('kategori_jadwal', '<div class="text-danger small" ml-3>') ?>
    </div>

    <button type="submit" class="btn btn-primary mb-5">Simpan</button>
	<?php echo anchor('administrator/c_pelajaran','<div class="btn btn-primary mb-5">Kembali</div>') ?>
	<?php form_close(); ?>
</div>