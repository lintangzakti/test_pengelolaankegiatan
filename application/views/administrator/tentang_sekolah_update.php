<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-globe-asia"></i> Form Update Tentang Kami
    </div>

    <?php foreach($tentang as $ttg) : ?>
        <form method="post" action="<?php echo base_url('administrator/c_tentang/update_aksi') ?>">
            <div class="form-group">
                <label>Sejarah</label>
                <input type="hidden" name="id" value="<?php echo $ttg->id ?>" class="form-control">
                <input type="text" name="sejarah" value="<?php echo $ttg->sejarah ?>" class="form-control">
            </div>

            <div class="form-group">
                <label>Visi</label>
                <input type="text" name="visi" value="<?php echo $ttg->visi ?>" class="form-control">
            </div>

            <div class="form-group">
                <label>Misi</label>
                <input type="text" name="misi" value="<?php echo $ttg->misi ?>" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary mb-5">Simpan</button>
			<?php echo anchor('administrator/c_tentang','<div class="btn btn-primary mb-5">Kembali</div>') ?>
        </form>
    <?php endforeach; ?>
</div>