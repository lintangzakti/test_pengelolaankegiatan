<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-user-friends"></i> Form Tambah Guru
    </div>

    <?php echo form_open_multipart('administrator/c_guru/tambah_guru_aksi') ?>

        <div class="form-group">
            <label>Nama Guru</label>
            <input type="text" name="nama_guru" placeholder="masukkan nama guru" class="form-control">
            <?php echo form_error('nama_guru', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>NIP</label>
            <input type="text" name="no_nip" placeholder="masukkan nip" class="form-control">
            <?php echo form_error('no_nip', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" placeholder="masukkan alamat" class="form-control">
            <?php echo form_error('alamat', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Telepon</label>
            <input type="text" name="nohp" placeholder="masukkan nomer telepon" class="form-control">
            <?php echo form_error('nohp', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" placeholder="masukkan tempat lahir" class="form-control">
            <?php echo form_error('tempat_lahir', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control">
            <?php echo form_error('tgl_lahir', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
            </select>
            <?php echo form_error('jenis_kelamin', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Tahun Masuk</label>
            <input type="text" name="tahun_masuk" placeholder="masukkan tahun masuk" class="form-control">
            <?php echo form_error('tahun_masuk', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Photo</label>
            <input type="file" name="photo">
        </div>

        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
		<?php echo anchor('administrator/c_guru','<div class="btn btn-primary mb-5">Kembali</div>') ?>
    <?php form_close(); ?>
</div>