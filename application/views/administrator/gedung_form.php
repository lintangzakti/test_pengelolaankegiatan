<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-book"></i> Form Tambah Kelas Sekolah
    </div>

    <?php echo form_open_multipart('administrator/c_gedung/input_aksi') ?>
        <div class="form-group">
            <label>Kode Gedung</label>
            <input type="text" name="kode_gedung" placeholder="Masukkan kode gedung..." class="form-control">
            <?php echo form_error('kode_gedung', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Nama Gedung</label>
            <select name="nama_gedung" class="form-control">
                <option value="">-- Pilih Gedung --</option>
                <option>Gedung A</option>
                <option>Gedung B</option>
            </select>
			<?php echo form_error('nama_gedung', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Jumlah Lantai</label>
            <input type="text" name="jum_lantai" placeholder="Masukkan jumlah lantai" class="form-control">
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" placeholder="Masukkan keterangan" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
    <?php form_close(); ?>
</div>