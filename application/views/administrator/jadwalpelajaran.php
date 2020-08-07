<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-book"></i> Jadwal Pelajaran
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('administrator/c_jadwal/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sk"></i> Tambah Pelajaran</button>') ?>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Kode Pelajaran</th>
            <th>Nama Pelajaran</th>
            <th>Kategori</th>
            <th>Hari</th>
            <th>Jam</th>
            <th>Guru</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        $no = 1; 
        foreach($jadwal as $japel) : 
        ?>
        <tr>
            <td width="20px"><?php echo $no++ ?></td>
            <td width="25px"><?php echo $japel->kode_jadwal ?></td>
            <td><?php echo $japel->nama_jadwal ?></td>
            <td><?php echo $japel->kategori_jadwal ?></td>
            <td><?php echo $japel->hari_jadwal ?></td>
            <td><?php echo $japel->jam_jadwal ?></td>
            <td><?php echo $japel->guru_jadwal ?></td>
            <td width="20px"><?php echo anchor('administrator/c_jadwal/update/'.$japel->id_jadwal,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
            <td width="20px"><?php echo anchor('administrator/c_jadwal/delete/'.$japel->id_jadwal,'<div class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>