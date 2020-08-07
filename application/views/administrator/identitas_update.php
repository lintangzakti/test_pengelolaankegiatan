<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-globe-asia"></i> Form Update Identitas
    </div>

    <?php foreach($identitas as $id) : ?>
        <form method="post" action="<?php echo base_url('administrator/c_identitas/update_aksi') ?>">
            <div class="form-group">
                <label>Judul Website</label>
                <input type="hidden" name="id_identitas" value="<?php echo $id->id_identitas ?>" class="form-control">
                <input type="text" name="judul_website" value="<?php echo $id->judul_website ?>" class="form-control">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" value="<?php echo $id->alamat ?>" class="form-control">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" value="<?php echo $id->email ?>" class="form-control">
            </div>

            <div class="form-group">
                <label>No.Telpon</label>
                <input type="text" name="telp" value="<?php echo $id->telp ?>" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary mb-5">Simpan</button>
			<?php echo anchor('administrator/c_identitas','<div class="btn btn-primary mb-5">Kembali</div>') ?>
        </form>
    <?php endforeach; ?>
</div>