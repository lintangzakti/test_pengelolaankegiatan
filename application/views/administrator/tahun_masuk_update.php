<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-globe-asia"></i> Form Update Tahun Semester
    </div>

    <?php foreach($tahun_masuk as $thn) : ?>
    <form method="post" action="<?php echo base_url('administrator/c_thnmsk/update_aksi') ?>">
        <div class="form-group">
            <label>Tahun Masuk</label>
            <input type="hidden" name="id_thnmsk" placeholder="Masukkan Tahun Masuk" class="form-control" value="<?php echo $thn->id_thnmsk ?>">
            <input type="text" name="tahun_msk" class="form-control" value="<?php echo $thn->tahun_msk ?>">
            <?php echo form_error('tahun_msk', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Semester</label>
            <select name="semester" class="form-control">
                <option <?php echo $thn->semester ?>>-- Pilih Semester --</option>
                <option>Ganjil</option>
                <option>Genap</option>
            </select>
            <?php echo form_error('semester', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control">
                <option <?php echo $thn->status ?>>-- Pilih Status --</option>
                <option>Aktif</option>
                <option>Tidak Aktif</option>
            </select>
            <?php echo form_error('status', '<div class="text-danger small" ml-3>') ?>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <?php endforeach ?>
</div>