<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-book"></i> Form Update Jadwal Pelajaran
    </div> 

    <?php foreach($jadwal as $japel) : ?>
        <form method="post" action="<?php echo base_url('administrator/c_jadwal/update_aksi'); ?>">
            <div class="form-group">
                <input type="hidden" name="id_jadwal" value="<?php echo $japel->id_jadwal; ?>">
            </div>

            <div class="form-group">
                <label>Kode Pelajaran</label>
                <select name="kode_jadwal" class="form-control">
                    <option value="<?php echo $japel->kode_jadwal ?>"><?php echo $japel->kode_jadwal; ?></option>
                    <?php foreach ($pelajaran as $pel) : ?>
                        <option value="<?php echo $pel->kode_jadwal ?>"><?php echo $pel->kode_jadwal; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label>Nama Jadwal Pelajaran</label>
                <select name="nama_jadwal" class="form-control">
                    <option value="<?php echo $japel->nama_jadwal ?>"><?php echo $japel->nama_jadwal; ?></option>
                    <?php foreach ($pelajaran as $pel) : ?>
                        <option value="<?php echo $pel->nama_jadwal ?>"><?php echo $pel->nama_jadwal; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label>Kategori Jadwal Pelajaran</label>
                <select name="kategori_jadwal" class="form-control">
                    <option value="<?php echo $japel->kategori_jadwal ?>"><?php echo $japel->kategori_jadwal; ?></option>
                    <?php foreach ($pelajaran as $pel) : ?>
                        <option value="<?php echo $pel->kategori_jadwal ?>"><?php echo $pel->kategori_jadwal; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="form-group">
                <label>Hari</label>
                <select name="hari_jadwal" class="form-control">
                    <option value="<?php echo $japel->hari_jadwal ?>">-- Pilih Hari --</option>
					<option>Senin</option>
					<option>Selasa</option>
					<option>Rabu</option>
					<option>Kamis</option>
					<option>Jumat</option>
					<option>Sabtu</option>
                </select>
				<?php echo form_error('hari_jadwal', '<div class="text-danger small" ml-3>') ?>
            </div>

            <div class="form-group">
                <label>Jam</label>
                <input type="text" name="jam_jadwal" class="form-control" value="<?php echo $japel->jam_jadwal ?>">
            </div>

            <div class="form-group">
                <label>Guru Pengajar</label>
                <input type="text" name="guru_jadwal" class="form-control" value="<?php echo $japel->guru_jadwal ?>">
            </div>

            <button type="submit" class="btn btn-primary mb-5">Simpan</button>
			<?php echo anchor('administrator/c_jadwal','<div class="btn btn-primary mb-5">Kembali</div>') ?>
        </form>
    <?php endforeach; ?>
</div>