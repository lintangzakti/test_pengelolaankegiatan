<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-book"></i> Form Input Jadwal
    </div>

    <form method="post" action="<?php echo base_url('administrator/c_jadwal/input_aksi') ?>">
        <div class="form-group">
            <label>Kode Pelajaran</label>
            <select name="kode_jadwal" class="form-control">
                <option value="">-- Pilih Kode Pelajaran --</option>
                <?php foreach($pelajaran as $pel) : ?>
                    <option value="<?php echo $pel->kode_jadwal ?>">
                        <?php echo $pel->kode_jadwal; ?>
                    </option>
                <?php endforeach ?>
            </select>
            <?php echo form_error('kode_jadwal', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Nama Pelajaran</label>
                <select name="nama_jadwal" class="form-control">
                    <option value="">-- Pilih Nama Pelajaran --</option>
                    <?php foreach($pelajaran as $pel) : ?>
                        <option value="<?php echo $pel->nama_jadwal ?>">
                            <?php echo $pel->nama_jadwal; ?>
                        </option>
                    <?php endforeach ?>
                </select>
            <?php echo form_error('nama_jadwal', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Kategori Pelajaran</label>
                <select name="kategori_jadwal" class="form-control">
                    <option value="">-- Pilih Nama Pelajaran --</option>
                    <?php foreach($pelajaran as $pel) : ?>
                        <option value="<?php echo $pel->kategori_jadwal ?>">
                            <?php echo $pel->kategori_jadwal; ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <?php echo form_error('kategori_jadwal', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Hari</label>
                <select name="hari_jadwal" class="form-control">
                    <option value="">-- Pilih Hari --</option>
					<option>Senin</option>
					<option>Selasa</option>
					<option>Rabu</option>
					<option>Kamis</option>
					<option>Jumat</option>
					<option>Sabtu</option>
                </select>
        </div>

        <div class="form-group">
            <label>Waktu</label>
            <input type="text" name="jam_jadwal" placeholder="Masukkan Jam Belajar" class="form-control">
        </div>

        <div class="form-group">
            <label>Guru</label>
            <input type="text" name="guru_jadwal" placeholder="Masukkan Guru Pengajar" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
		<?php echo anchor('administrator/c_jadwal','<div class="btn btn-primary mb-5">Kembali</div>') ?>
    </form>
</div>