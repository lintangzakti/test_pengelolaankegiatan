<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-book"></i> Form Tambah Kegiatan Ekstrakulikuler
    </div>

    <form method="post" action="<?php echo base_url('administrator/c_ekskul/input_aksi') ?>">
        <div class="form-group">
            <label>Nama Ekstrakulikuler</label>
            <input type="text" name="nama_eks" placeholder="Masukkan Nama Kegiatan Ekstrakulikuler" class="form-control">
            <?php echo form_error('nama_eks', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Hari</label>
            <select name="hari" class="form-control">
                <option value="">-- Pilih Hari --</option>
                <option>Senin</option>
                <option>Selasa</option>
                <option>Rabu</option>
                <option>Kamis</option>
                <option>Jumat</option>
                <option>Sabtu</option>
                <option>Minggu</option>
            </select>
        </div>
        <div class="form-group">
            <label>Jam Masuk</label>
            <input type="text" name="jam_masuk" placeholder="Masukkan Jam Masuk" class="form-control">
            <?php echo form_error('jam_masuk', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Jam Keluar</label>
            <input type="text" name="jam_keluar" placeholder="Masukkan Jam Keluar" class="form-control">
            <?php echo form_error('jam_keluar', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" placeholder="Masukkan Keterangan" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
    </form>
</div>