<div class="container-fluid">
    <div class="alert alert-success" role="alert">
            <i class="fas fa-book"></i> Form Update Materi Pelajaran
    </div> 

    <?php foreach($pelajaran as $pel) : ?>
        <form method="post" action="<?php echo base_url('administrator/c_pelajaran/update_aksi') ?>">
            <div class="form-group">
                <input type="hidden" name="id_pelajaran" value="<?php echo $pel->id_pelajaran ?>">
            </div>
            <div class="form-group">
                <label>Kode Pelajaran</label>
                <input type="text" name="kode_jadwal" class="form-control" value="<?php echo $pel->kode_jadwal ?>">
            </div>
            <div class="form-group">
                <label>Nama pelajaran</label>
                <input type="text" name="nama_jadwal" class="form-control" value="<?php echo $pel->nama_jadwal ?>">
            </div>
            <div class="form-group">
                <label>Kategori Pelajaran</label>
                <select name="kategori_jadwal" class="form-control">
                    <option value="<?php echo $pel->kategori_jadwal ?>">-- Pilih Status --</option>
					<option>Bahasa</option>
					<option>Perhitungan</option>
					<option>Sejarah</option>
					<option>Olahraga</option>
					<option>Sains</option>
                </select>
				<?php echo form_error('kategori_jadwal', '<div class="text-danger small" ml-3>') ?>
            </div>
            <button type="submit" class="btn btn-primary mb-5">Simpan</button>
        </form>
    <?php endforeach ?>
</div>