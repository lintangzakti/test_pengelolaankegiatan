<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-globe-asia"></i> Form Update Users
    </div>

    <?php foreach($users as $user) : ?>
        <form method="post" action="<?php echo base_url('administrator/users/update_aksi') ?>">
            <div class="form-group">
                <label>Username</label>
                <input type="hidden" name="id" value="<?php echo $user->id ?>" class="form-control">
                <input type="text" name="username" value="<?php echo $user->username ?>" class="form-control">
                <?php echo form_error('username', '<div class="text-danger small" ml-3>') ?>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" value="<?php echo $user->password ?>" class="form-control">
                <?php echo form_error('password', '<div class="text-danger small" ml-3>') ?>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" value="<?php echo $user->email ?>" class="form-control">
                <?php echo form_error('email', '<div class="text-danger small" ml-3>') ?>
            </div>

            <div class="form-group">
                <label>Level</label>
                <select name="level" class="form-control">
                <?php 
                    if($level == 'admin'){
                ?>
                    <option value="admin" selected>Admin</option>
                    <option value="kepalasekolah">Kepala Sekolah</option>
                    <option value="guru">Guru</option>
                <?php
                    } else if($level == 'kepalasekolah'){
                ?>
                    <option value="admin">Admin</option>
                    <option value="kepalasekolah" selected>Kepala Sekolah</option>
                    <option value="guru">Guru</option>
                <?php
                    } else if($level == 'guru'){
                ?>
                    <option value="admin">Admin</option>
                    <option value="kepalasekolah">Kepala Sekolah</option>
                    <option value="guru" selected>Guru</option>
                <?php
                    } else{
                ?>
                    <option value="admin">Admin</option>
                    <option value="kepalasekolah">Kepala Sekolah</option>
                    <option value="guru">Guru</option>
                
                <?php } ?>
                
                </select>
                <?php echo form_error('level', '<div class="text-danger small" ml-3>') ?>
            </div>

            <div class="form-group">
                <label>Blokir</label>
                <select name="blokir" class="form-control">
                <?php 
                    if($blokir == 'Y'){
                ?>
                    <option value="Y" selected>Ya</option>
                    <option value="N">Tidak</option>
                <?php
                    } else if($blokir == 'N'){
                ?>
                    <option value="Y">Ya</option>
                    <option value="N" selected>Tidak</option>
                <?php
                    } else{
                ?>
                    <option value="Y">Ya</option>
                    <option value="N" selected>Tidak</option>
                
                <?php } ?>
                
                </select>
                <?php echo form_error('blokir', '<div class="text-danger small" ml-3>') ?>
            </div>

            <button type="submit" class="btn btn-primary mb-5">Simpan</button>
        </form>
    <?php endforeach; ?>
</div>