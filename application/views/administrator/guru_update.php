<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-user-friends"></i> Form Update Guru
    </div>

    <?php foreach($detail as $dt) : ?>
    <?php echo form_open_multipart('administrator/c_guru/update_guru_aksi') ?>

        <div class="form-group">
            <label>Nama Guru</label>
            <input type="hidden" name="id_guru" class="form-control" value="<?php echo $dt->id_guru ?>">
            <input type="text" name="nama_guru" class="form-control" value="<?php echo $dt->nama_guru ?>">
            <?php echo form_error('nama_guru', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>NIP</label>
            <input type="text" name="no_nip" class="form-control" value="<?php echo $dt->no_nip ?>">
            <?php echo form_error('no_nip', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $dt->alamat ?>">
            <?php echo form_error('alamat', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Telepon</label>
            <input type="text" name="nohp" class="form-control" value="<?php echo $dt->nohp ?>">
            <?php echo form_error('nohp', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $dt->tempat_lahir ?>">
            <?php echo form_error('tempat_lahir', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $dt->tgl_lahir ?>">
            <?php echo form_error('tgl_lahir', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option value="<?php echo $dt->jenis_kelamin ?>">-- Pilih Jenis Kelamin --</option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
            </select>
            <?php echo form_error('jenis_kelamin', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Tahun Masuk</label>
            <input type="text" name="tahun_masuk" class="form-control" value="<?php echo $dt->tahun_masuk ?>">
            <?php echo form_error('tahun_masuk', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <?php foreach($detail as $dt) : ?>
                <img src="<?php echo base_url(). 'assets/uploads/'.$dt->photo ?>" style="width:20%;">
            <?php endforeach ?>
            <label>Photo</label>
            <input type="file" name="userfile" value="<?php echo $dt->photo ?>">
        </div>

        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
		<?php echo anchor('administrator/c_guru','<div class="btn btn-primary mb-5">Kembali</div>') ?>
		
    <?php form_close(); ?>
    <?php endforeach; ?>
</div>