<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-book"></i> Form Tambah Jenis Ruangan Sekolah
    </div>

    <?php echo form_open_multipart('administrator/c_gedung/input_aksi') ?>
        <div class="form-group">
            <label>Kode Ruangan</label>
            <input type="text" name="kode_ruangan" placeholder="Masukkan kode ruangan..." class="form-control">
            <?php echo form_error('kode_ruangan', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Versi Gedung</label>
            <select name="nama_gedung" class="form-control">
                <option value="">-- Pilih Gedung --</option>
                <option>Gedung Baru</option>
                <option>Gedung Lama</option>
            </select>
			<?php echo form_error('nama_gedung', '<div class="text-danger small" ml-3>') ?>
        </div>        
		<div class="form-group">
            <label>Nama Ruangan</label>
            <select name="nama_ruangan" class="form-control">
                <option value="">-- Pilih Ruangan --</option>
                <option>Ruangan Kelas VI</option>
                <option>Ruangan Kelas V</option>
                <option>Ruangan Kelas IV</option>
                <option>Ruangan Kelas III</option>
                <option>Ruangan Kelas II</option>
                <option>Ruangan Kelas I</option>
            </select>
			<?php echo form_error('nama_ruangan', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Kapasitas</label>
            <input type="text" name="kapasitas" placeholder="Masukkan jumlah lantai..." class="form-control">
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" placeholder="Masukkan keterangan..." class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
    <?php form_close(); ?>
</div>