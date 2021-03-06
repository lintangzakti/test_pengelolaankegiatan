<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-book"></i> Form Tambah Kegiatan Ekstrakulikuler
    </div>

    <?php foreach($c_ekskul as $kul) : ?>
        <form method="post" action="<?php echo base_url('administrator/c_ekskul/update_aksi') ?>">
            <div class="form-group">
                <input type="hidden" name="id_eks" value="<?php echo $kul->id_eks ?>">
            </div>
            <div class="form-group">
                <label>Nama Ekstrakulikuler</label>
                <input type="text" name="nama_eks" placeholder="Masukkan Nama Kegiatan Ekstrakulikuler" class="form-control" value="<?php echo $kul->nama_eks ?>">
                <?php echo form_error('nama_eks', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Hari</label>
                <select name="hari" class="form-control">
                    <option value="<?php echo $kul->hari ?>">-- Pilih Hari --</option>
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
                <input type="text" name="jam_masuk" placeholder="Masukkan Jam Masuk" class="form-control" value="<?php echo $kul->jam_masuk ?>">
                <?php echo form_error('jam_masuk', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Jam Keluar</label>
                <input type="text" name="jam_keluar" placeholder="Masukkan Jam Keluar" class="form-control" value="<?php echo $kul->jam_keluar ?>">
                <?php echo form_error('jam_keluar', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" placeholder="Masukkan Keterangan" class="form-control" value="<?php echo $kul->keterangan ?>">
            </div>

            <button type="submit" class="btn btn-primary mb-5">Simpan</button>
			<?php echo anchor('administrator/c_ekskul','<div class="btn btn-primary mb-5">Kembali</div>') ?>
        </form>
    <?php endforeach ?>
</div>