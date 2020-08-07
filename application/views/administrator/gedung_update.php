<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-book"></i> Form Tambah Kelas Sekolah
    </div>

	<?php foreach($update_gedung as $upged) : ?>
    <?php echo form_open_multipart('administrator/c_gedung/update_aksi') ?>
	
        <div class="form-group">
            <label>Kode Gedung</label>
			<input type="hidden" name="id_gedung" class="form-control" value="<?php echo $upged->id_gedung ?>">
            <input type="text" name="kode_gedung" placeholder="Masukkan kode kelas..." class="form-control" value="<?php echo $upged->kode_gedung ?>">
            <?php echo form_error('kode_gedung', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Nama Gedung</label>
            <select name="nama_gedung" class="form-control">
                <option value="<?php echo $upged->nama_gedung ?>">-- Pilih Gedung --</option>
                <option>Gedung A</option>
                <option>Gedung B</option>
            </select>
        </div>
        <div class="form-group">
            <label>Jumlah Lantai</label>
            <input type="text" name="jum_lantai" placeholder="Masukkan Jumlah Siswa" class="form-control" value="<?php echo $upged->jum_lantai ?>">
        </div>        
		<div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" placeholder="Masukkan Jumlah Siswa" class="form-control" value="<?php echo $upged->keterangan ?>">
        </div>

        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
		
    <?php form_close(); ?>
	<?php endforeach; ?>
</div>