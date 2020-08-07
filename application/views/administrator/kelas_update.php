<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-book"></i> Form Tambah Kelas Sekolah
    </div>

	<?php foreach($update_kelas as $kel) : ?>
    <?php echo form_open_multipart('administrator/c_kelas/update_aksi') ?>
	
        <div class="form-group">
            <label>Kode Kelas</label>
			<input type="hidden" name="id_kelas" class="form-control" value="<?php echo $kel->id_kelas ?>">
            <input type="text" name="kode_kelas" placeholder="Masukkan kode kelas..." class="form-control" value="<?php echo $kel->kode_kelas ?>">
            <?php echo form_error('kode_kelas', '<div class="text-danger small" ml-3>') ?>
        </div>
		<div class="form-group">
            <label>Nama Kelas</label>
            <input type="text" name="nama_kelas" placeholder="Masukkan nama kelas..." class="form-control" value="<?php echo $kel->nama_kelas ?>">
            <?php echo form_error('nama_kelas', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Wali Kelas</label>
            <input type="text" name="wali_kelas" placeholder="Masukkan nama wali kelas..." class="form-control" value="<?php echo $kel->wali_kelas ?>">
            <?php echo form_error('wali_kelas', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Ruangan</label>
            <select name="ruangan" class="form-control">
                <option value="<?php echo $kel->ruangan ?>">-- Pilih Ruangan --</option>
                <option>Ruangan 1</option>
                <option>Ruangan 2</option>
                <option>Ruangan 3</option>
                <option>Ruangan 4</option>
            </select>
        </div>
        <div class="form-group">
            <label>Gedung</label>
            <select name="gedung" class="form-control">
                <option value="<?php echo $kel->gedung ?>">-- Pilih Gedung --</option>
                <option>Gedung A</option>
                <option>Gedung B</option>
            </select>
        </div>
        <div class="form-group">
            <label>Jumlah Siswa</label>
            <input type="text" name="jumlah_siswa" placeholder="Masukkan Jumlah Siswa" class="form-control" value="<?php echo $kel->jumlah_siswa ?>">
        </div>

        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
		
    <?php form_close(); ?>
	<?php endforeach; ?>
</div>